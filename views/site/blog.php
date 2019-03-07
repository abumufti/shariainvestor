<?php
use yii\helpers\Url;
use yii\helpers\BaseStringHelper;

$formatter = \Yii::$app->formatter;

$this->title = count($posts) === 1 ? $posts[0]['title'] : 'Blog';


?>



<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=458278107551122&autoLogAppEvents=1"></script>

<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
  <?php if($title ===''){ ?>
    <h1>Sharia Investor</h1> 
    <p>Sakinah Berinvestasi Saham.</p><br><br>
  <?php }else{ ?>  
  <h1><?= $posts[0]['title']; ?></h1> 
  <p>Posted on <?= $formatter->asDate($posts[0]['date_created'], 'long'); ?> by <?= $posts[0]['author']; ?></p><br><br>
  <?php } ?>
  
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
                    <p class="card-text"><?= BaseStringHelper::explode($value['body'],'</p>')[0].'</p>'; ?></p>
                    <a href="<?= Url::to(['site/blog', 'title' => $value['title']]); ?>" class="btn btn-primary">Read More &rarr;</a>
                    <hr>
                    <?php }else{?>                    
                    <p class="card-text"><?= $value['body']; ?></p>
                    <?php } ?>
                </div>
                
            </div>
          <?php } ?>  
        </div>
        <div class="col-sm-3">
            
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
                    <div class="panel-heading">Top Gainers</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Price</th>
                            <th>Chg(%)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach($gainers as $index => $value){ ?>
                        <tr> 
                            <td><?= $value['code']; ?></td>
                            <td style="text-align:right;"><?= number_format($value['price']); ?></td>
                            <td style="text-align:right;"><?= number_format($value['margin'],2,'.',','); ?></td>
                        </tr>
                        <?php $no++; } ?>  
                        </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="<?= Url::to(['site/issi', 'order' => "desc"]); ?>" class="uppercase">More</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            
            <div class="row">
                <div class="panel panel-danger">
                    <div class="panel-heading">Top Losers</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Price</th>
                            <th>Chg(%)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach($losers as $index => $value){ ?>
                        <tr> 
                            <td><?= $value['code']; ?></td>
                            <td style="text-align:right;"><?= number_format($value['price']); ?></td>
                            <td style="text-align:right;"><?= number_format($value['margin'],2,'.',','); ?></td>
                        </tr>
                        <?php $no++; } ?>  
                        </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="<?= Url::to(['site/issi', 'order' => "asc"]); ?>" class="uppercase">More</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
  </div>
</div>

<!-- Container (About Section) -->
<div class="container-fluid">
    <div class="row">
        <div class="fb-comments" data-href="<?= Url::current(); ?>" data-numposts="5"></div>
    </div>
</div>


