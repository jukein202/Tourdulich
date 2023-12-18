
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		.tille{
			background: #003d71;
        	color: white;
        	font-size: 30px;
        	font-weight: 700;
		}
		.search-left{
			position: relative;
			min-width: 350px;
			max-height: 300px;
			margin: 0 60px;
			margin-top: 40px;
    		box-shadow: 1px 1px 5px 0 #999;
			background-color: #fff;
		}
		.location{
	position: relative;
    height: 130px;
    margin-left: 20px;
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
	.search-left_content{
		margin: 20px 20px;
	}
	.txt{
		width: 300px;
		height: 30px;
		border-radius: 5px;
		margin: 7px;
	}
	.btnTK{
        font-size: 18px;
        background-color:#ffc10e;
        color: white;
		text-align: center;
		line-height: 30px;
		width: 315px;
		border-color: #fff;
    	border-radius: 5px;
		margin-top: 10px;
	}
	</style>
</head>
<body style="background: #f5f5f5;">
<form method="POST" action="http://localhost:8080/Tuordulich/Timkiem/TimKiemTour">
	<div class="row">
		<div class="search-left">
            <div>
                <p class="tille">Tìm TOUR</p>
            </div>
            <div class="search-left_content">
                <div>
                    <input type="text" class="txt" placeholder="Tên tour" name="txttentour" value="<?php  if(isset($data['Tentuor'])) echo $data['Tentuor']  ?>">
				</div>
                <div>
					<select class="txt" name="ddloaitour">
						<option value="">---Loai tour---</option>
						<?php
                        while($row=mysqli_fetch_assoc($data['kq'])){
                            echo '<option value='.$row['Maloaitour'].'>'.$row['Tenloaitour'].'</option>';
                           
                        }
                    ?>
					</select>
					<div>
						<input type="text" class="txt" name="txtgia" placeholder="Giá Tiền">
					</div>
					<div>
						<input type="text" class="txt" name="txtthoigian" placeholder="Thời Gian">
					</div>
					<div>
						<button type="submit" class="btnTK" name="btnTimkiem">Tìm kiếm</button>
					</div>
                </div>
            </div>
		</div>
		<div class="tour">
		<?php 
					while($row=mysqli_fetch_assoc($data['kqtk'])){
		?>
					<div class="thumbnall">
					<a href="http://localhost:8080/Tuordulich/tour/cttour/<?php echo $row['Matour'] ?>"><img src="http://localhost:8080/Tuordulich/Public/upload/<?php echo $row['Hinhanh'] ?>" style="width: 100%; height: 50%;">
					<div class="caption"></a>
                    <a href="http://localhost:8080/Tuordulich/tour/cttour/<?php echo $row['Matour'] ?>" style="text-decoration: none;">
							<h2 class="tittle-tour"><?php echo $row['Tentour'] ?></h2>
						</a>
						<div class="location">
							<p style="margin-bottom: 40px;" class="location-sub">TP HCM</p>
							<p class="location-sub"><?php echo $row['ngaydi'] ?></p>
						</div>
						
					</div>
					<div class="price" style="position: relative;">
					<table>
					<tr>
						<td style="padding: 14px 2px 0px 1px;"> <img src="https://cdn-icons-png.flaticon.com/128/3037/3037156.png" width="20" height="20" ></td>
						<td style="color: red;  font-size: 24px;padding-top: 8px;">
						<span ><?php echo $row['Gia1'] ?>VND</span>
					</td>
					<td style="position: absolute;right: 0;font-size: 30px;">
						<a href="http://localhost:8080/Tuordulich/Hoadon/hoadon/'.$row['Matour'].'" class="btndat"> Đặt ngay</a>
						</td>
					</tr>
					</table>
						</div>
				</div>
				<?php
					}
				 ?>
		</div>
	</div>
</form>
</body>
</html>