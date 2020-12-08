<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Heading]].
 *
 * @see \app\models\Heading
 */
class HeadingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Heading[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Heading|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
