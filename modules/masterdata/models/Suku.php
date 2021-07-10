<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "suku".
 *
 * @property int $id
 * @property string|null $nama_suku
 */
class Suku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_suku'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_suku' => 'Nama Suku',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SukuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SukuQuery(get_called_class());
    }
}
