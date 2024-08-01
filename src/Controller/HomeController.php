<?php

namespace App\Controller;

use App\Entity\Excuse;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request, Excuse $excuse, EntityManagerInterface $entityManager,): Response
    {
        $qb = $entityManager->createQueryBuilder();
        $qb2 = $entityManager->createQueryBuilder();
        $qb->select('MAX(e.id)')
           ->from(Excuse::class, 'e');
           $qb2->select('MIN(e.id)')
           ->from(Excuse::class, 'e');
           $idmax = $qb->getQuery()->getSingleScalarResult();
           $idmin = $qb2->getQuery()->getSingleScalarResult();
           $randID = mt_rand($idmin, $idmax);
           if (!isset($randID2)) {
            $randID2 = 0;
            }elseif (isset($randID2)) {
                while ($randID == $randID2) {
                    $randID = mt_rand(1, $idmax);
                    $randID2 = $randID;
            }    
            }
            $message = $entityManager->getRepository(Excuse::class)->find($randID);
            return (
                $this->render('Home.html.twig',[
                'message' => $message->getMessage(),])
                
            );
        } 
          
            
    }
    // #[Route('/', name: 'homepage',methods: ['GET'])]
    // public function randID(Request $request, Excuse $excuse, EntityManagerInterface $entityManager) :response
    // {
    //     $qb = $entityManager->createQueryBuilder();
    //     $qb->select('MAX(e.id)')
    //        ->from(Excuse::class, 'e');
    //        $idmax = $qb->getQuery()->getSingleScalarResult();
    //        $randID = mt_rand(1, $idmax); 
    //         $message = $entityManager->getRepository(Excuse::class)->find($randID);
    //         return new Response(
    //             $this->render('Home.html.twig',[
    //             'message' => $message->getMessage(),])
                
    //         );             
    // }

 