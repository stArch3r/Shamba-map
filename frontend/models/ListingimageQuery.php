<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Listingimage]].
 *
 * @see Listingimage
 */
class ListingimageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Listingimage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Listingimage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
