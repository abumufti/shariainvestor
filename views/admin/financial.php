<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title='Financial';

$list = array();
foreach($sector as $i => $value){
    $list[$value->id] = $value->name;
}

$list2 = array();
foreach($subsector as $i => $value){
    $list2[$value->id] = $value->name;
}

$list3 = array();
foreach($data as $i => $value){
    $list3[$value->id] = $value->code;
}

$list4 = array();
foreach($periode as $i => $value){
    $list4[$value->id] = $value->name;
}

?>

<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Financial</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
        
        <div class="row">
            <div class="col-md-4" style="padding:0">
                <div class="col-md-6">
                <div class="form-group">
                    <?php echo $form->field($model, 'emiten')->dropdownList($list3,
                        ['prompt'=>'Select Emiten','class'=>'form-control select2']
                    ); ?>
                </div>  

                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <?php echo $form->field($model, 'quarter')->dropdownList($list4,
                        ['prompt'=>'Select Quarter','class'=>'form-control select2']
                    ); ?>
                </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'liability') ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'share') ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4" style="padding:0">
                <div class="col-md-6">
                <div class="form-group">
                    <?php echo $form->field($model, 'sector')->dropdownList($list,
                        ['prompt'=>'Select Sector','class'=>'form-control select2']
                    ); ?>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <?= $form->field($model, 'currency')->textInput(['value' => 1]) ?>
                </div>
                </div>
               
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'equity') ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                  <?= $form->field($model, 'dividen') ?>
                </div>
              <!-- /.form-group -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4" style="padding:0">
                <div class="col col-lg-6" style="margin:0">
                    <div class="form-group">
                    <?php echo $form->field($model, 'subsector')->dropdownList($list2,
                        ['prompt'=>'Select Sub Sector','class'=>'form-control select2']
                    ); ?>
                </div>  

            </div>
                <div class="col col-lg-6" style="margin:0">
                <div class="form-group">
                    <?= $form->field($model, 'multiply')->textInput(['value' => 1])  ?>
                </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'profit') ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <br/>
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
          
        <?php ActiveForm::end() ?>
    </div>
</div>

<div class="box">
    <div class="box-header with-border">
              <h3 class="box-title">Financial</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Sector</th>
                <th>Subsector</th>
                <th>Price</th>
                <th>Priode</th>
                <th>Currency</th>
                <th>Liability</th>
                <th>Equity</th>
                <th>Profit</th>
                <th>Dividen</th>
                <th>Shares</th>
                <th>Index</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $index => $value){?>
                
                <tr>
                  <td><?= $value['code']; ?></td>
                  <td><?= $value['name']; ?></td>
                  <td><?= $value['sector']['name']; ?></td>
                  <td><?= $value['subsector']['name']; ?></td>
                  <td><?= number_format($value['price']); ?></td>
                  <td style="text-align:center;"><?= $value['periode']['name']; ?></td>
                  <td><?= number_format($value['currency'],2,".",","); ?></td>
                  <td><?= number_format($value['liability'],2,".",","); ?></td>
                  <td><?= number_format($value['equity'],2,".",","); ?></td>
                  <td><?= number_format($value['profit'],2,".",","); ?></td>
                  <td><?= number_format($value['dividen'],2,".",","); ?></td>
                  <td><?= number_format($value['share'],2,".",","); ?></td>
                  <td><?= $value['idx']; ?></td>
                </tr>
                <?php } ?>    
            </tbody>
        </table>
    </div>
</div>