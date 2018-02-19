# Installation

## Step 1) Get the library

First you need to get a hold of this library. There are two ways of doing this:


### Method a) Using composer

Add the following to your ``composer.json`` (see http://getcomposer.org/)

    "require" :  {
        // ...
        "roelvanduijnhoven/docdata": "^1.2.2"
    }

## Step 2) Register the namespaces

If you installed the bundle by composer, use the created autoload.php  (jump to step 3).
Add the following two namespace entries to the `registerNamespaces` call in your autoloader:

``` php
<?php
// app/autoload.php
$loader->registerNamespaces(array(
    // ...
    'JouwWeb\DocData' => __DIR__.'/../vendor/roelvanduijnhoven/docdata',
    // ...
));
```

# Ready?

Check out the [usage documentation](usage.md)!
