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
    <a href="http://localhost:8080/touradmin/tour" class="btnthem"> Thêm tour</a>
			<form method="post" style="margin-top: 10px;">
		         <table class="table table-striped table-bordered table-hover" border="1" cellpadding="0px">
                <tr style="background: greenyellow;">
                <th>Mã tour</th>
                <th>Tên tour</th>
                <th>Giá 1</th>
                <th>Giá 2</th>
                <th>Thời Gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php 
                    
                    while ($row=mysqli_fetch_assoc($data['kq'])) {
                        echo '<tr>
                                    <td>' .$row['Matour']. '</td>
                                    <td>' .$row['Tentour']. '</td>
                                    <td>' .$row['Gia1']. '</td>
                                    <td>' .$row['Gia2']. '</td>
                                    <td>' .$row['Thoigian']. '</td>
                                    <td><a href="http://localhost:8080/touradmin/tour/suatour/' .$row['Matour']. '"><input type="button" name="btnSua" value=sửa ></a></td>
                                    <td><a href="http://localhost:8080/touradmin/tour/xoatour/' .$row['Matour']. '">
                                    <input type="button" name="btnXóa" value=xóa 
                                    ></a></td>
                              </tr>';
                    }
                ?>
            </table>
        </form>
</body>
</html>