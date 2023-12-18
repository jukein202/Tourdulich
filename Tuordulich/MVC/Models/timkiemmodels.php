<?php 
    class timkiemmodels extends connectDB {
        public function tour_all(){
            $sql="Select * From tour";
            return mysqli_query($this->con,$sql);
        }
        public function Loaitour(){
            $sql="Select * From loaitour";
            return mysqli_query($this->con,$sql);
        }
        public function Timkiemtour($tentour,$loaitour,$gia,$thoigian){
            $sql="SELECT * FROM `tour` WHERE 
            Tentour LIKE '%$tentour%' AND Maloaitour LIKE '%$loaitour%' AND Gia1 LIKE '%$gia%' AND Thoigian LIKE '%$thoigian%'";
            return mysqli_query($this->con,$sql);
        }
    }

?>