<?php

namespace app\modules\pendaftaran\models;

/**
 * This is the ActiveQuery class for [[Pasien]].
 *
 * @see Pasien
 */
class PasienQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pasien[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pasien|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
