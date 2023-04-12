<?php

namespace App\Controller;

use App\Entity\Colis;
use App\Entity\User;
use App\Form\ColisType;
use App\Repository\ColisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/colis')]
/**
 * Summary of ColisController
 */
class ColisController extends AbstractController
{
    #[Route('/', name: 'app_colis_index', methods: ['GET'])]
    public function index(ColisRepository $colisRepository): Response
    {
        return $this->render('colis/index.html.twig', [
            'colis' => $colisRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_colis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ColisRepository $colisRepository,EntityManagerInterface $entityManager): Response
    {    
        $coli = new Colis();
        $user = $entityManager->getRepository(User::class)->find(161);
        $coli->setIdu($user);
        
        $form = $this->createForm(ColisType::class, $coli);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coli);
        $entityManager->flush();
        $this->addFlash('success', 'Le colis a été créé avec succès.');

            return $this->redirectToRoute('app_colis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('colis/new.html.twig', [
            'coli' => $coli,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_colis_show', methods: ['GET'])]
    public function show(Colis $coli): Response
    {
        return $this->render('colis/show.html.twig', [
            'coli' => $coli,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_colis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Colis $coli, ColisRepository $colisRepository): Response
    {
        $form = $this->createForm(ColisType::class, $coli);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $colisRepository->save($coli, true);
            $this->addFlash('success', 'Le colis a été modifié avec succès.');

            return $this->redirectToRoute('app_colis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('colis/edit.html.twig', [
            'coli' => $coli,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_colis_delete', methods: ['POST'])]
    public function delete(Request $request, Colis $coli, ColisRepository $colisRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coli->getId(), $request->request->get('_token'))) {
            $colisRepository->remove($coli, true);
        
            $this->addFlash('success', 'Le colis a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression du colis.');
        }


        return $this->redirectToRoute('app_colis_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/terms', name: 'app_terms')]
    /**
     * Summary of terms
     * @return Response
     */
    public function terms(): Response
    {
        return $this->render('terms.twig.html');
    }
}


