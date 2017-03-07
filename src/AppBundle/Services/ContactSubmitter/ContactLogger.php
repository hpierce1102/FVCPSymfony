<?php

namespace AppBundle\Services\ContactSubmitter;

class ContactLogger implements ContactSubmitterInterface
{
    protected $filePath;

    public function __construct(String $filePath)
    {
        $this->filePath = $filePath;
    }

    public function submit(String $name, String $message) : bool
    {
        $file = fopen($this->filePath, 'a+');
        return fwrite($file, "$name : $message");
    }
}