<?php
namespace App\Models;
use CodeIgniter\Model;
class models extends Model
{
    protected $nama = 'Putri Oktavianti';
    protected $nim  = '2110817120006';
    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
}