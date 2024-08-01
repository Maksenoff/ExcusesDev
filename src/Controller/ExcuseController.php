<?php

namespace App\Controller;

use App\Entity\Excuse;
use App\Form\ExcuseType;
use App\Repository\ExcuseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/excuse')]
class ExcuseController extends AbstractController
{
    #[Route('/', name: 'app_excuse_index', methods: ['GET'])]
    public function index(ExcuseRepository $excuseRepository): Response
    {
        return $this->render('excuse/index.html.twig', [
            'excuses' => $excuseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_excuse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $excuse = new Excuse();
        $form = $this->createForm(ExcuseType::class, $excuse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($excuse);
            $entityManager->flush();

            return $this->redirectToRoute('app_excuse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excuse/new.html.twig', [
            'excuse' => $excuse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_excuse_show', methods: ['GET'])]
    public function show(Excuse $excuse): Response
    {
        return $this->render('excuse/show.html.twig', [
            'excuse' => $excuse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_excuse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Excuse $excuse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExcuseType::class, $excuse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_excuse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excuse/edit.html.twig', [
            'excuse' => $excuse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_excuse_delete', methods: ['POST'])]
    public function delete(Request $request, Excuse $excuse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$excuse->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($excuse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_excuse_index', [], Response::HTTP_SEE_OTHER);
    }

    
}
 

