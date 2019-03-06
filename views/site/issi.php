<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
$this->title = 'Index Saham Syaria Indonesia (ISSI)';

?>
<div class="jumbotron text-justify" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0;">
  <h2><?= $preface->title; ?></h2> 
  <?= $preface->body; ?>
</div>
<br>
<div class="container-fluid" style="text-align:justify;">
    
    <ul class="nav nav-tabs">
        <li class="<?=Yii::$app->view->params['issi'][0];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi">All</a></li>
        <li class="<?=Yii::$app->view->params['issi'][1];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi?order=desc">Top Gainers</a></li>
        <li class="<?=Yii::$app->view->params['issi'][2];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi?order=asc">Top Losers</a></li>
    </ul>
    <br>
        <table id="<?=$table;?>" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Sector</th>
                <th>Subsector</th>
                <th>M.Cap(B)</th>
                <th>Price</th>
                <th>Chg(%)</th>
                <th>Kuartal</th>
                <th>PER</th>
                <th>PBV</th>
                <th>ROE(%)</th>
                <th>DY(%)</th>
                <th>DER</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($data as $index => $value){ ?>
                <tr> 
                  <td><?= $value['code']; ?></td>
                  <td><?= $value['sector']['name']; ?></td>
                  <td><?= $value['subsector']['name']; ?></td>
                  <td style="text-align:right;"><?= number_format(($value['emiten']['price']*$value['emiten']['share'])/1000000000,2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['price']); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['margin'],2,'.',','); ?></td>
                  <td style="text-align:center;"><?= $value['periode']['name']; ?></td>
                  <td style="text-align:right;"><?= number_format($value['per'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['pbv'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['roe'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['dy'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['der'],2,'.',','); ?></td>
                  
                </tr>
                <?php $no++; } ?>  
            </tbody>
        </table>
    
</div>

