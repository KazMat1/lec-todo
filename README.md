# Get started
*you can change a value within {} as you like*
## step of project
- open your terminal and copy and paste below
```
{your_directory} $ curl -s "https://laravel.build/{app_name}" | bash
```

- if you finished, move directory and build a container of docker
```
$ cd {app_name}
{app_name} $ ./vendor/bin/sail up -d
```
- after you built a dev environment, you run built-in server while running containers
```
{app_name} $ ./vendor/bin/sail up -d
{app_name} $ ./vendor/bin/sail artisan serve
```

- click a following link to (http://localhost)[http://localhost/]

- if you confirm a welcome page of laravel ver.10, you've done a building dev environment

- push a remote repository of github. the commands from the next line is the way you push a existing a repository, so you create a remote reository of a project on github before run the commands
```
{app_name} $ git init
{app_name} $ git add .
{app_name} $ git commit -m "first commit"
{app_name} $ git remote add origin {your_uri_of_remote_repository}
{app_name} $ git push origin -u main
```

# tips
## artisan command in docker sail
- you type './vendor/bin/sail' before artisan commands
    - exmaples
    ```
    $ ./vendor/bin/sail aritsan serve
    $ ./vendor/bin/sail aritsan tinker
    $ ./vendor/bin/sail aritsan db
    $ ./vendor/bin/sail aritsan db:seed
    $ ./vendor/bin/sail aritsan migrate
    $ ./vendor/bin/sail aritsan migrate:refresh
    $ ./vendor/bin/sail aritsan migrate:refresh --seed
    $ ./vendor/bin/sail aritsan migrate:fresh
    $ ./vendor/bin/sail aritsan migrate:fresh --seed
    $ ./vendor/bin/sail aritsan make:controller
    $ ./vendor/bin/sail aritsan make:model
    $ ./vendor/bin/sail aritsan make:migration
    $ ./vendor/bin/sail aritsan make:seeder
    $ ./vendor/bin/sail aritsan make:factory
    $ ./vendor/bin/sail aritsan make:middleware
    $ ./vendor/bin/sail aritsan make:rule
    $ ./vendor/bin/sail aritsan make:scope
    ```

## refrence
(Tutorial)[https://www.hypertextcandy.com/laravel-tutorial-introduction/]
