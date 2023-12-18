<?php 
    class Hoadon extends controller{
        public $hd;
        function __construct()
        {
            $this->hd=$this->model('hoadonmodel');
        } 
        function Getdata(){
            $this->view('Masterlayout',[ 
             'page'=>'Hoadonview',
             'kq'=>$this->hd->tour_all($matour)
            ]);
            
         }
        function hoadon($matour){
            $_SESSION['Matour']=$matour;
            $this->view('MasterLayout',[
                'page'=>'Hoadonview',
                'kq'=>$this->hd->tour_all($matour)
            ]);
            if(isset($_POST['btnThanhtoan'])){
                $matour=$_SESSION['Matour'];
                $nguoilon=$_POST['adult'];
                $treem=$_POST['child'];
                $nguoidat=$_POST['txtnguoidat'];
                $sdt=$_POST['txtsdt'];
                $email=$_POST['txtemail'];
                $diachi=$_POST['txtdiachi'];
                $tongtien=$_POST['txtTongTien'];
                $res=$this->hd->hoadon_ins($matour,$nguoilon,$treem,$nguoidat,$sdt,$email,$diachi,$tongtien);
            }
        }
        // function them_hoadon(){
        //     if(isset($_POST['btnThanhtoan'])){
        //         $matour=$_SESSION['Matour'];
        //         $nguoilon=$_POST['adult'];
        //         $treem=$_POST['child'];
        //         $nguoidat=$_POST['txtnguoidat'];
        //         $sdt=$_POST['txtsdt'];
        //         $email=$_POST['txtemail'];
        //         $diachi=$_POST['txtdiachi'];
        //         $tongtien=$_POST['txttongtien'];
        //         $res=$this->hd->hoadon_ins($matour,$nguoilon,$treem,$nguoidat,$sdt,$email,$diachi,$tongtien);
        //         if($res){
        //             $this->view('MasterLayout',[
        //                 'page'=>'Hoadonview',
        //                 'kq'=>$this->hd->tour_all($matour),
        //                 'thongbao'=>'Thêm mới thành công!'
        //             ]);
        //         }else{
        //             $this->view('MasterLayout',[
        //                 'page'=>'Hoadonview',
        //                 'kq'=>$this->hd->tour_all($matour),
        //                 'thongbao'=>'Thêm mới thất bại!'
        //             ]);
        //         }
        //     }
        // }
    }
?>