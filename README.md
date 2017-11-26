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
var_dump($ca->get->aws_accounts());
var_dump($ca->get->aws_account(xxx));
$accountArr = array(
    "name" => "xxx",
    "account_number" => "12345678910",
    "access_key_id" => "xxxxx",
    "secret_access_key" => "xxxx+R2WaUl9z5b7efTvEv6f"
);
var_dump($ca->post->aws_accounts(json_encode($accountArr)));
```
    
## Install
composer install kuredev/cloudautomator-php

## Licence

[MIT](https://github.com/tcnksm/tool/blob/master/LICENCE)

