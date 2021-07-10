<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "cara_bayar".
 *
 * @property int $id
 * @property string $jaminan
 * @property string $active
 */
class CaraBayar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cara_bayar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'string'],
            [['jaminan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jaminan' => 'Jaminan',
            'active' => 'Active',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CaraBayarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CaraBayarQuery(get_called_class());
    }
}
