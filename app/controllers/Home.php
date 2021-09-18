<?php 

class Home extends Controller
{
    public function welcome()
    {
        $data["title"] = "Home";
        $data["pages"] = "Home";
        $this->view("templates/index",$data);
    }
}