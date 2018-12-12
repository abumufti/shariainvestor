<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
$this->title = 'Index Sharia Emitens';
?>

<div class="callout callout-info" style="text-align:justify;">
    <h4><?= Html::encode($this->title) ?></h4>
    <p>Di bawah ini adalah saham-saham syariah yang masuk dalam index JII, LQ45, Pefindo25, Kompas 100, IDX30, Bisnis-27, dan Sri-Kehati.</p>
</div>

<div class="box">
    <div class="box-body">
        <table id="table1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Sector</th>
                <th>Subsector</th>
                <th>Market Cap(B)</th>
                <th>Price</th>
                <th>Chg(%)</th>
                <th>Priode</th>
                <th>PER</th>
                <th>PBV</th>
                <th>ROE(%)</th>
                <th>DY(%)</th>
                <th>DER</th>
                <th>Index</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($data as $index => $value){?>
                <tr>
                  <td><?= $value['code']; ?></td>
                  <td><?= $value['emiten']['sector']['name']; ?></td>
                  <td><?= $value['emiten']['subsector']['name']; ?></td>
                  <td style="text-align:right;"><?= number_format(($value['emiten']['price']*$value['emiten']['share'])/1000000000,2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['price']); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['margin'],2,'.',','); ?></td>
                  <td style="text-align:center;"><?= $value['periode']['name']; ?></td>
                  <td style="text-align:right;"><?= number_format($value['per'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['pbv'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['roe'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['dy'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['der'],2,'.',','); ?></td>
                  <td><?= $value['emiten']['idx']; ?></td>
                </tr>
                <?php $no++; } ?>  
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>

<div class="callout callout-info" style="text-align:justify;">
    <h4>Tips</h4>
    <p>Saham-saham yang terindex ini merupakan saham-saham yang memiliki likuiditas yang tinggi, nilai kapitalisasi pasar yang besar, serta manajemen perusahaan yang baik sehingga mudah diperjualbelikan. Hal inilah yang menyebabkan
    para investor saham cenderung menanamkan modalnya kepada saham-saham yang sudah terindex untuk investasi jangka panjang.</p>
</div>
