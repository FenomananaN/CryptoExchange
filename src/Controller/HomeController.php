<?php

namespace App\Controller;

use Symfony\Component\Filesystem\Path;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function MonitorAddress(Request $request): JsonResponse
    {
        
        $filesystem = new Filesystem();

        if($request->isMethod('POST')){
            $data=$request->request;

        $data =  json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $filesystem->dumpFile('datacryptox.json', $data);
        }
        
      /* // $filesystem->touch('data'.random_int(0, 1000).'.json');
       $presentation = array(
            array(
                'image' => 'images/cover.jpg',
                'sentence' => 'This is a sentence',
                'audio' => 'hello.mp3',
                'sentence_info' => array(
                    array('start' => 0, 'end' => 0.5),
                    array('start' => 0.5, 'end' => 1.2),
                ),
            ),
            array(
                'image' => 'images/cat.jpg',
                'sentence' => 'This is another sentence',
                'audio' => 'bey.mp3',
                'sentence_info' => array(
                    array('start' => 0, 'end' => 0.2),
                    array('start' => 0.2, 'end' => 0.8),
                    array('start' => 0.8, 'end' => 1.2),
                    array('start' => 1.2, 'end' => 1.5),
                    array('start' => 1.5, 'end' => 2),
                ),
            ),
            array(
                'image' => 'images/dog.jpg',
                'sentence' => 'This is a third sentence',
                'audio' => 'good.mp3',
                'sentence_info' => array(
                    array('start' => 0, 'end' => 0.5),
                    array('start' => 0.5, 'end' => 1.2),
                ),
            ),
        );

        $presentation =  json_encode($presentation, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $filesystem->dumpFile('data'.random_int(0, 1000).'.json', $presentation);*/

        

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
}


///ngrok http https://127.0.0.1:8000/