<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Books;

/**
 * BooksSearch represents the model behind the search form about `app\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookid', 'bookname', 'author', 'publishing', 'datein'], 'safe'],
            [['categoryid', 'quantity_in', 'quantity_out', 'quantity_loss'], 'integer'],
            [['price'], 'number'],
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
        $query = Books::find();

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
            'categoryid' => $this->categoryid,
            'price' => $this->price,
            'datein' => $this->datein,
            'quantity_in' => $this->quantity_in,
            'quantity_out' => $this->quantity_out,
            'quantity_loss' => $this->quantity_loss,
        ]);

        $query->andFilterWhere(['like', 'bookid', $this->bookid])
            ->andFilterWhere(['like', 'bookname', $this->bookname])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'publishing', $this->publishing]);

        return $dataProvider;
    }
}
