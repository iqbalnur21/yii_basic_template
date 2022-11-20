<?php

use app\models\Personal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PersonalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">
    <div class="card shadow mb-4">
        <div class="card-body">

            <!-- <h1><?= Html::encode($this->title) ?></h1> -->

            <p>
                <?= Html::a('Tambah User', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); 
            ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'nama_lengkap',
                    'jenis_kelamin',
                    'tempat_lahir',
                    'tanggal_lahir',
                    //'status_perkawinan',
                    'agama',
                    //'pendidikan',
                    //'alamat',
                    //'no_ktp',
                    //'no_hp',
                    //'email:email',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Personal $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_personal' => $model->id_personal]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>


</div>