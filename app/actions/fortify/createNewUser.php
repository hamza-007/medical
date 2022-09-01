<?php

namespace APP\Actions\fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

/*class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * @param
     * @return \App
     */
    /*public function create(array $input)
    {
        validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 'password' => $this->passwordRules(), 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        return User::create([
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
*/
