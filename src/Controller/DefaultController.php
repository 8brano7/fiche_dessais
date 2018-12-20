<?php
namespace App\Controller;
use App\Entity\DecPsa;
use App\Entity\Zaznam;
use App\Form\ZaznamType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;

class DefaultController extends AbstractController
{


    /**
     * @Route(path="/", name="index_action")
     */
    public function home (EntityManagerInterface $em) {

        return $this->render('default/zoznam.html.twig');
    }




    /**
     * @Route(path="/zaznam_form", methods={"POST"},name="home_upload")
     * @param Request $request
     */
    public function home_Action (Request $request, EntityManagerInterface $em) {
        $zaznamData = new Zaznam();
        $form = $this->createForm(ZaznamType::class, $zaznamData);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                     /** @var UploadedFile  $file */

          // funckia na nahravanie obrazka, v services som si definoval cestu kde to bude ukladat prostrednictvom upload_directory
            $file = $form->get('fotka')->getData();

             $fileName = md5(uniqid()).'.'.$file->guessExtension();
             $file->move($this->getParameter('upload_directory'), $fileName);
             $zaznamData->setFotka($fileName);


//            if (!empty($form->get('fotka'))) {
//                $file = $form->get('fotka')->getData();
//
//                $fileName = md5(uniqid()).'.'.$file->guessExtension();
//                $file->move($this->getParameter('upload_directory'), $fileName);
//                $zaznamData->setFotka($fileName);
//            }


            $em->persist($zaznamData);
            $em->flush();
            return new JsonResponse(['msg' => 'Nahrate'], Response::HTTP_OK);
        }
        return new JsonResponse(['msg' => 'Doslo k chybe'], Response::HTTP_BAD_REQUEST);

    }



    /**
     * @Route(path="skuska", name="skuska_action")
     */
    public function skuska () {

        return $this->render('default/mypdf.html.twig');
    }




}