<?php
$this->title = "Apps";
?>

<!-- App Stock Calculator -->
<div class="jumbotron" style="color: black;background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
    <div class="row ">
    <div class="panel panel-success" style="padding:10px">
        <div class="panel-heading text-center">Stock Calculator</div>
        <form class="form-horizontal" action="Post" id="StockCalculator">
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label" for="email">Capital :</label>
                    <input type="number" class="form-control" id="stockcalculator-capital" placeholder="2222222,22">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Buy Fee (%):</label>
                    <input type="number" class="form-control" id="stockcalculator-buyfee" placeholder="0,15">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Sell Fee (%):</label>
                    <input type="number" class="form-control" id="stockcalculator-sellfee" placeholder="0,25">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Buy:</label>
                    <input type="number" class="form-control" id="stockcalculator-buy" placeholder="2222">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Lot:</label>
                    <input type="number" class="form-control" id="stockcalculator-lot" placeholder="9">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Profit (%):</label>
                    <input type="number" class="form-control" id="stockcalculator-profitpercentage" placeholder="2">
                </div>  
                <div class="form-group">
                    <label class="control-label" for="pwd">Sell:</label>
                    <input type="number" class="form-control" id="stockcalculator-sell" placeholder="2287">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Margin:</label>
                    <input type="number" class="form-control" id="stockcalculator-margin" placeholder="53484,75">
                </div>                
            </div>
        </form>
    </div>                
        </div>                
</div>  