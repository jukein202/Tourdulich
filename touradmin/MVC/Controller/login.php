<?php 
    class login extends controller{
        public $login;
        public $tour;
        function __construct()
        {
            $this->login=$this->model('loginmodels');
            $this->tour=$this->model('tourmodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[
             'page'=>'loginview',
           ]);
           
        }
        function login_form(){
            if (isset($_POST['btndn'])){
                $tk=$_POST['txttk'];
                $mk=$_POST['txtpass'];
                $kt=$this->login->loginform($tk,$mk);
                if(mysqli_num_rows($kt)>0){
                    // header("Location: tourview.php");
        	        // die(); 
                    $this->view('Masterlayout',[
                        'page'=>'tourview',
                        'page2'=>'loaitourview',
                        'page3'=>'Hoadonview',
                        'kq'=>$this->tour->tour_all(),
                        'kq2'=>$this->tour->loaitour_all(), 
                        'kq3'=>$this->tour->Hoadon_all(), 
                      ]);
                }else{
                    $this->view('Masterlayout',[
                        'page'=>'loginview',
                        'thongbao'=>'Đăng nhập thất bại',
                      ]);
                }
        }
    }
}
?>