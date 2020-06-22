<?php

use app\models\Kelas;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'id',
        'class' => 'form-control',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control', 'autocomplete' => 'off']
    ]) ?>

    <?= $form->field($model, 'id_kelas')->dropDownList(ArrayHelper::map(Kelas::find()->all(), 'id_kelas', 'kelas'), ['Prompt' => 'Pilih Kelas']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Kembali', ['/student'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>