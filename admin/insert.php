<?php
  $conn = new PDO("mysql:host=localhost; dbname=managekotas"  , "root"  , ""  );;
  $conn->query("  set names 'utf8'");


 
  if (isset($_POST["sm"]))
  {
    $sql="insert into bag(BagID, BagName,Price,TypeID,BrandID,image) values(:bagid, :bag_name, :price,:type_id,:brand_id,:hinh) ";
    $arr = array(":bagid"=>$_POST["bagid"], ":bag_name"=>$_POST["bagName"], ":price"=>$_POST["price"],":type_id"=>$_POST["bagType_id"],":brand_id"=>$_POST["brand_id"],":hinh"=>$_POST["image"]);
    $stm= $conn->prepare($sql);
    $stm->execute($arr);
    $n = $stm->rowCount();
    if ($n>0) echo "Đã thêm $n bag ";
    else echo "Lỗi thêm ";
    header("location:function.php");
 }
?>;;