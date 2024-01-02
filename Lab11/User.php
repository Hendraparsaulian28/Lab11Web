<?php

namespace App\Controllers; 
 
use App\Models\UserModel;
 
class User extends BaseController
{
    public function index()
    {
        $title = 'Daftar User';
        $model = new UserModel();
        return view('user/index', compact('user', 'title'));
    }
    public function login()
    {
        helper(['form']);
        $email = $this->request->getpost('email');
        $password = $this->request->getpost('password');
        if (!$email)
        {
            return view('user/login');
        }
        $session = session();
        $model = new UserModel();
        $login = $model->where('useremail', $email)->first();
        if ($login)
        {
            $pass = $login['userpassword'];
            if (password_verify($password, $pass))
            {
                $login_data = [
                    'user_id' => $login['id'],
                    'user_name' => $login ['username'],
                    'user_email' => $login ['useremail'],
                    'logged_in' => TRUE,
                ];
                $session->set($login_data);
                return redirect('admin/artikel');
            } 
            else
            {
                $session->setFlashdata('flash_msg', "Password salah.");
                return redirect()->to('/user/login');
            }   
        }
            else
            {
                $session->setFlashdata('flash_msg', "email tidak terdaftar.");
                return redirect()->to('/user/login');
            }
    }
    public function logout()      
    {
        $session = session();         
        $session->destroy();         
        return redirect()->to('/user/login');     
    }
}