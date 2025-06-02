<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input): User
    {
        // Validasi input form
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => $this->passwordRules(),
        ])->validate();

        $email = $input['email'];

        // Cek apakah email ada di tabel siswas atau gurus
        $siswa = Siswa::where('email', $email)->first();
        $guru  = Guru::where('email', $email)->first();

        if (!$siswa && !$guru) {
            throw ValidationException::withMessages([
                'email' => 'Email ini tidak terdaftar sebagai siswa atau guru.',
            ]);
        }

        // Buat user baru
        $user = User::create([
            'name' => $input['name'],
            'email' => $email,
            'password' => Hash::make($input['password']),
        ]);

        // Assign role sesuai yang ditemukan
        if ($siswa) {
            $user->assignRole('siswa');
        } elseif ($guru) {
            $user->assignRole('guru');
        }

        return $user;
    }
}
