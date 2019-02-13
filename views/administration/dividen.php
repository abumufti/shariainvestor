<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title="Administration";

$list = array();
foreach($emiten as $i => $value){
    $list[$value->id] = $value->code;
}

?>


<!-- Left col -->
<div class="row">
<section class="col-md-7 connectedSortable">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dividen (Rp.) : <?= number_format($dividen[0]['amounts'],2,".",","); ?></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            <?php $form3 = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form3->field($model3, 'date')->textInput(['id'=>'datepicker3','value'=> date('Y-m-d')]) ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $form3->field($model3, 'emiten')->dropdownList($list,
                        ['prompt'=>'Select','class'=>'form-control select2']
                    ); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form3->field($model3, 'amount') ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br/>
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            <?php ActiveForm::end() ?>
            </div>
            <div class="box-body">
            <table id="example5" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Date</th>
                        <th>Emiten</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($dividen2 as $index => $value){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['date_dividen']; ?></td>
                        <td style="text-align:center;"><?= $value['code']; ?></td>
                        <td  style="text-align:right;"><?= number_format($value['amount']); ?></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>                    
                </table>
                </div>
        </div> 
</section>
</div>



