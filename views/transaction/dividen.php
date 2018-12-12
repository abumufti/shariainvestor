<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title="Administration";
$list = array();
$list['Admin'] = 'Admin';
$list['Interest'] = 'Interest';
$list['Save'] = 'Save';
$list['Withdraw'] = 'Withdraw';

$list2 = array();
foreach($emiten as $i => $value){
    $list2[$value->code] = $value->code;
}

?>


<!-- Left col -->
<div class="row">
<section class="col-md-6 connectedSortable">
    <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Dividen</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
        <div class="box-body">
            <?php $form2 = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form2->field($model2, 'date')->textInput(['id'=>'datepicker','value'=> date('Y-m-d')]) ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'emiten')->dropdownList($list2,
                        ['prompt'=>'Select','class'=>'form-control select2']
                    ); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form2->field($model2, 'amount') ?>
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
    </div>
</section>
</div>

<!-- Left col -->
<div class="row">
<section class="col-md-6 connectedSortable">
 <div class="box box-info">
    <div class="box-header with-border">
              <h3 class="box-title">Dividen</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
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
                    <?php $no = 1; foreach($dividen as $index => $value){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['date_dividen']; ?></td>
                        <td><?= $value['code']; ?></td>
                        <td  style="text-align:right;"><?= number_format($value['amount']); ?></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>                    
                </table>
                </div>
        </div>
</section>
</div>


