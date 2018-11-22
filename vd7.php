<?php
  $m=array(1,4,5,7,9,12,32,45,65);
  $n=array("How","What","Why","Where","Who","Which");

  function showDT_NN($m,$n)
  {
    $i=0;
    foreach ($m as $key => $value) {
    	$i++;
    	if($m<$n){
    		echo "<tr><td>$i</td>";
    	 	echo "<td>random($m).<br></td><tr>";
        }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mảng chứa các số ngẫu nhiên</title>
</head>
<body>
   <table border="1">
   	<tr>
   	 <td>Index</td>
   	 <td>Mã đề thi</td>
   	</tr>
   	<?php showDT_NN($m,$n);?>
 </table>
</body>
</html>