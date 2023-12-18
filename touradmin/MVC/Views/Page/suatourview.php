<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<style>
		.area1{
			overflow: scroll:
		}
	</style>
</head>
<body>
            <?php 
                    while ($r=mysqli_fetch_assoc($data['kqtk'])){
                ?>
			<form method="POST" action="http://localhost:8080/touradmin/tour/tour_update">
               
		        <table class="table">
					<tr>
		                <td colspan="2" style="text-align: center; color: red;">
							Tour Du Lịch
		                </td>
		            </tr>
		            <tr>
		                <td colspan="2" style="text-align: center; color: red;">
		                    <?php 
								if(isset($data['thongbao']))
								echo $data['thongbao'];
							?>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Mã Tour</td>
		                <td class="cot2">
		                    <input type="text" name="txtmatour" value="<?php echo $r['Matour']; ?>" disabled>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">loại Tuor</td>
		                <td class="cot2">
		                    <select name="txtmaloaitour">
		                        <?php 
		                            while ($row=mysqli_fetch_assoc($data['kqloai'])) {
		                                echo '<option value="'.$row['Maloaitour'].'">'.$row['Tenloaitour'].'</option>'; 
		                            }
		                        ?>
		                    </select>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Tên Tour</td>
		                <td class="cot2">
		                    <input type="text" name="txttentour" value="<?php echo $r['Tentour']; ?>">
		                </td>
		            </tr>
					<tr>
		                <td class="cot1">Giá 1</td>
		                <td class="cot2">
		                	<input type="text" name="txtgia1" value="<?php echo $r['Gia1']; ?>">   
		                   
		                </td>
		            </tr>
					<tr>
		                <td class="cot1">Giá 2</td>
		                <td class="cot2">
		                   <input type="text" name="txtgia2" value="<?php echo $r['Gia2']; ?>">
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Hình ảnh:</td>
		                <td class="cot2">
							<input type="file" name="filehinhanh">
							<img src="http://localhost:8080/touradmin/upload/<?php echo $r['Hinhanh']; ?>" with="300" height="100" >
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Mô tả :</td>
		                <td class="cot2">
		                    <textarea name="txtmota" style="width:400px;height:200px;"><?php echo $r['Mota']; ?></textarea>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Lịch trình:</td>
		                <td class="cot2">
		                    <textarea name="area1" id="area1" style="width:400px;height:200px;">
                            <?php echo $r['Lichtrinh']; ?>
				  						</textarea>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Thời Gian:</td>
		                <td class="cot2">
		                    <input type="text" name="txtthoigian" value="<?php echo $r['Thoigian']; ?>" >
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Ngày đi:</td>
		                <td class="cot2">
		                    <input type="date" name="txtngaydi" value="<?php echo $r['ngaydi']; ?>" >
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1"></td>
		                <td class="cot2">
		                    <input type="submit" name="btnsua" value="Sửa" class="btn btn-primary">
                            <a href="http://localhost:8080/touradmin"><input type="button" name="btnback" class="btn btn-primary" value=Back ></a>
		                </td>
		            </tr>
                    
		        </table>
                <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
                <script type="text/javascript">
                        bkLib.onDomLoaded(function() {
                            new nicEditor().panelInstance('area1');
                        }); // Thay thế text area có id là area1 trở thành WYSIWYG editor sử dụng nicEditor
                </script>
                <?php } ?>
		    </form> 
</body>
</html>