<?php 

class SiswaModel
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
	{
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();
	}
    public function getAllByNisn($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
    public function tambahsiswa($data)
	{
		$query = "INSERT INTO ".$this->table."(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) 
        values(:nisn,:nis,:nama,:kelas,:alamat,:tlp,:spp)";
        $this->db->query($query);
		$this->db->bind("nisn",$data['nisn']);
        $this->db->bind("nis",$data['nis']);
        $this->db->bind("nama",$data['nama']);
        $this->db->bind("kelas",$data['kelas']);
        $this->db->bind("alamat",$data['alamat']);
        $this->db->bind("tlp",$data['telp']);
        $this->db->bind("spp",$data['spp']);
		$this->db->execute();
		return $this->db->rowCount();
	}
    public function ubahsiswa($data)
	{
		$query = "update ".$this->table." Set nis=:nis, nama=:nama, alamat=:alamat,
        id_kelas=:kelas,no_telp=:tlp,id_spp=:spp where nisn=:nisn";
        $this->db->query($query);
		$this->db->bind("nisn",$data['nisn']);
        $this->db->bind("nis",$data['nis']);
        $this->db->bind("nama",$data['nama']);
        $this->db->bind("kelas",$data['kelas']);
        $this->db->bind("alamat",$data['alamat']);
        $this->db->bind("tlp",$data['telp']);
        $this->db->bind("spp",$data['spp']);
       $this->db->execute();
		return $this->db->rowCount();
	}
}