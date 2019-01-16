<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Cars]].
 *
 * @see Cars
 */
class CarsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Cars[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Cars|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
