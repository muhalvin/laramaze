<h1 align="center">Laramaze</h1>

<p>
Laravel Boilerplate with Mazer Admin Panel and some packages such as auth, permission and users management.
</p>

## Main Template

If you want to check the original template in HTML5 and Bootstrap, [click here](https://github.com/zuramai/mazer.git) to open template repository.

## Installation

1. Clone this project
    ```bash
    git clone https://github.com/muhalvin/laramaze.git

    cd laramaze
    ```
2. Install dependencies

    ```bash
    composer install
    ```

    And javascript dependencies

    ```bash
    npm install && npm run dev
    ```

3. Set up Laravel configurations

    ```bash
    copy .env.example .env

    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database

    ```bash
    php artisan migrate:fresh --seed
    ```

6. Serve the application

    ```bash
    php artisan serve
    ```

7. Auth

    **username**: laramaze@gmail.com
    
    **password**: password

## Requirements
- Laravel (10.43.0)
- PHP (8.2.10)
- MySQL (8.0.30)

## Packages
- Breeze
- Socialite

## Resources
- Bootstrap Icon
- Spatie Flasher

## Contributing

Feel free to contribute and make a pull request.
