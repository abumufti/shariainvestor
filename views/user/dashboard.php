<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Dashboard';

$list = array();
foreach($emiten as $i => $value){
    $list[$value->id] = $value->code;
}

$list2 = array();
foreach($broker as $i => $value){
    $list2[$value->id] = $value->name;
}

$portofolio =0;
$marginTotal = 0;
$buyTotal =0;

?>


<!-- Pop Up -->
<div class="modal modal-info fade" id="modal-info">
    <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sell</h4>
              </div>
              <?php $form2 = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?> 
              <div class="modal-body">
                  
                <div class="row">
                
                    <div class="hide">
                        <?= $form2->field($model2,'buyid')->hiddenInput()->label(false) ?>
                        <?= $form2->field($model2,'buyFee')->hiddenInput()->label(false) ?>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2,'date')->textInput(['id'=>'datepicker2','value'=> date('Y-m-d')]) ?>
                    </div>
                </div>
                
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'emiten')->textInput(['readonly'=>true]) ?>
                    </div>                      
                </div>
            
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'sellFee')->textInput(['value'=>0]) ?>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'buy')->textInput(['value'=>0,'readonly'=>true]) ?>
                    </div>
                </div>
                
                </div>
        
                <div class="row">
                
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'sell')->textInput(['value'=>0]) ?>
                    </div>
                    <!-- /.form-group -->
                </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'lot')->textInput(['value'=>0]) ?>
                    </div>
                    <!-- /.form-group -->
                </div>
            
                    <div class="col-md-3">
                    <div class="form-group">
                       <?= $form2->field($model2, 'margin')->textInput(['value'=>0,'readonly'=>true]) ?>
                    </div>
                    <!-- /.form-group -->
                </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form2->field($model2, 'percentage')->textInput(['value'=>0,'readonly'=>true]) ?>                        
                    </div>
                    <!-- /.form-group -->
                </div>
            
                </div>
                
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" >Close</button>
                <?= Html::submitButton('Submit', ['class' => 'btn btn-outline']) ?>
              </div>
                <?php ActiveForm::end() ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<div class="modal modal-default fade" id="modal-stock">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ISSI</h4>
            </div>
            <div class="modal-body">
                <table id="history" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Code</th>
                    <th>PER</th>
                    <th>Trend(%)</th>
                    <th>PBV</th>
                    <th>ROE</th>
                    <th>DY</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach($stocks as $index => $value){?>
                <tr>
                    <td>&nbsp;&nbsp;</td>  
                    <td><?= $value['code']; ?></td>
                    <td style="text-align:right;"><?= number_format($value['per']); ?></td>
                    <td style="text-align:right;"><?= number_format($value['emiten']['trend'],2,'.',','); ?></td>
                    <td style="text-align:right;"><?= number_format($value['pbv'],2,'.',','); ?></td>
                    <td style="text-align:right;"><?= number_format($value['roe'],2,'.',','); ?></td>
                    <td style="text-align:right;"><?= number_format($value['dy'],2,'.',','); ?></td>
                </tr>
                <?php $no++; } ?>  
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="watch">Watch List</button>
            </div>
        </div>
    </div>
</div>
<!-- /Pop Up -->

<div class="row">    
    <div class="col-md-7"> 
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Buy</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?> 
                <div class="row">
                    <div class="hide">
                        <?= $form->field($model,'sellFee')->hiddenInput()->label(false) ?>
                        <?= $form->field($model,'buyFee')->hiddenInput()->label(false) ?>
                    </div>
                
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model,'dateBuy')->textInput(['id'=>'datepicker','value'=> date('Y-m-d')]) ?>
                    </div>
                </div>
                
                    <div class="col-md-3">
                    <div class="form-group">
                         <?= $form->field($model, 'broker')->dropdownList($list2,
                            ['prompt'=>'Select','class'=>'form-control select2']
                        ); ?>   
                    </div>                      
                </div>
            
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'emiten')->dropdownList($list,
                            ['prompt'=>'Select','class'=>'form-control select2']
                        ); ?>                        
                    </div>
                </div>
                
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'budget')->textInput(['value'=>number_format($history['balance'],2,".",",")]) ?>
                    </div>
                </div>
                
                </div>
        
                <div class="row">
                
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'buy')->textInput(['value'=>0]) ?>
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'lot')->textInput(['value'=>0]) ?>
                    </div>
                    <!-- /.form-group -->
                    </div>
            
                    <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'profitPercentage')->textInput(['value'=>2]) ?>
                    </div>
                    <!-- /.form-group -->
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                       <?= $form->field($model, 'sell')->textInput(['value'=>0,'readOnly'=>true]) ?>
                    </div>
                    <!-- /.form-group -->
                    </div>
            
                </div>
                
            </div>
            <div class="box-footer clearfix">
              <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary pull-right']) ?>
                    </div>
                    <!-- /.form-group -->
            </div>
            <?php ActiveForm::end() ?>
        </div>       
        
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Stocks</h3>
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
                        <th>Buy</th>
                        <th>Price</th> 
                        <th>Target</th> 
                        <th>Trend</th> 
                        <th>Lot</th>
                        <th>Total</th>
                        <th>Margin</th>
                        <th>Margin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($data as $index => $value){ 
                        $buyfee = floatval($value['buy_fee']/100);
                        $sellfee = floatval($value['sell_fee']/100);
                        $buy = floatval($value['buy']*(1+$buyfee));
                        $sell = floatval($value['emiten']['price']*(1-$sellfee));
                        $margin = floatval(($sell-$buy)*$value['share']);
                        $marginPercentage = floatval((($sell-$buy)/$buy)*100);
                        $target = floatval($value['target']/100);
                        $targetSell = $buy*(1+$sellfee+$target);
                        
                        $portofolio +=$sell*$value['share'];
                        $marginTotal += $margin;
                        $buyTotal =0;
                        
                    ?>
                    <tr>
                        <td><?= $value['code']; ?></td>
                        <td style="text-align:right;"><?= number_format($value['buy']); ?></td>
                        <td style="text-align:right;"><?= number_format($value['emiten']['price']); ?></td>
                        <td style="text-align:right;"><?= number_format(ceil($targetSell)); ?></td>
                        <td style="text-align:right;"><?= number_format($value['trend'],2,'.',','); ?> %</td>
                        <td style="text-align:right;"><?= number_format($value['share']/100); ?></td>
                        <td style="text-align:right;"><?= number_format($value['share']*$sell); ?></td>
                        <td style="text-align:right;"><?= number_format($marginPercentage,2,".",","); ?> %</td>   
                        <td style="text-align:right;"><?= number_format($margin,2,".",","); ?></td>   
                        <td><button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#modal-info" id="buyform-sell" onclick="sell(<?= $value['id'] ?>)">Sell</button></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>
                   
                </table>
            </div>
        </div>       
        
        
        
    </div>
    
    <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Portofolio</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead class="bg-blue-gradient">
                    <tr>
                        <th style="text-align:center;">Stock (Rp.)</th>
                        <th style="text-align:center;">Cash (Rp.)</th>
                        <th style="text-align:center;">Balance (Rp.)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr> 
                        <td style="text-align:center;"><?= number_format($portofolio,2,".",","); ?></td>
                        <td style="text-align:center;"><?= number_format($history['balance'],2,".",","); ?></td>
                        <td style="text-align:center;"><?= number_format($history['balance']+$portofolio,2,".",","); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><?= number_format($marginTotal+$sell[0]['margins']+$dividen[0]['amounts'],2,".",",") < 0 ? 'Loss ' :'Profit '?>(Rp.) : <?= number_format($marginTotal+$sell[0]['margins']+$dividen[0]['amounts'],2,".",","); ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead class="bg-green-gradient">
                    <tr>
                        <th style="text-align:center;">Margin (Rp.)</th>
                        <th style="text-align:center;">Capital Gain (Rp.)</th>
                        <th style="text-align:center;">Dividen (Rp.)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr> 
                        <td style="text-align:center;"><?= number_format($marginTotal,2,".",","); ?></td>
                        <td style="text-align:center;"><?= number_format($gain[0]['margins'],2,".",","); ?></td>
                        <td style="text-align:center;"><?= number_format($dividen[0]['amounts'],2,".",","); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
         </div>
        
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Watch List</h3>
              
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#modal-stock">Emitens</button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <table id="watchlist" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Price</th>
                        <th>PER</th>
                        <th>PBV</th>
                        <th>ROE</th>
                        <th>DY</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($fundamental as $index => $value){ ?>
                    <tr>
                        <td><?= $value['code']; ?></td>
                        <td style="text-align:right;"><?= number_format($value['emiten']['price']); ?></td>
                        <td style="text-align:right;"><?= number_format($value['per']); ?></td> 
                        <td style="text-align:right;"><?= number_format($value['pbv'],2,'.',','); ?></td>
                        <td style="text-align:right;"><?= number_format($value['roe'],2,'.',','); ?></td>
                        <td style="text-align:right;"><?= number_format($value['dy'],2,'.',','); ?></td> 
                        <td><button type="button" class="btn btn-block btn-success btn-xs" onclick="watchremove('<?= $value['code'] ?>')">Remove</button></td>
                    </tr>
                    <?php } ?>    
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>


