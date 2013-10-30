<?php

require 'vendor/autoload.php';
require 'resource/mod/mod.php';
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$url = $request->getPathInfo();
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('resource/view');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

switch ($url) {
    case "/ScientificCalculator":
        $init = initScientificCalculator();
        echo $twig->render('ScientificCalculatorTmp.html.twig', array('name' => $init));
        break;
    case "/FinancialCalculator":
        $init = initFinancialCalculator();
        echo $twig->render('FinancialCalculatorTmp.html.twig', array('name' => $init));
        break;
    case "/SimpleCalculator":
        $init = initSimpleCalculator();
        echo $twig->render('SimpleCalculatorTmp.html.twig', array('name' => $init));
        break;
    case "/":
        $initSc = initScientificCalculator();
        $initFi = initFinancialCalculator();
        $initSi = initSimpleCalculator();
        echo $twig->render('MainCalculatorTmp.html.twig', array('nameSc' => $initSc,
                                                                'nameFi' => $initFi,
                                                                'nameSi' => $initSi));
        break;
    default:
        $page = "not fount page $url";
        echo $response = new Response($page,400);
}



