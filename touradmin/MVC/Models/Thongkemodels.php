<?php 
    class Thongkemodels extends connectDB {
        public function tour_all(){
            $sql="Select * From tour ";
            return mysqli_query($this->con,$sql);
        }
        public function Hoadon_all(){
            $sql="Select * From hoadon ";
            return mysqli_query($this->con,$sql);
        }
        public function Thongke($Tentour){
            $sql="Select * From hoadon where Matour='$Tentour'";
            return mysqli_query($this->con,$sql);
        }
    }

?>