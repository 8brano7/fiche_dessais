<?php
namespace App\Controller;
use App\Entity\DecPsa;
use App\Entity\Zaznam;
use App\Form\ZaznamType;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
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
        /** @var Zaznam[] $zaznam */
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

            dump($form->get('fotka'));
            if (!empty($form->get('fotka'))) {
                $file = $form->get('fotka')->getData();
                if(!empty($file)) {
                    $fileName = md5(uniqid()).'.'.$file->guessExtension() ;
                    $file->move($this->getParameter('upload_directory'), $fileName);
                    $zaznamData->setFotka($fileName);
                }

//                $zaznamData = (new Swift_SmtpTransport('smtp.gmail.com', 465))
//                    ->setUsername('Brano')
//                ;
//                $mailer = new Swift_Mailer($zaznamData);
//                $message = (new Swift_Message('Wonderful Subject'))
//                    ->setFrom(['brano87@gmail.com' => 'berrr'])
//                    ->setTo(['brano87@gmail.com', 'brano87@gmail.com' => 'dddd'])
//                    ->setBody('asdsadsadsa')
//                ;
//                $em = $mailer->send($message);

            $em->persist($zaznamData);
            $em->flush();

            }




            return new JsonResponse(['msg' => 'Nahrate'], Response::HTTP_OK);
        }
        return new JsonResponse(['msg' => 'Doslo k chybe'], Response::HTTP_BAD_REQUEST);

    }



    /**
     * @Route(path="skuska/{zaznam}/", name="skuska_action")
     */
    public function skuska (Zaznam $zaznam) {

        return $this->render('default/mypdf.html.twig', [
            'zaznam' => $zaznam
            ]);
    }



    /**
     * @Route(path="/{_locale}/skuska2/{zaznam}/", name="skuska2_action")
     */
    public function skuska2 (Zaznam $zaznam) {

        return $this->render('default/skuska.html.twig', [
            'zaznam' => $zaznam
        ]);
    }

}