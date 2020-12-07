<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

     /**
     * @Route("/theme-1", name="theme1")
     */
    public function theme1(): Response
    {
        return $this->render('home/theme1.html.twig');
    }

      /**
     * @Route("/theme-2", name="theme2")
     */
    public function theme2(): Response
    {
        return $this->render('home/theme2.html.twig');
    }

      /**
     * @Route("/theme-3", name="theme3")
     */
    public function theme3(): Response
    {
        return $this->render('home/theme3.html.twig');
    }

      /**
     * @Route("/theme-4", name="theme4")
     */
    public function theme4(): Response
    {
        return $this->render('home/theme4.html.twig');
    }

      /**
     * @Route("/theme-5", name="theme5")
     */
    public function theme5(): Response
    {
        return $this->render('home/theme5.html.twig');
    }

      /**
     * @Route("/theme-6", name="theme6")
     */
    public function theme6(): Response
    {
        return $this->render('home/theme6.html.twig');
    }
}
