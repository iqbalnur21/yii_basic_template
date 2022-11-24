<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Personal $model */

$this->title = $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personal-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Identitas Pribadi</h6>
        </div>
        <div class="card-body">
            <p>
                <?= Html::a('Update', ['update', 'id_personal' => $model->id_personal], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id_personal' => $model->id_personal], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <div class="row">

                <div class="col-md-6">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'nama_lengkap',
                            'nama_panggilan',
                            'jenis_kelamin',
                            'tempat_lahir',
                            [
                                'label' => 'Tanggal Lahir',
                                'value' => date('d M Y', strtotime($model->tanggal_lahir)),
                            ],
                            'status_perkawinan',
                        ],
                    ]) ?>
                </div>
                <div class="col-md-6">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'agama',
                            'pendidikan',
                            'alamat',
                            'no_ktp',
                            'no_hp',
                            'email:email',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>


</div>