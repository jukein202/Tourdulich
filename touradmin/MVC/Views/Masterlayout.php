
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
		}
		:root{
			--while-color: #fff;
			--black-color: #000;
		    --text-color: #333; 
		}
		.header{
			width: 100%;
			height: 160px;
			background: #003d71;
		}
		.header_navbar{
			height: 102px;
			display: flex;
			justify-content: space-between;
		}
		.navbar-img{
			width: 150px;
			height: 100%;
		}
		.navbar_list-item{
			list-style: none;
			color: var(--while-color);
			display: inline-block;
			margin: 4px 10px;
			cursor: pointer;
		}
		.header_menu{
			height: 58px;
			display: flex;
			justify-content: center;
			background-color: #fe6433;
		}
		.header_menu-list{
			list-style: none;
			display: flex;
			height: 100%;
			align-items: center;
		}
		.menu-list-link{
			color: var(--while-color);
			margin: 0 40px;
			display: block;
		}
		.header_menu-list:hover,
		.menu-list-link:hover{
			background: #ec593c;
			cursor: pointer;
		}

		.content{
			height: 100%;
			display: flex;
			justify-content: center;
			margin-top: 20px;
		}
		#HD,
		#loai{
			display: none;
		}
		.btnthem{
			text-decoration: none;
			color: white;
			border: 1px solid var(--black-color);
			background-color: #fe6433;
			padding: 8px 9px;
			
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="header_navbar">
			<ul class="navbar_list">
				<li>
					<a href="http://localhost:8080/touradmin"><img src="https://img.freepik.com/free-vector/summer-vacation-logo-concept_1308-90756.jpg?w=826&t=st=1666057769~exp=1666058369~hmac=3e8d7130502dfcb48c91a6287390446b01afc88f5543f88cf823418e7de1711a"  class="navbar-img"></a>
				</li>
			</ul>
			<ul class="navbar_list">
				<a href="http://localhost:8080/Tuordulich/"><li class="navbar_list-item">Đăng xuất</li></a>
			</ul>
		</div>
		<div class="header_cap">
			 <ul class="header_menu">
				<li class="header_menu-list" onclick="change('tour',this)"><a class="menu-list-link">TOUR DU LỊCH</a></li>
				<li class="header_menu-list" onclick="change('loai',this)"><a class="menu-list-link">LOẠI TOUR</a></li>
				<li class="header_menu-list" onclick="change('HD',this)"><a class="menu-list-link">HÓA ĐƠN</a></li>
				<li class="header_menu-list"><a href="http://localhost:8080/touradmin/Thongke" class="menu-list-link">THỐNG KÊ</a></li>
			</ul> 
		</div>
	</div>
	<div class="content">
		<div class="content_tour" id="tour" enctype="multipart/form-data">
			<?php
				include_once './MVC/Views/Page/'.$data['page'].'.php';
			?>
		</div>

		<div class="content_type" id="loai">
		<?php
				include_once './MVC/Views/Page/'.$data['page2'].'.php';
			?>
		     
		</div>
		<div class="content_type" id="HD">
		<?php
				include_once './MVC/Views/Page/'.$data['page3'].'.php';
			?>
		     
		</div>
    </div>
    <script type="text/javascript">
    	function change(type,element){
    		
    		switch(type){
				case 'tour':
				document.getElementById('loai').style.display = 'none';
				document.getElementById('HD').style.display = 'none';
				document.getElementById('tour').style.display = 'block';
				break;
				case 'loai':
				document.getElementById('tour').style.display = 'none';
				document.getElementById('HD').style.display = 'none';
				document.getElementById('loai').style.display = 'block';
				break;
				case 'HD':
				document.getElementById('tour').style.display = 'none';
				document.getElementById('HD').style.display = 'block';
				document.getElementById('loai').style.display = 'none';
				break;
			}
	}
    </script>
</body>
</html>