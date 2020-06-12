<?php

use yii\helpers\Url;

$this->title = "detai Page";

?>

<div class="row">
    <div class="col-md-12">
        <h1><?= $students['nama'] ?></h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <a href="<?= Url::to(['manual-crud/edit']); ?>" class="list-group-item">Edit Student</a>
            <a href="<?= Url::to(['manual-crud/delete']); ?>" class="list-group-item">Delete Student</a>
        </div>
    </div>

    <div class="col-md-10">
        <div class="col-md-8">
            <p><b>Nama</b>: <?= $students['nama'] ?></p>
            <p><b>Kelas</b>: <?= $students->kelass['kelas'] ?></p>
            <p><b>Alamat</b>: <?= $students['alamat'] ?></p>
        </div>
    </div>

</div>