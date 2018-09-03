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
            [['NOMBREPACIENTE',   'ESTADO_CITA'], 'string', 'max' => 100],
//            [['NOMBREPACIENTE'],'required','message'=>'Campo requerido'],
           [['NOMBREPACIENTE'],'match','pattern'=>"/^[a-zA-ZÑñáéíóú ]+$/i",'message'=>'Solamente ingrese letras'],
            [['CEDULA'], 'string', 'min' => 10,'max'=>10,'message'=>'Ingrese su cédula correctamente'],
            [['CEDULA'],'match','pattern'=>"/^[0-9]+$/i",'message'=>'Ingrese su cédula correctamente'],
            [['TELEFONO'], 'string', 'min' => 7,'max'=>14,'message'=>'Ingrese su número telefónico completo'],
            [['TELEFONO'],'match','pattern'=>"/^[0-9]+$/i",'message'=>'Ingrese solo números'],
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
