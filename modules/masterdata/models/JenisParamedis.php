<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "jenis_paramedis".
 *
 * @property int $id
 * @property string $nama
 * @property string $active
 */
class JenisParamedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_paramedis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'string'],
            [['nama_paramedis'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_paramedis' => 'Type Paramedis',
            'active' => 'Active',
        ];
    }

    /**
     * {@inheritdoc}
     * @return JenisParamedisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisParamedisQuery(get_called_class());
    }
}
