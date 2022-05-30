<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order/{id}', name: 'show_order')]
    public function index(ProductRepository $productRepo): JsonResponse
    {
        return $this->render('demo/index.html.twig', [
            'products' => $productRepo->findAll(),
        ]);

        /*json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/OrderController.php',
        ]);*/
    }
}
