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
    logger_path: /** some path to a file. **/

Start the project with:

    $ php bin/console server:start
    
    

Goals:
======

* Introduce the most critical components of Symfony apps so that a beginner could theoretically do something with Symfony give only this. .
* Utilize as few components as possible to prevent (as much as possible) information overload.
* Introduce the M, V, and C of Symfony

Non Goals:
==========

* **Utilize Symfony best practices.**
* Report errors in any legitimately helpful way.
* Optimize for performance.

