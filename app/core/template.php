<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Печать фотографий</title>
        <link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/template/css/style.css" media="screen">
        <link rel="stylesheet" href="/template/css/owl.carousel.css">
        <link rel="stylesheet" href="/template/css/owl.theme.css">
        <link rel="stylesheet" href="/template/css/owl.transitions.css">
        <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div id="page">
            <? get_template('top-menu'); ?>
            <div id="page-body">
                <div class="inner">
                    <? get_page($url_page); ?>
                </div>
            </div>
            <? get_template('bottom-bar'); ?>
        </div>

        <script src="/template/js/jquery-2.1.3.min.js"></script>
        <script src="/template/js/owl.carousel.min.js"></script>
        <script src="/template/js/app.js"></script>
    </body>
</html>