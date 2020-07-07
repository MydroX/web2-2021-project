<?php

namespace App\Controller;

use App\Repository\SectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SectionController
 * @package App\Controller
 * @Route("/api/section")
 */
class SectionController extends AbstractController
{
    /**
     * @Route("/", name="section", methods={"GET"})
     * @param SectionRepository $sectionRepository
     * @return JsonResponse
     */
    public function index(SectionRepository $sectionRepository)
    {
        return $this->json($sectionRepository->findAll(), 200, ["Access-Control-Allow-Origin" => "*"]);
    }
}
