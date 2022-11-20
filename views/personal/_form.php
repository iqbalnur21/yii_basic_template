<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Personal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personal-form">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi</h6>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'status_perkawinan')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>
                    <div class="form-group mt-5">
                        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>


</div>