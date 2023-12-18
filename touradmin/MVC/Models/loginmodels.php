<?php 
    class loginmodels extends connectDB {
        public function loginform($tk,$mk){
            $sql = "select * from login where Taikhoan = '$tk' and Matkhau = '$mk'";
            return mysqli_query($this->con,$sql);
        }
    }

?>