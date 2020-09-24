<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200924_074049_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->smallInteger(5)->unsigned(),
            'username' => $this->string(32)->notNull(),
            'password' => $this->string(255)->notNull(),
            'email' => $this->string(128)->notNull(),
            'full_name' => $this->string(128)->notNull(),
            'photo_url' => $this->string(128)->notNull(),
            'status' => $this->tinyInteger(1)->unsigned()->defaultValue(1)->notNull()->comment('0: Inactive | 1: Active'),
            'created_time' => $this->integer(10)->unsigned()->notNull(),
            'updated_time' => $this->integer(10)->unsigned()
        ]);

        $this->addPrimaryKey('pk-user', '{{%user}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
