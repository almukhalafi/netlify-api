# netlify-api
[![Packagist License](https://poser.pugx.org/barryvdh/laravel-debugbar/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/almukhalafi/netlify-api/version.png)](https://packagist.org/packages/almukhalafi/netlify-api)
[![Total Downloads](https://poser.pugx.org/almukhalafi/netlify-api/d/total.png)](https://packagist.org/packages/barryvdh/laravel-debugbar)

Requirements
PHP 7.4.0 and later.

##Composer
You can install the bindings via Composer. Run the following command:

```shell
composer require almukhalafi/netlify-api
```


## Usage

You can now add messages using the Facade (when added), using the PSR-3 levels (debug, info, notice, warning, error, critical, alert, emergency):

```php
$netfliy = new NetlifySites();


// get all sites
$netfliy->getSites();

// get  site information
$netfliy->getSite('site_id');

// update site information
$netfliy->updateSite('site_id',['name'=>'unique_new_name']);

// delete site
$netfliy->deleteSite('site_id');

```