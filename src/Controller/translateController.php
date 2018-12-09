<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;

class translateController extends AbstractController
{
    /**
     * @Route(path="/{_locale}", name="translation")
     */
    public function showAction () {

        return $this->render('default/zoznam.html.twig');
    }




}