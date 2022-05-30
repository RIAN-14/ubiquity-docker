<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\OrderController;
use App\Repository\OrdersRepository;

class OrderController extends AbstractController
{
    #[Route('/order/{id}', name: 'order.index')]
    public function index(int $id, OrdersRepository $ordersRepo): Response
    {
        return $this->render('index.html.twig', [
            'order' => $ordersRepo->find($id),
        ]);

        /*json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/OrderController.php',
        ]);*/
    }
}
