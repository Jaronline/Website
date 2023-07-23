<?php

namespace App\Controller;

use App\Service\AgeCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\Translation\t;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(AgeCalculator $ageCalculator): Response
    {
		$age = $ageCalculator->calculateAge();
		$aboutMe = t('about_me', ['%age%' => $age]);
	    
        return $this->render('home/index.html.twig', [
			'aboutMe' => $aboutMe
        ]);
    }
}
