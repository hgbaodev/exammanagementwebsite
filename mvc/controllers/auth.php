<?php
class Auth extends Controller{
    public function default()
    {
        $this->view("signin", [
            "Title" => "Đăng nhập"
        ]);
    }

    function signin(){
        // $teo = $this->model("SinhVienModel");
        // echo $teo->GetSV();
        $this->view("signin", [
            "Title" => "Đăng nhập"
        ]);
    }

    function signup(){
        // $teo = $this->model("SinhVienModel");
        // echo $teo->GetSV();
        $this->view("signup", [
            "Title" => "Đăng ký tài khoản"
        ]);
    }

    function forgotpassword(){
        // $teo = $this->model("SinhVienModel");
        // echo $teo->GetSV();
        $this->view("password_reset", [
            "Title" => "Khôi phục tài khoản"
        ]);
    }
}
?>