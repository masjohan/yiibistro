<?php
namespace common\models;


use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class ProfileForm extends Model
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $password;
    
    private $_user = false;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['firstname', 'filter', 'filter' => 'trim'],
            ['firstname', 'required'],
            ['firstname', 'string', 'min' => 2, 'max' => 255],
            
            ['lastname', 'filter', 'filter' => 'trim'],
            ['lastname', 'required'],
            ['lastname', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            //['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            
            ['phone', 'filter', 'filter' => 'trim'],
            ['phone', 'required'],
            //['phone', 'phone'],
            ['phone', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This phone number has already been taken.'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
     
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByEmail($this->email);
        }

        return $this->_user;
    }
     
    public function update()
    {
		$user = Yii::$app->user->identity;
		
        $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->email = $this->email;
            $user->phone = $this->phone;
            if ($user->save()) {
                return $user;
            }

		//echo "<script type='text/javascript'>alert('$this->validate()');</script>";
/*
        if ($this->validate()) {
            $user = getUser();
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->email = $this->email;
            $user->phone = $this->phone;
            if ($user->save()) {
                return $user;
            }
        }

        return null;
        */
    }
}
