<?php

namespace App\Controller;

use App\Entity\Section;
use App\Repository\QuestionRepository;
use App\Repository\SectionRepository;
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

    /**
     * @Route("/{section_id}", name="question_by_section_id", methods={"GET"})
     * @param QuestionRepository $questionRepository
     * @param $section_id
     * @return JsonResponse
     */
    public function getQuestionBySectionId(QuestionRepository $questionRepository, $section_id) {
        $section = $this->getDoctrine()->getRepository(Section::class)->findOneBy(["section_id" => $section_id]);
        $questions = $questionRepository->findBy(["section" => $section->getId()]);
        return $this->json($questions, 200, [], ["groups" => "question:read"]);
    }
}
