# php_biblioteka_sql
php_biblioteka_sql is a basic example for connection with database in php.

### Features

- Simple installation,
- Automated database creator on first start,
- Adding new books to database,
- Reading all books from database on index.php,
- All books can be edited in any time,
- Basic delete choosen book,
- Increasing and decreasing amount of books,
- (¿SOON?) Logowanie na administratora oraz usera.

# Manual for XAMPP

- Download XAMPP from [here](https://www.apachefriends.org/pl/download.html),
- Download `php_biblioteka_mysql`,
- Go to your `xampp` folder,
- In folder `xampp` find `htdocs`,
- In `htdocs` create folder, for example with name `Library`,
- Put everything from `php_biblioteka_mysql/php_biblioteka_mysql-main` inside `Library`,
- If you have turned on `Apache` and `MySQL` in XAMPP Control Panel,
  - Open new card with link: `localhost/Library` (Library is your folder name).
  
### Devmode
Development mode is easy to configure at `config.php`.

if you want to enter development mode, go to `config.php` and change variable `devMode` to `true`.
To disable development mode, set variable `devMode` to `false`.
