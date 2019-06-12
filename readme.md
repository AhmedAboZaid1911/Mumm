#Setup Steps
1. Clone Project `https://github.com/AhmedAboZaid1911/Mumm.git` Or download from git

2. Move your terminal(cmd) to project directory

3. Install laravel dependencies run commad `composer install` 

4. Copy .env.example to .env using command `cp .env.example .env`

5. Generate Laravel encryption key run command `php artisan key:generate`

6. Create an empty Database using phpmyadmin

7. Add database configuration to .env `DB_DATABASE , DB_USERNAME , DB_PASSWORD`

8. Migrate Database using command `php artisan migrate`

9. Seed Admin user to dashboard using command `php artisan db:seed`

10. Make your vhosts or use command `php artisan serve`

11. got to 'http://127.0.0.1:8000/login'

12. Use `admin@example.com` as your Email and `123456` as your password to access dashboard 
