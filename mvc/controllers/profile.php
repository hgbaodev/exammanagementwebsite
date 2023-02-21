<?php
class Profile extends Controller{
    function default() {
        $this->view("main_layout",[
            "Page" => "profile",
            "Title" => "Trang cá nhân"
        ]);
    }

    function edit() {
        $this->view("main_layout",[
            "Page" => "edit_profile",
            "Title" => "Sửa hồ sơ"
        ]);
    }
}

?>