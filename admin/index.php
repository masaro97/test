<?php
  $conn = new PDO("mysql:host=localhost; dbname=kotas_db"  , "root"  , ""  );;
  $conn->query("  set names 'utf8'");

   $sql="Select* from bag";
   $q=$conn->prepare($sql);
   $q->execute();
   $rows = $q->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fuction for Product Sales Website </title>
</head>
<body>
    	<form method="post" action="insert.php">
    		<tr><td>Bag ID:  <input type="text" name="bagId"></td></tr><br>
    		<tr><td>Bag Name:  <input type="text" name="bagName"></td></tr><br>
    		<tr><td>Price:  <input type="text" name="price"></td></tr><br>
    		<tr><td>Hinh <input type="file" name="image"></td></tr><br>
    		<tr><td>Bag Type
	    			  <select autofocus="200" name="bagType">
	    			    <?php
	    			      $sql="select* from bagtype";
	    			      $query=$conn->prepare($sql);
	    			      $query->execute();
		    			  foreach ($query as $key => $value) 
		    			  {
	    			     	 ?>
		    				  <option name="bagtype_id"><?php echo $value['TypeID'];?></option>
		    				
	    			   <?php
    			          } 
    			        ?>
    			</select></td></tr><br>
    		<tr><td>Brand
    			<select autofocus="200" name="brand">
    			  <?php
    			     $sql="select* from brand";
	    			 $query2=$conn->prepare($sql);
	    			 $query2->execute();
    			     foreach ($query2 as $key => $value) 
    			     {
    			     	?>
	    					<option name="brand_id"><?php echo $value['BrandID'];?></option>
	    			<?php
    			      } 
    			     ?>
    			</select></td>
    		</tr><br>
      		<tr><td><input type="submit" name="sm" value="Add"></td></tr><br>
      		<h1>The information of product</h1>
      		<table border="1">
      			<tr>
      			  <td>Bag ID</td>
      			  <td>Image</td>
      			  <td>Bag Name</td>
      			  <td>Price</td>
      			  <td>Info</td>
      			  <td>Bag Type</td>
      			  <td>Brand</td>
      			  <td></td>
      			  <td></td>
      			</tr>
      			<?php
      			  
      			   foreach ($rows as $key => $value) {
      			 	?>
      			 	<tr>
      			 	   <td><?php echo $value["BagID"];?></td>
      			 	   <td><img src="/image/<?php echo $value['image'];?>"></td>
      			 	   <td><?php echo $value["BagName"];?></td>
                       <td><?php echo $value["Price"];?></td>
                       <td><?php echo $value["Info"];?></td>
                       <td><?php echo $value["BagTypeTypeID"];?></td>
                       <td><?php echo $value["BrandBrandID"];?></td>
                       <td><a href='delete.php?bagId=<?php echo $value['BagID'];?>'>Delete</a></td>
                       <td><a href='update.php?bagId=<?php echo $value['BagID'];?>'>Update</a></td>
      			 	</tr>
      			 <?php
      			 }
      			 ?>
      		</table>
    	</form>
</body>
</html>
