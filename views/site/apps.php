<?php
$this->title = "Apps";
?>

<!-- App Stock Calculator -->
<div class="jumbotron" style="color: black;background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
    
    <div class="col-sm-4 centering">
    <div class="row ">
    <div class="panel panel-success" style="padding:10px">
        <div class="panel-heading text-center">Stock Calculator</div>
        <form class="form-horizontal" action="#" id="StockCalculator">
            <div class="panel-body">
                <p>Kalkulator ini membantu kamu menentukan target profit, sell, dan lot.</p>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select class="form-control" id="stockcalculator-type" >
                        <option value="">Select Type</option>
                        <option value="buy">Buy Stock</option>
                        <option value="sell">Sell Stock</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email">Capital :</label>
                    <input type="text" class="form-control" id="stockcalculator-capital" placeholder="" value="0" readonly="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Buy Fee (%):</label>
                    <input type="text" class="form-control" id="stockcalculator-buyfee" placeholder="" value="0" readonly="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Sell Fee (%):</label>
                    <input type="text" class="form-control" id="stockcalculator-sellfee" placeholder="" value="0" readonly="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Buy:</label>
                    <input type="text" class="form-control" id="stockcalculator-buy" placeholder="" value="0" readonly="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Lot:</label>
                    <input type="text" class="form-control" id="stockcalculator-lot" placeholder="" value="0" readonly="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Profit (%):</label>
                    <input type="text" class="form-control" id="stockcalculator-profitpercentage" placeholder="" value="0" readonly="true">
                </div>  
                <div class="form-group">
                    <label class="control-label" for="pwd">Sell:</label>
                    <input type="text" class="form-control" id="stockcalculator-sell" placeholder="" value="0" readonly="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Margin:</label>
                    <input type="text" class="form-control" id="stockcalculator-margin" placeholder="" value="0" readonly="true">
                </div> 
                <div class="form-group">
                    <button class="btn btn-success btn-block" id="stockcalculator-calculate" > Calculate </button>
                </div> 
            </div>
        </form>
    </div>   
    </div>
    </div>                 
</div>  