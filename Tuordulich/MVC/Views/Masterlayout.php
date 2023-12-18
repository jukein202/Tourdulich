
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="http://localhost:8080/Tuordulich/Public/CSS/style.css">
    <style>
        .slider-wrapper{
            background: url(http://localhost:8080/Tour_du_lich/Public/upload/mua-thu-han-quoc.jpg) no-repeat;
            position: relative;
            background-size: 1519px;
        }
        .search{
            position: absolute;
            bottom: 0;
            left: 50%;
        }
    </style>
</head>
<body>
	<header>
		<div class="nav">
			<div class="nav-logo">
			<h3><a href="http://localhost:8080/Tuordulich/"><img src="https://img.freepik.com/free-vector/summer-vacation-logo-concept_1308-90756.jpg?w=826&t=st=1666057769~exp=1666058369~hmac=3e8d7130502dfcb48c91a6287390446b01afc88f5543f88cf823418e7de1711a" with="1300" height="80"></a></h3>
			</div>
			<div class="nav_menu">
				<ul class="nav_menu-list">
					<li class="nav_menu-item"><a href="http://localhost:8080/Tuordulich/">Trang Chủ</a></li>
					<li class="nav_menu-item"><a href="">Tour Du Lịch</a></li>
					<li class="nav_menu-item"><a href="">Khách Sạn</a></li>
					<li class="nav_menu-item"><a href="">Dịch Vụ</a></li>
                    <li class="nav_menu-item"><a href="http://localhost:8080/Tuordulich/Timkiem"><ion-icon name="search-outline"></ion-icon>Tìm kiếm</a></li>
					<li class="nav_menu-item"><a href="http://localhost:8080/touradmin/login">Admin</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div class="slider-wrapper" >
	</div>
    <div>
		<?php
				include_once './MVC/Views/Page/'.$data['page'].'.php';
			?>
	</div>
	<footer>
            <div style="display: flex;justify-content: center;background: peachpuff;padding-top: 15px;	">
                <div>
                    <h3 class="h4">HOTLINE</h3>
                    <p>
                        <br>
                        <strong>Khách lẻ:</strong> <a href="tel:02873023368">0287.302.3368</a><br>
                        <strong>Tour đoàn trong nước:</strong> <a href="tel:0909189920">0909.189.920</a><br>
                        <strong>Tour đoàn nước ngoài:</strong> <a href="tel:0919696894">0919.696.894</a><br>
                        <strong>Vé máy bay:</strong> <a href="tel:0823260110">0823.26.0110</a>
                    </p>
                </div>
                <div>
                    <p>
                    <h3 class="h4">LIÊN HỆ</h3>
                    <br>
                    <p>CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH BẾN THÀNH<br>
                        (BENTHANH TOURIST)<br>
                        <strong>Trụ sở:</strong> 70 Lý Tự Trọng, P. Bến Thành, Quận 1, TP. Hồ Chí Minh<br>
                        <strong>Tel:</strong> <a href="tel:02835202020" title="028.3520 2020">028.3520 2020</a><br>
                        <strong>Fax:</strong> 028.3829 5060<br>
                        <strong>Email:</strong> <a
                            href="mailto:benthanh@benthanhtourist.com">benthanh@benthanhtourist.com</a>
                    </p>
                    </p>
                </div>
                <div>
                    <img src="https://benthanhtourist.com/assets/hinh/da-thong-bao-voi-bo-cong-thuong.png">
                </div>
                <br>
                <br>
                <div>
                    <img style="height:auto;width:200px" src="https://benthanhtourist.com/assets/hinh/logo-iso.png">
                </div>
            </div>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>