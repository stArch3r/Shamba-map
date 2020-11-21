<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listingimage".
 *
 * @property int $listingimageId
 * @property int $listingId
 * @property string $image
 *
 * @property Listing $listing
 */
class Listingimage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listingimage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'image'], 'required'],
            [['listingId'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listing::className(), 'targetAttribute' => ['listingId' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingimageId' => 'Listingimage ID',
            'listingId' => 'Listing ID',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Listing]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getListing()
    {
        return $this->hasOne(Listing::className(), ['listingId' => 'listingId']);
    }

    /**
     * {@inheritdoc}
     * @return ListingimageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ListingimageQuery(get_called_class());
    }
      
}
