<?php

namespace app\modules\pendaftaran\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\pendaftaran\models\Pasien;

/**
 * PasienSearch represents the model behind the search form about `app\modules\pendaftaran\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rm_lama', 'user_id', 'jenis_bayar', 'penyakit_menular_id'], 'integer'],
            [['lama_baru', 'nik', 'nama', 'sex', 'tempat_lahir', 'tanggal_lahir', 'golongan_darah', 'address', 'email', 'suku', 'bahasa', 'buta_huruf', 'bahasa_ibu', 'agama', 'desa_id', 'sub_district_id', 'district_id', 'province_id', 'pendidikan', 'pekerjaan', 'status_kawin', 'tgl_daftar', 'phone', 'penanggungjawab_nama', 'penanggungjawab_ktp', 'penanggungjawab_alamat', 'penanggungjawab_telp', 'hub_saudara', 'suami', 'istri', 'ayah', 'ibu', 'no_asuransi', 'desa', 'sub_district', 'district', 'cetak_kartu', 'dead', 'dead_date', 'ada_alergi_obat', 'alergi_obat', 'ada_alergi_makanan', 'alergi_makanan', 'riwayat_makanan', 'riwayat_penyakit', 'riwayat_obat', 'covid19_status', 'covid19_date', 'covid19_data', 'domisili', 'catatan_pasien'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasien::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'rm_lama' => $this->rm_lama,
            'tanggal_lahir' => $this->tanggal_lahir,
            'user_id' => $this->user_id,
            'tgl_daftar' => $this->tgl_daftar,
            'jenis_bayar' => $this->jenis_bayar,
            'dead_date' => $this->dead_date,
            'penyakit_menular_id' => $this->penyakit_menular_id,
            'covid19_date' => $this->covid19_date,
        ]);

        $query->andFilterWhere(['like', 'lama_baru', $this->lama_baru])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'golongan_darah', $this->golongan_darah])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'suku', $this->suku])
            ->andFilterWhere(['like', 'bahasa', $this->bahasa])
            ->andFilterWhere(['like', 'buta_huruf', $this->buta_huruf])
            ->andFilterWhere(['like', 'bahasa_ibu', $this->bahasa_ibu])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'desa_id', $this->desa_id])
            ->andFilterWhere(['like', 'sub_district_id', $this->sub_district_id])
            ->andFilterWhere(['like', 'district_id', $this->district_id])
            ->andFilterWhere(['like', 'province_id', $this->province_id])
            ->andFilterWhere(['like', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'status_kawin', $this->status_kawin])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'penanggungjawab_nama', $this->penanggungjawab_nama])
            ->andFilterWhere(['like', 'penanggungjawab_ktp', $this->penanggungjawab_ktp])
            ->andFilterWhere(['like', 'penanggungjawab_alamat', $this->penanggungjawab_alamat])
            ->andFilterWhere(['like', 'penanggungjawab_telp', $this->penanggungjawab_telp])
            ->andFilterWhere(['like', 'hub_saudara', $this->hub_saudara])
            ->andFilterWhere(['like', 'suami', $this->suami])
            ->andFilterWhere(['like', 'istri', $this->istri])
            ->andFilterWhere(['like', 'ayah', $this->ayah])
            ->andFilterWhere(['like', 'ibu', $this->ibu])
            ->andFilterWhere(['like', 'no_asuransi', $this->no_asuransi])
            ->andFilterWhere(['like', 'desa', $this->desa])
            ->andFilterWhere(['like', 'sub_district', $this->sub_district])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'cetak_kartu', $this->cetak_kartu])
            ->andFilterWhere(['like', 'dead', $this->dead])
            ->andFilterWhere(['like', 'ada_alergi_obat', $this->ada_alergi_obat])
            ->andFilterWhere(['like', 'alergi_obat', $this->alergi_obat])
            ->andFilterWhere(['like', 'ada_alergi_makanan', $this->ada_alergi_makanan])
            ->andFilterWhere(['like', 'alergi_makanan', $this->alergi_makanan])
            ->andFilterWhere(['like', 'riwayat_makanan', $this->riwayat_makanan])
            ->andFilterWhere(['like', 'riwayat_penyakit', $this->riwayat_penyakit])
            ->andFilterWhere(['like', 'riwayat_obat', $this->riwayat_obat])
            ->andFilterWhere(['like', 'covid19_status', $this->covid19_status])
            ->andFilterWhere(['like', 'covid19_data', $this->covid19_data])
            ->andFilterWhere(['like', 'domisili', $this->domisili])
            ->andFilterWhere(['like', 'catatan_pasien', $this->catatan_pasien]);

        return $dataProvider;
    }
}
