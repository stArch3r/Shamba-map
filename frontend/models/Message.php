<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $subjectId
 * @property string $message
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subjectId' => 'Subject ID',
            'message' => 'Message',
        ];
    }
}
