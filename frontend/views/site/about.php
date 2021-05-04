<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is made using Yii2 advanced template without utilizing
    the Gii tool. Click <a href="http://localhost/index.php?r=employee">here</a> to go to the CRUD page</p>
    <p>Thank you</p>

    <p>Reference: <br/>
    <a href="http://latcoding.com/2015/08/05/create-crud-in-yii2-without-gii/">latcoding.com</a></p>

    <code><?= __FILE__ ?></code>
</div>
