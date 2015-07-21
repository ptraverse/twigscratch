<?php

class TwigCompiler
{

    public $phpFile;
    public $twigFile;

    public function __construct()
    {
    }

    public function setPhpFile($fp)
    {
        $this->phpFile = $fp;
    }

    public function setTwigFile($fp)
    {
        $this->twigFile = $fp;
    }

    public function compile()
    {
        return "compileing";
    }
}
