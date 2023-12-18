<?php 
    class loaitour extends controller{
        public $ltour;
        function __construct()
        {
            $this->ltour=$this->model('loaitourmodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[
             'page2'=>'loaitourview',
           ]);
           
        }
    }
?>