<?php
require __DIR__ . "/vendor/autoload.php";

$products = (new App\Database\DBTransaction())->fetchData();

?>

<html>
	<head>
		<title>Update</title>
	</head>
<thead>
<table  border="1" align="center" cellpadding="10" cellspacing="0">
	<tr bgcolor="lightblue">
		<td>id</td>
		<td>Username</td>
		<td>Product Name</td>
		<td>Rating</td>
		<td>Feedback</td>
		<td>Action</td>
</tr>
</thead>
<?php
foreach ($products as $key => $val) { ?>
<tbody>
<tr>
   <td> <?=$val['id']; ?></td>
	<td> <?=$val['username']; ?></td>
	<td> <?=$val['product_name']; ?></td>
	<td> <?=$val['rating']; ?></td>
	<td> <?=$val['feedback']; ?></td>
	 <td><a class="btn btn-warning" href="delete.php?id=<?=$val['id']?>&req=delete">delete</a>
	 <a class="btn btn-warning" href="update.php?id=<?=$val['id']?>">edit</a> 
	</td>
</tr>
</tbody>
<?php } ?>
<a class="btn btn-warning" href="rating.php">Create New Data</a>
</html>

