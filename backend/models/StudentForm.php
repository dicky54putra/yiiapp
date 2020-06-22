<?php

namespace app\models;

use yii\base\Model;

class StudentForm extends Model
{
    public $nama;
    public $alamat;
    public $tanggal_lahir;
    public $kelas;

    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
            'id_kelas' => 'Kelas',
        ];
    }

    public function rules()
    {
        return [
            ['nama', 'required', 'message' => 'Nama Tidak Boleh Kosong.'],
            ['nama', 'string', 'max' => '50'],
            ['alamat', 'required', 'message' => 'Alamat Tidak Boleh Kosong.'],
            ['alamat', 'string', 'max' => '50'],
        ];
    }
}
