<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'ISSI';

$list[0] = 'All';
$list[1] = 'Indexed';
$list[2] = 'Under Value';

?>

<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    
    <div class="box-header with-border">
        <h3 class="box-title">ISSI</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    
    <div class="box-body">
        <div class="row">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
            <div class="col-md-3">
                <div class="form-group">
                <?php echo $form->field($model,'category')->dropdownList($list,
                        ['class'=>'form-control select2']
                ); ?>
                
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                <br/>
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end() ?>
            <div class="col-md-3">
                <div class="form-group pull-right">
                <br/>
                <button type="submit" class="btn btn-success" id="watch">Watch List</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">ISSI</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <table id="history" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th></th>
                <th>Code</th>
                <th>Sector</th>
                <th>Subsector</th>
                <th>Market Cap(B)</th>
                <th>Price</th>
                <th>Chg(%)</th>
                <th>PER</th>
                <th>PBV</th>
                <th>ROE(%)</th>
                <th>DY(%)</th>
                <th>DER</th>
                <th>Index</th>
                <th>File</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($data as $index => $value){?>
                <tr>
                  <td>&nbsp;&nbsp;</td>  
                  <td><?= $value['code']; ?></td>
                  <td><?= $value['emiten']['sector']['name']; ?></td>
                  <td><?= $value['emiten']['subsector']['name']; ?></td>
                  <td style="text-align:right;"><?= number_format(($value['emiten']['price']*$value['emiten']['share'])/1000000000,2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['price']); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['margin'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['per'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['pbv'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['roe'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['dy'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['der'],2,'.',','); ?></td>
                  <td><?= $value['emiten']['idx']; ?></td>
                  <td style="text-align:center;"><?= $value['emiten']['file'] !== '' ? Html::a($value['periode']['name'], ['/site/download','path'=>$value['emiten']['file']], ['target'=>'_blank']) : '--'; ?></td>
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
