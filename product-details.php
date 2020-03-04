<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

$value = $list;
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<div class="navbar">
   
        <ul>
     <li><a href="index.php?navigation=product">Show</a><li>
       <li> <a href="index.php?navigation=categories">Category</a><li>
       <li> <a href="index.php?navigation=create">Create</a><li>
     
        </ul>
	</div>
<h1> Product Details </h1>

 <div style="margin: auto; width:15%; background-color: #deddfa; border:3px solid black;padding: 10px;">
	<p> <b>Product:  </b><?php echo $value['name']; ?></p>
		<p> <b>Price:  </b><?php echo $value['price']; ?></p>
		<p>	<b>Description:  </b><?php echo $value['description']; ?> </p>
		<p>	<b>Category:  </b><?php echo $value['category_id'];?> </p>
	 <div style= "text-allign: center; margin: 0 ; padding: 100px ;">
	 <ul>
		 <li><a href="form_update.php?id=<?php echo $id ?>">Update</a></li>
		 <li><a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></li>
	</div>
</table>

   
</html>
