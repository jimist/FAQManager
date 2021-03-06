<?php

function FAQHTMLBegins($title = 'تیکتینگ')
{
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="assets/css/faq.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    </head>
    <body>

    <?php
}

function FAQHTMLEnds()
{
    ?>
    <script src="assets/js/faq.js"></script>
    </body>
    </html>
    <?php
}