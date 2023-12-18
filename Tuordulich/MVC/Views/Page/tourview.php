<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="http://localhost:8080/Tuordulich/Public/CSS/style.css">
    <style type="text/css">
		.row{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
	max-width: 1300px;
    margin-left: 110px;
}
		.location{
	position: relative;
    height: 130px;
    margin-left: 20px;
}
	.home-tour{
	position: relative;
	background-image: url(./Public/upload/bg-small.png);
	background-size: cover;
	background-position-x: left;
    background-position-y: bottom;
	padding: 20px 0px;
}
    .foreign-tour{
	background-image: url(./Public/upload/bg2.jpg);
	background-size: cover;
	padding: 20px 0px;
    }
	.caption{
    position: relative;
    background: url(./Public/upload/bg-small.png) no-repeat;
    background-position-x: left;
    background-position-y: bottom;
}
    .tittle-tour{
        width: 100%;
        height: 55px;
        overflow: hidden;
        text-decoration: none;
    }
    .btndat{
			position: absolute;
            font-size: 20px;
            background-color:#ffc10e;
            color: white;
			text-align: center;
			line-height: 50px;
			width: 100px;
			text-decoration: none;
			right: 0px;
		}
    .btndat:hover{
        background-color:#edc552;
    }
	.location-sub{
		position: absolute;
		bottom: 0;
	}
    </style>
</head>
<body>

    <div class="home-tour">
        <div class="tittle">
			<span>Khám phá lịch sử - văn hóa - con người Việt Nam với</span>
						<h2 class="h2">TOUR TRONG NƯỚC</h2>
		</div>
        <div class="row">
        <?php 
					while($row=mysqli_fetch_assoc($data['kq1'])){
					echo '<div class="thumbnall">
					<a href="http://localhost:8080/Tuordulich/tour/cttour/'.$row['Matour'].'"><img src="http://localhost:8080/Tuordulich/Public/upload/' .$row['Hinhanh']. '" style="width: 100%; height: 50%;">
					<div class="caption"></a>
                    <a href="http://localhost:8080/Tuordulich/tour/cttour/'.$row['Matour'].'" style="text-decoration: none;">
							<h2 class="tittle-tour">' .$row['Tentour']. '</h2>
						</a>
						<div class="location">
							<p style="margin-bottom: 40px;" class="location-sub">TP HCM</p>
							<p class="location-sub">' .$row['ngaydi']. '</p>
						</div>
						
					</div>
					<div class="price" style="position: relative;">
					<table>
					<tr>
						<td style="padding: 14px 2px 0px 1px;"> <img src="https://cdn-icons-png.flaticon.com/128/3037/3037156.png" width="20" height="20" ></td>
						<td style="color: red;  font-size: 24px;padding-top: 8px;">
						<span >' .$row['Gia1']. 'VND</span>
					</td>
					<td style="position: absolute;right: 0;font-size: 30px;">
						<a href="http://localhost:8080/Tuordulich/Hoadon/hoadon/'.$row['Matour'].'" class="btndat"> Đặt ngay</a>
						</td>
					</tr>
					</table>
						</div>
				</div>';
			}
				 ?>
        </div>
</div>
<div class="foreign-tour">
    <div class="tittle">
        <span>Khám phá lịch sử - văn hóa - con người Việt Nam với</span>
                <h2 class="h2">TOUR NƯỚC NGOÀI</h2>
	</div>
    <div class="row">
    <?php 
					while($row=mysqli_fetch_assoc($data['kq2'])){
					echo '<div class="thumbnall">
					<a href="http://localhost:8080/Tuordulich/tour/cttour/'.$row['Matour'].'"><img src="http://localhost:8080/Tuordulich/Public/upload/' .$row['Hinhanh']. '" style="width: 100%; height: 50%;">
					<div class="caption"></a>
                    <a href="http://localhost:8080/Tuordulich/tour/cttour/'.$row['Matour'].'" style="text-decoration: none;">
							<h2 class="tittle-tour">' .$row['Tentour']. '</h2>
						</a>
						<div class="location">
							<p style="margin-bottom: 40px;" class="location-sub">TP HCM</p>
							<p class="location-sub">22/10/2022</p>
						</div>
						
					</div>
					<div class="price" style="position: relative;">
					<table>
					<tr>
						<td style="padding: 14px 2px 0px 1px;"> <img src="https://cdn-icons-png.flaticon.com/128/3037/3037156.png" width="20" height="20" ></td>
						<td style="color: red;  font-size: 24px;padding-top: 8px;">
						<span >' .$row['Gia1']. 'VND</span>
					</td>
					<td style="position: absolute;right: 0;font-size: 30px;">
						<a href="http://localhost:8080/Tuordulich/Hoadon/hoadon/'.$row['Matour'].'" class="btndat"> Đặt ngay</a>
						</td>
					</tr>
					</table>
						</div>
				</div>';
			}
				 ?>
        </div>
    </div>
</div>

</body>
</html>