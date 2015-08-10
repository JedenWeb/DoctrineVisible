# Doctrine visible

Visibility trait for Doctrine entities

## Instalation

The best way to install jedenweb/doctrine-visible is using  [Composer](http://getcomposer.org/):


```
$ composer require jedenweb/doctrine-visible:^1.0
```

## Usage

### In Doctrine entity

```php

use JedenWeb\Doctrine\Visible\Visible;

/**
 * @ORM\Entity
 */
class Entity
{
	
	use Visible;
	
}

```
