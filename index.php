<?php include_once "base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claire Résumé</title>
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="plugins/style.css">
    <link href="plugins/hover-min.css" rel="stylesheet"> <!-- hover.css -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon"> <!-- logo -->
    <script src="https://kit.fontawesome.com/b6159c26a6.js"></script>
    <script src="plugins/jquery-3.5.1.min.js"></script>
    <script src="plugins/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> <!-- wow -->
    <script src="plugins/my.js"></script>
    <!-- pie chart -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        const wow = new WOW({
            callback: function(dom) {
                if ($(dom).attr('id') == 'skill') {
                    loadChart();
                }
            }
        }); 
        wow.init();

        const w = new WOW({
            boxClass: 'fill', // 欲套用wow.js的class (預設wow)
        });
        w.init();
    </script>
</head>

<body>
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
                        <a class="nav-link" href="#work">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#port">Portfolio</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="lang">
        <span><a href="index.php">中文 | </a><a href="">English</a></span>
    </div>

    <div class="row">
        <div class="left col-12 col-lg-3 text-center ">
            <div class="sel">
                <?php
                if (isset($_SESSION['login'])) {
                    echo "<a href='backend.php'><img class='circle my-4 my-lg-4' src='https://picsum.photos/150/150/?random=1'></a>";
                } else {
                    echo "<a href='front/login.php'><img class='circle my-4 my-lg-4' src='https://picsum.photos/150/150/?random=1'></a>";
                }
                ?>
                <h2>CLAIRE</h2>
                <p>I'm Web Developer！</p>
                <span><a href="https://github.com/hua3698" target="_blank" style="color: orange;"><i class="fab fa-github fa-2x"></i></a></span>
                <span><a href="https://line.me/ti/p/ufSfeXcYzX" target="_blank" style="color:#00b900;"><i class="fab fa-line fa-2x"></i></a></span>
                <span><a href="https://codepen.io/hua3698" target="_blank"><img src="images/sel_pen.png" style="width:30px;vertical-align:top;"></a></span>
                <!-- <span><a href="https://www.cakeresume.com/me/a29424315" target="_blank"><img src="images/cake.svg" style="width:30px;vertical-align: top;"></a></span> -->
            </div>
            <div class="icon">
                <p class="badge rounded-pill bg-dark p-3">DOWNLOAD RESUME</p>
            </div>
        </div>
        <div class="middle col-12 col-lg-8">
            <section id="about" class="wow animate__animated ani mate__slideInUp  rounded">
                <h2>ABOUT ME</h2>
                <div class="box">
                    <div class="row">
                        <div class="col-10 m-auto">
                            <p><b>Hello！I'm Claire</b></p>
                            <?php
                            $auto = $Auto->find(['sh' => '1']);
                            ?>
                            <p style="line-height: 2;">
                                <?= $auto['txt']; ?>
                                <hr>
                                <?= $auto['txt2']; ?>
                            </p>
                        </div>
                    </div>
                    <hr class="my-5">

                    <div class="row">
                        <div class="col-12 col-md-6 pl-0">
                            <h5 class="col-12 text-muted mb-5">Personal Information</h5>
                            <div class="row">
                                <?php
                                $about = $About->all(" where `area`='1' && `sh`=1");
                                foreach ($about as $a) {
                                ?>
                                    <div class="col-4">
                                        <p><b><?= $a['subject']; ?></b></p>
                                    </div>
                                    <div class="col-6">
                                        <p><?= $a['txt']; ?></p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-12  col-md-6">
                            <h5 class="col-12 text-muted mb-5 px-0">Languages</h5>
                            <?php
                            $about = $About->all(" where `area`='2' && `sh`=1");
                            foreach ($about as $a) {
                            ?>
                                <div>
                                    <b class="col-12 px-0"><?= $a['subject']; ?></b>
                                    <div class="col-12 px-0 mt-2 mb-3">
                                        <?php
                                        for ($i = 1; $i < 9; $i++) {
                                            echo "<span class='ball fill w'></span>";
                                        }
                                        ?>
                                        <span class="px-3 text-muted"><?= $a['txt']; ?></span>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="work" class="wow animate__animated animate__slideInUp rounded" data-wow-delay="500ms">
                <h2>WORK EXPRIENCE</h2>
                <div class="box">
                    <?php
                    $work = $Work->all();
                    foreach ($work as $w) {
                        $p = $Pic->find(['lo' => $w['id'], 'section' => 'work']);
                        $img = (!empty($p)) ? $p['img'] : 'com.jpg';
                    ?>
                        <div class="row line">
                            <div class="trileft col-1 d-flex d-md-none"></div>
                            <div class="time col-4 col-md-3"><?= $w['start']; ?>-<?= $w['end']; ?></div>
                            <div class="triright d-none d-md-flex col-md-1"></div>
                            <div class="smbox col-12 col-md-7">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5><b><?= $w['company']; ?></b></h5>
                                        <p><?= $w['position']; ?></p>
                                    </div>
                                    <img src="images/<?= $img; ?>" style="width:200px;object-fit:contain">
                                </div>
                                <div>
                                    <ul class="list-unstyled text-muted">
                                        <li><?= $w['description']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
            </section>
            <section id="skill" class="wow animate__animated animate__slideInUp   rounded" data-wow-delay="500ms">
                <h2>SKILLS</h2>
                <div class="box row">
                    <!-- <div class="col-12 col-md-4">
                        <img src="https://picsum.photos/150/150/?random=1" class="circle sm" style="width: 100px;height:100px">
                        <h4>Front-end</h4>
                        <ul class="pl-3">
                            <li>HTML/CSS</li>
                            <li>BOOTSTRAP</li>
                            <li>JavaScript</li>
                            <li>JQuery</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="https://picsum.photos/150/150/?random=2" class="circle sm" style="width: 100px;height:100px">
                        <h4>Back-end</h4>
                        <ul class="pl-3">
                            <li>PHP</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="https://picsum.photos/150/150/?random=3" class="circle sm" style="width: 100px;height:100px">
                        <h4>Others</h4>
                        <ul class="pl-3">
                            <li>Git</li>
                            <li>Photshop</li>
                            <li>Illustrator</li>
                        </ul>
                    </div> -->
                    <!-- 外掛 -->
                    <figure class="highcharts-figure m-auto">
                        <div id="container"></div>
                    </figure>
                </div>
            </section>
            <section id="port" class="wow animate__animated animate__slideInUp rounded" data-wow-delay="500ms">
                <h2>PORTFOLIO</h2>
                <div class="box">
                    <div class="fo-menu mb-5">
                        <a class="btn hvr-pulse" id="all">All</a>
                        <a class="btn hvr-pulse" id="php">PHP</a>
                        <a class="btn hvr-pulse" id="js">JavaScrip</a>
                        <a class="btn hvr-pulse" id="design">Design</a>
                    </div>
                    <div class="fo-body row d-flex justify-content-between">
                        <?php
                        $port = $Port->all(["sh" => 1]);
                        foreach ($port as $p) {
                            $pic = $Pic->find(['section' => 'port', 'lo' => $p['id']]);
                            $img = (!empty($pic)) ? $pic['img'] : 'com.jpg';
                        ?>
                            <div class="pic <?= $p['title']; ?> col-12 col-md-6">
                                <img src="images/<?= $img; ?>">
                                <div class="overlay"></div>
                                <div class="mid">
                                    <h4><?= $p['title']; ?></h4>
                                    <h6><?= $p['subtitle']; ?></h6>
                                    <p><?= $p['info']; ?></p>
                                    <a href="<?= $p['href']; ?>"><span class="badge badge-info badge-pill px-3 py-2">View More <i class="fas fa-external-link-alt"></i></span></a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <script>
                    $("#all").addClass("underline")
                    $(".btn").click(function() {
                        $(".btn").removeClass('underline')
                        $(this).addClass("underline")
                        let btn = this.id
                        if (btn == 'all') {
                            // console.log("aa")
                            $(".pic").fadeIn(2000)
                        } else {
                            $(".pic").not("." + btn).slideUp(1000)
                            $("." + btn).fadeIn(2000);
                        }
                    })
                </script>
            </section>
        </div>
    </div>
    <footer class="text-danger text-center my-3">
        <small>a29424315@gmail.com | 0963783756<br> copyright &#169; Claire S. All right reserved </small>
        <!-- <small class="enter text-muted">進站人次：<?= $Enter->count(); ?></small> -->
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: "#f9f9f9",
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: '',
                colorByPoint: true,
                data: [{
                    name: 'Back-end',
                    y: 40,
                    sliced: true,
                    color: ''
                }, {
                    name: 'Front-end',
                    y: 30,
                    sliced: true
                }, {
                    name: 'Others',
                    y: 30,
                    sliced: true
                }, ]
            }]
        });
    </script>
</body>

</html>