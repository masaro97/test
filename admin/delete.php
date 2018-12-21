<?php
	  
	try{
		$conn = new PDO("mysql:host=localhost; dbname=managekotas"  , "root"  , ""  );
		$conn->query("  set names 'utf8'"  );
	}
	catch(Exception $e){
			echo $e->getMessage(); exit;
	}

	$bag_id = isset($_GET["bagId"])?$_GET["bagId"]:"";
	$sql ="delete from bag where BagID = :bag_ID ";
	$arr = array(":bag_ID"=>$bag_id);

	$s = $conn->prepare($sql);
	$s->execute($arr);
	$n = $s->rowCount();
	if ($n>0) $thongbao="Da xoa $n bag! ";
	else $thongbao="Loi xoa!";
	?>
	<script language="javascript">
	alert("<?php echo $thongbao;?>");
	window.location = "function.php";
	</script>