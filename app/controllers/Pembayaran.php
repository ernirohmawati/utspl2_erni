<?php 

class Pembayaran extends Controller
{
    public function index()
    {
        $data['nisn'] = "";
        if(isset($_POST['cari'])){
            $data['pembayaran'] = $this->model('PembayaranModel')->getAll($_POST['nisn']);
            $data['nisn']=$_POST['nisn'];
        }else{
            $data['pembayaran'] = $this->model('PembayaranModel')->getAll($_GET['nisn']);
            $data['nisn']=$_GET['nisn'];
        }
        $data["title"] = "Pembayaran";
        $data["pages"] = "pembayaran/index";
        $this->view("templates/index",$data);
    }
    public function add()
    {
        $data["title"] = "Tambah Pembayaran";
        $data["pages"] = "pembayaran/add";
        $this->view("templates/index",$data);
    }
    public function bayar()
    {
        $date = explode("-",$_POST['tglbayar']);
        $siswa = $this->model('SiswaModel')->getAllByNisn($_POST['nisn']);
        $_POST['id_spp'] = $siswa['id_spp'];
        $_POST['id_petugas'] = $_SESSION['id_petugas'];
        $_POST['tgl'] = $date[2];
        $_POST['bulan'] = $date[1];
        $_POST['tahun'] = $date[0];
        
        if($this->model('PembayaranModel')->bayar($_POST)>0){
            Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/pembayaran&nisn='.$_POST['nisn']);
        }else{
            Flasher::setMessage('Berhasil','ditambahkan','warning');
			header('location: '. BASEURL . '/pembayaran');
        }
    }
}