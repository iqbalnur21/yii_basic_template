<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pegawai</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col md-6">
                    <?= $form->field($model, 'id_personal')->widget(Select2::classname(), [
                        'data' => $personal,
                        'options' => ['placeholder' => 'Pilih Jenis Pegawai ...'],
                        'hideSearch' => true,
                        'pluginOptions' => [
                            'allowClear' => false
                        ],
                    ])->label('Nama Pegawai');
                    ?>
                    <?= $form->field($model, 'tanggal_bergabung')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Pilih Tanggal ...'],
                        'type' => DatePicker::TYPE_COMPONENT_APPEND,
                        'language' => 'id',
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd M yyyy'
                        ]
                    ]); ?>
                </div>
                <div class="col md-6">
                    <?= $form->field($model, 'jenis_pegawai')->widget(Select2::classname(), [
                        'data' => $jenis_pegawai,
                        'options' => ['placeholder' => 'Pilih Jenis Pegawai ...'],
                        'hideSearch' => true,
                        'pluginOptions' => [
                            'allowClear' => false
                        ],
                    ]);
                    ?>
                    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col md-6">
                    <?= $form->field($model, 'status_pegawai')->widget(Select2::classname(), [
                        'data' => $status_pegawai,
                        'options' => ['placeholder' => 'Pilih Status Pegawai ...'],
                        'hideSearch' => true,
                        'pluginOptions' => [
                            'allowClear' => false
                        ],
                    ]);
                    ?>
                    <?= $form->field($model, 'gaji')->textInput(['type' => 'number']) ?>
                </div>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>