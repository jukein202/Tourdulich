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
		<div class="content_tour" id="tour">
			<form method="post" action="http://localhost:8080/touradmin/tour/themtour">
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
		                    <input type="text" name="txtmatour" value="" disabled>
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
		                    <input type="text" name="txttentour" value="<?php if(isset($data['tentour'])) echo $data['tentour']; ?>">
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Giá 1</td>
		                <td class="cot2">
		                	<input type="text" name="txtgia1" value="<?php if(isset($data['gia1'])) echo $data['gia1']; ?>">   
		                   
		                </td>
		            </tr>
					<tr>
		                <td class="cot1">Giá 2</td>
		                <td class="cot2">
		                	
		                   <input type="text" name="txtgia2" value="<?php if(isset($data['gia2'])) echo $data['gia2']; ?>">
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Hình ảnh:</td>
		                <td class="cot2">
		                    <input type="file" name="filehinhanh" value="<?php //echo $destinationfile ?>"> <!-- <img src="<?php //echo $hinhanh ?>"> -->
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Mô tả :</td>
		                <td class="cot2">
		                    <textarea name="txtmota" style="width:400px;height:200px;"><?php if(isset($data['mota'])) echo $data['mota']; ?></textarea>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Lịch trình:</td>
		                <td class="cot2">
		                    <textarea name="area1" id="area1" style="width:400px;height:200px;overflow: auto:">
				      						<?php if(isset($data['lichtrinh'])) echo $data['lichtrinh']; ?>
				  						</textarea>
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Thời Gian:</td>
		                <td class="cot2">
		                    <input type="text" name="txtthoigian" value="<?php if(isset($data['thoigian'])) echo $data['thoigian']; ?>" >
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1">Ngày đi:</td>
		                <td class="cot2">
		                    <input type="date" name="txtngaydi" value="<?php if(isset($data['ngaydi'])) echo $data['ngaydi']; ?>" >
		                </td>
		            </tr>
		            <tr>
		                <td class="cot1"></td>
		                <td class="cot2">
		                    <input type="submit" name="btnluu" class="btn btn-primary" value="Lưu">
		                </td>
		            </tr>
		        </table>
		    </form> 
		</div>
</body>
</html>