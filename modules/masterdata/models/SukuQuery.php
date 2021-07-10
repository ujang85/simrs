<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[Suku]].
 *
 * @see Suku
 */
class SukuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Suku[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Suku|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
