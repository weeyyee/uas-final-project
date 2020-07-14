<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model{

    protected $table = 'users';

    public function buatAkun($data)
    {
            return $this->db->insert($this->table, $data);
    }

    public function cekLogin($email, $password)
    {
            return $this->db
                        ->where(['email' => $email, 'password' => $password])
                        ->get($this->table)
                        ->row();
    }

public function getUser($id)
{
    return $this->db->where(['id' => $id])->get($this->table)->row();
}

public function simpanBiodata($id, $data)
{
    return $this->db
                ->set($data)
                ->where('id', $id)
                ->update($this->table);
}

}

/*End of file Un]sers_m.php*/
