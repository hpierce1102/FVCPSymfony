fvcp
====

A *Tiny* Symfony app that exists to show features I talked about during a meetup.

This project utilizes scalar type hints and return types. PHP 7+ is required.

Installation
============

Install composer dependencies:

    $ composer install

Add various parameters in parameters.yml:

    mailer_transport: gmail
    mailer_host: smtp.gmail.com
    mailer_user: /** Gmail account **/
    mailer_password: /** Gmail password **/
    target_inbox: /** Any email account **/

Start the project with:

    $ php bin/console server:start
    
    

Goals:
======

* Introduce the most critical components of Symfony apps so that a beginner could theoretically do something with Symfony give only this.
* Utilize as few components as possible to prevent information overload (as much as possible).
* Introduce the M, V, and C of Symfony

Non Goals:
==========

* **Utilize Symfony best practices.** A better repository maintained by Symfony is available here: [symfony/symfony-demo](https://github.com/symfony/symfony-demo).
* Report errors in any legitimately helpful way.
* Optimize for performance.

