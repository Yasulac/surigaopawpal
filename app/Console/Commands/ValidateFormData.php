<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class ValidateFormData extends Command
{
    protected $signature = 'form:validate {fname} {lname} {email} {cnumber} {username} {password} {password_confirmation} {address}';
    protected $description = 'Validate form data from the command line';

    public function handle()
    {
        $data = [
            'fname' => $this->argument('fname'),
            'lname' => $this->argument('lname'),
            'email' => $this->argument('email'),
            'cnumber' => $this->argument('cnumber'),
            'username' => $this->argument('username'),
            'password' => $this->argument('password'),
            'password_confirmation' => $this->argument('password_confirmation'),
            'address' => $this->argument('address'),
        ];

        $validator = Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'cnumber' => 'required|string|max:20',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $this->error('Validation failed:');
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
        } else {
            $this->info('Validation passed!');
        }
    }
}
