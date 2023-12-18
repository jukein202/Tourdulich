<?php 
    class tour extends controller{
        public $tour;
        function __construct()
        {
            $this->tour=$this->model('tourmodels');
        }
        function Getdata(){
           $this->view('Masterlayout',[
             'page'=>'themtourview',
             'kq'=>$this->tour->tour_all(),
             'kqloai'=>$this->tour->loaitour_all(),
           ]);
           
        }
        function themtour(){
            if(isset($_POST['btnluu'])){
            $maloaitour=$_POST['txtmaloaitour'];
            $tentour=$_POST['txttentour'];
            $gia1=$_POST['txtgia1'];
            $gia2=$_POST['txtgia2'];
            $destinationfile=$_POST['filehinhanh'];
            $mota=$_POST['txtmota'];
            $lichtrinh=$_POST['area1'];
            $thoigian=$_POST['txtthoigian'];
            $ngaydi=$_POST['txtngaydi'];
            $res=$this->tour->themtour($maloaitour,$tentour,$gia1,$gia2,$destinationfile,$mota,$lichtrinh,$thoigian,$ngaydi);
            if($res){
                $this->view('MasterLayout',[
                    'page'=>'themtourview',
                    'kqloai'=>$this->tour->loaitour_all(),
                    'thongbao'=>'Thêm mới thành công!',
                    'maloai'=>$maloaitour,
                    'tentour'=>$tentour,
                    'gia1'=>$gia1,
                    'gia2'=>$gia2,
                    'hinhanh'=>$destinationfile,
                    'mota'=>$mota,
                    'lichtrinh'=>$lichtrinh,
                    'thoigian'=>$thoigian,
                    'ngaydi'=>$ngaydi
                ]); 
            }
            else{
                $this->view('MasterLayout',[
                    'page'=>'themtourview',
                    'kqloai'=>$this->tour->loaitour_all(),
                    'thongbao'=>'Thêm mới Thất Bại!',
                    'maloai'=>$maloaitour,
                    'tentour'=>$tentour,
                    'gia1'=>$gia1,
                    'gia2'=>$gia2,
                    'hinhanh'=>$destinationfile,
                    'mota'=>$mota,
                    'lichtrinh'=>$lichtrinh,
                    'thoigian'=>$thoigian,
                    'ngaydi'=>$ngaydi
                ]); 
            }
            }
        }

        function suatour($matour){
            // $_SESSION lưu dữ liệu
            $_SESSION['Matour']=$matour;
            $this->view('MasterLayout',[
                'page'=>'suatourview',
                'kqloai'=>$this->tour->loaitour_all(),
                // 'thongbao'=>'Sửa thành công',
                'kqtk'=>$this->tour->tour_ma($matour)
            ]);
            // if(isset($_POST['btnsua'])){
            //     $matour=$_SESSION['Matour'];
            //     $maloaitour=$_POST['txtmaloaitour'];
            //     $tentour=$_POST['txttentour'];
            //     $gia1=$_POST['txtgia1'];
            //     $gia2=$_POST['txtgia2'];
            //     $destinationfile=$_POST['filehinhanh'];
            //     $mota=$_POST['txtmota'];
            //     $lichtrinh=$_POST['area1'];
            //     $thoigian=$_POST['txtthoigian'];
            //     $ngaydi=$_POST['txtngaydi'];
            //     $kq=$this->tour->tour_upd($matour,$maloaitour,$tentour,$gia1,$gia2,$destinationfile,$mota,$lichtrinh,$thoigian,$ngaydi);
            // }
        }
        
        function tour_update(){
            if(isset($_POST['btnsua'])){
                $matour=$_SESSION['Matour'];
                $maloaitour=$_POST['txtmaloaitour'];
                $tentour=$_POST['txttentour'];
                $gia1=$_POST['txtgia1'];
                $gia2=$_POST['txtgia2'];
                $destinationfile=$_POST['filehinhanh'];
                $mota=$_POST['txtmota'];
                $lichtrinh=$_POST['area1'];
                $thoigian=$_POST['txtthoigian'];
                $ngaydi=$_POST['txtngaydi'];
                $kq=$this->tour->tour_upd($matour,$maloaitour,$tentour,$gia1,$gia2,$destinationfile,$mota,$lichtrinh,$thoigian,$ngaydi);
                if($kq){
                    $this->view('MasterLayout',[
                        'page'=>'suatourview',
                        'kqloai'=>$this->tour->loaitour_all(),
                        'thongbao'=>'sửa thành công',
                        'kqtk'=>$this->tour->tour_ma($matour)
                        
                    ]);
                }else{
                    $this->view('MasterLayout',[
                        'page'=>'suatourview',
                        'kqloai'=>$this->tour->loaitour_all(),
                        'thongbao'=>'Sửa Thất Bại',
                        'kqtk'=>$this->tour->tour_ma($matour)
                        ]);
                }
            }
        }

        function xoatour($matour){
            $this->tour->tour_xoa($matour);
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