<?php

namespace App\Http\Controllers\Api\doniatonsApis;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDonationRequest;
use App\Http\Resources\DonationCollection;
use App\Http\Resources\DonationResource;
use Illuminate\Http\Request;
use App\Models\donation;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //return response()->json(donation::all());
        return new DonationCollection(donation::all());
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:255',
            'images.*' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Get the authenticated user
        $user = $request->user();
    
        // Create the donation and associate it with the user
        $donation = $user->donations()->create([
            'description' => $request->description,
        ]);
    
        // Create images associated with the donation
        foreach ($request->images as $image) {
            $donation->images()->create(['path' => $image]);
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

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(UpdateDonationRequest $request, donation $donation)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:255',
            'images.*' => 'required|string', 
        ], [], [
            'description' => 'Description',
            'images.*' => 'Images', 
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $donation->description = $request->description;
        $donation->save();
    
        $donation->images()->delete(); 
        foreach ($request->images as $image) {
            $donation->images()->create(['path' => $image]);
        }
    
        // Return a success message along with the updated donation
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





// public function store(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'description' => 'required|max:255',
//         'images.*' => 'required|string',
//         'horizontalCoordinate' => 'required|numeric',
//         'verticalCoordinate' => 'required|numeric',
//         'address' => 'required|string',
//     ], [], [
//         'description' => 'Description',
//         'images.*' => 'Images',
//         'horizontalCoordinate' => 'Horizontal Coordinate',
//         'verticalCoordinate' => 'Vertical Coordinate',
//         'address' => 'Address',
//     ]);

//     if ($validator->fails()) {
//         return response()->json(['errors' => $validator->errors()], 422);
//     }

//     $donation = Donation::create([
//         'description' => $request->description,
//     ]);

//     foreach ($request->images as $image) {
//         $donation->images()->create(['path' => $image]);
//     }

//     // Create or update the address
//     $address = new Address();
//     $address->address = $request->address;
//     $address->save();

//     // Create or update the coordinates
//     $coordinates = new Coordinates();
//     $coordinates->horizontal = $request->horizontalCoordinate;
//     $coordinates->vertical = $request->verticalCoordinate;
//     $coordinates->save();

//     // Associate the address and coordinates with the donation
//     $donation->address()->associate($address);
//     $donation->coordinates()->associate($coordinates);
//     $donation->save();

//     return response()->json(['message' => 'Donation Created successfully', 'donation' => new DonationResource($donation)]);
// }
