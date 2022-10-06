<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%news}}`.
 */
class m221005_192821_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('chat', [
            'id' => Schema::TYPE_PK,
            'user' => Schema::TYPE_STRING . ' NOT NULL',
            'teks' => Schema::TYPE_TEXT,
            'waktu_dibuat' => Schema::TYPE_DATETIME,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
