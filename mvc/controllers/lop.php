<?php
    class Lop extends Controller{
        public function default(){
            $this->view("main_layout", [
                "Page" => "manage_class",
                "Title" => "Quản lý lớp học",
                "Script" => "manage_class",
                "Plugin" => [
                    "notify" => 1
                ]
            ]);
        }

        public function addGroup()
        {
            if(isset($_POST['name'])) {
                $gr = $this->model("NhomModel");
                $gr->insert($_POST['name']);
            }
        }

        public function addClass()
        {
            if(isset($_POST['name'])) {
                $c = $this->model("LopModel");
                $c->insert($_POST['name'],$_POST['group']);
            }
        }

    }
?>