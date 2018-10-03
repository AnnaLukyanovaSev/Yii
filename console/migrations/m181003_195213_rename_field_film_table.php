<?php

use yii\db\Migration;

/**
 * Class m181003_195213_rename_field_film_table
 */
class m181003_195213_rename_field_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
     $this->renameColumn('film','film-id','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->renameColumn('film','id','film-id');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181003_195213_rename_field_film_table cannot be reverted.\n";

        return false;
    }
    */
}
