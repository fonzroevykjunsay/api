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
        <li><a href="index.php?navigation=delete">Delete</a><li>
        </ul>
    </div>

<h1> Product Details </h1>

<div class="body">
	<p> <b>Product:  </b><?php echo $result['name']; ?></p>
		<p> <b>Price:  </b><?php echo $result['price']; ?></p>
		<p>	<b>Description:  </b><?php echo $result['description']; ?> </p>
		<p>	<b>Category:  </b><?php echo $result['category_id'];?> </p>
	</div>
</table>

   
</html>
