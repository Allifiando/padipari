<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\kritiksaran;

/**
 * SearchKritiksaran represents the model behind the search form about `backend\models\kritiksaran`.
 */
class SearchKritiksaran extends kritiksaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kritik_saran'], 'integer'],
            [['nama_kritik_saran', 'email_kritik_saran', 'penj_kritik_saran'], 'safe'],
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
        $query = kritiksaran::find();

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
            'id_kritik_saran' => $this->id_kritik_saran,
        ]);

        $query->andFilterWhere(['like', 'nama_kritik_saran', $this->nama_kritik_saran])
            ->andFilterWhere(['like', 'email_kritik_saran', $this->email_kritik_saran])
            ->andFilterWhere(['like', 'penj_kritik_saran', $this->penj_kritik_saran]);

        return $dataProvider;
    }
}
