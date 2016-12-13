<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $name
 * @property string $nickname
 * @property string $email
 * @property string $hadd
 * @property string $gender
 * @property string $cpnum
 * @property string $comment
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'email', 'gender', 'cpnum'], 'required'],
            [['name', 'email', 'hadd', 'cpnum', 'comment'], 'string', 'max' => 45],
            [['nickname', 'gender'], 'string', 'max' => 25],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'name' => 'Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'hadd' => 'Home Address',
            'gender' => 'Gender',
            'cpnum' => 'Cellphone number',
            'comment' => 'Comment',
        ];
    }
}