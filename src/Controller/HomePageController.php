<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class HomePageController extends AbstractController
{

     #[Route('/', name: 'home_page')]

    public function index(): Response
    {

        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepository->findAll();

        return $this->render('home_page/index.html.twig', [
            'allProducts' => $products,
        ]);
    }
}
