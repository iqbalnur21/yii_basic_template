<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Personal $model */

$this->title = 'Update Personal: ' . $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_personal, 'url' => ['view', 'id_personal' => $model->id_personal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personal-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
