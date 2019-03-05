<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title="History";

?>

<div class="row">
    <section class="col-md-7 connectedSortable">
    <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Sell History</h3>

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
                        <th>Sell</th>
                        <th>Lot</th>
                        <th>Fee</th>
                        <th>Total</th>
                        <th>Margin</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($sell as $index => $value){
                        
                        $buyfee = floatval($value['buy_fee']/100);
                        $sellfee = floatval($value['sell_fee']/100);
                        $buy = floatval($value['buy']*(1+$buyfee));
                        $sell = floatval($value['sell']*(1-$sellfee));
                        $margin = floatval(($sell-$buy)*$value['share']);
                        
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align:center;"><?= $value['sell_date']; ?></td>
                        <td><?= $value['code']; ?></td>
                        <td style="text-align:right;"><?= number_format($value['buy']); ?></td>
                        <td style="text-align:right;"><?= number_format($value['sell']); ?></td>
                        <td style="text-align:right;"><?= number_format($value['share']/100); ?></td>
                        <td style="text-align:right;"><?= number_format($value['sell_fee'],2,".",","); ?></td>
                        <td style="text-align:right;"><?= number_format($value['share']*$value['sell']*(1+($value['sell_fee']/100))); ?></td>
                        <td style="text-align:right;"><?= number_format($margin,2,".",","); ?></td>
                    </tr>
                    <?php $no++; } ?>    
                    </tbody>
                </table>
            </div>
    </div>
</section>

</div>

