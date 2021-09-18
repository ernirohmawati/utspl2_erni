<?php 

class Siswa extends Controller
{
    public function index()
    {
        $data['siswa'] = $this->model('SiswaModel')->getAllSiswa();
        $data["title"] = "Siswa";
        $data["pages"] = "siswa/index";
        $this->view("templates/index",$data);
    }
    public function add()
    {
        $data["title"] = "Tambah Siswa";
        $data["pages"] = "siswa/add";
        $data['kelas'] = $this->model('KelasModel')->getAll();
        $data['spp'] = $this->model('SppModel')->getAll();
        $this->view("templates/index",$data);
    }
    public function siswaadd()
    {
        if($this->model('SiswaModel')->tambahSiswa($_POST)>0){
            Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/siswa');
        }else{
            Flasher::setMessage('Berhasil','ditambahkan','warning');
			header('location: '. BASEURL . '/siswa');
        }
    }
}