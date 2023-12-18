<?php 
    class Home extends controller{
        public $tour;
        function __construct()
        {
            $this->tour=$this->model('tourmodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[
             'page'=>'tourview',
			 'page2'=>'loaitourview',
             'page3'=>'Hoadonview',
             'kq'=>$this->tour->tour_all(),
			 'kq2'=>$this->tour->loaitour_all(), 
             'kq3'=>$this->tour->Hoadon_all(), 

           ]);
           
        }
    }
?>
