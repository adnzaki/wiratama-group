<?php namespace App\Controllers;

use App\Models\CreateProductTable;

class Development extends BaseController
{
    public function developmentPage()
    {
        $common = $this->commonData();

        $data = [
            'pageTitle'     => 'Development Page',
        ];

        return view('development/main', array_merge($this->commonData(), $data));
    }

    public function createProductTable()
    {
        $password = $this->request->getPost('password');
        $model = new CreateProductTable();

        if (password_verify($password, env('dev_password'))) {
            $model->run();
            
            return $this->response->setJSON(['message' => 'Success']);
        }
        return $this->response->setJSON(['message' => 'Failed']);
    }

    public function generatePassword()
    {
        $input = $this->request->getPost('password');
        $password = password_hash($input, PASSWORD_DEFAULT);
        return $this->response->setJSON(['message' => $password]);
    }

    public function testResponse()
    {
        return $this->response->setJSON(['message' => 'Hello World']);
    }
}