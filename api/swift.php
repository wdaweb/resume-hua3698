<?php
include_once "../base.php";

$db=new DB($_POST['section']);

$id1=$db->find($_POST['id1']);
$id2=$db->find($_POST['id2']);
$tmp=$id1['rank'];
$id1['rank']=$id2['rank'];
$id2['rank']=$tmp;

$db->save($id1);
$db->save($id2);
?>