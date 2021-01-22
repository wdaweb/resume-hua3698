<?php
session_start();

$users = [
    ['acc' => 'admin', 'pw' => '1234'],
    ['acc' => 'test', 'pw' => '5678']
];

if (!empty($_POST['acc']) && !empty($_POST['pw'])) {

    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $chk = "";

    foreach ($users as $user) {
        if($user['acc']==$acc){
            $chk=$user;
        }
    }
    if(!empty($chk)){
        if($chk['pw']==$pw){
            $_SESSION['login']=$acc;
            echo "登入成功";
        }else{
            echo "密碼錯誤";
        }
    }else{
        echo "查無帳號";
    }
}else{
    echo "欄位不得為空";
}
