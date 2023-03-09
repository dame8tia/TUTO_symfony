<?php

namespace App\Controller;

use App\Services\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{
    /**
     * Page de login
     * 
     *@Route("admin", name="admin")
     */
    public function requete()
    {
        $request = Request::createFromGlobals();
/*         echo "<pre>";
        var_dump($request);
        echo "</pre>"; */
        echo $request->isMethod("post");
        $admin = New Admin($request);
        $login = false ;
        $login = $admin->login();
        if ($login){
            return $this->render('admin/admin.html.twig');
        }
        else {
            return $this->render('admin/login.html.twig');
        }

    }
}