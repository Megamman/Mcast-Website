<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">School Forms</h1>
    </div>
</div>

<div class="container">

    <div class="row min-padding no-padding">
<?php foreach($forms->result_array() as $form):
    $filename = urlencode($form['form_name']);
    $files = glob("uploads/forms/{$filename}.*");
    if (count($files) > 0) $files = $files[0];
    else $files = "default.png";
?>
        <div class="col-sm-4 mb-5">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=base_url($files)?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$form['form_name'];?></h5>
                    <p class="card-text"><?=$form['form_desc'];?></p>
                    <a href="<?=base_url($files)?>" class="btn btn-primary" Download>Download</a>
                </div>
            </div>
        </div>
<?php endforeach; ?>
    </div>
    <!--
    <div>
        <div class="col-sm m-3">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=base_url('images/image.jpg')?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm m-3">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=base_url('images/image.jpg')?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row min-padding no-padding">
        <div class="col-sm m-3">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=base_url('images/image.jpg')?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm m-3">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=base_url('images/image.jpg')?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm m-3">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=base_url('images/image.jpg')?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    -->

</div>
