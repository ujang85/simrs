<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "data_paramedis".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $alamat
 * @property string|null $sex
 * @property string|null $no_hp
 * @property int|null $spesialis_id
 * @property int|null $paramedis_jenis
 * @property string|null $no_sip
 * @property string $sip_ed
 * @property string|null $no_str
 * @property string $str_ed
 * @property string|null $hapus
 */
class DataParamedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_paramedis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sex', 'hapus'], 'string'],
            [['spesialis_id', 'paramedis_jenis'], 'integer'],
            [['sip_ed', 'str_ed'], 'required'],
            [['sip_ed', 'str_ed'], 'safe'],
            [['nama'], 'string', 'max' => 80],
            [['alamat'], 'string', 'max' => 90],
            [['no_hp'], 'string', 'max' => 20],
            [['no_sip', 'no_str'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'sex' => 'Jenis Kelamin',
            'no_hp' => 'Nomor HP',
            'spesialis_id' => 'Spesialis',
            'paramedis_jenis' => 'Type Paramedis',
            'no_sip' => 'Nomor SIP',
            'sip_ed' => 'Akhir Masa Berlaku SIP',
            'no_str' => 'Nomor STR',
            'str_ed' => 'Akhir Masa Berlaku STR',
            'hapus' => 'Hapus',
        ];
    }
    public function getSpesialis()
    {
        return $this->hasOne(DataSpesialis::className(), [ 'id'=> 'spesialis_id']);
    }
    public function getParamedis()
    {
        return $this->hasOne(JenisParamedis::className(), [ 'id'=> 'paramedis_jenis']);
    }
    /**
     * {@inheritdoc}
     * @return DataParamedisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DataParamedisQuery(get_called_class());
    }
}
