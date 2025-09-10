<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'mahasiswa';   
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama_lengkap', 'umur', 'password'];

    public function getUser($nim)
    {
        return $this->where('nim', $nim)->first();
    }
}
