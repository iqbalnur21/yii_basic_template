<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PegawaiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'jenis_pegawai') ?>

    <?= $form->field($model, 'status_pegawai') ?>

    <?= $form->field($model, 'jabatan') ?>

    <?= $form->field($model, 'tanggal_bergabung') ?>

    <?= $form->field($model, 'gaji') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
