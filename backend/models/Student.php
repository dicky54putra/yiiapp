<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $tanggal_lahir
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'tanggal_lahir'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
            'id_kelas' => 'Kelas',
        ];
    }

    public function getkelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'id_kelas']);
    }
}
