<?php

namespace app\modules\masterdata\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\masterdata\models\DataParamedis;

/**
 * DataParamedisSearch represents the model behind the search form about `app\modules\masterdata\models\DataParamedis`.
 */
class DataParamedisSearch extends DataParamedis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', ], 'integer'],
            [['nama','paramedis_jenis','spesialis_id','alamat', 'sex', 'no_hp', 'no_sip', 'sip_ed', 'no_str', 'str_ed', 'hapus'], 'safe'],
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
        $query = DataParamedis::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query ->joinWith('spesialis');
        $query ->joinWith('paramedis');
        $query->andFilterWhere([
            'id' => $this->id,
           // 'spesialis_id' => $this->spesialis_id,
          //  'paramedis_jenis' => $this->paramedis_jenis,
            'sip_ed' => $this->sip_ed,
            'str_ed' => $this->str_ed,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'name', $this->spesialis_id])
            ->andFilterWhere(['like', 'nama_paramedis', $this->paramedis_jenis])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'no_sip', $this->no_sip])
            ->andFilterWhere(['like', 'no_str', $this->no_str])
            ->andFilterWhere(['like', 'hapus', $this->hapus]);

        return $dataProvider;
    }
}
