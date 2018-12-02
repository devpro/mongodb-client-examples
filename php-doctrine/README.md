# MongoDB client with Doctrine (PHP)

This project demonstrates a simple-to-understand example of MongoDb Doctrine library (ODM).

This is basically a working example of the documentation available on Doctrine website.

The code has been limited to the minimum to ease the understanding.

## Setup

- PHP >= 7.1 must be available from the command line
    - Make sure the latest MongoDB driver is installed on the machine that will execute the PHP code.
- Composer must be available from the command line
- Run `composer install`

## Basic usage

- Review `php/demo` file, in particular (MongoDB) client/configuration options (the connection string and the database name)
    - Make sure a MongoDB instance is running and accessible
    - By default you can launch `docker run --name mongodb404 -d -p 27017:27017 mongo:4.0.4`
- Run `php bin/demo`
    - This will create a new entry in User and BlogPost collections in `doctrine` (or another database name if you changed the value)
    - You can review the data from Compass or MongoDB Shell

## History

- We use the alpha release as there was a breaking change between 1.2 and 2.0 release and 1.2 uses the old MongoDB driver.

```bash
composer require doctrine/mongodb-odm:2.0.0-alpha1
```

## References

- [packagist/doctrine/mongodb-odm](https://packagist.org/packages/doctrine/mongodb-odm)
- [github/doctrine/mongodb-odm](https://github.com/doctrine/mongodb-odm)
- [doctrine-project/mongodb-odm](https://www.doctrine-project.org/projects/mongodb-odm.html)
