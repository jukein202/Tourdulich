
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="content">
		<form method="post" action="http://localhost:8080/touradmin/login/login_form">  
			<table class="table">
					<tr>
		                <td colspan="2" style="text-align: center; color: red;">
		                    Đăng Nhập
		                </td>
		            </tr>
		            <tr>
		                <td colspan="2" style="text-align: center; color: red;">
		                    <?php if(isset($data['thongbao']))
								echo $data['thongbao']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Tên Đăng Nhập:</td>
		                <td class="cot2">
		                    <input type="text" name="txttk">
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Mật Khẩu:</td>
		                <td class="cot2">
		                    <input type="password" name="txtpass">
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1"></td>
		                <td class="cot2">
		                   <input type="submit" name="btndn" value="Đăng nhập">
		                </td>
		            </tr>
		        </table>
		</form>
    </div>
</body>
</html>