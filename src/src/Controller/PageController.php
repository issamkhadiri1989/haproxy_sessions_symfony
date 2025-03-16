<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

#[AsController]
class PageController
{
    public function __construct(private readonly Environment $twig)
    {
    }

    #[Route(name: 'app.homepage', path: '/')]
    public function showHomePage(Request $request): Response
    {
        $content = $this->twig->render('pages/index.html.twig', [
            'server' => $request->server->get('SERVER_ADDR')
        ]);

        return new Response($content);
    }
}
