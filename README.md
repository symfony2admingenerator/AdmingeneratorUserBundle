# Symfony2 Admin Generator User Bundle
---------------------------------------

[![KnpBundles Badge](http://knpbundles.com/symfony2admingenerator/AdmingeneratorGeneratorBundle/badge-short)](http://knpbundles.com/symfony2admingenerator/AdmingeneratorGeneratorBundle)
![project status](http://stillmaintained.com/cedriclombardot/AdmingeneratorUserBundle.png)

This package is a part of the [Symfony2 Admin Generator](https://github.com/symfony2admingenerator/AdmingeneratorGeneratorBundle) based on YAML configuration and Twig templating.

It will allow you to associate to the [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) a base layout configured throw a config in the config.yml

### Follow us on Twitter!

Don't miss any updates from **Symfony2 Admin Generator**! Join Twitter today and [follow us](https://twitter.com/sf2admgen)!

## How to setup

### Clone the repo

```
git submodule add https://github.com/symfony2admingenerator/AdmingeneratorUserBundle vendor/Admingenerator/UserBundle
```

### Setup the FOSUserBundle

Follow the bundle documentation : [https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md)

### Configure the autoload

```php
$loader->registerNamespaces(array(
    'FOS'                   =>  __DIR__.'/../vendor/bundles',
    'Admingenerator'        =>  __DIR__.'/../vendor/bundles',
```

### Enable the bundle in AppKernel

```php
 $bundles = array(
    // ....
    new Admingenerator\UserBundle\AdmingeneratorUserBundle(),
```

### Configure the base layout to use for the login form

In config.yml

```yaml
admingenerator_user:
     login_template: AdmingeneratorGeneratorBundle::base_login.html.twig
```

## Use the twig extension in your projects :

```html+django
{% extends_my_configured_layout 'admingenerator.user_login_template' %}
```

Will be the same as :

```html+django
{% extends 'The value of the container paramater admingenerator.user_login_template' %}
```

