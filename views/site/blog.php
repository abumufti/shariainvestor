<?php
use yii\helpers\Url;
use yii\helpers\BaseStringHelper;

$formatter = \Yii::$app->formatter;

$this->title = count($posts) === 1 ? $posts[0]['title'] : 'Sharia Investor - Blog';

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


?>

<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
    <h1>Sharia Investor</h1> 
    <p>Sakinah Berinvestasi Saham.</p><br><br>
</div>

<!-- Container (About Section) -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 " style="text-align:justify;">
            <div class="card" id="myList">
            <?php foreach($posts as $index => $value){ ?>
                    <?php if($title ===''){ ?>
                    <div class="card-body">
                        <h3><?= $value['title']; ?></h3>
                        <p class="text-muted">Posted on <?= $formatter->asDate($value['date_created'], 'long'); ?>, by <?= $value['author']; ?></p>
                        <div class="card-text">                    
                        <?= BaseStringHelper::explode($value['body'],'</p>')[0].'</p>'; ?>
                        </div>
                        <a href="<?= Url::to(['site/blog', 'title' => $value['title']]); ?>" class="btn btn-primary">Read More &rarr;</a>
                        <hr>
                    </div>    
                        <?php /*if($index%2 ===0){ ?>
                    <div class="card-body">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+5w+4e-db+86"  data-ad-client="ca-pub-3744700612400365"  data-ad-slot="8606394704"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                        <hr>
                    </div>
                        <?php }*/ ?>
                    <?php }else{?>
                    <div class="card-body">
                        <h3><?= $value['title']; ?></h3>
                        <p class="text-muted">Posted on <?= $formatter->asDate($value['date_created'], 'long'); ?>, by <?= $value['author']; ?></p>
                        <div class="card-text"><?= $value['body']; ?></div>
                        <hr/>
                    </div>
                    <!--
                    <div class="card-body">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+5w+4e-db+86"  data-ad-client="ca-pub-3744700612400365"  data-ad-slot="8606394704"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                        <hr>
                    </div>
                     -->
                    <div class="card-body">                        
                        <div class="fb-comments" data-href="<?= $actual_link; ?>" data-numposts="15"></div>
                    </div>
                    <?php } ?>                  
               
            
            <?php } ?>  
            </div>
        </div>
        <div class="col-sm-4">      
                
            <div class="panel panel-default" style="margin-top:10px;">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                    <input type="text" id="myInput" class="form-control" placeholder="Search for...">
                </div>
            </div>
            
            <div class="panel panel-default">
            <div class="fb-page" data-href="https://www.facebook.com/shariainvestorcom" data-width="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/shariainvestorcom" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shariainvestorcom">Sharia Investor</a></blockquote>
            </div>
            </div>    
                
            <div class="panel panel-success" style="margin-top:10px;">
                <div class="panel-heading">Top Articles</div>
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

<script>
$(document).ready(function(){
    $("table").addClass("table table-bordered table-striped");
})
</script>
