# Learn how to unit test PHP code, using PHPUnit, Xdebug & phpunit-result-printer (codedungeon)
### PHP Team Treehouse TechDegree project #6

- [The goal of this project](#the-goal-of-this-project)
- [Installation instructions](#installation-instructions)
- [Tech used](#tech-used)
- [Folder & file structure](#folder--file-structure)

## The goal of this project
#### To unit test the following 3 classes with 100% code coverage: ListingBasic, ListingPremium & ListingFeatured

- Step 1. Set-up the environment with PHPUnit, Xdebug and phpunit-result-printer
- Step 2. Create unit tests which together cover 100% of the code of the 3 classes. The code within these classes were mostly provided by Treehouse.
- Step 3. Add a feature to set & get the image property of the ListingBasic class (according to test driven development); in this case the tests in ListingImageTest.php were provided by Treehouse.
- Step 4. Use the Xdebug & PHPUnit reports to verify whether the tests are successful and which lines are or aren't covered.

1. Code coverage ListingBasic class (including new image feature)

![Code coverage ListingBasic class](screenshots/listingbasic.png)

2. Code coverage ListingPremium class

![Code coverage ListingPremium class](screenshots/listingpremium.png)

3. Code coverage ListingFeatured class

![Code coverage ListingFeatured class](screenshots/listingfeatured.png)

## Installation instructions
#### After downloading this project, make sure you run the following composer command in the project folder to install the right packages on dev:
```bash
composer install
```

#### Then make sure composer autoloads all classes automatically by running this command:

```bash
composer dump-autoload -o
```

#### Install Xdebug

See for example: https://xdebug.org/docs/install

#### Enable Xdebug

On MAMP for example: https://joshbuchea.com/mac-enable-xdebug-in-mamp/

#### And you're ready to go!  

## Tech used
#### In this project the following main concepts, languages, frameworks, packages and other technologies are applied:
PHP | OOP | SQLite | PHPUnit | Xdebug | phpunit-result-printer (codedungeon)

## Folder & file structure
#### The most important folders & files within this project:

      .
      ├── log                         # contains all log details  
      │   └── app.log                 
      ├── public                      # contains css files, images, htaccess and index.php files  
      │   ├── css
      │   └── img
      ├── src                         # contains the database file & the primary Slim files  
      │   ├── Classes                 # contains the Post, Comment & Tag class files, based on Eloquent ORM  
      │   └── routes                  # contains the post, comment & tag route files  
      └── templates                   # contains all twig templates
