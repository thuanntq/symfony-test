<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;

# this line is support register route with annotation
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{


    /**
     * Action home page
     *
     * @Route("/", methods={"GET"}, name="homepage")
     *
     * @return RedirectResponse
     */
    public function index(): RedirectResponse
    {
        return $this->redirectToRoute('users.index');
    }

}