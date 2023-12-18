<?php 
    class tour extends controller{
        public $tour;
        function __construct()
        {
            $this->tour=$this->model('tourmodels');
        } 
        function cttour($matour){
            $_SESSION['Matour']=$matour;
            $this->view('MasterLayout',[
                'page'=>'chitiettourview',
                'kq'=>$this->tour->tour_all($matour)
            ]);
        }
    }
?>