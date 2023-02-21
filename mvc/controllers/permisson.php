<?php
class Permisson extends Controller{

    public function default()
    {
        $this->view("main_layout",[
            "Page" => "permisson",
            "Title" => "Phân quyền người dùng",
        ]);
    }

}

?>