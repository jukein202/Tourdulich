<?php 
    class Timkiem extends controller{
        public $tk;
        function __construct()
        {
            $this->tk=$this->model('timkiemmodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[ 
            'page'=>'Timkiemtour',
            'kq'=>$this->tk->Loaitour(),
            'kqtk'=>$this->tk->Timkiemtour('','','','')
           ]);
           
        }
        function TimKiemTour(){
            if(isset($_POST['btnTimkiem'])){
                $tentour=$_POST['txttentour'];
                $loaitour=$_POST['ddloaitour'];
                $gia=$_POST['txtgia'];
                $thoigian=$_POST['txtthoigian'];
                $this->view('MasterLayout',[
                    'page'=>'Timkiemtour',
                    'kq'=>$this->tk->Loaitour(),
                    'kqtk'=>$this->tk->Timkiemtour($tentour,$loaitour,$gia,$thoigian),
                    'Tentuor'=>$tentour,
                    'Loaitour'=>$loaitour,
                    'Gia'=>$gia,
                    'Thoigian'=>$thoigian
                ]);
            }
        }
    }
?>