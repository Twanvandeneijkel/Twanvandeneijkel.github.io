<?php

namespace App\Controllers;

use App\Repositories\ExamRepositoryInterface;
use Framework\Request;
use Framework\Response;
use Framework\ResponseFactory;

class ExamController
{
    private ResponseFactory $responseFactory;
    private ExamRepositoryInterface $examRepository;

    public function __construct(ResponseFactory $responseFactory, ExamRepositoryInterface $examRepository)
    {
        $this->responseFactory = $responseFactory;
        $this->examRepository = $examRepository;
    }

    public function index(): Response
    {
        $exams = $this->examRepository->all();
        return $this->responseFactory->view('grades/index.html.twig', ['exams' => $exams]);
    }

    public function edit(): Response
    {
        $exams = $this->examRepository->all();
        return $this->responseFactory->view('grades/edit.html.twig', ['exams' => $exams]);
    }

    public function update(Request $request): Response
    {
        $grades = $request->getMany('grades') ?? [];

        $examIdMap = [0=>1, 1=>2, 2=>3, 3=>4, 4=>5, 5=>6, 6=>7, 7=>8, 8=>9, 9=>10, 10=>11, 11=>12, 12=>13, 13=>14];

        foreach ($grades as $index => $grade) {
            if ($grade === '' || $grade === null) {
                continue;
            }

            $exam = $this->examRepository->findById($examIdMap[$index]);

            if ($exam === null) {
                continue;
            }

            $exam->grade = (float) $grade;
            $this->examRepository->update($exam);
        }

        return $this->responseFactory->redirect('/dashboard');
    }
}
