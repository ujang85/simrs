<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property int $id
 * @property string|null $nama_pekerjaan
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pekerjaan'], 'string', 'max' => 90],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pekerjaan' => 'Nama Pekerjaan',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PekerjaanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PekerjaanQuery(get_called_class());
    }
}
