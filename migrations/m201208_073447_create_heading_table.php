<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%heading}}`.
 */
class m201208_073447_create_heading_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%heading}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent_id' => $this->integer()
        ]);


//        $this->insert('{{%heading}}', [
//            'name' => 'heading 1',
//        ]);
//
//        $this->insert('{{%heading}}', [
//            'name' => 'heading 2',
//            'parent_id' => '1'
//        ]);
//
//        $this->insert('{{%heading}}', [
//            'name' => 'heading 3',
//            'parent_id' => '1'
//        ]);
//
//        $this->insert('{{%heading}}', [
//            'name' => 'heading 4',
//            'parent_id' => '5'
//        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%heading}}');
    }
}
