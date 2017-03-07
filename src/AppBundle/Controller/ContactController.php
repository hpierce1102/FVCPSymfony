<?php

namespace AppBundle\Controller;

use AppBundle\Services\ContactSubmitter\ContactSubmitterInterface;
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

        // I'm certain there is a better way of loading enabled services
        // but I think it involves exotic service configuration settings.
        // This is done for simplicity.
        $enabledContactLoggers = $this->getParameter('enabled_contact_submitters');

        /** @var ContactSubmitterInterface[] $enabledContactLoggers */
        $enabledContactLoggers = array_map(function($serviceName){
            return $this->get($serviceName);
        }, $enabledContactLoggers);

        foreach($enabledContactLoggers as $logger){
            $logger->submit($name, $message);
        }

        return $this->redirectToRoute('thank_you');
    }

    public function thankYouAction()
    {
        return $this->render('contact/thankYou.html.twig');
    }
}