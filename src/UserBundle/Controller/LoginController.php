<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class LoginController extends Controller
{
    
    public function renderLoginAction(){
        
        $auth_utils = $this->get('security.authentication_utils');
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        
        return $this->render('UserBundle:Security:login.html.twig',array(
            'last_username' =>$auth_utils->getLastUsername(),
            'error'=>$auth_utils->getLastAuthenticationError(),
            'csrf_token'=>$csrfToken));
    }
}
