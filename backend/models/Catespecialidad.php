<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "catespecialidad".
 *
 * @property int $IDESPECIALIDAD CLAVE PRIMARIA DE LA TABLA ESPECIALIDAD ADEMAS ES IDENTITY
 * @property int $IDMEDICO
 * @property string $NOMBREESPECIALIDAD CONTIENE EL NOMBRE DE LA ESPECIALIDAD 
             
 *
 * @property Medico $mEDICO
 * @property Citas[] $citas
 */
class Catespecialidad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catespecialidad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDMEDICO'], 'required'],
            [['IDMEDICO'], 'integer'],
            [['NOMBREESPECIALIDAD'], 'string', 'max' => 100],
            [['IDMEDICO'], 'exist', 'skipOnError' => true, 'targetClass' => Medico::className(), 'targetAttribute' => ['IDMEDICO' => 'IDMEDICO']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDESPECIALIDAD' => 'Código',
            'IDMEDICO' => 'Médico',
            'NOMBREESPECIALIDAD' => 'Especialidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMEDICO()
    {
        return $this->hasOne(Medico::className(), ['IDMEDICO' => 'IDMEDICO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Citas::className(), ['IDESPECIALIDAD' => 'IDESPECIALIDAD']);
    }
}
