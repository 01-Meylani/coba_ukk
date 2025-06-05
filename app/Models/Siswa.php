<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    protected $fillable = ['nama', 'nis', 'gender', 'alamat', 'kontak', 'email', 'foto', 'status_pkl'];
    protected $hidden = ['password'];

    // Relasi dengan tabel PKL
    public function pkl()
    {
        return $this->hasOne(Pkl::class, 'siswa_id', 'id');
    }

    // Accessor untuk status_pkl (true/false)
    public function getStatusPklAttribute()
    {
        return $this->pkl()->exists();
    }

    // Accessor: tampilkan kontak sebagai +62 di frontend
    public function getKontakAttribute($value)
    {
        // Jika sudah +62, biarkan
        if (preg_match('/^\+62/', $value)) {
            return $value;
        }

        // Jika masih 08, ganti jadi +62
        if (preg_match('/^08/', $value)) {
            return preg_replace('/^08/', '+628', $value);
        }

        return $value;
    }

    // Mutator: simpan ke database sebagai +62
    public function setKontakAttribute($value)
    {
        // Jika dimulai dengan 08, ubah jadi +62
        if (preg_match('/^08/', $value)) {
            $value = preg_replace('/^08/', '+628', $value);
        }

        $this->attributes['kontak'] = $value;
    }
}
