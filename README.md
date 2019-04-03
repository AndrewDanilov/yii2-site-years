Site years
===================
Widget displaying years of site existence

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require andrewdanilov/yii2-site-years "dev-master"
```

or add

```
"andrewdanilov/yii2-site-years": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Call widget

```php
<?php
echo \andrewdanilov\SiteYears\SiteYears::widget([
	'startYear' => 2018, // optional, default is current year
	'delimiter' => '-', // optional, default is ' - '
]);
```

Result
```
2018-2019
```

If current year is equal to start year:
```php
<?php
echo \andrewdanilov\SiteYears\SiteYears::widget([
	'startYear' => 2019,
]);
```

Result would be just:
```
2019
```