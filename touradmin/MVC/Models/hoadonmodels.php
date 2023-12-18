<?php 
    class hoadonmodels extends connectDB {
        public function tour_all(){
            $sql="Select * From tour ";
            return mysqli_query($this->con,$sql);
        }
        public function loaitour_all(){
            $sql="Select * From loaitour ";
            return mysqli_query($this->con,$sql);
        }
        public function Hoadon_all(){
            $sql="Select * From hoadon ";
            return mysqli_query($this->con,$sql);
        }
        public function Hoadon_ma($mahd){
            $sql="SELECT * FROM `hoadon`,tour WHERE Mahd like '$mahd' AND hoadon.Matour = tour.Matour";
            return mysqli_query($this->con,$sql);
        }
        public function Hoadon_xoa($mahd){
            $sql="DELETE FROM hoadon WHERE Mahd='$mahd'";
            return mysqli_query($this->con,$sql);
    
        }
    }

?>