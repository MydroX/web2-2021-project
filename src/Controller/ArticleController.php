<?php

namespace App\Controller;

use App\Entity\Section;
use App\Repository\ArticleRepository;
use App\Repository\SectionRepository;
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
        return $this->json($articleRepository->findAll(), 200, [], ['groups' => 'article:read']);
    }

    /**
     * @Route("/{sectionId}", name="get_articles_by_section_id", methods={"GET"})
     * @param ArticleRepository $articleRepository
     * @param $sectionId
     * @return JsonResponse
     */
    public function getArticlesBySectionId(ArticleRepository $articleRepository, $sectionId) {
        $section = $this->getDoctrine()->getRepository(Section::class)->findOneBy(["section_id" => $sectionId]);
        $articles = $articleRepository->findBy(["section" => $section->getId()]);
        return $this->json($articles, 200, [], ["groups" => "article:read"]);
    }
}
