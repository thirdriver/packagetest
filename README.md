# packagetest

#### 使用方法

```
#composer download package
composer require thirdriver/packagetest

#在配置文件app.php providers数组中添加服务提供者
ThirdRiver\PackageTest\PackageTestProvider::class

#运行发布文件命令 生成模板文件、配置文件
php artisan vendor:publish

#运行migrate
php artisan migrate
```

#### 类中方法

```php
$package = app('packagetest');

$package->info();

/*
    
    [
       'version'       => '3.0',
       'method'        => ['config', 'migration', 'views'],
       'uses'          => [
           'composer require thirdriver/packagetest',
           'app.php providers array add ThirdRiver\PackageTest\PackageTestProvider::class',
           'php artisan vendor:publish',
           'php artisan migrate'
       ]
    ]

*/

// 显示配置信息 可在配置文件 packagetest.php中修改
$package->config();
// or 访问路由 http://localhost/package_test/config


// 显示migration信息
$package->migration();
// or 访问路由 http://localhost/package_test/migration

// 显示模板信息
$package->views();
// or 访问路由 http://localhost/package_test/views

```

