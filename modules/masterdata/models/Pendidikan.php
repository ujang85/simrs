<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property int $no_urut
 * @property string|null $jenjang
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenjang'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_urut' => 'No Urut',
            'jenjang' => 'Jenjang',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PendidikanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PendidikanQuery(get_called_class());
    }
}
