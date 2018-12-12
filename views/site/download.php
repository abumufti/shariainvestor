<?php
use yii\helpers\BaseUrl;
use yii2assets\pdfjs\PdfJs;
?>

<?= PdfJs::widget([
  'url'=> BaseUrl::base().$path
]); ?>

