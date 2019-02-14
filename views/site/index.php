<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Home';


?>



        <div class="col-lg-8">
            <div class="jumbotron" style="background-color: #FFF; background-image: url('images/home-bg.jpg');background-repeat: no-repeat;
  background-size: cover;background-color: rgba(255,255,255,0.5) !important;">
        
            <h1 style="color:green;">Sharia Investor</h1>

            <p  style="color:blue;font-size:24px;">Sakinah Berinvestasi Saham.</p>
            
        </div>
            
            <div class="row">
    <div class="body-content">

        <div class="row">
            
            <div class="col-lg-6">
                <h4>Top Gainers</h4>
                <div class="box box-success">
                <div class="box-body"><p>Berdasarkan Harga Penutupan Kemarin.</p>
            <table id="table1" class="table table-bordered table-striped">
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
                                <div class="box-footer text-center">
              <a href="<?= Url::to(['emiten/all', 'order' => "desc"]); ?>" class="uppercase">More</a>
            </div>
            <!-- /.box-footer -->
                    </div>

           
            </div>
            
            <div class="col-lg-6">
                <h4>Top Losers</h4>
                <div class="box box-danger">
    <div class="box-body"><p>Berdasarkan Harga Penutupan Kemarin.</p>
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
                                <div class="box-footer text-center">
                                    <a href="<?= Url::to(['emiten/all', 'order' => "asc"]); ?>" class="uppercase">More</a>
            </div>
            <!-- /.box-footer -->
                    </div>

           
            </div>
            
            
        </div>

    </div>
        </div>
        
        
        </div>
        
        <div class="col-lg-4">
                      <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Top 5 Articles</h1>


            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Langkah Awal Berinvestasi Saham</a>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Sabar dan Waktu Adalah Kuncinya</a>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Teknik Membaca Grafik Saham</a>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Waktu yang Tepat Membeli dan Menjual Saham</a>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Kapan Harus Cutloss ? </a>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Articles</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>

    
    

