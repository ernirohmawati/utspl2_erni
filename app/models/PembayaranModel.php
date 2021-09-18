<?php 

class PembayaranModel
{
    private $table = 'Pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll($nisn)
	{
        $this->db->query("SELECT * FROM " . $this->table." a left join siswa b on a.nisn = b.nisn
        left join kelas c on c.id_kelas = b.id_kelas left join spp d on d.id_spp = a.id_spp
        where a.nisn=:nisn");
        $this->db->bind("nisn",$nisn);
		return $this->db->resultSet();
	}
    public function bayar($data)
	{
		$query = "INSERT INTO ".$this->table."(id_petugas,nisn,tgl_bayar,bulan_bayar,tahun_bayar,id_spp,jumlah_bayar) 
        values(:id_petugas,:nisn,:tgl_bayar,:bulan_bayar,:tahun_bayar,:id_spp,:nominal)";
        $this->db->query($query);
		$this->db->bind("id_petugas",$data['id_petugas']);
        $this->db->bind("nisn",$data['nisn']);
        $this->db->bind("tgl_bayar",$data['tgl']);
        $this->db->bind("bulan_bayar",$data['bulan']);
        $this->db->bind("tahun_bayar",$data['tahun']);
        $this->db->bind("id_spp",$data['id_spp']);
        $this->db->bind("nominal",$data['nominal']);
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