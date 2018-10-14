<?php

/**
 * Created by PhpStorm.
 * User: A.Khudenko
 * Date: 14.10.2018
 * Time: 19:37
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    public function index()
    {
        $ar = array(1, 2, 3);
        $name = 'Alexandra';
        return $this->render('blog/index.html.twig', ['array' => $ar, 'name' => $name]);
    }
}