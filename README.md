
# iblog


## todo list

- [x] base laravel with voyager & iseed
- [x] tags categories , posts types migratiuon models and breads 
- [x] setting polymorphic relationships (categtories,tags) x (articles,videos,audio)
- [x] override voyager controller and bread with polymorphic relationship
- [x] owner or admin auithorisation guards
- [x] iblog assets and style
- [ ] seperate register and login form
- [ ] socialite login facebook
- [ ] front office controllers and routers





## Installation :

-   `git clone git@github.com:I-techrity/iblog.git`
-   `cd ideation`
-   Edit `.env` and set your
    - database connection details
    - app url (include ports in dev)
-   `composer install`
-   `php artisan key:generate`
-   `php artisan migrate`     // migrate the ideation db
-   `php artisan voyager:install`   // install/reset voyager
-   `php artisan db:seed`



## Notes 

### storage

- storage is public
- symlink is activated

### authentification

- default admin credentials :
<pre>
<span class="pl-ent">email</span>: <span class="pl-s">super@iblog.test</span>
<span class="pl-ent">password</span>: <span class="pl-s">00000000</span>
</pre>


- create a new admin : `php artisan voyager:admin [email] --create`

## ISeed  🎯

ISeed is used to generate seeds for our database .

### voyager

Iseed is used to *maintain* the voyager breads and menus *state* by generating seeds for its main tables  :

- data_rows
- data_types
- menus
- menu_items
- roles
- permissions
- permission_role
- settings


#### generating seeds

```bash
php artisan iseed <table-name>

// all voyager table tables

php artisan iseed data_types,data_rows,menus,menu_items,roles,permissions,permission_role,settings,users --clean --force
```

#### calling seeds

- you can call the class direclty : `php artisan db:seed --class=<table-name>TableSeeder`     


