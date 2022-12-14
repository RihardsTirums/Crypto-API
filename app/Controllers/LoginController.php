<?php declare(strict_types=1);

namespace App\Controllers;

use App\Authentication;
use App\FormRequests\UserLoginFormRequest;
use App\Redirect;
use App\Template;
use App\Validation\Validation;

class LoginController
{
    private Validation $validation;

    public function __construct(Validation $validation)
    {
        $this->validation = $validation;
    }

    public function showForm(): Template
    {
        return new Template('login.twig');
    }

    public function login(): Redirect
    {
        $user = $this->validation->validateLoginForm(new UserLoginFormRequest(
            $_POST['email'],
            $_POST['password']
        ));

        if ($user) {
            Authentication::loginById($user);
            return new Redirect('/dashboard');
        }

        return new Redirect('/login');
    }
}