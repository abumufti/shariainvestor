<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title='Sector';


$list = array();
foreach($sector as $i => $value){
    $list[$value->id] = $value->name;
}

?>
<div class="row">
    <div class="col-md-6">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
              <h3 class="box-title">Sector</h3>

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
                  <?= $form->field($model, 'sector') ?>
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
                <?php ActiveForm::end() ?>
                </div>
            <!-- /.col -->
            </div>
        </div>
        <!-- /.box-body -->
      </div>
    <!-- /.box -->
    </div>
    <div class="col-md-6">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
              <h3 class="box-title">Sub Sector</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                <?php $form2 = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
                <div class="form-group">
                <?php echo $form2->field($model2, 'sector')->dropdownList($list,
                        ['prompt'=>'Select Sector','class'=>'form-control select2']
                ); ?>
                </div>
                <!-- /.form-group -->
                </div>
                
                <div class="col-md-5">
                <div class="form-group">
                  <?= $form->field($model2, 'subsector') ?>
                </div>
                <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-1">
                <div class="form-group">
                    <br/>
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
                <!-- /.form-group -->
                <?php ActiveForm::end() ?>
                </div>
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
              <h3 class="box-title">Sector</h3>

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
                <th>Sector</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($sector as $index => $value){?>
                
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $value['name']; ?></td>
                </tr>
                <?php $no++; } ?>    
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Sector</th>                    
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
    </div>
    <div class="col-md-6">
<div class="box">
    <div class="box-header with-border">
              <h3 class="box-title">Sub Sector</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No.</th>
                <th>Sector</th>
                <th>Sub Sector</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($subsector as $index => $value){ ;?>
    
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $value['sector']['name']; ?></td>
                  <td><?= $value['name']; ?></td>
                </tr>
                <?php $no++; } ?>    
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Sector</th>
                    <th>Sub Sector</th>
                </tr>
            </tfoot>
        </table>
</div>
    <!-- /.box-body -->
</div>
    </div>
</div>