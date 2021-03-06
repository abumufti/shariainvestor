<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title="History";

?>

<div class="row">
    <section class="col-md-7 connectedSortable">
    <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Buy History</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
        <div class="box-body">
                <table id="example" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Date</th>
                        <th>Code</th>
                        <th>Buy</th>
                        <th>Lot</th>
                        <th>Fee</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($buy as $index => $value){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align:center;"><?= $value['buy_date']; ?></td>
                        <td><?= $value['code']; ?></td>
                        <td style="text-align:right;"><?= number_format($value['buy']); ?></td>
                        <td style="text-align:right;"><?= number_format($value['share']/100); ?></td>
                        <td style="text-align:right;"><?= number_format($value['buy_fee'],2,".",","); ?></td>
                        <td style="text-align:right;"><?= number_format($value['share']*$value['buy']*(1+($value['buy_fee']/100))); ?></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>
                </table>
            </div>
    </div>
</section>

</div>

