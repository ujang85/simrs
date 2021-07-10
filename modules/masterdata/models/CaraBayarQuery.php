<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[CaraBayar]].
 *
 * @see CaraBayar
 */
class CaraBayarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CaraBayar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CaraBayar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
