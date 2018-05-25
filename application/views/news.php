<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">NEWS <br>TEMP TEXT</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach($news->result_array() as $new):?>
            <div class="col-sm-4">
                <div class="media">
                <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
                <div class="media-body">
                <h5 class="mt-0"> <?=$new['news_title']?> </h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!--
        <div class="col-sm-4">
            <div class="media">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="media">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
        </div>


    <div class="row">
        <div class="col-sm-4">
            <div class="media">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="media">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="media">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
        </div>
    </div>
    -->
</div>
