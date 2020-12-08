<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_heading}}`.
 */
class m201208_073613_create_news_heading_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_heading}}', [
            'id' => $this->primaryKey(),
            'news_id' => $this->integer(),
            'heading_id' => $this->integer()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_heading}}');
    }
}
