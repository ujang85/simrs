<?php

namespace app\modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property int $id_agm
 * @property string|null $agama
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agama'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_agm' => 'Id Agm',
            'agama' => 'Agama',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AgamaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AgamaQuery(get_called_class());
    }
}
