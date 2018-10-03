<?php

use yii\db\Migration;

/**
 * Class m181003_004302_fill_fs_table
 */
class m181003_004302_fill_fs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
 $this->insert('fs',array(
         'films'=>'1',
         'styles' =>'2',
  ));
  $this->insert('fs',array(
         'films'=>'1',
         'styles' =>'3',
  ));
  $this->insert('fs',array(
         'films'=>'5',
         'styles' =>'2',
  ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181003_004302_fill_fs_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181003_004302_fill_fs_table cannot be reverted.\n";

        return false;
    }
    */
}
