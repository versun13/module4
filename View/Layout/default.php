<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script>
        $(window).on('beforeunload', function () {
            return "В случае подтверждения закрытия окна браузера, все несохраненные данные будут утеряны.";
        });
        if (document) {
            $(document).on("submit", "form", function (event) {
                // disable unload warning
                $(window).off('beforeunload');
            })
        }
        if (document) {
            $(document).on("click", "a", function (event) {
                // disable unload warning
                $(window).off('beforeunload');
            })
        }
        $(function () {
            $("#tags").autocomplete({
                source: <?php echo json_encode($data['tags'], JSON_UNESCAPED_UNICODE)?>
            });
        });
        var delay_popup = 15000;
        setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);
    </script>
    <style>
        #bg_popup {
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            position: fixed;
            z-index: 99999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        #popup {
            background: #fff;
            width: 520px;
            margin: 25% auto;
            padding: 5px 20px 13px 20px;
            border: 2px solid #1BA600;
            position: relative;
            -webkit-box-shadow: 0px 0px 20px #000;
            -moz-box-shadow: 0px 0px 20px #000;
            box-shadow: 0px 0px 20px #000;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }

        .close {
            display: block;
            position: absolute;
            top: -12px;
            right: 5px;
            width: 25px;
            height: 25px;
            line-height: 28px;
            color: #fff;
            background: #1BA600;
            cursor: pointer;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            border-radius: 15px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .close:hover {
            background-color: #f30;
        }
    </style>
    <base href="/">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo SITE_NAME ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Главная</a></li>
                <?php if (!isset($_SESSION['isLogged'])) { ?>
                    <li><a href="login/login/">Войти или зарегестрироваться</a></li>
                <?php } ?>
                <?php if ($_SESSION['isLogged'] == 1 && $_SESSION['is_admin'] == 1) { ?>
                    <li><a href="admin/main/">Админка</a></li>
                    <li><a href="login/logout/">Выход</a></li>
                <?php } ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<br>
<br>
<br>
<br>

<!-- template data -->
<div class="row">
    <div class="col-sm-3">
        <h1>Реклама</h1>
        <?php foreach ($data['ad'] as $value) {
            if ($value['Side'] == 'Left'){ ?>
                <div style="border: solid 4px">
                    <p><?php echo $value['name']?></p>
                    <p>Ціна</p>
                    <p id="price"><?php echo $value['price']?></p>
                    <p>грн</p>
                    <p>Сайт</p>
                    <p><?php echo $value['site']?></p>
                    <?php if ($_SESSION['is_admin'] == 1){ ?>
                        <a href="admin/deletead/<?php echo $value['ad_id']?>">Удалить рекламу</a>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>


    </div>

    <div class="col-sm-6">
        <div id="bg_popup">
            <div id="popup">
                <p1>Подпишитесь на новостную рассылку</p1>
                <form method="post" action="news/save/">
                    <div class="form-group">
                        <label for="inputName">Ваше имя</label>
                        <input name="name" type="text" class="form-control" id="inputName" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Ваша фамилия</label>
                        <input name="surname" type="text" class="form-control" id="inputName"
                               placeholder="Ваша фамилия">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Ваша почта</label>
                        <a href="../Product/products.php"></a>
                        <input name="email" type="email" class="form-control" id="inputName" placeholder="Ваша почта">
                    </div>
                    <button type="submit" class="btn btn-primary">Подписаться</button>
                </form>
                <a class="close" href="#" title="Закрыть"
                   onclick="document.getElementById('bg_popup').style.display='none'; return false;">X</a>
            </div>
        </div>
        <?php if ($message) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <?php echo $message ?>
            </div>
        <?php } ?>
        <?php echo $content; ?>
    </div>
    <div class="col-sm-3">
        <h1>Реклама</h1>
        <?php foreach ($data['ad'] as $value) {
            if ($value['Side'] == 'Right'){ ?>
                <div style="border: solid 4px">
                    <p><?php echo $value['name']?></p>
                    <p>Ціна</p>
                    <p id="price"><?php echo $value['price']?></p>
                    <p>грн</p>
                    <p>Сайт</p>
                    <p><?php echo $value['site']?></p>
                <?php if ($_SESSION['is_admin'] == 1){ ?>
                    <a href="admin/deletead/<?php echo $value['ad_id']?>">Удалить рекламу</a>
                <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>

    </div>
</div>
</body>
</html>