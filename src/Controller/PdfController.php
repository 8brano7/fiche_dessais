<?php

namespace App\Controller;

use App\Entity\Zaznam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;
use Dompdf\Dompdf;
use Dompdf\Options;



class PdfController extends Controller
{


    /**
     * @Route(path="/{_locale}/{zaznam}/pdf", name="pdf_action2")
     *
     * @return Response
     */
    public function pdfAction2(Zaznam $zaznam) {
            $html = $this->renderView('default/mypdf.html.twig', [
                'zaznam' => $zaznam
            ]);

            $filename = sprintf('specifications-%s.pdf', date('Y-m-d-hh-ss'));

            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                200,
                [
                    'Content-Type'        => 'application/pdf',
                    'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                ]
            );
        }





}