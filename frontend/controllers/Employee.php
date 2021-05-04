<?php
namespace app\models;

use Yii;

class Employee extends \yii\db\ActiveRecord{
    /**
     * @inheritdoc
     */
    public static function tablename()
    {
        return'student';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return[
            [['full_name', 'address', 'number'], 'required'],
            [['full_name', 'address'], 'string', 'max' => 100],
            [['number'], 'string', 'max' => 15]
        ];
    }
}