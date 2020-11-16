<?php

namespace frontend\models;

use Yii;
use yii\helpers\FileHelper;

use frontend\controllers\ListingController;

/**
 * This is the model class for table "images".
 *
 * @property int $imageid
 * @property int $listingid
 * @property string $imageurl
 *
 * @property Listing $listing
 */
class Images extends \yii\db\ActiveRecord
{

    public $images;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingid', 'imageurl'], 'required'],
            [['listingid'], 'integer'],
            [['imageurl'], 'string', 'max' => 255],
            [['listingid'], 'exist', 'skipOnError' => true, 'targetClass' => Listing::className(), 'targetAttribute' => ['listingid' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'imageid' => Yii::t('app', 'Imageid'),
            'listingid' => Yii::t('app', 'Listingid'),
            'imageurl' => Yii::t('app', 'Imageurl'),
        ];
    }

 public function save($runValidation = true , $attributeNames=null )
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert){

            $this->imageurl=$this->images->name;
        }
         $saved= parent::save($runValidation,$attributeNames);
        if (!$saved){
            return FALSE;
        } 
        if ($isInsert){
            $imagePath =Yii::getAlias('@frontend/web/storage/images/'.$this->imageid.'.jpg');
            if (!is_dir(dirname($imagePath))) {
                FileHelper::createDirectory(dirname($imagePath));
            }
            $this->images->saveAs($imagePath);
        }
     
        return TRUE;
    }
    



    /**
     * Gets query for [[Listing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListing()
    {
        return $this->hasOne(Listing::className(), ['listingId' => 'listingid']);
    }
}
