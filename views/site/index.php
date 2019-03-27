<?php
use yii\helpers\Url;
use yii\helpers\BaseStringHelper;
$formatter = \Yii::$app->formatter;

$this->title = 'Sharia Investor - Beranda';

?>
<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
  <h1>Sharia Investor</h1> 
  <p>Sakinah Berinvestasi Saham.</p><br><br>
</div>

<!-- Container (About Section) -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 " style="text-align:justify;">
            <div class="card">
                <div class="card-body " style="border-bottom: 2px solid #5A93B5;">
                    <h3><?= $preface->title; ?></h3>
                    <?= $preface->body; ?>
                </div> 
                <!--
                <div class="card-body" >
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-format="fluid"
                    data-ad-layout-key="-fb+5w+4e-db+86"
                    data-ad-client="ca-pub-3744700612400365"
                    data-ad-slot="8606394704"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                -->
                <?php foreach($posts as $index => $value){ ?>
                <div class="card-body" >
                    <h3><?= $value['title']; ?></h3>
                    <p class="text-muted">Posted on <?= $formatter->asDate($value['date_created'], 'long'); ?>, by <?= $value['author']; ?></p>
                    <p class="card-text"><?= BaseStringHelper::explode($value['body'],'</p>')[0].'</p>'; ?></p>
                    <a href="<?= Url::to(['site/blog', 'title' => $value['title']]); ?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <hr>
                <?php /*if($index <= 0){ ?>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-format="fluid"
                    data-ad-layout-key="-fb+5w+4e-db+86"
                    data-ad-client="ca-pub-3744700612400365"
                    data-ad-slot="8606394704"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <hr>
                <?php } */?>  
          <?php } ?>  
            </div>
    
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default"  style="margin-top:10px">
            <div class="fb-page" data-href="https://www.facebook.com/shariainvestorcom" data-width="470" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/shariainvestorcom" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shariainvestorcom">Sharia Investor</a></blockquote>
            </div>
          </div>       
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
