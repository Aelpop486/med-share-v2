<?php

namespace App\Http\Controllers\Api\doniatonsApis;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteImageRequest;
use App\Http\Requests\DonationApiStoreRequest;
use App\Http\Requests\DonationApiUpdateRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Http\Resources\DonationCollection;
use App\Http\Resources\DonationResource;
use App\Models\donation_image;
use Illuminate\Http\Request;
use App\Models\donation;
use App\Services\ImageService;
use Illuminate\Support\Facades\Validator;
use function Pest\Laravel\json;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $donations = $user->donations()->with(['images','user', 'address'])->paginate(10);

        //$donations->load('user');
        return response()->json([
            'status' => 200,
            'donations' => new DonationCollection($donations)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(DonationApiStoreRequest $request)
    {
    
        $user = $request->user();
        $donation = donation::create([
            'description' => $request->description,
            'user_id' => $user->id,
            'address_id'=> $request->address_id,
            'city_id'=> $request->city_id
        ]);

        $donationImages = ImageService::uploadImages($request->images, 'donations');

        foreach ($donationImages as $imageName) {
            $donation->images()->create([
                'path' => $imageName
            ]);
        }
        return response()->json(['message' => 'Donation Created successfully', 'donation' => new DonationResource($donation)]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Request $request, donation $donation)
    {
        return new DonationResource($donation);
    }

    public function addNewImage(Request $request, donation $donation)
    {
        return new DonationResource($donation);
    }

    public function deleteImage(DeleteImageRequest $request)
    {  
       $deletedImages = donation_image::whereIn('id', $request->ids)->delete();
        return response()->json(['message' => 'Donation Updated successfully']);
    }
    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(DonationApiUpdateRequest $request, donation $donation)
    {

        $validatedDate = $request->validated();
        $donation->update([
            'description' => $validatedDate['description']?? $donation->description,
            'city_id'=> $validatedDate['city_id']?? $donation->city_id,
            'address_id'=> $validatedDate['address_id']?? $donation->address_id,
            'state' => $validatedDate['state']?? $donation->state
        ]);

        if ($request->input("images")) {
            $donationImages = ImageService::uploadImages($request->images, 'donations');
            foreach ($donationImages as $imageName) {
                $donation->images()->create([
                    'image' => $imageName
                ]);
            }
        }
        return response()->json(['message' => 'Donation updated successfully', 'donation' => new DonationResource($donation)]);    
    }
    

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Request $request, donation $donation)
    {
        $donation->delete();
        return response()->json(['message' => 'Donation deleted successfully'], 200);
    }
}



