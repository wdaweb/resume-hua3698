<?php
include_once "base.php";
if (empty($_SESSION['login'])) exit();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claire Résumé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bgstyle.css">
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon"> <!-- logo -->

    <script src="https://kit.fontawesome.com/b6159c26a6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="plugins/jquery-3.5.1.min.js"></script>
</head>

<body>
    <header>後臺管理系統 <a href="index.php" style="font-size:5px;">回首頁</a></header>
    <div class="row shadow alert-secondary px-3">
        <!-- menu district -->
        <section class="menu col-3 alert-secondary pe-3">
            <div class="m">選單 Menu</div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#One">關於我 About Me</button>
                    </h2>
                    <div id="One" class="accordion-collapse collapse">
                        <ul class="list-group">
                            <a href="?do=ab_auto" class="list-group-item">自傳設定</a>
                            <a href="?do=ab_info" class="list-group-item">個人資料設定</a>
                            <!-- <a href="?do=ab_add" class="list-group-item">個人資料新增</a> -->
                            <!-- <a href="?do=ab_pic" class="list-group-item">生活照設定</a> -->
                        </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Two">工作經歷 Experience</button>
                    </h2>
                    <div id="Two" class="accordion-collapse collapse">
                        <ul class="list-group">
                            <a href="?do=work_info" class="list-group-item">工作經歷設定</a>
                            <a href="?do=work_pic" class="list-group-item">照片管理</a>
                        </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Four">作品集 Portfolio</button>
                    </h2>
                    <div id="Four" class="accordion-collapse collapse">
                        <ul class="list-group">
                            <a href="?do=port" class="list-group-item">作品集列表</a>
                            <a href="?do=port_pic" class="list-group-item">作品集圖片管理</a>
                            <!-- <a href="?do=port" class="list-group-item">分類管理</a> -->
                        </ul>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Three">左側頭像區 Self</button>
                    </h2>
                    <div id="Three" class="accordion-collapse collapse">
                        <ul class="list-group">
                            <a href="?do=self" class="list-group-item">頭像輪播管理</a>
                        </ul>
                    </div>
                </div> -->
            </div>
            <!-- <a href="?do=about.php">About Me</a>
            <a href="?do=work.php">Work Experience</a>
            <a href="?do=skill.php">Skill</a>
            <a href="?do=skill.php">Portfolio</a>
            <a href="?do=skill.php">Aside Bar</a> -->
        </section>

        <!-- main district -->
        <section class="main col-9 p-5 border bg-light my-4 rounded-3">
            <?php
            $do = isset($_GET['do']) ? $_GET['do'] : 'ab_info';
            $file = "backend/$do.php";
            if (file_exists($file)) include $file;
            else include "backend/ab_info.php";
            ?>
        </section>

        <div id="cover" style="display:none; ">
            <div id="coverr">
                <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
                <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
            </div>
        </div>
    </div>

    <!-- <footer class="text-muted text-center my-3 row">
        <div class="col-4"></div>
        <div class="col-2" style="border-right:1px solid">
            <div><i class="fas fa-envelope"></i> a29424315@gmail.com</div>
            <div><i class="fas fa-mobile-alt"></i> 0963783756</div>
        </div>
        <div class="col-2">
            <span>copyright &#169; Claire S. All right reserved </span>
        </div>
        <div class="col-4"></div>
    </footer> -->
</body>

</html>