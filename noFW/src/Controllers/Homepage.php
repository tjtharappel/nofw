<?php declare(strict_types = 1);

namespace RT\Controllers;

use Http\Request;
use Http\Response;
use RT\Template\Renderer;

class Homepage
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(
        Request $request, 
        Response $response,
        Renderer $renderer
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }


    public function show()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
            'menuItems' => [['href' => '/', 'text' => 'Welcome']],
        ];

        $html = $this->renderer->render('Homepage', $data);
        $this->response->setContent($html);
    }
}