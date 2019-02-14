<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
$this->title = 'Index Saham Syariah Indonesia ( ISSI )';

?>

<div class="callout callout-info" style="text-align:justify;">
    <h4><?= Html::encode($this->title) ?></h4>
    <p>Di bawah ini adalah saham-saham syariah yang tercatat di BEI. Saham-saham ini selalu diseleksi ulang setiap bulan Mei dan November.
       Kami sajikan informasi fundamental masing-masing saham dengan harga penutupan pada hari kemarin.</p>
</div>

<div class="box">
    <div class="box-body"><p>Berdasarkan Harga Penutupan Kemarin.</p>
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
    <!-- /.box-body -->
</div>

