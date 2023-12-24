<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use App\TwigExtensions;

class Controller
{
    public const HTTP_RESPONSE_200 = 200;
    public const HTTP_RESPONSE_404 = 404;
    public const HTPP_RESPONSE_403 = 403;
    private $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('./templates');

        $this->twig = new Environment($this->loader);
        $customExtension = new TwigExtensions();
        $this->twig->addExtension($customExtension);
    }
}