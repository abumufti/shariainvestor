<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
  <h1>Sharia Investor</h1> 
  <p>Sakinah Berinvestasi Saham.</p> <br><br><br>
</div>

<div class="container-fluid" style="text-align:justify;">
    
    <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

    <h2><?= Html::encode($this->title) ?></h2>

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

    <?php ActiveForm::end(); ?>
            </div>
        </div>
</div>
