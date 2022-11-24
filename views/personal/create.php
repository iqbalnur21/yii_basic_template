<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Personal $model */

$this->title = 'Tambah User';
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-create">


    <?= $this->render('_form', [
        'model' => $model,
        'statusPerkawinan' => $statusPerkawinan,
        'agama' => $agama,
        'pendidikan' => $pendidikan,
    ]) ?>

</div>
