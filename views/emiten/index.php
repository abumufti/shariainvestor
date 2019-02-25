<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
$this->title = 'Index Saham Syariah Indonesia ( ISSI )';

?>

<div class="container-fluid" style="text-align:justify;">
  <div class="row">
    <h2><?= Html::encode($this->title) ?></h2>
    <p>Di bawah ini adalah data rasio fundamental saham-saham syariah yang tercatat di BEI atau yang dikenal dengan ISSI. Saham-saham ini selalu diseleksi ulang setiap bulan Mei dan November. 
        Diantara <?= count($data); ?> saham syariah ini, ada diantaranya sudah terindex JII, LQ45, Pefindo25, Kompas 100, IDX30, Bisnis-27, Sri-Kehati, DBX, dan MBX. Saham-saham yang terindex merupakan saham-saham yang memiliki likuiditas yang tinggi, nilai kapitalisasi pasar yang besar, serta manajemen perusahaan yang baik sehingga mudah diperjualbelikan.
        Dalam berinvestasi yang sakinah, pilihlah saham syariah yang sudah terindex, berfundamental baik, dan berharga murah ( under value ).
    </p>


        <table id="table1" class="table table-bordered table-striped">
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
</div>

