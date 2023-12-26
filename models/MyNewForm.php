<?php

namespace app\models;

class MyNewForm extends \yii\base\Model
{
       public $firstName;
       public $lastName;
       public $patronymic;
       public $email;

       public function rules()
       {
           return [
               ['firstName', 'default']
           ];
       }
}