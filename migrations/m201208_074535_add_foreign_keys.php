<?php

use yii\db\Migration;

/**
 * Class m201208_074535_add_foreign_keys
 */
class m201208_074535_add_foreign_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-news_heading-news_id',
            'news_heading',
            'news_id',
            'news',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-news_heading-heading_id',
            'news_heading',
            'heading_id',
            'heading',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-heading-parent_id',
            'heading',
            'parent_id',
            'heading',
            'id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-news_heading-news_id', 'news_heading');
        $this->dropForeignKey('fk-news_heading-heading_id', 'news_heading');
        $this->dropForeignKey('fk-heading-parent_id', 'heading');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201208_074535_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
