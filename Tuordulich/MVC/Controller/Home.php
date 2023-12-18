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
            'kq1'=>$this->tour->tour_home(),
            'kq2'=>$this->tour->tour_foreign(),

           ]);
           
        }
    }
?>