<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */

$this->title = $model->personal->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pegawai</h6>
        </div>
        <div class="card-body">
            <p>
                <?= Html::a('Update', ['update', 'id_pegawai' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id_pegawai' => $model->id_pegawai], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'jenis_pegawai',
                    'status_pegawai',
                    'jabatan',
                    [
                        'label' => 'Tanggal Bergabung',
                        'value' => date('d M Y', strtotime($model->tanggal_bergabung))
                    ],
                    'gaji',
                ],
            ]) ?>
        </div>
    </div>
</div>