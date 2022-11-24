<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

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
                    <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'status_perkawinan')->widget(Select2::classname(), [
                                'data' => $statusPerkawinan,
                                'options' => ['placeholder' => 'Pilih Status Perkawinan ...'],
                                'hideSearch' => true,
                                'pluginOptions' => [
                                    'allowClear' => false
                                ],
                            ]);
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'pendidikan')->widget(Select2::classname(), [
                                'data' => $pendidikan,
                                'options' => ['placeholder' => 'Pilih pendidikan ...'],
                                'hideSearch' => true,
                                'pluginOptions' => [
                                    'allowClear' => false
                                ],
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'agama')->widget(Select2::classname(), [
                                'data' => $agama,
                                'options' => ['placeholder' => 'Pilih Agama ...'],
                                'hideSearch' => true,
                                'pluginOptions' => [
                                    'allowClear' => false
                                ],
                            ]);
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
                                'options' => ['placeholder' => 'Pilih Tanggal ...'],
                                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                'language' => 'id',
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd M yyyy'
                                ]
                            ]); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <?= $form->field($model, 'jenis_kelamin')->radioList(
                                ['Pria' => 'Pria', 'Wanita' => 'Wanita'],
                                [
                                    'item' => function ($index, $value, $name, $checked, $label) {
                                        return '<label><input type="radio" value="' . $value . '" name="' . $name . '" ' . ($checked ? "checked" : "") . '> ' . $label . '</label>';
                                    }
                                ]
                            ) ?>
                        </div>
                        <div class="col-md-10">
                            <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>


</div>