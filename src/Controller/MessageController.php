<?php

namespace App\Controller;

use App\Entity\Excuse;
use App\Form\ExcuseType;
use App\Repository\ExcuseRepository;
use Container4Mjqsox\getMessageControllerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    #[Route('/test', name: 'app_message',methods: ['GET'])]
    public function randID(Request $request, Excuse $excuse, EntityManagerInterface $entityManager) :response
    {
        $qb = $entityManager->createQueryBuilder();
        $qb->select('MAX(e.id)')
           ->from(Excuse::class, 'e');
           $idmax = $qb->getQuery()->getSingleScalarResult();
           $randID = mt_rand(1, $idmax); 
            $message = $entityManager->getRepository(Excuse::class)->find($randID);
            return new Response(
                $this->render('Home.html.twig',[
                'message' => $message->getMessage(),])
                
            );             
    }

   
}
