<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Stores;

/**
 * StoresSearch represents the model behind the search form about `common\models\Stores`.
 */
class StoresSearch extends Stores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ownerid', 'created_at', 'updated_at'], 'integer'],
            [['token', 'name', 'desc', 'logo', 'address', 'lng', 'lat', 'phone'], 'safe'],
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
        $query = Stores::find();

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
            'id' => $this->id,
            'ownerid' => $this->ownerid,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'token', $this->token])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'lng', $this->lng])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
