# ODMRelationshipViewBundle

ODMRelationshipViewBundle lets you show all database documents relationships other documents of your Symfony application.
This bundle let you to know the relationships of documents each others. That will be very helpful with large number of documents.

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

```bash
$ composer require jorgehernan/odmrelationshipview-bundle
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