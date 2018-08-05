<?php

use yii\db\Migration;

/**
 * Class m180521_082521_Clientes_ventas_1
 */
class m180521_082521_Clientes_ventas_1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        if($this->db->driverName==mysql){
            $tableoptions = 'CHARACTER SET utf8_unicode_ci ENGINE=InnoDB';
            
        }
       $this->createTable('{{%CLIENTES}}', [
           
      'COD_CLIENTE '     => $this->primaryKey(),
   'CEDULA_CLIENTE'      =>$this->string(10),
   'NOMBRE_CLIENTE'       =>$this->string(50),
   'APELLIDO_CLIENTE'     =>$this->string(50),
   'DIRECCION_CLIENTE'    =>$this->string(100),
   'TELEFONO_CLIENTE'    =>$this->string(10)
       ],$tableOptions);
        
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        echo "m180521_082521_Clientes_ventas_1 cannot be reverted.\n";
//
//        return false;
        $this->dropTable('{{%ClIENTES}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180521_082521_Clientes_ventas_1 cannot be reverted.\n";

        return false;
    }
    */
}
