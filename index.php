<!Doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>هَش آنلاین</title>
    <style>
		html,body
		{
			cursor: url(../cur117.cur),pointer;
		}
        input[type=text]
        {
            width: 300px;
            height: 30px;
            font-size: 15px;
			background: black;
			border: none;
			border-bottom: 1px solid white;
			color: white;
        }
		input[type=text]:focus
		{
			outline: none;
		}
        input[type=submit]
        {
            width: 100px;
            height: 30px;
			cursor: url(../cur117.cur);
        }
        body
        {
            padding: 10px 10px;
			background: black;
        }
    </style>
</head>
<body>
<h3 style="color: white;">ورودی :</h3>
<form action="" method="post">
    <label>
        <input type="text" name="hash" placeholder="متن مورد نظر برای هَش شدن">
        <b style="color: white;">نوع هَش : </b><select style="height: 30px;" name="sel">
            <option value="md4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ام دی فور(md4)&nbsp;</option>
            <option value="md5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ام دی فایو(md5)&nbsp;</option>
            <option value="sha1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;اس اچ ای 1(sha1)&nbsp;</option>
            <option value="sha256">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;اس اچ ای 256(sha256)&nbsp;</option>
            <option value="sha512">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;اس اچ ای 512(sha512)&nbsp;</option>
        </select>
    </label>
    <input style="background: green;color: white;border-radius: 5px;cursor: pointer;" type="submit" name="sub" value="کلیک برای هَش">
	<br />
    <?php
    @$type_hash = $_POST['sel'];
    @$hash = $_POST['hash'];
	?>
    <?php if(isset($_POST['sub']) && $type_hash == "md5" || $type_hash == "sha1"):?>
		<h3 style="color: white;">خروجی :</h3>
        <br /><input id="myInput" style="width: 1100px;" type="text" value="<?php echo $type_hash($hash);?>"/>
        <br /><input onfocus="this.value='هش با موفقیت کپی شد !'" style="width:300px !important;height:30px;;background: green;color: white;border-radius: 5px;cursor: pointer;" type="button" value="کُپی هَش" onclick="myFunction()"/>
	<?php endif;?>
	
    <?php if($type_hash == "sha256" || $type_hash == "sha512" || $type_hash == "md4"):?>
		<h3 style="color: white;">خروجی :</h3>
		<input id="myInput" style="width: 1100px;" type="text" value="<?php echo hash($type_hash,$hash);?>"/>
		<br /><input onfocus="this.value='هش با موفقیت کپی شد'" style="background: green;color: white;border-radius: 5px;cursor: pointer;" type="button" value="کُپی هَش" onclick="myFunction()"/>
		<?php endif;?>
</form>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
}
</script>
</body>
</html>