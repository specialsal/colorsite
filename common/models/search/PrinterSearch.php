<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Printer;

/**
 * PrinterSearch represents the model behind the search form about `common\models\Printer`.
 */
class PrinterSearch extends Printer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ownerid', 'isuse', 'store_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'machine_code', 'actions'], 'safe'],
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
        $query = Printer::find();

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
            'isuse' => $this->isuse,
            'store_id' => $this->store_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'machine_code', $this->machine_code])
            ->andFilterWhere(['like', 'actions', $this->actions]);

        return $dataProvider;
    }
}