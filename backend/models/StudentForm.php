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
            'nama' => 'Nama',
        ]
    }

}
