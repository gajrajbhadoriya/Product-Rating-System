<?php

use App\Database\DBTransaction;

require __DIR__ . "/vendor/autoload.php";

$data = new DBTransaction();
$id = $_GET['id'];
$data->setId($id);

if (isset($_POST['edit'])) {
    $data->setId($_POST['id']);
    $data->setuserName($_POST['userName']);
    $data->setproductName($_POST['productName']);

    echo $data->updateData();
}
$record = $data->fetchOne();
$val = $record[0];
?>

<!DOCTYPE html>
<html>
<body>
<h2>Update Record</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Update information:</legend>
    Id:<br>
    <input type="text" name="Id" value="<?php echo $val['id'];?>">
    <br>
    Username:<br>
    <input type="text" name="userName" value="<?php echo $val['userName'];?>">
    <br>
    Product Name:<br>
    <input type="text" name="productName" value="<?php echo $val['productName'];?>">
    <br><br>
    <input type="submit" name="edit" value="UPDATE">
  </fieldset>
</form>
</body>
</html>