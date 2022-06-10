<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{

    protected $table = 'php_users';
    protected $allowedFields = ['Id_php_users', 'users_nickname', 'users_firstname', 'users_lastname', 'users_mail', 'users_password', 'users_statut', 'users_creation_date', 'users_adress', 'users_adress2', 'users_zip_code', 'Id_php_city'];
    protected $beforeInsert = ['beforeInsert'];
    protected $update = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['users_password']))
            $data['data']['users_password'] = password_hash($data['data']['users_password'], PASSWORD_DEFAULT);
        return $data;
    }

    

    public function login()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'mail' => 'required|min_length[6]|max_length[80]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[mail,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Adresse mail ou mot de passe renseigné incorrect'
                ]

            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                // user session
                $modelUser = new M_User();

                $user = $modelUser->where('mail', $this->request->getVar('mail'))
                    ->first();

                $this->setUserSession($user);


                // $sessionregister->setFlashdata('success', 'Vous êtes bien enregistré !');
                //  return redirect()->to('dashboard');
            }
        }

        echo view('common/header.php', $data);
        echo view('content/login.php');
        echo view('common/footer.php');
    }



    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'mail' => $user['mail'],
            'profile' => $user['profile'],
            'isLogged' => true,
        ];

        session()->set($data);
    }

    
    public function register()
    {
       
    }




    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
