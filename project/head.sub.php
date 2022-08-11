<? include 'assets.php' ?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>현대엘리베이터 - 실습01</title> -->
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/main.css?ver=1.0">
</head>

<body>
    <div class="Wrap">
        <header class="Header">
            <div class="top">
                <div class="container">
                    <strong> <?= $e_slogan ?></strong>
                    <ul>
                        <li><a href="">news / notice</a></li>
                        <li><a href="">adm</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <h1>
                        <a href="/project">
                            <img src="./img/logo02.png" alt="<?= $title ?>">
                        </a>
                    </h1>
                    <div class="Gnb">
                        <? include 'nav.php' ?>
                    </div>
                </div>
            </div>
        </header>