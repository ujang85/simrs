<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "data_spesialis".
 *
 * @property int $id
 * @property string $name
 * @property string $active
 */
class DataSpesialis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_spesialis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Type Spesialis',
            'active' => 'Active',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DataSpesialisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DataSpesialisQuery(get_called_class());
    }
}
