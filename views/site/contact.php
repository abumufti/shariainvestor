<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>

<div class="jumbotron text-center" style="background-image: url('<?=Yii::$app->homeUrl;?>img/home-bg.jpg'); background-size:cover;margin-bottom:0">
  <h1>Sharia Investor</h1> 
  <p>Sakinah Berinvestasi Saham.</p> <br><br><br>
</div>

<div class="container-fluid" style="text-align:justify;">

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Terima kasih telah menghubungi kami.
        </div>

    <?php else: ?>

    <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                
                <h2><?= Html::encode($this->title) ?></h2>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'subject')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>

</div>