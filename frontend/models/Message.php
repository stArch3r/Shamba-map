<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $message_id
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
            [['message_id', 'message'], 'required'],
            [['message_id'], 'integer'],
            [['message'], 'string'],
            [['message_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'message_id' => 'Message ID',
            'message' => 'Message',
        ];
    }
}
