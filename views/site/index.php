<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Home';


?>

<!-- Container (About Section) -->
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-8" style="text-align:justify;">
      <h2>Tentang Kami</h2>
    <p><strong>Sakinah Berinvestasi Saham</strong> itulah moto kami. Bersama <strong><?= Html::a('shariainvestor.com','http://shariainvestor.com',['style'=>'text-decoration:none']) ?></strong>, Anda tidak perlu lagi bingung dan pusing dalam melakukan investasi saham syariah dengan segala kalkulasi yang perlu dibuat karena <strong><?= Html::a('shariainvestor.com','http://shariainvestor.com',['style'=>'text-decoration:none']) ?></strong> menyajikan data fundamental saham berdasarkan laporan keuangan terkini yang dibuat oleh masing-masing emiten.</p> 
    <p>Harapan kami, <strong><?= Html::a('shariainvestor.com','http://shariainvestor.com',['style'=>'text-decoration:none']) ?></strong> bisa menjadi rujukan yang valid dalam memilih saham-saham syariah. Sehingga menanam saham tidak lagi menjadi hal yang memusingkan, namun hal yang menenangkan (sakinah).</p> 
    <p>Jadi, ikuti terus <strong><?= Html::a('shariainvestor.com','http://shariainvestor.com',['style'=>'text-decoration:none']) ?></strong> untuk mengetahui saham-saham syariah terkini beserta informasi fundamentalnya.</p> 
    <p>Selamat berinvestasi saham syariah ! </p>
    
    </div>
    <div class="col-sm-4">
        <div class="row">
          <div class="panel panel-success">
            <div class="panel-heading">Top Gainers</div>
                <div class="panel-body">
            <table id="table3" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Price</th>
                <th>Chg(%)</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($gainers as $index => $value){ ?>
                <tr> 
                  <td><?= $value['code']; ?></td>
                  <td style="text-align:right;"><?= number_format($value['price']); ?></td>
                  <td style="text-align:right;"><?= number_format($value['margin'],2,'.',','); ?></td>
                </tr>
                <?php $no++; } ?>  
            </tbody>
        </table>
        </div>
                                <div class="panel-footer text-center">
              <a href="<?= Url::to(['emiten/all', 'order' => "desc"]); ?>" class="uppercase">More</a>
            </div>
            <!-- /.box-footer -->

           
          </div>
        </div>
            
        <div class="row">
            
                
                <div class="panel panel-danger">
                    <div class="panel-heading">Top Losers</div>
            <div class="panel-body">
            <table id="table2" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Price</th>
                <th>Chg(%)</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($losers as $index => $value){ ?>
                <tr> 
                  <td><?= $value['code']; ?></td>
                  <td style="text-align:right;"><?= number_format($value['price']); ?></td>
                  <td style="text-align:right;"><?= number_format($value['margin'],2,'.',','); ?></td>
                </tr>
                <?php $no++; } ?>  
            </tbody>
        </table>
        </div>
                                <div class="panel-footer text-center">
                                    <a href="<?= Url::to(['emiten/all', 'order' => "asc"]); ?>" class="uppercase">More</a>
            </div>
            <!-- /.box-footer -->
                    </div>

           
        </div>
    </div>
  </div>
</div>
