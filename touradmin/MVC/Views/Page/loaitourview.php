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
                <th>Mã loại tour</th>
                <th>Tên tên tour</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
                <?php 
                    
                    while ($row=mysqli_fetch_assoc($data['kq2'])) {
                        echo '<tr>
                                    <td>' .$row['Maloaitour']. '</td>
                                    <td>' .$row['Tenloaitour']. '</td>
                                    <td><input type="button" name="btnSua" value=sửa></td>
                                    <td><input type="button" name="btnXóa" value=xóa></td>
                              </tr>';
                    }
                ?>
            </table>
		</form> 
</body>
</html>