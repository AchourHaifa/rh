<?php

namespace Rh\CentralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $a = 5 ;
        return $this->render('RhCentralBundle:Default:index.html.twig');

    }
}
