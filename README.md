## About PHP Contact

This was done for the Dealer Inspire PHP Code challenge. 

## Deployment Instructions

In your terminal, please navigate to the root directory of the project and run the following commands:

`$ composer install`

`$ php artisan migrate`

#### Set up and configure .env file

Create a `.env` file in the project's root directory and copy the contents of the `.env.example` file into the new `.env` file.

Configure the `.env` file to use the correct database credentials.

#### Launching the app 

To launch the project in your browser, simply run the following command in your root directory:

`$ php -S 127.0.0.1:9999 -t public`

You should now be able to access the local website at `http://127.0.0.1:9999`

## Unit tests

To run PHPUnit tests, simply navigate to the root directory of the project in your terminal and run:

`$ ./vendor/bin/phpunit`