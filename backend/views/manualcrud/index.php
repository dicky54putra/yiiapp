<?php

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

$this->title = 'crudManual';
?>
<div class="row">
    <div class="col">
        <h1>Student List</h1>
        <hr>

    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <a href="<?= Url::to(['manualcrud/add']); ?>" class="list-group-item">Add Student</a>
            <a href="<?= Url::to(['manual-crud/delete-all']); ?>" class="list-group-item">Delete All</a>
        </div>
    </div>

    <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($students) > 0) { ?>
                    <?php foreach ($students as $student) : ?>
                        <tr>
                            <td><?= Html::encode("{$student['nama']}") ?></td>
                            <td><?= Html::encode("{$student['alamat']}") ?></td>
                            <td><?= Html::encode("{$student->kelass['kelas']}") ?></td>
                            <td style="text-align: center; width:15%;">
                                <a href="<?= Url::to(['manualcrud/detail', 'id' => $student['id']]); ?>" class="btn btn-success btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php } else { ?>
                    <tr style="text-align: center; font-size:15px; padding:25px;">
                        <td>Data tidak ditemukan!</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>