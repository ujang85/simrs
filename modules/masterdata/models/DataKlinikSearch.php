<?php

namespace app\modules\masterdata\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\masterdata\models\DataKlinik;

/**
 * DataKlinikSearch represents the model behind the search form about `app\modules\masterdata\models\DataKlinik`.
 */
class DataKlinikSearch extends DataKlinik
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kelas_type', 'jml_kunjungan'], 'integer'],
            [['nama_klinik', 'active', 'visible', 'type', 'jenis', 'kode_bpjs', 'nama_bpjs'], 'safe'],
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
        $query = DataKlinik::find();

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
            'kelas_type' => $this->kelas_type,
            'jml_kunjungan' => $this->jml_kunjungan,
        ]);

        $query->andFilterWhere(['like', 'nama_klinik', $this->nama_klinik])
            ->andFilterWhere(['like', 'active', $this->active])
            ->andFilterWhere(['like', 'visible', $this->visible])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'kode_bpjs', $this->kode_bpjs])
            ->andFilterWhere(['like', 'nama_bpjs', $this->nama_bpjs]);

        return $dataProvider;
    }
}
