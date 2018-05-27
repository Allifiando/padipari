<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Agenda;

/**
 * AgendaSearch represents the model behind the search form about `backend\models\Agenda`.
 */
class AgendaSearch extends Agenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agenda', 'id_galeri'], 'integer'],
            [['nama_agenda', 'waktu', 'ket_agenda', 'tempat', 'create_at'], 'safe'],
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
        $query = Agenda::find();

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
            'id_agenda' => $this->id_agenda,
            'id_galeri' => $this->id_galeri,
            'create_at' => $this->create_at,
        ]);

        $query->andFilterWhere(['like', 'nama_agenda', $this->nama_agenda])
            ->andFilterWhere(['like', 'waktu', $this->waktu])
            ->andFilterWhere(['like', 'ket_agenda', $this->ket_agenda])
            ->andFilterWhere(['like', 'tempat', $this->tempat]);

        return $dataProvider;
    }
}
