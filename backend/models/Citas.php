<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "citas".
 *
 * @property int $IDCITA CLAVE PRIMARIA DE LA TABLA CITA
 * @property int $IDESPECIALIDAD CLAVE PRIMARIA DE LA TABLA ESPECIALIDAD ADEMAS ES IDENTITY
 * @property string $FECHACREACION FECHA DE CREACION DE LA CITA
 * @property string $FECHACITA fecha de la cita
 * @property string $NOMBREPACIENTE
 * @property string $CEDULA
 * @property string $TELEFONO
 * @property string $HORA
 * @property string $ESTADO_CITA
 *
 * @property Catespecialidad $eSPECIALIDAD
 */
class Citas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDESPECIALIDAD'], 'integer'],
            [['FECHACREACION', 'FECHACITA', 'HORA'], 'safe'],
            [['NOMBREPACIENTE', 'CEDULA', 'TELEFONO', 'ESTADO_CITA'], 'string', 'max' => 100],
            [['IDESPECIALIDAD'], 'exist', 'skipOnError' => true, 'targetClass' => Catespecialidad::className(), 'targetAttribute' => ['IDESPECIALIDAD' => 'IDESPECIALIDAD']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDCITA' => 'Id',
            'IDESPECIALIDAD' => 'Código Especialidad',
            'FECHACREACION' => 'Fecha Creación',
            'FECHACITA' => 'Fecha Cita',
            'NOMBREPACIENTE' => 'Paciente',
            'CEDULA' => 'Cédula',
            'TELEFONO' => 'Teléfono',
            'HORA' => 'Hora',
            'ESTADO_CITA' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getESPECIALIDAD()
    {
        return $this->hasOne(Catespecialidad::className(), ['IDESPECIALIDAD' => 'IDESPECIALIDAD']);
    }
}
