<?php

namespace app\modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property int|null $rm_lama
 * @property string|null $rm_baru
 * @property string|null $lama_baru
 * @property string|null $nik
 * @property string $nama
 * @property string $sex
 * @property string $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string|null $golongan_darah
 * @property string $address
 * @property string|null $email
 * @property string|null $suku
 * @property string|null $bahasa
 * @property string|null $buta_huruf
 * @property string|null $bahasa_ibu
 * @property string|null $agama
 * @property string|null $desa_id
 * @property string|null $sub_district_id
 * @property string|null $district_id
 * @property string|null $province_id
 * @property string|null $pendidikan
 * @property string|null $pekerjaan
 * @property int $user_id
 * @property string|null $status_kawin
 * @property string|null $tgl_daftar
 * @property string|null $phone
 * @property string|null $penanggungjawab_nama
 * @property string|null $penanggungjawab_ktp
 * @property string|null $penanggungjawab_alamat
 * @property string|null $penanggungjawab_telp
 * @property string|null $hub_saudara
 * @property string|null $suami
 * @property string|null $istri
 * @property string|null $ayah
 * @property string|null $ibu
 * @property int|null $jenis_bayar
 * @property string|null $no_asuransi
 * @property string|null $desa
 * @property string|null $sub_district
 * @property string|null $district
 * @property string $cetak_kartu
 * @property string|null $dead
 * @property string|null $dead_date
 * @property string|null $ada_alergi_obat
 * @property string|null $alergi_obat
 * @property string|null $ada_alergi_makanan
 * @property string|null $alergi_makanan
 * @property string|null $riwayat_makanan
 * @property string|null $riwayat_penyakit
 * @property string|null $riwayat_obat
 * @property int|null $penyakit_menular_id
 * @property string|null $covid19_status
 * @property string|null $covid19_date
 * @property string|null $covid19_data
 * @property string|null $domisili
 * @property string|null $catatan_pasien
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $hapus
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rm_lama', 'user_id', 'jenis_bayar', 'penyakit_menular_id', 'hapus'], 'integer'],
            [['lama_baru', 'sex', 'golongan_darah', 'status_kawin', 'alergi_obat', 'alergi_makanan', 'riwayat_makanan', 'riwayat_penyakit', 'riwayat_obat', 'covid19_data', 'catatan_pasien'], 'string'],
            [['tanggal_lahir', 'tgl_daftar', 'dead_date', 'covid19_date', 'create_at', 'update_at'], 'safe'],
            [['user_id'], 'required'],
            [['rm_baru', 'sub_district_id'], 'string', 'max' => 7],
            [['nik'], 'string', 'max' => 30],
            [['nama', 'tempat_lahir', 'email', 'suku', 'bahasa', 'bahasa_ibu', 'agama', 'phone', 'penanggungjawab_nama', 'penanggungjawab_ktp', 'penanggungjawab_telp', 'hub_saudara', 'suami', 'istri', 'ayah', 'ibu', 'no_asuransi', 'desa', 'sub_district', 'district', 'covid19_status'], 'string', 'max' => 100],
            [['address', 'penanggungjawab_alamat', 'domisili'], 'string', 'max' => 255],
            [['buta_huruf', 'cetak_kartu', 'dead', 'ada_alergi_obat', 'ada_alergi_makanan'], 'string', 'max' => 1],
            [['desa_id'], 'string', 'max' => 10],
            [['district_id'], 'string', 'max' => 4],
            [['province_id'], 'string', 'max' => 2],
            [['pendidikan', 'pekerjaan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rm_lama' => 'Rm Lama',
            'rm_baru' => 'Rm Baru',
            'lama_baru' => 'Lama Baru',
            'nik' => 'Nik',
            'nama' => 'Nama',
            'sex' => 'Sex',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'golongan_darah' => 'Golongan Darah',
            'address' => 'Address',
            'email' => 'Email',
            'suku' => 'Suku',
            'bahasa' => 'Bahasa',
            'buta_huruf' => 'Buta Huruf',
            'bahasa_ibu' => 'Bahasa Ibu',
            'agama' => 'Agama',
            'desa_id' => 'Desa ID',
            'sub_district_id' => 'Sub District ID',
            'district_id' => 'District ID',
            'province_id' => 'Province ID',
            'pendidikan' => 'Pendidikan',
            'pekerjaan' => 'Pekerjaan',
            'user_id' => 'User ID',
            'status_kawin' => 'Status Kawin',
            'tgl_daftar' => 'Tgl Daftar',
            'phone' => 'Phone',
            'penanggungjawab_nama' => 'Penanggungjawab Nama',
            'penanggungjawab_ktp' => 'Penanggungjawab Ktp',
            'penanggungjawab_alamat' => 'Penanggungjawab Alamat',
            'penanggungjawab_telp' => 'Penanggungjawab Telp',
            'hub_saudara' => 'Hub Saudara',
            'suami' => 'Suami',
            'istri' => 'Istri',
            'ayah' => 'Ayah',
            'ibu' => 'Ibu',
            'jenis_bayar' => 'Jenis Bayar',
            'no_asuransi' => 'No Asuransi',
            'desa' => 'Desa',
            'sub_district' => 'Sub District',
            'district' => 'District',
            'cetak_kartu' => 'Cetak Kartu',
            'dead' => 'Dead',
            'dead_date' => 'Dead Date',
            'ada_alergi_obat' => 'Ada Alergi Obat',
            'alergi_obat' => 'Alergi Obat',
            'ada_alergi_makanan' => 'Ada Alergi Makanan',
            'alergi_makanan' => 'Alergi Makanan',
            'riwayat_makanan' => 'Riwayat Makanan',
            'riwayat_penyakit' => 'Riwayat Penyakit',
            'riwayat_obat' => 'Riwayat Obat',
            'penyakit_menular_id' => 'Penyakit Menular ID',
            'covid19_status' => 'Covid19 Status',
            'covid19_date' => 'Covid19 Date',
            'covid19_data' => 'Covid19 Data',
            'domisili' => 'Domisili',
            'catatan_pasien' => 'Catatan Pasien',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'hapus' => 'Hapus',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PasienQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PasienQuery(get_called_class());
    }
}
