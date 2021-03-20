<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
       $validatedInput = Validator::make($input, [
            'name' => ['required|normal-user','nullable','string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'role_id' => ['required|null'],
            'admin_name' => ['nullable'],
            'password' => $this->passwordRules(),
        ])->validate();
            
        $url = request()->path();
        
        if ($validatedInput && $url === 'admin/register') {
            $validatedInput['role_id'] =  1;
            $role = new Role;
            $role->name = 'admin' ?? null;
            $role->save();
        } else {
            $validatedInput['role_id'] =  0;
        }
        

        return User::create([
            // 'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id' => $validatedInput['role_id'],
            'admin_name' => $input['admin_name'] ?? null,
        ]);
    }
}
