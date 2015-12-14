### joa/debug

PHP library for formatting data outputs

#### Install

```bash
php composer.phar require joa/debug
```

#### Use

    use Joa\Debug\Debug;
    

    $a = ['a'=>'b', 'c' => ['as', 'gg']];
    
    Debug::out($a);
    exit;


