Overview

## Description
PHP Wrapper for Cloud Automator API

## Requirement
"php": ">=7.0.0",
"palanik/wrapi": "*"

## Usage
### Example

```php
<?php
require_once "vendor/autoload.php";
$ca = new \Kuredev\CA("[CloudAutomatorAccessKey]");

var_dump($ca->get->aws_accounts());
var_dump($ca->get->aws_account(xxx));
$accountArr = array(
    "name" => "xxx",
    "account_number" => "12345678910",
    "access_key_id" => "xxxxx",
    "secret_access_key" => "xxxxxxxxxx"
);
var_dump($ca->post->aws_accounts(json_encode($accountArr)));
```
    
## Install

```
$ composer install kuredev/cloudautomator-php
```

## Licence

[MIT](https://github.com/tcnksm/tool/blob/master/LICENCE)

