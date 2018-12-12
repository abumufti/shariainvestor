<?php

$this->title="History";

?>

<div class="row">
    <section class="col-md-7 connectedSortable">
    <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Transactions</h3>

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
                    <th>Description</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($history as $index => $value){?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['history_date']; ?></td>
                    <td><?= $value['status']; ?></td>
                    <td  style="text-align:right;"><?= number_format($value['debit'],2,".",","); ?></td>
                    <td  style="text-align:right;"><?= number_format($value['credit'],2,".",","); ?></td>
                    <td  style="text-align:right;"><?= number_format($value['balance'],2,".",","); ?></td>
                </tr>
                <?php $no++; } ?>    
                </tbody>                    
            </table>
        </div>
    </div>
</section>

</div>

