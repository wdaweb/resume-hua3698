<?php
include_once "../base.php";
// print_r($_POST);
$data = [];

switch ($_GET['do']) {
    case 'ab_info':
        $data['area'] = $_POST['area'];
        $data['subject'] = $_POST['subject'];
        $data['txt'] = $_POST['txt'];
        $data['sh'] = 1;
        $data['rank'] = $About->q(" select max(rank) from about ")[0][0] + 1;
        $About->save($data);
        // print_r($a);
        break;
    case 'ab_auto':
        $data['sh']=0;
        $data['txt']=$_POST['txt'];
        $data['txt2']=$_POST['txt2'];
        // print_r($data);
        $Auto->save($data);
        break;
    case 'work_info':
        $data['start']=substr($_POST['start'],0,4);
        $data['stay']=(empty($_POST['end']))?'1':'0';
        $data['end']=(!empty($_POST['end']))?substr($_POST['end'],0,4):date("Y");
        $data['company']=$_POST['company'];
        $data['position']=$_POST['position'];
        $data['description']=$_POST['description'];
        $Work->save($data);
        break;
    case 'work_pic':
        $data['lo']=$_POST['id']; //lo欄位存放該張圖片屬於哪個section資料表的id
        $data['section']='work';
        if(!empty($_FILES['img']['tmp_name'])){
            move_uploaded_file($_FILES['img']['tmp_name'],'../images/'.$_FILES['img']['name']);
            $data['img']=$_FILES['img']['name'];
        }
        $Pic->save($data);
        // print_r($data);
        break;
    case 'port':
        $data['title']=$_POST['title'];
        $data['subtitle']=$_POST['subtitle'];
        $data['info']=$_POST['info'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
        $Port->save($data);
        break;
    case 'port_pic':
        $data['lo']=$_POST['id'];
        $data['section']='port';
        if(!empty($_FILES['img']['tmp_name'])){
            move_uploaded_file($_FILES['img']['tmp_name'],'../images/'.$_FILES['img']['name']);
            $data['img']=$_FILES['img']['name'];
        }
        $Pic->save($data);
        break;
    case 'self':
        $a=$Self->q(" select max(rank) from self ")[0][0] + 1;
        $Self->save(['rank'=>$a]);
        
        $b=$Self->q(" select * from self where id=(select max(id) from self");
        $data['lo']=$b['id'];
        $data['section']='self';
        if(!empty($_FILES['img']['tmp_name'])){
            move_uploaded_file($_FILES['img']['tmp_name'],'../images/'.$_FILES['img']['name']);
            $data['img']=$_FILES['img']['name'];
        }
        $Pic->save($data);
        break;
}

to("../backend.php?do=".$_GET['do']);

