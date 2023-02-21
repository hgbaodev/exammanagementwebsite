<?php
class Exam extends Controller{
    public function default()
    {
        $this->view("main_layout", [
            "Page" => "taode",
            "Title" => "Tạo đề kiểm tra",
            "Plugin" => [
                "datepicker" => 1,
                "flatpickr" => 1
            ],
            "Script" => "add_exam"
        ]);
    }

    public function vaothi()
    {
        $this->view("main_layout",[
            "Page" => "vao_thi",
            "Title" => "Bắt đầu thi"
        ]);
    }
}

?>