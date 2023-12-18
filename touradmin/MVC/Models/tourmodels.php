<?php 
    class tourmodels extends connectDB {
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
        public function tour_ma($matour){
            $sql="Select * From tour where Matour like '$matour'";
            return mysqli_query($this->con,$sql);
        }
        public function themtour($maloaitour,$tentour,$gia1,$gia2,$destinationfile,$mota,$lichtrinh,$thoigian,$ngaydi){
            $sql="Insert into tour(`Maloaitour`,`Tentour`, `Gia1`, `Gia2`, `Hinhanh`,`Mota`,`Lichtrinh`,`Thoigian`,`Ngaydi`)
             Values('$maloaitour','$tentour','$gia1','$gia2','$destinationfile','$mota','$lichtrinh','$thoigian','$ngaydi') ";
            return mysqli_query($this->con,$sql);
        }
        public function tour_upd($matour,$maloaitour,$tentour,$gia1,$gia2,$destinationfile,$mota,$lichtrinh,$thoigian,$ngaydi){
            $sql="UPDATE tour SET Maloaitour='$maloaitour' ,Tentour='$tentour',Gia1='$gia1',Gia2='$gia2',
            Hinhanh='$destinationfile',Mota='$mota',Lichtrinh='$lichtrinh',Thoigian='$thoigian',ngaydi='$ngaydi' 
            WHERE Matour = '$matour'";
            return mysqli_query($this->con,$sql);
        }
        public function tour_xoa($matour){
            $sql="DELETE FROM tour WHERE Matour='$matour'";
            return mysqli_query($this->con,$sql);
    
        }
    }

?>