<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
		<form method="post" style="margin-top: 10px;">
		    <table class="table table-striped table-bordered table-hover" border="1" cellpadding="0px" cellspacing="0">
                <tr style="background: greenyellow;">
                <th>Mã Hóa đơn</th>
                <th>Người Đặt</th>
                <th>Sđt</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Tổng tiền</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
                <?php 
                    
                    while ($row=mysqli_fetch_assoc($data['kq3'])) {
                        echo '<tr>
                                    <td>' .$row['Mahd']. '</td>
                                    <td>' .$row['Nguoidat']. '</td>
                                    <td>' .$row['Sdt']. '</td>
                                    <td>' .$row['Email']. '</td>
                                    <td>' .$row['Diachi']. '</td>
                                    <td>' .$row['Tongtien']. '</td>
                                    <td><a href="http://localhost:8080/touradmin/hoadon/chitietHD/' .$row['Mahd']. '"><input type="button" name="btnSua" value=Xem ></a></td>
                                    <td><a href="http://localhost:8080/touradmin/hoadon/xoaHD/' .$row['Mahd']. '"><input type="button" name="btnXóa" value=xóa></a></td>
                              </tr>';
                    }
                ?>
            </table>
		</form> 
</body>
</html>