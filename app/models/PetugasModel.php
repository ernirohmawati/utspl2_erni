<?php 

class PetugasModel
{
    private $table = 'petugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function loginPetugas($inputUsername)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username=:username");
        $this->db->bind("username", $inputUsername);
        return $this->db->single();
    }
}