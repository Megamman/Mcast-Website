<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MCAST</title>

        <link rel="stylesheet" href="<?=base_url('css/font-awesome.css')?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url('css/style.css')?>">
    </head>
    <body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?=base_url('images/brand.png')?>" width="230" height="80" alt="">
            </a>

            <div>
                <ul class="nav navbar-nav">
                    <?php foreach($nav as $page => $url): ?>
                        <li>
                            <?=anchor($url, $page, array('class' => 'nav-link'));?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </nav>
