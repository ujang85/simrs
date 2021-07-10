<?php

namespace app\modules\masterdata\models;

use Yii;

/**
 * This is the model class for table "data_klinik".
 *
 * @property int $id
 * @property int|null $kelas_type
 * @property string|null $nama_klinik
 * @property string $active
 * @property string|null $visible
 * @property string|null $type
 * @property int $jenis induk,pustu,pusling,posyandu,pkd
 * @property int $jml_kunjungan
 * @property string|null $kode_bpjs
 * @property string|null $nama_bpjs
 */
class DataKlinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_klinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas_type', 'jenis', 'jml_kunjungan'], 'integer'],
            [['active', 'visible', 'type'], 'string'],
            [['active', 'nama_klinik', 'type'], 'required','message'=>'Tidak Boleh Kosong'],
            [['nama_klinik', 'kode_bpjs', 'nama_bpjs'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelas_type' => 'Kelas Type',
            'nama_klinik' => 'Nama Klinik',
            'active' => 'Active',
            'visible' => 'Visible',
            'type' => 'Type',
            'jenis' => 'Jenis',
            'jml_kunjungan' => 'Jml Kunjungan',
            'kode_bpjs' => 'Kode Bpjs',
            'nama_bpjs' => 'Nama Bpjs',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DataKlinikQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DataKlinikQuery(get_called_class());
    }
}
