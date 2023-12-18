
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./CSS/sytle.css">
    <style>
        .ten_tt {
        background: #003d71;
        color: white;
        font-size: 30px;
        font-weight: 700;
    }
    .col-lg-8{
        width: 626px;
    }
    .tittle-tour{
        overflow: hidden;
    }
    .cart-total{
        background: #ffc10e;
        color: #003d71;
        padding: 10px 30px;
        text-align: right;
        font-weight: 700;
        font-size: 18px;
    }
    .pull-left{
        float: left;
    }
    .btnbuy{
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    }
    .tongtien{
        border: none;
        background: #ffc10e;
        width: 100px;
        font-size: 18px;
    }
    .txt{
		width: 300px;
		height: 30px;
		border-radius: 5px;
		margin: 7px;
	}
    </style>
</head>

<body>

    <div style="background: bisque;
     color: #003d71;
        text-align: center;
        font-size: 20px;
        padding: 100px 0px;">
        <div style="margin-bottom: 50px;">
            <span>THANH TOÁN</span>
            <h2 class="">Thông tin thanh toán</h2>
        </div>
        <?php
				while($r=mysqli_fetch_array($data['kq'])){
			?>
        <form method="POST" action="http://localhost:8080/Tuordulich/Hoadon/hoadon/<?php echo $r['Matour']; ?>">
            <div class="row">
            <div class="ttnd">
                <div>
                    <div>
                        <p class="ten_tt">THÔNG TIN NGƯỜI ĐẶT</p>
                    </div>
                    <div>
                        <div>
                            <input type="text" placeholder="Họ và tên" name="txtnguoidat" class="txt">

                        </div>
                        <div>
                            <input type="text"  placeholder="Số điện thoại" name="txtsdt"
                            class="txt">

                        </div>
                        <div class="form-group">
                            <input type="text"  placeholder="Email" name="txtemail"
                            class="txt">
                        </div>
                        <div class="form-group">
                            <input type="text"  placeholder="Địa chỉ" name="txtdiachi"
                            class="txt">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="cart-list panel">
                    <div class="ten_tt">
                     THÔNG TIN VỀ SẢN PHẨM / DỊCH VỤ
                    </div>
                    
                        <h3 class="h4">Du Lịch </h3>
					<div>
						<div>
							<h2 class="tittle-tour"><?php echo $r['Tentour']; ?></h2>
						</div>														
					</div>
				</div>
                                    <p><strong>Ngày khởi hành:</strong> <span><?php echo $r['ngaydi']; ?></span></p>
                                    <table style="margin-left: 130px;">
                                        <tr>
                                            <th> Người lớn</th>
                                            <th><input class="qty" type="number" min="1" value="1" name="adult" max="6" id="adult">
                                            </th>
                                            <th> x <span id="giangl"><?php echo $r['Gia1']; ?> </span></th>
                                            <th>= <span id="tongnl"><?php echo $r['Gia1']; ?></span></th>
                                        </tr>
                                        <tr>
                                            <th> Trẻ em(6-&gt;11
                                                tuổi)</th>
                                            <th><input class="qty" type="number" min="0" value="0" name="child" max="6" id="child">
                                            </th>
                                            <th> x <span id="giantrem"><?php echo $r['Gia2']; ?></span></th>
                                            <th>=<span id="tongtrem">0</span></th>
                                        </tr>
                                        <tr>
                                            <th>Trẻ em(2-&gt;5
                                                tuổi)</th>
                                            <th><input class="qty" type="number" min="0" value="0" max="6">
                                            </th>
                                            <th> x 0</th>
                                            <th>=<span>0</span></th>
                                        </tr>
                                        <tr>
                                            <th>Trẻ em(&lt;2
                                                tuổi)</th>
                                            <th><input class="qty" type="number" min="0" value="0" max="6">
                                            </th>
                                            <th> x 0</th>
                                            <th>=<span>0</span></th>
                                        </tr>


                                    </table>
                            <div class="cart-total" style="overflow: hidden;">
                                <div class="pull-left">
                                <!-- class="btnbuy" -->
                                <input type="submit" name="btnThanhtoan" value="Thanh toán" class="btnbuy" onclick="alert('Thanh toán thành công!')">
                                </div>
                            <div class="pull-right">
                                TỔNG CỘNG: <input type="text" class="tongtien" name="txtTongTien" value="<?php echo $r['Gia1']; ?>"> vnđ
                            </div>
                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </div>
            <?php 
                }
            ?>
        </form>
    </div>
    <script type="text/javascript">
        let sl = document.getElementById('adult');
        let sl2 = document.getElementById('child');
        let tonggianl= document.getElementById("tongnl");
        function Tinhtiennl(){
        let sl = document.getElementById('adult').value;
        let gianl= document.getElementById('giangl').innerHTML;
        let tonggiatrem= document.getElementById("tongtrem").innerHTML;
        let tonggianl= document.getElementById("tongnl");
        let tongtien = document.querySelector('.tongtien');
        var gian11 = parseFloat(gianl);
        var tonggiatrem1 = parseFloat(tonggiatrem);
        var ttoan=sl*gianl;
        var tt=ttoan+tonggiatrem1;
        tonggianl.innerHTML =ttoan;
        tongtien.value = tt;
        }
        function Tinhtientre(){
        let sl = document.getElementById('child').value;
        let giatrem= document.getElementById('giantrem').innerHTML;
        let tonggianl= document.getElementById("tongnl").innerHTML;
        let tonggiatrem= document.getElementById("tongtrem");
        let tongtien = document.querySelector('.tongtien');
        var giatrem1 = parseFloat(giatrem);
        var tonggianl1 = parseFloat(tonggianl);
        var ttoan=sl*giatrem1;
        var tt=ttoan+tonggianl1;
        tonggiatrem.innerHTML =ttoan;
        tongtien.value = tt;
        }
        sl.addEventListener('change', Tinhtiennl);
        sl2.addEventListener('change', Tinhtientre);
        
    </script>
</body>

</html>