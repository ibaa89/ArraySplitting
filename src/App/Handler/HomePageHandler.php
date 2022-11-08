<?php

declare(strict_types=1);

namespace App\Handler;

use Chubbyphp\Container\MinimalContainer;
use DI\Container as PHPDIContainer;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Laminas\ServiceManager\ServiceManager;
use Mezzio\LaminasView\LaminasViewRenderer;
use Mezzio\Plates\PlatesRenderer;
use Mezzio\Router;
use Mezzio\Template\TemplateRendererInterface;
use Mezzio\Twig\TwigRenderer;
use Pimple\Psr11\Container as PimpleContainer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class HomePageHandler implements RequestHandlerInterface
{
   
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $str = $request->getQueryParams()['str'];
        //check if you have an empty string and get the string length
          $length = strlen($str);
            if($length >0){
              //split the string  by two charachters to an array 
              $splitingArray = str_split($str,2);
              if (($length % 2) != 0 ) {
                //get the splitted array length(or for real get the last position in the array)
                 $arrayLength = $length/2 ;
                //add "_" to the last posistion
                 $replacment = array($arrayLength => $splitingArray[$arrayLength]."_");
                 return new JsonResponse( array_replace($splitingArray,$replacment));
               }else {
                return  new JsonResponse ($splitingArray);
               }
              //if array is empty return an empty array
              }
              return new JsonResponse([]);
              
    }
}
