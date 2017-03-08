<?php

namespace AppBundle\Controller;

use AppBundle\Services\ContactSubmitter\ContactSubmitterInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function renderFormAction()
    {
        $htmlResponse = $this->render('contact/contactForm.html.twig');
        return $htmlResponse;
    }

    public function submitFormAction(Request $request)
    {
        $name = $request->request->get('name') ?? null;
        $message = $request->request->get('message') ?? null;

        /** @var ContactSubmitterInterface $contactor */
        $contact = $this->get('contact_mailer');
        $contact->submit($name, $message);

        return $this->render('contact/thankYou.html.twig');
    }
}