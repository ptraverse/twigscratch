<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';

/**
* Not to be confused with the "real" twig compiler, aka Twig/Compiler
* Simple Class to provide ajax response script with ability to render user inputted twig templates and PHP code into HTML
*
* @author ptraverse
*/
class TwigCompiler
{

    public $phpFile;
    public $twigFile;
    public $loader;
    public $twig;

    public function __construct()
    {
        Twig_Autoloader::register();
        $this->loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']);
        $this->twig = new Twig_Environment($this->loader);
    }

    public function setPhpFile($fp)
    {
        $this->phpFile = $fp;
    }

    public function setTwigFile($fp)
    {
        $this->twigFile = $fp;
    }

    // TODO - make it "safe"; add exceptions; etc.
    private function evalPhpCode()
    {
        eval(file_get_contents($this->phpFile));
        return get_defined_vars();
    }

    public function compile()
    {
        return $this->twig->render($this->twigFile, $this->evalPhpCode());
    }
}
