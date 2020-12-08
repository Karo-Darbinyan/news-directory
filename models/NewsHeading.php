<?php

namespace app\models;

use app\models\query\HeadingQuery;
use app\models\query\NewsHeadingQuery;
use app\models\query\NewsQuery;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news_heading".
 *
 * @property int $id
 * @property int|null $news_id
 * @property int|null $heading_id
 *
 * @property Heading $heading
 * @property News $news
 */
class NewsHeading extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_heading';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'heading_id'], 'integer'],
            [['heading_id'], 'exist', 'skipOnError' => true, 'targetClass' => Heading::class, 'targetAttribute' => ['heading_id' => 'id']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::class, 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_id' => 'News ID',
            'heading_id' => 'Heading ID',
        ];
    }

    /**
     * Gets query for [[Heading]].
     *
     * @return ActiveQuery|HeadingQuery
     */
    public function getHeading()
    {
        return $this->hasOne(Heading::class, ['id' => 'heading_id']);
    }

    /**
     * Gets query for [[News]].
     *
     * @return ActiveQuery|NewsQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::class, ['id' => 'news_id']);
    }

    /**
     * {@inheritdoc}
     * @return NewsHeadingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsHeadingQuery(get_called_class());
    }
}
