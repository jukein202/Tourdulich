<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<script type="text/javascript">
	        bkLib.onDomLoaded(function() {
	             new nicEditor().panelInstance('area1');
	        }); // Thay thế text area có id là area1 trở thành WYSIWYG editor sử dụng nicEditor
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="content">
		<div class="">
			<form method="post" action="">
                <?php 
                    while ($r=mysqli_fetch_assoc($data['kqtk'])){
                ?>
		        <table class="table">
				<tr>
		                <td colspan="2" style="text-align: center; color: red;">
							Chi tiết Hóa Đơn
		                </td>
		            </tr>
		            <tr>
		                <td colspan="2" style="text-align: center; color: red;">
		                    <?php 
								// if(isset($data['thongbao']))
								// echo $data['thongbao'];
							?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Mã Hóa Đơn</td>
		                <td class="cot2">
		                    <?php echo $r['Mahd']; ?>
		                </td>
		            </tr>
		           
		            <tr>
		                <td class="cot1">Tên Tour</td>
		                <td class="cot2">
		                    <p style="width: 250px;"><?php echo $r['Tentour']; ?></p>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Người lớn</td>
		                <td class="cot2">
		                	<?php echo $r['Nguoilon']; ?>
		                   
		                </td>
		            </tr>
					<tr>
		                <td class="cot1">Trẻ em</td>
		                <td class="cot2">
		                	
		                  <?php echo $r['Treem']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Người đặt</td>
		                <td class="cot2">
		                   <?php echo $r['Nguoidat']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Số điện thoại</td>
		                <td class="cot2">
                        <?php echo $r['Sdt']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Email</td>
		                <td class="cot2">
                        <?php echo $r['Email']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Địa chỉ</td>
		                <td class="cot2">
		                    <?php echo $r['Diachi']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Tổng tiền</td>
		                <td class="cot2">
                        <?php echo $r['Tongtien']; ?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1"></td>
		                <td class="cot2">
		                    <a href="http://localhost:8080/touradmin/" class="btn btn-primary">Back</a>
		                </td>
		            </tr>
		        </table>
		    </form> 
            <?php } ?>
		</div>
</body>
</html>