<?php 
    class Thongke extends controller{
        public $tk;
        function __construct()
        {
            $this->tk=$this->model('Thongkemodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[
             'page'=>'Thongkeview',
             'kqtk'=>$this->tk->Hoadon_all(),
             'kq'=>$this->tk->tour_all(), 
           ]);
           
        }
        function ThongkeHD(){
            if(isset($_POST['btnThongke'])){
                $Tentour=$_POST['ddtentour'];
                $this->view('MasterLayout',[
                    'page'=>'Thongkeview',
                    'kq'=>$this->tk->tour_all(), 
                    'kqtk'=>$this->tk->Thongke($Tentour),
                    'Tentour'=>$Tentour,
                ]);
            }
        }
    }
?>