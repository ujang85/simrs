<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "bahasa".
 *
 * @property int $id
 * @property string|null $nama_bahasa
 */
class Bahasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bahasa'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_bahasa' => 'Nama Bahasa',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BahasaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BahasaQuery(get_called_class());
    }
}
