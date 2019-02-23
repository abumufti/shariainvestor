<?php 

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title='Emiten';

$list2 = array();
foreach($index as $i => $value){
    $list2[$value->name] = $value->name;
}

$list4 = array();
foreach($periode as $i => $value){
    $list4[$value->id] = $value->name;
}

?>

<?php if (Yii::$app->session->hasFlash('emitenFormSubmitted')): ?>
<script>
alert("Data is already saved !");
</script>
<?php endif; ?>

<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Emiten</h3>
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
                <?php echo $form->field($model, 'quarter')->dropdownList($list4,
                        ['prompt'=>'Select Quarter','class'=>'form-control select2']
                ); ?>
              </div>
              <!-- /.form-group -->
            </div>  
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $form->field($model, 'category')->dropdownList($list2,
                        ['prompt'=>'Select Category','class'=>'form-control select2']
                ); ?>
              </div>
              <!-- /.form-group -->
            </div>  
            <!-- /.col -->
            <div class="col-md-3">
              <div class="form-group">
                <?= $form->field($model, 'currency')->textInput(['value' => 1]) ?>
             </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
              <div class="form-group">
                <?= $form->field($model, 'excelFile')->fileInput(); ?>
              </div>
              <!-- /.form-group -->
            </div>
             <!-- /.col -->
            
          </div>
          <!-- /.row -->
        </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary pull-right']) ?>
        </div>
        <!-- /.form-group -->
    </div>
    <?php ActiveForm::end() ?>
</div>
<!-- /.box -->

<div class="box">
    <div class="box-header with-border">
              <h3 class="box-title">Emiten</h3>

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