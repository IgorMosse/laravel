Como rodar a aplicação

1-run shell: composer install
2-run shell: composer create-project laravel/laravel projectName
3-cd projectName
4-code.
5-php artisan serve
6-setup the database in .env
7-put in AppServices providers in the register function. Schema::defaultStringLength(191);
8-create route get for '/nameYougaveForTheMigration'
9-run teminal in vscode: php artisan make:model Product --migration
10-set up the $table with the variables you want to be in the database, this is going to be several $table
11-php artisan migrate
12-create route post '/nameYougaveForTheMigration'
13-creat use App\Models\Product
14-change the route get for '/nameYougaveForTheMigration' to all()
15-
