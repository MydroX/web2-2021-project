<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class QuestionController
 * @package App\Controller*
 * @Route("/api/question")
 */
class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="question_index")
     * @param QuestionRepository $questionRepository
     * @return JsonResponse
     */
    public function index(QuestionRepository $questionRepository)
    {
        return $this->json($questionRepository->findAll(), 200, [], ["groups" => "question:read"]);
    }
}
