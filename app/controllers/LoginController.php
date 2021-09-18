<?php 

class LoginController extends Controller{

    public function index()
    {
        $this->view('login/index');
    }
    public function logout()
    {
        session_destroy();
        header('Location: ' . BASEURL . '');
    }
    public function login()
    {
        //echo password_hash("admin123",PASSWORD_DEFAULT);
        $USER = $this->model('PetugasModel')->loginPetugas($_POST['inputUser']);
        if($USER){
            if(password_verify($_POST['inputPassword'], $USER['password'])){
                $_SESSION['id_petugas'] = $USER['id_petugas'];
                $_SESSION['nama_petugas'] = $USER['nama_petugas'];
                $_SESSION['level'] = $USER['level'];
                $_SESSION['is_login'] = TRUE;

                header('Location: ' . BASEURL . 'home/welcome');
                exit;
            }else{
                Flasher::setFlash('Password tidak sesuai');
                header('Location: ' . BASEURL);
                exit;
            }
        }else{
            Flasher::setFlash('Username tidak tersedia');
            header('Location: ' . BASEURL);
            exit;
        }

    }
}