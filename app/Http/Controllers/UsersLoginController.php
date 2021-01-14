<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

//UserController 
class UsersLoginController extends Controller{

    public function __construct()
    {
        $this->user_model = new UsersModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'test';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //url('/') // use for base url for post method
        //Request::root() // use for base url post method
        // URL::to('/') // use for base url post method
        $post = $request->input();
        $username = $post['username'];
        $password = $post['password'];

        /* $str = 'admin';
        $options= ['t_salt'=>'fksafsf'];
        $password = password_hash($str, PASSWORD_BCRYPT, $options); */    
        //print_r($password);die;
        $user = $this->user_model->userValidate($username,$password);
      
        if(!empty($user)){
            if($user['status'] == 'success'){
                $request->session()->put($user);
                //$sess_userdata = $request->session()->all();
                $ret = ['status'=>'success','url'=>url('users/home')];
                $request->session()->flash('login_successful', 'Login successful!');
                return $ret;
            }
            if($user['status'] == 'error'){
                $ret = ['status'=>'error','msg'=>$user['msg']];
                return $ret;
            }   
        }
       exit();

    }


    public function userLogout(Request $request){
        $request->session()->flush();
        return view('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function user_login(){
        echo 'test';
    }
}
