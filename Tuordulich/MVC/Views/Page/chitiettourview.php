<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	<link rel="stylesheet" href="http://localhost:8080/Tuordulich/Public/CSS/style.css">
    <style type="text/css">
		.panel-heading1{
			background: #3d576d;
			color: #fff;
			height: 50px;
			font-size: 20px;
			line-height: 40px;
		}
		.main-img{
			width: 100%;
		}
		.main-img >img{
			width: 100%;
			height: 300px;
		}
		.text-mota{
			font-size: 20px;
			font-weight: 500;
		}
		.section4{
			max-width: 580px;

		}
		.panel{
			position: relative;
			min-width: 600px;
			min-height: 80px;
			display: flex;
			background: #003d71;
    		color: #fff;
    		font-size: 20px;
    		font-weight: 700;
		}
		.panel-heading{
			position: relative;
			min-width: 600px;
			min-height: 80px;
			display: flex;
			background: #003d71;
    		color: #fff;
			line-height: 70px;
    		font-size: 20px;
    		font-weight: 700;
		}
		.left{
			line-height: 80px;
			padding-left: 20px;
		}
		.right{
				margin-top: 25px;
				margin-left: 100px;
			    float: right;
			    display: inline-block;
			    width: 40%;
			    font-size: 16px;
		}
		.btndat{
			position: absolute;
			background-color: #fe6433;
			text-align: center;
			line-height: 78px;
			height: 100%;
			width: 100px;
			text-decoration: none;
			color: #fff;
			right: 0px;
		}
		.btndat:hover{
			background-color: #ec593c;
			color: black;
		}
		.thumbnall{
			width: 360px;
			height: 500px;
			margin: 0 60px;
			margin-top: 40px;
			-webkit-box-shadow: 1px 1px 5px 0 #999;
			background-color: #fff;
		}
		#product-page{
			max-width: 100%;
			display: flex;
			background-color: #f5f5f5;
			justify-content: space-between;
		}
		.page{
			margin-left: 40px;
			background-color: #fff;
		}
		.sub-tille{
			min-width: 360px;
			min-height: 80px;
			background: #034b85;
    		color: #fff;
			line-height: 70px;
    		font-size: 20px;
    		font-weight: 700;
		}
		.sub-body{
			background: #003d71;
    		color: #fff;
			height: 70%;
			line-height: 70px;
    		font-size: 18px;
    		font-weight: 500;
			padding-left: 20px;
			overflow: hidden;
		}
		.sub-footer{
			background: #ffc10e;
			line-height: 70px;
    		font-size: 20px;
    		font-weight: 700;
			text-align: center;
		}
		.sub-footer >a {
			color: #fff;
			text-decoration: none;
		}
		.sub-icon{
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<div id="product-page">
		<div class="page">
			<?php
				while($r=mysqli_fetch_array($data['kq'])){
					?>
				
					<div class="section1">
						<div class="panel-heading1">
						<ion-icon name="image-outline"></ion-icon> Hình ảnh
						</div>
						<div class="main-img">
								<img src="http://localhost:8080/Tuordulich/Public/upload/<?php echo $r['Hinhanh']; ?>">
						</div>
					</div>
					<div class="section2">
						<div class="panel-heading">
							<p><ion-icon name="pencil-outline"></ion-icon>Mô Tả<p>
						</div>
						<div>
							<p class="text-mota">
							<?php echo $r['Mota']; ?>
							</p>
						</div>
					</div>
					<div class="section3">
						<div class="panel-heading">
						 <p><ion-icon name="list-outline"></ion-icon>Lịch Trình TOUR</p>
						</div>
						<p>
							
						<?php echo $r['Lichtrinh']; ?>
							</p>		
								
					</div>
					<div class="section4">
							<div class="panel">
								<div class="left">
								<?php echo $r['Gia1']; ?>VND
								</div>
								<div class="right">
									<span>Thời Gian:  <?php echo $r['Thoigian']; ?>  </span>
									<p>Khởi Hành: <?php echo $r['ngaydi']; ?> </p>
								</div>
								<a href="http://localhost:8080/Tuordulich/Hoadon/hoadon/<?php echo $r['Matour']; ?>" class="btndat">Đặt Ngay</a>
							</div>
					</div>
				
		</div>
		<div class="sub-page">
			<div class="thumbnall">
				<div class="sub-tille">
				<ion-icon name="menu-outline" class="sub-icon"></ion-icon> THÔNG TIN TOUR
				</div>
				<div class="sub-body">
				<p> <ion-icon name="golf-outline" class="sub-icon"></ion-icon><?php echo $r['Tentour']; ?></p>
				<p><ion-icon name="qr-code-outline" class="sub-icon"></ion-icon> Mã tour:<?php echo $r['Matour']; ?></p>
				<p> <ion-icon name="airplane-outline" class="sub-icon"></ion-icon>Phương tiện: <strong>Máy bay - Xe ô tô</strong></p>
				<p> <ion-icon name="flag-outline" class="sub-icon"></ion-icon>Khởi hành tại: TP HCM</p>
				</div>
				<div class="sub-footer">
				<a href="tel:028.3520 2020"><ion-icon name="call-outline" class="sub-icon"></ion-icon>028.3520 2020</a>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	<footer>
		
	</footer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>