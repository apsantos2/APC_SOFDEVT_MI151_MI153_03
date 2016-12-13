<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "trivia".
 *
 * @property integer $trivia_id
 * @property string $trivia
 * @property string $answer
 */
class Trivia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivia';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trivia_id', 'trivia', 'answer'], 'required'],
            [['trivia_id'], 'integer'],
            [['trivia', 'answer'], 'string', 'max' => 45],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trivia_id' => 'Trivia ID',
            'trivia' => 'Trivia',
            'answer' => 'Answer',
        ];
    }
}