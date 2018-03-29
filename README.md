# SRT

Systematic Review Tool

## Getting Started

Systematic reviews are a time consuming, logistically challenging and labour intensive undertaking. These and other challenges have led to the development of various software tools to support the systematic review process.

LesseSRT is a community-driven, searchable, web-based catalogue of tools that support the systematic review process across multiple domains. The resource aims to help reviewers find appropriate tools based on how they provide support for the systematic review process. Users can perform a simple keyword search (i.e. Quick Search) to locate tools, a more detailed search (i.e. Advanced Search) allowing users to select various criteria to find specific types of tools and submit new tools to the database.

### Server Requirements

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run such old versions of PHP, because of potential security and performance issues, as well as missing features.

A database is required for most web application programming. Currently supported databases are:
```
MySQL (5.1+) via the mysql (deprecated), mysqli and pdo drivers
Oracle via the oci8 and pdo drivers
PostgreSQL via the postgre and pdo drivers
MS SQL via the mssql, sqlsrv (version 2005 and above only) and pdo drivers
SQLite via the sqlite (version 2), sqlite3 (version 3) and pdo drivers
CUBRID via the cubrid and pdo drivers
Interbase/Firebird via the ibase and pdo drivers
ODBC via the odbc and pdo drivers (you should know that ODBC is actually an abstraction layer)
```

### Installation Instructions

CodeIgniter is installed in four steps:

```
1. Unzip the package.
2. Upload the CodeIgniter folders and files to your server. Normally the index.php file will be at your root.
3. Open the application/config/config.php file with a text editor and set your base URL. If you intend to use encryption or sessions, set your encryption key.
4. If you intend to use a database, open the application/config/database.php file with a text editor and set your database settings.
```

## CodeIgniter Overview

Any software application requires some effort to learn. We’ve done our best to minimize the learning curve while making the process as enjoyable as possible.

## Authors

* **Elder de Macedo Rodrigues** - *Initial work*
* **Gustavo Girardon dos Reis** - *Initial work* - [gutogirardon](https://github.com/gutogirardon)
* **Luciano Marchezan** - *Initial work* - [lucianoMarchezan](https://github.com/lucianoMarchezan)
* **Maicon Bernardino da Silveira** - *Initial work* - [maiconbernardino](https://github.com/maiconbernardino)
* **Rodrigo De Oliveira Machado** - *Initial work* -	[rodrigoblizz](https://github.com/rodrigoblizz)
* **Victor dos Santos Costa** - *Initial work* - [VictorSCosta](https://github.com/VictorSCosta)

See also the list of [contributors](https://github.com/ProjetoESE/SRT/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
