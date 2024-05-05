<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidName 
{
    
        public function passes($value)
        {
            // Check if the name contains special characters or spaces
            if (preg_match('/[^A-Za-z0-9_]/', $value)) {
                return false;
            }
            
            return true;
        }
    
        public function message()
        {
            return 'The :attribute may only contain letters, numbers, and underscores.';
        }
}
    

