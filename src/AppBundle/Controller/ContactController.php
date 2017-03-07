<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function renderFormAction()
    {
        return $this->render('contact/contactForm.html.twig');
    }

    public function submitFormAction(Request $request)
    {
        $name = $request->request->get('name') ?? null;
        $message = $request->request->get('message') ?? null;

        $contactSubmitter = $this->get('contact_logger');
        $contactSubmitter->submit($name, $message);

        return $this->redirectToRoute('thank_you');
    }

    public function thankYouAction()
    {
        return $this->render('contact/thankYou.html.twig');
    }
}