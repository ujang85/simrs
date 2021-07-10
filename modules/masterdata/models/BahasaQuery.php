<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[Bahasa]].
 *
 * @see Bahasa
 */
class BahasaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Bahasa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Bahasa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
