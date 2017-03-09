<?php
/**
 * Created by PhpStorm.
 * User: thirdriver
 * Date: 17/3/9
 * Time: 下午4:06
 */
namespace ThirdRiver\PackageTest;



class TestController
{

    public function __construct()
    {

    }

    public function say($name)
    {
        echo $name;
    }


    public function config()
    {
        $config = [
            'debug'     => config('packagetest.debug'),
            'driver'    => config('packagetest.driver')
        ];

        $config = collect($config)->toJson();

        return view('config', compact('config'));
    }

    public function migration()
    {
        $migration = [
            '2016_06_01_000001_create_oauth_auth_codes_table',
            '2016_06_01_000002_create_oauth_access_tokens_table',
            '2016_06_01_000003_create_oauth_refresh_tokens_table',
            '2016_06_01_000004_create_oauth_clients_table',
            '2016_06_01_000005_create_oauth_personal_access_clients_table'
        ];

        $migration = collect($migration)->toJson();

        return view('migration', compact('migration'));
    }

    public function views()
    {

        $views = [
            'config.blade.php',
            'migration.blade.php',
            'views.blade.php'
        ];

        $views = collect($views)->toJson();

        return view('views', compact('views'));
    }

}