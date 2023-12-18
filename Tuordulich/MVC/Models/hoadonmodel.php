<?php 
    class hoadonmodel extends connectDB {
        public function tour_all($matour){
            $sql="Select * From tour where Matour like '$matour'";
            return mysqli_query($this->con,$sql);
        }
        public function hoadon_ins($matour,$nguoilon,$treem,$nguoidat,$sdt,$email,$diachi,$tongtien){
            $sql="INSERT INTO `hoadon`( `Matour`, `Nguoilon`, `Treem`, `Nguoidat`, `Sdt`, `Email`, `Diachi`, `Tongtien`) 
            VALUES ('$matour','$nguoilon','$treem','$nguoidat','$sdt','$email','$diachi','$tongtien');";
            return mysqli_query($this->con,$sql);
        }
    }

?>