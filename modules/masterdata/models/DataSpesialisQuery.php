<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[DataSpesialis]].
 *
 * @see DataSpesialis
 */
class DataSpesialisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DataSpesialis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DataSpesialis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
