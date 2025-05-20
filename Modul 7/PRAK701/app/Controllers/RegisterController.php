<?php 

namespace App\Controllers; 

use App\Models\UserModel; 

class RegisterController extends BaseController 
{ 
    protected $model; 

    public function __construct() 
    { 
        $this->model = new UserModel(); 
        $this->helpers = ['form', 'url']; 
    } 

    public function index() 
    { 
        $data = [ 
            'title' => 'Register' 
        ]; 
        return view('vw_register', $data); 
    } 

    public function store() 
    { 
        // Get form data
        $data = $this->request->getPost(['username', 'email', 'password']); 

        // Custom validation rules
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]'
        ];

        if (! $this->validateData($data, $rules)) { 
            session()->setFlashdata('error', $this->validator->getErrors());
            return $this->index(); 
        } 

        // Validated & hashed inside UserModel (beforeInsert)
        $user = $this->validator->getValidated(); 
        $save = $this->model->save($user); 

        if ($save) { 
            session()->setFlashdata('success', 'Register berhasil! Silakan login.'); 
            return redirect()->to(base_url('login')); 
        } else { 
            session()->setFlashdata('error', $this->model->errors()); 
            return redirect()->back()->withInput(); 
        } 
    } 
}
