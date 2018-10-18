<?php

use yii\db\Migration;

/**
 * Class m181017_105936_add_column_table_user
 */
class m181017_105936_add_column_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->addColumn('user', 'auth_at',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropColumn('user', 'auth_at');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181017_105936_add_column_table_user cannot be reverted.\n";

        return false;
    }
    */
}
