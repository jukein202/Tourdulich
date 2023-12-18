<?php 
    class loaitourmodels extends connectDB {
        public function loaitour_all(){
            $sql="Select * From loaitour ";
            return mysqli_query($this->con,$sql);
        }
    }

?>