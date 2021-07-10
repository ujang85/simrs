<?php

namespace app\modules\pendaftaran\models;

/**
 * This is the ActiveQuery class for [[Agama]].
 *
 * @see Agama
 */
class AgamaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Agama[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Agama|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
