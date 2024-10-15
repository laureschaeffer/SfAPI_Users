# Symfony API REST - users

Understanding how to consume a REST API with Symfony.

### Set up

**Version >= PHP 8.2**
[Download PHP](https://windows.php.net/download#php-8.2)

1. **composer** : [composer](https://getcomposer.org/download/) 

2. **scoop** : on the powershell
 
``` sh
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser  
```

``` sh
Invoke-RestMethod -Uri https://get.scoop.sh | Invoke-Expression
```

3. **symfony**

``` sh
scoop install symfony-cli
```

Once the project is downloaded, put this line in the command prompt to have the correct 'vendor' folder

``` sh
composer install
```

Start server

``` sh
symfony server:start -d
```