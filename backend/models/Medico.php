<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "medico".
 *
 * @property int $IDMEDICO
 * @property string $NOMBRES_MEDICO
 * @property string $APELLIDOS_MEDICO
 * @property string $TELEFONO_MEDICO
 *
 * @property Catespecialidad[] $catespecialidads
 */
class Medico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOMBRES_MEDICO', 'APELLIDOS_MEDICO'], 'string', 'max' => 50],
            [['TELEFONO_MEDICO'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDMEDICO' => 'Idmedico',
            'NOMBRES_MEDICO' => 'Nombres  Medico',
            'APELLIDOS_MEDICO' => 'Apellidos  Medico',
            'TELEFONO_MEDICO' => 'Telefono  Medico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatespecialidads()
    {
        return $this->hasMany(Catespecialidad::className(), ['IDMEDICO' => 'IDMEDICO']);
    }
}
