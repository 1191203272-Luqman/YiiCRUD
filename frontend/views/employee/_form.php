<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Edit';

$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'full_name'); ?>
    <?=$form->field($model, 'address'); ?>
    <?=$form->field($model, 'number'); ?>

    <?=Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-succes' : 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>