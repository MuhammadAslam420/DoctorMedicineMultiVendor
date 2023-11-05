<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Livewire\WithFileUploads;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            // 'profile_photo_path'=>['required|mimes:jpeg,jpg,png'],
            'phone' => ['required','string', 'unique:users'],
            'utype' => ['required','string'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
    //         'profile_photo_path'=>Carbon::now()->timestamp.'.'.$input['image']->extension();
    // $this->image->storeAs('public/images/product',$imageName);
            'phone' =>$input['phone'],
            'utype' => $input['utype'],
        ]);
    }
}
