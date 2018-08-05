<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Citas;

/**
 * CitasSearch represents the model behind the search form of `backend\models\Citas`.
 */
class CitasSearch extends Citas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDCITA', 'IDESPECIALIDAD'], 'integer'],
            [['FECHACREACION', 'FECHACITA', 'NOMBREPACIENTE', 'CEDULA', 'TELEFONO', 'HORA', 'ESTADO_CITA'], 'safe'],
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
        $query = Citas::find();

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
            'IDCITA' => $this->IDCITA,
            'IDESPECIALIDAD' => $this->IDESPECIALIDAD,
            'FECHACREACION' => $this->FECHACREACION,
            'FECHACITA' => $this->FECHACITA,
            'HORA' => $this->HORA,
        ]);

        $query->andFilterWhere(['like', 'NOMBREPACIENTE', $this->NOMBREPACIENTE])
            ->andFilterWhere(['like', 'CEDULA', $this->CEDULA])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'ESTADO_CITA', $this->ESTADO_CITA]);

        return $dataProvider;
    }
}
