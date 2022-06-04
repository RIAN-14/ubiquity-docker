<?php

namespace App\Controller;

use App\Repository\OrderDetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\OrdersRepository;

class OrderController extends AbstractController
{
    #[Route('/order/{id}', name: 'order.index')]
    public function index(int $id, OrdersRepository $ordersRepo, OrderDetailRepository $orderDetailRepo): Response
    {
        return $this->render('index.html.twig', [
            'order' => $ordersRepo->find($id),
            'orderdetail' => $orderDetailRepo->findAll($id)
        ]);

        /*json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/OrderController.php',
        ]);*/
    }

    #[Route('/order/{id}/editDetail', name: 'editDetail')]
    public function editDetail(int $id) {
        return $this->redirectToRoute('orderDetail.edit', array(
            'id' => $id
        ));
    }
}
