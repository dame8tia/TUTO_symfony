<?php
/*
// index.php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/../vendor/autoload.php';

// On charge la requête
$request = Request::createFromGlobals();

// On récupère l'URL 
$url = $request->getPathInfo();
$response = new Response();

switch($url) {
    case '/':
        $response->setContent(
            '<html><body>Hello '
            . $_GET['name']
            .'</body></html>'
        );
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'text/html');
        
        // Retourne une réponse HTTP valide
        $response->send();
        break;
    case '/admin':
        $response->setContent('Accès Espace Admin');
        $response->send();

        break;
    
    default:
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
}
*/

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};