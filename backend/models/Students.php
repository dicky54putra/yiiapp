<?php

namespace app\models;

use yii\db\ActiveRecord;

class Students extends ActiveRecord
{
    public static function tableName()
    {
        return 'student';
    }

    public function getKelass()
    {
        return $this->hasOne(Kelass::className(), ['id_kelas' => 'id_kelas']);
    }
}
