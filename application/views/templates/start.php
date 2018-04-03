<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MCAST</title>

        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <div class="pos-f-t">
            <nav class=" justify-content-center navbar navbar-expand-lg navbar-dark bg-dark">
                <div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <div class="nav-link">
                                <?php foreach ($nav as $page => $url): ?>
                                    <?=anchor($url, $page, array('class' => 'nav-link'));?>
                                <?php endforeach ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
