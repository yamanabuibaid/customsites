<?php
include('db.php');
include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Print Order</title>
<style>
@media print{
	.btn_print:hover {
		background-color: #2C73C2;
	}
	.form-div{
	}
}
.btn_print{
	padding: 20px 50px;
    background-color: #358CEB;
    text-align: center;
    color: white;
    font-size: 25px;
    margin-bottom: 20px;
    cursor: pointer;
    box-sizing: border-box;
    width: 832px;
    transition: background-color 0.5s;
}
.btn_print:hover{
	background-color: blue;
}
.form-div{
    border: 1px solid black;
    width: 800px;
    margin: 0 auto;
    padding: 15px;
}
.top{
	border-bottom: 1px solid;
    padding-bottom: 5px;
}
.tracking_number_num{
	margin: 0;
    display: inline-block;
    float: right;
    font-size: 56px;
    margin-top: -6px;
    margin-right: 6px;
}
</style>
</head>
<?php
	if(isset($_GET['tn'])){
		$tn = $_GET['tn'];
		$order_query = mysql_query("SELECT * FROM orders WHERE tracking_number='$tn'");
		if(mysql_num_rows($order_query) > 0){
					while($run = mysql_fetch_assoc($order_query)){
			$name = $run['name'];
			$address = $run['address'];
			$city = $run['city'];
			$province = $run['province'];
			$postal = $run['postal'];
			$phone_number = $run['phone_number'];
			$delivery_name = $run['delivery_name'];
			$delivery_address = $run['delivery_address'];
			$delivery_city = $run['delivery_city'];
			$delivery_province = $run['delivery_province'];
			$delivery_postal = $run['delivery_postal'];
			$delivery_phone_number = $run['delivery_phone_number'];
			$description = $run['description'];
			$weight = $run['weight'];
			$pieces = $run['pieces'];
			$dimensions = $run['dimensions'];
		}
?>
<body onload="javascript:window.print();" style="font-family: Arial;">
<center>
	<div class="btn_print" onclick="javascript:window.print();">Print</div>
</center>
	<div class="form-div">
		<div class="top">
			<div style="display: inline-block;">
				<p style="margin: 0;font-size: 30px;">EazyXPress</p>
				<p style="margin: 0;width: 145px;">www.eazyxpress.ca</p>
			</div>
			<p class="tracking_number_num">701687</p>
		</div>
		<div style="
    margin-top: 11px;
"><div class="left-side" style="
    box-sizing: border-box;
    width: 50%;
    display: inline-block;
    border-right: 1px solid black;
    padding-right: 10px;
	height: 277px;
	float: left;
">
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0;
    font-size: 11px;
">FROM (NAME OR COMPANY NAME)</p><p style="
    font-size: 22px;
    margin: 0;
    margin-top: 1px;
"><?php echo $name;?></p></div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0;
    font-size: 11px;
">STREET</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
"><?php echo $address;?></p></div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0px;
    font-size: 11px;
    width: 40px;
    position: relative;
    display: inline-block;
    top: -5px;
">CITY</p><br><p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
	width: 100px;
"><?php echo $city;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PROV.</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -36px;
"><?php echo $province;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">POSTAL</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
	width: 100px;
"><?php echo $postal;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PHONE #</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
"><?php echo $phone_number;?></p></div><div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0px;
    font-size: 11px;
    width: 40px;
    position: relative;
    display: inline-block;
    top: -5px;
">PIECES</p><br><p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
	min-width: 100px;
"><?php echo $pieces;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">WEIGHT</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
	min-width: 100px;
"><?php echo $weight;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">DIMENSIONS</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -73px;
"><?php echo $dimensions;?></p>

</div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0;
    font-size: 11px;
">DESCRIPTION</p><p style="
    font-size: 15px;
    margin: 0;
     
    height: 90px;
    margin-top: 1px;
"><?php echo $description;?></p>
</div>
</div>
<div classs="right-side" style="
    box-sizing: border-box;
    width: 50%;
    display: inline-block;
    padding-left: 10px;
	height: 277px;
">
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0;
    font-size: 11px;
">TO (NAME OR COMPANY NAME)</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
"><?php echo $delivery_name?></p></div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0;
    font-size: 11px;
">STREET</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
"><?php echo $delivery_address?></p></div><div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
	height: 40px;
"><p style="
    margin: 0px;
    font-size: 11px;
    width: 40px;
    position: relative;
    display: inline-block;
    top: -5px;
	width: 100px;
">CITY</p><br><p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
"><?php echo $delivery_city?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PROV.</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -36px;
	width: 100px;
"><?php echo $delivery_province?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">POSTAL</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
	width: 100px;
"><?php echo $delivery_postal?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PHONE #</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
"><?php echo $delivery_phone_number?></p></div></div>
</div>
	</div>
<p style="width: 830px;font-weight: bold;margin: 20px auto;">-----------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<div class="form-div">
		<div class="top">
			<div style="display: inline-block;">
				<p style="margin: 0;font-size: 30px;">EazyXPress</p>
				<p style="margin: 0;width: 145px;">www.eazyxpress.ca</p>
			</div>
			<p class="tracking_number_num">701687</p>
		</div>
		<div style="
    margin-top: 11px;
"><div classs="left-side" style="
    box-sizing: border-box;
    width: 50%;
    display: inline-block;
    border-right: 1px solid black;
    padding-right: 10px;
	height: 277px;
	float: left;
">
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0;
    font-size: 11px;
">FROM (NAME OR COMPANY NAME)</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
"><?php echo $name;?></p></div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0;
    font-size: 11px;
">STREET</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
"><?php echo $address;?></p></div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0px;
    font-size: 11px;
    width: 40px;
    position: relative;
    display: inline-block;
    top: -5px;
">CITY</p><br><p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
"><?php echo $city;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PROV.</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -36px;
	width: 100px;
"><?php echo $province;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">POSTAL</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
	width: 100px;
"><?php echo $postal;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PHONE #</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
"><?php echo $phone_number;?></p></div><div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0px;
    font-size: 11px;
    width: 40px;
    position: relative;
    display: inline-block;
    top: -5px;
">PIECES</p><br><p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
	min-width: 100px;
"><?php echo $pieces;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">WEIGHT</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
	min-width: 100px;
"><?php echo $weight;?></p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">DIMENSIONS</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -73px;
"><?php echo $dimensions;?></p>

</div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0;
    font-size: 11px;
">DESCRIPTION</p><p style="
    font-size: 15px;
    margin: 0;
     
    height: 90px;
    margin-top: 1px;
"><?php echo $description;?></p>
</div>
</div>
<div classs="right-side" style="
    box-sizing: border-box;
    width: 50%;
    display: inline-block;
    padding-left: 10px;
	height: 277px;
">
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0;
    font-size: 11px;
">TO (NAME OR COMPANY NAME)</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
">Yaman Abuibaid</p></div>
<div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0;
    font-size: 11px;
">STREET</p><p style="
    font-size: 22px;
    margin: 0;
     
    margin-top: 1px;
">17 Christopher Street</p></div><div style="
    text-align: left;
    box-sizing: border-box;
    border-bottom: 1px solid #847B7B;
    display: inline-block;
    width: 100%;
    margin-bottom: 3px;
"><p style="
    margin: 0px;
    font-size: 11px;
    width: 40px;
    position: relative;
    display: inline-block;
    top: -5px;
">CITY</p><br><p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
">Toronto</p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PROV.</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -36px;
">Ontario</p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">POSTAL</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
">L2P1W5</p>
<p style="
    display: inline-block;
    margin: 0;
    top: -23px;
    margin-left: 14px;
    position: relative;
    font-size: 11px;
          ">PHONE #</p>
<p style="
    font-size: 22px;
    margin: 0;
     
    display: inline-block;
    margin-top: -6px;
    margin-left: -49px;
">9056889676</p></div></div>
</div>
	</div>
<?php } else {
	echo "<body>";
	echo "<p>Sorry, this order doesn't exist!</p>";
}
	} ?>
</body>
</html>