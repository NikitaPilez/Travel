## About Project

It's a simple blog with posts, category and tags. 

# Set up project.

- Clone this project.

- Copy .env.example in .env

- Edit data in .env

- Run `composer install`

- Run `npm install`

- Run `php artisan key:generate`

- Run `php artisan migrate`

- Run `php artisan db:seed`

- Run `php artisan db:seed --class=VoyagerDatabaseSeeder`

- Run `php artisan voyager:admin your@email.com --create` where 'your@email.com' - test admin email, then your will input password for admin account.

- Run `npm run watch` and enjoy.

## CodeSniffer

Commands: "vendor/bin/phpcbf ./" - run code sniffer.