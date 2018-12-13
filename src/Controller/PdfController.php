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
     * @Route(path="/{_locale}/{zaznam}/pdf", name="pdf_action")
     *
     * @return Response
     */
    public function pdfAction(Zaznam $zaznam) {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

//        return $this->render('default/mypdf.html.twig', [
//            'title' => "Welcome to our PDF Test",
//            'zaznam' => $zaznam
//        ]);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('default/mypdf.html.twig', [
            'title' => "Welcome to our PDF Test",  'zaznam' => $zaznam
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
//       $dompdf->setPaper('A4', 'portrait');

        $customPaper = array(0,0,720,860);
        $dompdf->setPaper($customPaper);

//        $dompdf->setPaper('page-height', 55);
//        $dompdf->setPaper('page-width', 90);

        // Render the HTML as PDF
        $dompdf->render();

        // Store PDF Binary Data
        $output = $dompdf->output();

        // In this case, we want to write the file in the public directory
        $publicDirectory = $this->get('kernel')->getProjectDir() . '/public';
        // e.g /var/www/project/public/mypdf.pdf
        $pdfFilepath =  $publicDirectory . '/mypdf.pdf';

        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);

        // Send some text response
        return new Response("The PDF file has been succesfully generated !");
    }

}