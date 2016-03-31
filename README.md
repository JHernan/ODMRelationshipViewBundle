# ODMRelationshipViewBundle

ODMRelationshipViewBundle lets you show all database documents relationships other documents of your Symfony application.
This bundle let you to know the relationships of documents each others. That will be very helpful with large number of documents.

<img src="https://raw.githubusercontent.com/JHernan/ODMRelationshipViewBundle/master/Resources/doc/menu.png" alt="Profiler Menu" />
<img src="https://raw.githubusercontent.com/JHernan/ODMRelationshipViewBundle/master/Resources/doc/profiler.png" alt="List Documents" />

**Features**

* Show all relationships of each document:
  * Type
  * Embedded
  * Target document
* Filters at documents list.

**Requirements**

* Symfony 2.3 or higher
* MongoDB 1.0.5 or higher

Installation
------------

### Step 1: Download the Bundle

```json
// composer.json:
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/JHernan/ODMRelationshipViewBundle.git"
        }
    ],

    /* ... */

    "require": {
        /* ... */
        "jorgehernan/odmrelationshipview-bundle": "dev-master"
    }
},
```

### Step 2: Enable the Bundle

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new JorgeHernan\Bundle\OdmRelationshipViewBundle\JorgeHernanOdmRelationshipViewBundle(),
        );
    }

    // ...
}
```

### Step 3: Clean Cache

```cli
# Symfony 2
php app/console cache:clear
```

License
-------

This software is published under the [MIT License](LICENSE.md)