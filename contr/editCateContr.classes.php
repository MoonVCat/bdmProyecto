<?php

include "../classes/editCate.classes.php";

    class editCateContr extends editCate{

        private $id;
        private $title;
        private $description;
        private $color;
        private $order;

        public function __construct($id, $title, $description, $color, $order){

            $this->id = $id;
            $this->title = $title;
            $this->color = $color;
            $this->description = $description;
            $this->order = $order;
        }

        public function updateContr(){

            if($this->checkUser($this->title, $this->description) == false){
                //echo 'rip en los inputs';
                //header("location: ../registro.php?error=userCheck");
                echo '<script type="text/javascript">'; 
                echo 'alert("Ya existe una seccion");';
                echo 'window.location.href = "../crearCate.php";';
                echo '</script>';

                exit();
            
            }


            $this->update( $this->id, $this->title, $this->color, $this->order);
        }


    }

    
?>