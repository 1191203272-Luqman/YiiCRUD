<?php
use yii\helpers\Html;

$this->title = 'CRUD';

$this->params['breadcrumbs'][] = $this->title;
?>

<style>
table th,td{
    padding:10px;
    text-align: center;
}
table{
    width:100%;
}
</style>

<h1><?= Html::encode($this->title) ?></h1>

<?=Html::a('Create', ['employee/create'], ['class' => 'btn btn-success']); ?>
<br/>
<br/>
<table border="1">
    <tr>
        <th>Full name</th>
        <th>Address</th>
        <th>Number</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
            <td><?= $field->full_name; ?></td>
            <td><?= $field->address; ?></td>
            <td><?= $field->number; ?></td>
            <td><?= Html::a("Edit", ['employee/edit', 'id' => $field->id]); ?> | <?= Html::a("Delete", ['employee/delete', 'id' => $field->id]); ?></td>
    </tr>
    <?php } ?>
</table>