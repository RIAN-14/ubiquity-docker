<?php

namespace App\Controller;

use App\Entity\Orderdetail;
use App\Repository\OrderDetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderDetailController extends AbstractController
{
    #[Route('/order/detail/{id}', name: 'orderDetail.edit')]
    public function index(int $id, OrderDetailRepository $orderDetailRepo): Response
    {
        return $this->render('order_detail/index.html.twig', [
            'orderdetail' => $orderDetailRepo->find($id)
        ]);
    }
}
