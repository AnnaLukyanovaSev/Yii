<?php

use yii\db\Migration;

/**
 * Class m181018_153629_rename_table_fs_columns
 */
class m181018_153629_rename_table_fs_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->renameColumn('fs','films','film_id');
	  $this->renameColumn('fs','styles','style_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('fs','film_id','films');
		$this->renameColumn('fs','style_id','styles');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181018_153629_rename_table_fs_columns cannot be reverted.\n";

        return false;
    }
    */
}
