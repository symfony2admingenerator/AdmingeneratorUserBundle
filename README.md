# Symfony2 Admin Generator: User Part  ![project status](http://stillmaintained.com/cedriclombardot/AdmingeneratorUserBundle.png)#

This package is a part of the [Symfony2 Admin Generator](https://github.com/cedriclombardot/AdmingeneratorGeneratorBundle) based on YAML configuration and Twig templating.
But could also work standalone.

It will allow you to associate to the [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) a base layout configured throw a config in the config.yml


## How to setup

### Clone the repo

````
git submodule add https://github.com/cedriclombardot/AdmingeneratorUserBundle vendor/Admingenerator/UserBundle
````

### Setup the FOSUserBundle

Follow the bundle documentation : [https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md)

### Configure the autoload

````
$loader->registerNamespaces(array(
    'FOS'              => __DIR__.'/../vendor/bundles',
    'Admingenerator'        =>  __DIR__.'/../vendor/bundles',
````
### Configure the base layout to use for the login form

In config.yml

````
admingenerator_user:
     login_template: AdmingeneratorGeneratorBundle::base_login.html.twig
````

## Use the twig extension in your projects :

````
{% extends_my_configured_layout 'admingenerator.user_login_template' %}
````

Will be the same as :

````
{% extends 'The value of the container paramater admingenerator.user_login_template' %}
````

