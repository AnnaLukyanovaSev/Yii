<?php

use yii\db\Migration;

/**
 * Class m181003_061123_drop_foreign_key
 */
class m181003_061123_drop_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
     $this->dropforeignKey('fk-film_id-id','film');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181003_061123_drop_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181003_061123_drop_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
