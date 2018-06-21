
Overview
--------

This is a code that showcases the features of BlockCypher's REST APIs. The application uses the SDKs provided by BlockCypher.
It is a Bitcoin wallet.

Pre-requisites
--------------

   * PHP 5.4+
   * curl, openssl PHP extensions
   * [Composer](http://getcomposer.org/download/) for installing the Rest API SDK.

Running the app
---------------

   * It´s a symfony app so you can use official [Symfony documentation](http://symfony.com/doc/current/book/installation.html)    
   * Copy the php-wallet-sample folder to your htdocs folder.
   * Run 'composer install' from the root directory.
   * You are ready. Bring up http://localhost/php-wallet-sample on your favorite browser.
   
You can use the PHP Built-in web server:

```
cd web
php -S localhost:8000 server.php
```
   
TODO
----

   * Login using BlockCypher API token.
   * Validate address in "Send Funds".
   * Add edit pages for wallets, address, txs.
   * Client-side signing.
   * Support for multisign addresses.
   * Console commands for basic app commands: create wallet, address and transaction.
   * Add behat, phpspec, tests, ...
   * ...
