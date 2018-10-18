<?php

use yii\db\Migration;

/**
 * Class m181018_190721_add_columns_to_film_table
 */
class m181018_190721_add_columns_to_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('film', 'create_at',$this->integer());
	  $this->addColumn('film', 'reduct_at',$this->integer());
	  $this->addColumn('film', 'creat_by',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropColumn('film', 'create_at');
		 $this->dropColumn('film', 'reduct_at');
		 $this->dropColumn('film', 'creat_by');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181018_190721_add_columns_to_film_table cannot be reverted.\n";

        return false;
    }
    */
}
