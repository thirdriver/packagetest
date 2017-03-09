<?php
/**
 * Created by PhpStorm.
 * User: thirdriver
 * Date: 17/3/9
 * Time: 下午4:23
 */

Route::get('package_test/config', 'ThirdRiver\PackageTest\TestController@config');

Route::get('package_test/migration', 'ThirdRiver\PackageTest\TestController@migration');

Route::get('package_test/views', 'ThirdRiver\PackageTest\TestController@views');