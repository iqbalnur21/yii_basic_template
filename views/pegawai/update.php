<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */

$this->title = 'Edit Pegawai: ' . $model->personal->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id_pegawai' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="pegawai-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        'jenis_pegawai' => $jenis_pegawai,
        'status_pegawai' => $status_pegawai,
        'personal' => $personal
    ]) ?>

</div>
