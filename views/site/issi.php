<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Sharia Investor - Index Saham Syaria Indonesia (ISSI)';

$list = array();
foreach($sector as $i => $value){
    $list[$value->id] = $value->name;
}

$list3 = array();
foreach($index as $i => $value){
    $list3[$value->name] = $value->name;
}

?>
<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
  <h1>Sharia Investor</h1> 
  <p>Sakinah Berinvestasi Saham.</p><br><br>
</div>

<div class="container-fluid bg-grey" style="text-align:justify;margin-bottom:10px;">
    <h3><?= $preface->title; ?></h3>
    <?= $preface->body; ?>
</div>

<div class="container-fluid" style="text-align:justify;">
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" style="margin-top:40px; ">
        <div class="modal-dialog">
    
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    </div>
                    <h4 class="modal-title">Cari Saham Berdasarkan :</h4>
                </div>
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?> 
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                            <?php echo $form->field($model, 'sector')->dropdownList($list,
                                ['prompt'=>'All','class'=>'form-control select2']
                            ); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <?php echo $form->field($model, 'subsector')->dropdownList(array(),
                                ['prompt'=>'All','class'=>'form-control select2']
                            ); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <?php echo $form->field($model, 'index')->dropdownList($list3,
                                ['prompt'=>'All','class'=>'form-control select2']
                            ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= Html::submitButton('Filter', ['class' => 'btn btn-primary pull-right']) ?>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
    
    <ul class="nav nav-tabs">
        <li class="<?=Yii::$app->view->params['issi'][0];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi">All</a></li>
        <li class="<?=Yii::$app->view->params['issi'][1];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi?order=desc">Top Gainers</a></li>
        <li class="<?=Yii::$app->view->params['issi'][2];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi?order=asc">Top Losers</a></li>
        <li ><a href="#" data-toggle="modal" data-target="#myModal">Filter</a></li>
    </ul>
    <br>
    <table id="<?=$table;?>" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Code</th>
                <th>Sector</th>
                <th>Subsector</th>
                <th>M.Cap(B)</th>
                <th>Price</th>
                <th>Chg(%)</th>
                <?php if(!Yii::$app->user->isGuest){ ?>
                <th>Kuartal</th>
                <?php } ?>
                <th>PER</th>
                <th>PBV</th>
                <th>ROE(%)</th>
                <th>DY(%)</th>
                <th>DER</th>
            </tr>
        </thead>
        <tbody>
                <?php $no = 1; foreach($data as $index => $value){ ?>
                <tr> 
                  <td><?= $value['code']; ?></td>
                  <td><?= $value['sector']['name']; ?></td>
                  <td><?= $value['subsector']['name']; ?></td>
                  <td style="text-align:right;"><?= number_format(($value['emiten']['price']*$value['emiten']['share'])/1000000000,2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['price']); ?></td>
                  <td style="text-align:right;"><?= number_format($value['emiten']['margin'],2,'.',','); ?></td>
                  <?php if(!Yii::$app->user->isGuest){ ?>
                  <td style="text-align:center;"><?= $value['periode']['name']; ?></td>
                  <?php } ?>
                  <td style="text-align:right;"><?= number_format($value['per'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['pbv'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['roe'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['dy'],2,'.',','); ?></td>
                  <td style="text-align:right;"><?= number_format($value['der'],2,'.',','); ?></td>
                  
                </tr>
                <?php $no++; } ?>  
        </tbody>
    </table>
</div>





