<?php

namespace app\modules\masterdata\models;

/**
 * This is the ActiveQuery class for [[JenisParamedis]].
 *
 * @see JenisParamedis
 */
class JenisParamedisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return JenisParamedis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return JenisParamedis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
