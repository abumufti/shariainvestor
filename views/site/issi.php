<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
$this->title = 'Index Saham Syariah Indonesia ( ISSI )';

?>

<div class="container-fluid bg-grey" style="text-align:justify;margin-bottom:20px;">
    <h2><?= Html::encode($this->title) ?></h2>
    <p>Di bawah ini adalah data rasio fundamental saham-saham syariah yang tercatat di BEI (ISSI) yang selalu diseleksi ulang setiap bulan Mei dan November. 
        Diantara <?= count($data); ?> saham syariah ini, ada diantaranya sudah terindex JII, LQ45, Pefindo25, Kompas 100, IDX30, Bisnis-27, Sri-Kehati, DBX, dan MBX. Saham-saham yang terindex merupakan saham-saham yang memiliki likuiditas yang tinggi, nilai kapitalisasi pasar yang besar, memiliki manajemen perusahaan yang baik, sehingga mudah diperjualbelikan.
        Pilihlah saham syariah yang sudah terindex, berfundamental baik, dan berharga murah ( under value ).
    </p>
</div>

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

