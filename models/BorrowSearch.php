<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Borrow;

/**
 * BorrowSearch represents the model behind the search form about `app\models\Borrow`.
 */
class BorrowSearch extends Borrow
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bid', 'loss'], 'integer'],
            [['readerid', 'bookid', 'dateborrow', 'datereturn'], 'safe'],
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
        $query = Borrow::find();

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
            'bid' => $this->bid,
            'loss' => $this->loss,
        ]);

        $query->andFilterWhere(['like', 'readerid', $this->readerid])
            ->andFilterWhere(['like', 'bookid', $this->bookid])
            ->andFilterWhere(['<', 'dateborrow', $this->dateborrow])
            ->andFilterWhere(['<=', 'datereturn', $this->datereturn])
            ->orderBy('loss ASC'); //未归还的记录前置

        return $dataProvider;
    }
}
