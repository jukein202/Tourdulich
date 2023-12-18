<?php 
    class hoadon extends controller{
        public $hd;
        function __construct()
        {
            $this->hd=$this->model('hoadonmodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[
             'page'=>'Chitiethoadonview',
             'kq3'=>$this->hd->Hoadon_all()
           ]);
           
        }
        function chitietHD($mahd){
            // $_SESSION lưu dữ liệu
            $_SESSION['Mahd']=$mahd;
            $this->view('MasterLayout',[
                'page'=>'Chitiethoadonview',
                'kqtk'=>$this->hd->Hoadon_ma($mahd)
            ]);
        
        }
        function xoaHD($mahd){
            $this->hd->Hoadon_xoa($mahd);
            $this->view('Masterlayout',[
                'page'=>'tourview',
                'page2'=>'loaitourview',
                'page3'=>'Hoadonview',
                'kq'=>$this->hd->tour_all(),
                'kq2'=>$this->hd->loaitour_all(), 
                'kq3'=>$this->hd->Hoadon_all(), 
                
              ]);
        }
    }
?>