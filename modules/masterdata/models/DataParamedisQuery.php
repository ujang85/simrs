<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[DataParamedis]].
 *
 * @see DataParamedis
 */
class DataParamedisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DataParamedis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DataParamedis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
