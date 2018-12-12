<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title="Transaction";

?>
<div class="row">
    <section class="col-md-6 connectedSortable">
        <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Broker</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
        <div class="box-body">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form->field($model, 'name') ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form->field($model, 'buyFee') ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo $form->field($model, 'sellFee') ?>
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

<div class="row">
    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Broker</h3>
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
                        <th >No.</th>
                        <th style="text-align:center">Name</th>
                        <th style="text-align:center">Buy Fee (%)</th>
                        <th style="text-align:center">Sell Fee (%)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($broker as $index => $value){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td style="text-align:center"><?= $value['buy']; ?></td>
                        <td style="text-align:center"><?= $value['sell']; ?></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>                    
                </table>
            </div>
        </div>
    </div>
</div>
