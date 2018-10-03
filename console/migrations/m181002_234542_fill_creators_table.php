<?php

use yii\db\Migration;

/**
 * Class m181002_234542_fill_creators_table
 */
class m181002_234542_fill_creators_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
 $this->insert('creators',array(
         'id'=>'1',
         'surname' =>'Konovalov',
  ));
  $this->insert('creators',array(
 'surname' =>'Sidorov',
  ));
   $this->insert('creators',array(
 'surname' =>'Ivanenko',
  ));
   $this->insert('creators',array(
 'surname' =>'Johnson',
  ));
   $this->insert('creators',array(
 'surname' =>'unknown',
  ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181002_234542_fill_creators_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181002_234542_fill_creators_table cannot be reverted.\n";

        return false;
    }
    */
}
