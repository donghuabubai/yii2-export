<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/4/17
 * Time: 1:33
 */
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}