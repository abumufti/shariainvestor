<?php
use yii\helpers\Url;
use yii\helpers\BaseStringHelper;
$formatter = \Yii::$app->formatter;

$this->title = 'Home';


?>
<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
  <h1>Sharia Investor</h1> 
  <p>Sakinah Berinvestasi Saham.</p><br><br>
</div>

<div class="container-fluid bg-grey" style="text-align:justify;margin-bottom:10px;">
           
 
            <h3><?= $preface->title; ?></h3>
             <?= $preface->body; ?>
            
</div>

<div class="container-fluid">   
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Homepage Leaderboard -->
    <ins class="adsbygoogle"
        accesskey=""style="display:inline-block;width:728px;height:90px"
        data-ad-client="ca-pub-1234567890123456"
        cite=""data-ad-slot="1234567890"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>    
</div>  

<!-- Container (About Section) -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 " style="text-align:justify;">
            <?php foreach($posts as $index => $value){ ?>
            <div class="card">
                <div class="card-body">
                    <h3><?= $value['title']; ?></h3>
                    <p class="text-muted">Posted on <?= $formatter->asDate($value['date_created'], 'long'); ?>, by <?= $value['author']; ?></p>
                    <p class="card-text"><?= BaseStringHelper::explode($value['body'],'</p>')[0].'</p>'; ?></p>
                    <a href="<?= Url::to(['site/blog', 'title' => $value['title']]); ?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <hr>
            </div>
          <?php } ?>  
    
        </div>
    <div class="col-sm-4">
        <div class="row">
          <div class="panel panel-success">
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
