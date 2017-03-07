<?php

namespace AppBundle\Services;

interface ContactSubmitterInterface
{
    public function submit($name, $message);
}