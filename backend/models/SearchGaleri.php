<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\galeri;

/**
 * SearchGaleri represents the model behind the search form about `backend\models\galeri`.
 */
class SearchGaleri extends galeri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_galeri'], 'integer'],
            [['nama_galeri', 'foto'], 'safe'],
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
        $query = galeri::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_galeri' => $this->id_galeri,
        ]);

        $query->andFilterWhere(['like', 'nama_galeri', $this->nama_galeri])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
