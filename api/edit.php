<?php
include_once "../base.php";
$section = $_POST['section'];

$db = new DB($section);

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);
        switch ($section) {
            case 'about':
                $row['area'] = $_POST['area'][$key];
                $row['subject'] = $_POST['subject'][$key];
                $row['txt'] = $_POST['txt'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                // print_r($row);
                break;
            case 'work':
                $row['company'] = $_POST['company'][$key];
                $row['position'] = $_POST['position'][$key];
                $row['description'] = $_POST['description'][$key];
                $row['start'] = $_POST['start'][$key];
                $row['end'] = $_POST['end'][$key];
                // print_r($_POST);
                break;
            case 'port':
                $row['title'] = $_POST['title'][$key];
                $row['subtitle'] = $_POST['subtitle'][$key];
                $row['info'] = $_POST['info'][$key];
                $row['href'] = $_POST['href'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
// print_r($row);

                break;
        }
        $db->save($row);
    }
}
// print_r($row);
to("../backend.php?do=" . $_GET['do']);
