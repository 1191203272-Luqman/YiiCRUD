<?php

use yii\db\Migration;

/**
 * Class m210505_072136_learning_migration
 */
class m210505_072136_learning_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('personnel', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'status' => $this->boolean(),
            'created_at' => $this->timestamp()

        ]);

        $this->addColumn('user', 'e-mail', $this->string(512)->notNull());

        $this->createTable('post', [
            'id' =>$this->primaryKey(),
            'title' =>$this->string(),
            'user_id' => $this->integer()
        ]);

        $this->addForeignKey( 'Fk_post_user',
            'post', 'user_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210505_072136_learning_migration cannot be reverted.\n";

        return false;
    }

    // /*
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {

    // }

    // public function down()
    // {
    //     echo "m210505_072136_learning_migration cannot be reverted.\n";

    //     return false;
    // }
    // */
}
