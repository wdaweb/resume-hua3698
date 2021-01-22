<?php
//from work_pic、ab_auto、
include_once "../base.php";

$db = new DB($_POST['table']);
$data = [];

switch ($_POST['todo']) {
    case 'del':
        $db->del($_POST['id']);
        break;
    case 'check':
        $auto = $Auto->all();
        foreach ($auto as $a) {
            $a=$Auto->find($a['id']);
            if ($a['id'] == $_POST['id']) {
                $a['sh'] = 1;
            } else {
                $a['sh'] = 0;
            }
            $Auto->save($a);
        }
        break;
}
