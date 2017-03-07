<?php

namespace AppBundle\Services\ContactSubmitter;

interface ContactSubmitterInterface
{
    public function submit(String $name, String $message): bool;
}