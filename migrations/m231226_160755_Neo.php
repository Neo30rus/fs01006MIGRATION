<?php

use yii\db\Migration;

/**
 * Class m231226_160755_Neo
 */
class m231226_160755_Neo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('requests', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'description' => $this->text(),
            'timestamp' => $this->timestamp()->defaultExpression('NOW()')->notNull(),
            'user_id' => $this->integer()

        ]);
        $this->addForeignKey(
            'user_to_requests_fk',
            'requests',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('requests');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231226_160755_Neo cannot be reverted.\n";

        return false;
    }
    */
}
