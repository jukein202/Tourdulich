<?php 
    class tourmodels extends connectDB {
        public function tour_all($matour){
            $sql="Select * From tour where Matour like '$matour'";
            return mysqli_query($this->con,$sql);
        }
        public function tour_home(){
            $sql="Select * From tour Where Maloaitour='2'";
            return mysqli_query($this->con,$sql);
        }
        public function tour_foreign(){
            $sql="Select * From tour Where Maloaitour='4'";
            return mysqli_query($this->con,$sql);
        }
    }

?>