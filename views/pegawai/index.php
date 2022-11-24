<?php

use app\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\PegawaiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>
                <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); 
            ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'nama_pegawai',
                        'value' => function ($model) {
                            return $model->personal->nama_lengkap;
                        },

                    ],
                    [
                        'attribute' => 'jenis_kelamin',
                        'value' => function ($model) {
                            return $model->personal->jenis_kelamin;
                        },
                        'filter' => Html::activeDropDownList(
                            $searchModel,
                            'jenis_kelamin',
                            ['Pria' => 'Pria', 'Wanita' => 'Wanita'],
                            ['class' => 'form-control', 'prompt' => 'Semua']
                        )

                    ],
                    [
                        'attribute' => 'jenis_pegawai',
                        'value' => function ($model) {
                            return $model->jenis_pegawai;
                        },
                        'filter' => Html::activeDropDownList(
                            $searchModel,
                            'jenis_pegawai',
                            ['Non Medis' => 'Non Medis', 'Ahli Medis' => 'Ahli Medis'],
                            ['class' => 'form-control', 'prompt' => 'Semua']
                        ),
                        'headerOptions' => ['style' => 'width:200px']

                    ],
                    [
                        'attribute' => 'status_pegawai',
                        'value' => function ($model) {
                            return $model->status_pegawai;
                        },
                        'filter' => Html::activeDropDownList(
                            $searchModel,
                            'status_pegawai',
                            ['Pegawai Tetap' => 'Pegawai Tetap', 'Pekerja Sambilan' => 'Pekerja Sambilan', 'Tenaga Harian Lepas' => 'Tenaga Harian Lepas'],
                            ['class' => 'form-control', 'prompt' => 'Semua']
                        )

                    ],
                    'jabatan',

                    [
                        'attribute' => 'tanggal_bergabung',
                        'value' => function ($model) {
                            return date('d M Y', strtotime($model->tanggal_bergabung));
                        },
                    ],
                    'gaji',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Pegawai $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                        },
                        'headerOptions' => ['style' => 'width:85px']
                    ],
                ],

            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>
</div>