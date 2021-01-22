<?php
//from editauto
include "../base.php";

$db=new DB($_POST['section']);
$row=$db->find($_POST['id']);
$row['txt']=$_POST['txt'];
$row['txt2']=$_POST['txt2'];

$db->save($row);

to("../backend.php?do=".$_GET['do']);
?>