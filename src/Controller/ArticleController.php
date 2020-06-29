<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 * @package App\Controller
 * @Route("/api/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="articles", methods={"GET"})
     * @param ArticleRepository $articleRepository
     * @return JsonResponse
     */
    public function index(ArticleRepository $articleRepository)
    {
        return $this->json($articleRepository->findAll(), 200);
    }
}
