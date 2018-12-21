
<?php 
 function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}
$username 	= postIndex("username");
$password1	= postIndex("password1");
$adminid=postIndex("adminID");
$sm 		= postIndex("submit");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập Admin</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
</head>

<body>
	<fieldset>
	<legend style="margin:0 auto">Thông tin đăng nhập</legend>
	<form action="login2.php" method="post" enctype="multipart/form-data">
	<table  align="center">
	    <tr>
	    	<td>Tên đăng nhập:</td>
	    	<td><input type="text" name="username" value="<?php echo $username;?>"></td>
	    </tr>
	    <tr>
	    	<td>Mật khẩu:</td>
	    	<td><input type="password" name="password1" /></td>
	    </tr>
	    <tr>
	    	<td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
	    </tr>
	</table>
	</form>
	</fieldset>
</body>
</html>
