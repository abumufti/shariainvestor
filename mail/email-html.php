<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>

<p>Dear Sharia Investor,</p>

<p><?= $message; ?></p>



<p>Regards,</p>
<p><?=$name;?></p>
<a href="mailto:<?= $email ?>" target="_top"><?= $email ?></a>