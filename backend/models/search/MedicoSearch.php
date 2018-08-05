<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Medico;

/**
 * MedicoSearch represents the model behind the search form of `backend\models\Medico`.
 */
class MedicoSearch extends Medico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDMEDICO'], 'integer'],
            [['NOMBRES_MEDICO', 'APELLIDOS_MEDICO', 'TELEFONO_MEDICO'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Medico::find();

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
            'IDMEDICO' => $this->IDMEDICO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRES_MEDICO', $this->NOMBRES_MEDICO])
            ->andFilterWhere(['like', 'APELLIDOS_MEDICO', $this->APELLIDOS_MEDICO])
            ->andFilterWhere(['like', 'TELEFONO_MEDICO', $this->TELEFONO_MEDICO]);

        return $dataProvider;
    }
}
