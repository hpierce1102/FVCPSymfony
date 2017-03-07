<?php

namespace AppBundle\Services;

class ContactMailer implements ContactSubmitterInterface
{
    protected $mailer;

    protected $targetInbox;

    public function __construct(\Swift_Mailer $mailer, String $targetInbox)
    {
        $this->mailer = $mailer;
        $this->targetInbox = $targetInbox;
    }

    public function submit($name, $message)
    {
        $swiftMessage = \Swift_Message::newInstance();
        $swiftMessage->setSubject('New message');
        $swiftMessage->setFrom($this->targetInbox); //Because we don't collect an email address.
        $swiftMessage->addTo($this->targetInbox);
        $swiftMessage->setBody($message);

        return $this->mailer->send($swiftMessage);
    }
}