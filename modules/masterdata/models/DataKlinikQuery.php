<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[DataKlinik]].
 *
 * @see DataKlinik
 */
class DataKlinikQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DataKlinik[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DataKlinik|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
