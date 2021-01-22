<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claire Résumé</title>
    <link rel="stylesheet" href="../plugins/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon"> <!-- logo -->

    <script src="https://kit.fontawesome.com/b6159c26a6.js" crossorigin="anonymous"></script>
    <script src="../plugins/jquery-3.5.1.min.js"></script>
    <script src="../plugins/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: url(../images/bg2.jpg) no-repeat fixed;
            background-size: 100vw 100vh;
            margin: 0 auto;
            padding: 0 5%;
        }

        .row {
            margin: 0 -15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="my-2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><img src="images/logo.svg" style="width:50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#edu">Education</a>
                    </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#work">Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skill">Skill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#port">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <form class="row">
            <div class="col-10 col-md-8 col-lg-6 mx-auto alert-light p-3 rounded shadow">
                <h4>管理員登入</h4>
                <hr>
                <div class="row px-5">
                    <div class="form-group col-12 col-md-8pb-3">
                        <label>帳號：</label>
                        <input type="text" name="acc" id="acc" class="form-control" placeholder="admin">
                    </div>
                    <div class="form-group  col-12 col-md-8pb-3">
                        <label>密碼：</label>
                        <input type="password" name="pw" id="pw" class="form-control" placeholder="你猜阿">
                    </div>
                    <div class="mt-3 mx-auto">
                        <input type="button" value="登入" onclick="login()" class="btn btn-sm btn-success">
                        <input type="reset" value="重置" class="btn btn-sm btn-secondary">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function login() {
            let acc = $("#acc").val()
            let pw = $("#pw").val()

            $.post("../api/check.php", {
                acc,
                pw
            }, function(re) {
                console.log(re)
                if (re == '登入成功') {
                    location.href = "../backend.php?do=about&m=1"
                } else {
                    switch (re) {
                        case '密碼錯誤':
                            alert("密碼錯誤")
                            break;
                        case '查無帳號':
                            alert("查無帳號")
                            break;
                        case '欄位不得為空':
                            alert("欄位不得為空")
                            break;
                    }
                }
            })
        }
    </script>
</body>

</html>