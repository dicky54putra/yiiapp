<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = "Manual CRUD";

?>

<div class="row">
    <div class="col-md-12">
        <h1>Add Student</h1>
        <hr />
        <?php

        echo Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => [
                ['label' => 'Student List', 'url' => ['manualcrud/index']],
                'Add Student',
            ],
        ]);

        ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin([
            'id' => 'student-form',
            'options' => ['class' => 'form-horizontal']
        ]) ?>

        <div class="form-group">
            <div class="col-lg-8">
                <?= $form->field($forms, 'nama')->hint('Nama'); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-8">
                <?= $form->field($forms, 'alamat')->hint('Alamat'); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-8">
                <?= $form->field($forms, 'id_kelas')->dropDownList($kelas, ['prompt' => 'Mohon pilih kelas'])->label('Kelas') ?>
            </div>
        </div>
    </div>
</div>