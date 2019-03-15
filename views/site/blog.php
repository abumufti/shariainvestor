<?php
use yii\helpers\Url;
use yii\helpers\BaseStringHelper;

$formatter = \Yii::$app->formatter;

$this->title = count($posts) === 1 ? $posts[0]['title'] : 'Blog';

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


?>



<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=458278107551122&autoLogAppEvents=1"></script>

<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
    <h1>Sharia Investor</h1> 
    <p>Sakinah Berinvestasi Saham.</p><br><br>
</div>


<!-- Container (About Section) -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 " style="text-align:justify;">
          <?php foreach($posts as $index => $value){ ?>
            <div class="card" id="myList">
                <div class="card-body">
                    <?php if($title ===''){ ?>
                    <h3><?= $value['title']; ?></h3>
                    <p class="text-muted">Posted on <?= $formatter->asDate($value['date_created'], 'long'); ?>, by <?= $value['author']; ?></p>
                    <div class="card-text"><?= BaseStringHelper::explode($value['body'],'</p>')[0].'</p>'; ?></div>
                    <a href="<?= Url::to(['site/blog', 'title' => $value['title']]); ?>" class="btn btn-primary">Read More &rarr;</a>
                    <hr>
                    <?php }else{?>    
                    <h3><?= $value['title']; ?></h3>
                    <p class="text-muted">Posted on <?= $formatter->asDate($value['date_created'], 'long'); ?>, by <?= $value['author']; ?></p>
                    <div class="card-text"><?= $value['body']; ?></div>
                    
                    <div class="row">
                        <hr/>
                        <div class="fb-comments" data-href="<?= $actual_link; ?>" data-numposts="15"></div>
                    </div>
                    <?php } ?>
                    
                </div>
                
            </div>
          <?php } ?>  
        </div>
        <div class="col-sm-3">
            <!--
            <div class="row">
                <div class="panel panel-default" style="margin-top:10px;">
                    <div class="panel-body">
                        <div class="fb-group" data-href="https://www.facebook.com/groups/2179476645634934/" data-width="280" data-show-social-context="true" data-show-metadata="false"></div>
                    </div>
                </div>
            </div>
            -->
            <div class="row">
                <div class="panel panel-default" style="margin-top:10px;">
                    <div class="panel-heading">Search</div>
                    <div class="panel-body">
                        <input type="text" id="myInput" class="form-control" placeholder="Search for...">
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="panel panel-success" style="margin-top:10px;">
                    <div class="panel-heading">Top 5 Articles</div>
                    <div class="panel-body">
                        <ul class="list-unstyled mb-0">
                            <?php foreach($articles as $index => $value){ ?> 
                            <li>
                                <a href="<?= Url::to(['site/blog', 'title' => $value['title']]); ?>"><?= $value['title']; ?></a>
                                <hr>
                            </li>
                            <?php } ?>  
                        </ul>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="<?= Url::to(['site/blog']); ?>" class="uppercase">More</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
  </div>
</div>

<?php if($title !==''){ ?>

    
    
<?php } ?>


