<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table="user";

    public function userValidate($username,$password){
        $user = UsersModel::where('username', $username)->find(1);  // use get() also for fetch more than one;

        if(!empty($user)){
            if(password_verify($password,$user['password'])){
                $ret['status'] = 'success';
                $ret['id'] = $user['id'];
                $ret['username'] = $user['username'];
                $ret['name'] = $user['name'];
                $ret['email'] = $user['email']; 
                return $ret;   
            } else{
                $ret['status'] = 'error';
                $ret['msg'] = 'Wrong Passward';
                return $ret;
            }   
        }else{
            $ret['status'] = 'error';
            $ret['msg'] = 'User Not Exist';
            return $ret;
        }
        
        
    }
}
