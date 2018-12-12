<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title='Category';

?>
<div class="row">
    <div class="col-md-6">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
                        <div class="form-group">
                            <?= $form->field($model, 'category') ?>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <br/>
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                        </div>
                    <!-- /.form-group -->                
                    </div>
                    <?php ActiveForm::end() ?>
                <!-- /.col -->
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    <!-- /.box -->
    </div>
</div>

<div class="row">
    
    <div class="col-md-6">
        
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>

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
                        <th>No.</th>
                        <th>Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($data as $index => $value){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['name']; ?></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Category</th>                    
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>