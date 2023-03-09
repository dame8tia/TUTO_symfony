<?php
// src/Services/admin.php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class Admin
{
    private $request;
    private $username;
    private $password;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->username = $this->request->request->get('username');
        $this->password = $this->request->request->get('password');
    }

    public function login()
    {
        /*  */
        if($this->request->isMethod("post")){
            if ($this->username == 'toto' && $this->password == 'tata') {
                return true;
            }
            else {
                return false ;
            }
        }
        else {
            return false;
        }

        
    }

    public function admin(): Response {
        return new Response(
            '<html><body> Le service va bien </body></html>'
        );
    }
}