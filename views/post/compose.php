<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title='Compose';
$text ='Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
?>

<div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Compose</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?> 
            <div class="box-body pad">
                <div class="form-group">
                    <?= $form->field($model, 'title')->textInput(); ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'body')->textarea(['id'=>'editor1', 'rows' => '6','cols'=>'80','value'=>$text]) ?>
                </div>  
                <div class="form-group">
                    <div class="col-sm-6">
                        <?= $form->field($model, 'youtube')->textInput(); ?>
                    </div>
                    <div class="col-sm-3">
                         <?= $form->field($model, 'file')->fileInput(); ?>  
                    </div>
                    <div class="col-sm-3">
                        <?= $form->field($model, 'image')->fileInput(); ?>  
                    </div>
                </div>
            </div>
            
            <div class="box-footer">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary pull-right']) ?>
            </div>
            
            <?php ActiveForm::end() ?>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
    