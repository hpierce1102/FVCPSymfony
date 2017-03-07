<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function renderFormAction()
    {
        return $this->render('contact/contactForm.html.twig');
    }
}