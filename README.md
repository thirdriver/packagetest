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

