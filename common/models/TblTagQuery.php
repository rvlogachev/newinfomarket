<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[TblTag]].
 *
 * @see TblTag
 */
class TblTagQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblTag[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblTag|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
