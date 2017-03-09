<?php
/**
 * Created by PhpStorm.
 * User: thirdriver
 * Date: 17/3/9
 * Time: 下午4:06
 */
namespace ThirdRiver\PackageTest;


/**
 * Class TestController
 * @package ThirdRiver\PackageTest
 */
/**
 * Class TestController
 * @package ThirdRiver\PackageTest
 */
class TestController
{

    /**
     * @var string
     */
    private $_blade_prefix = 'vendor.packagetest.';

    /**
     * TestController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return array
     */
    public function info()
    {
        return [
            'version'       => '2.0',
            'method'        => ['config', 'migration', 'views'],
            'uses'          => [
                'composer require thirdriver/packagetest',
                'app.php providers array add ThirdRiver\PackageTest\PackageTestProvider::class',
                'php artisan vendor:publish',
                'php artisan migrate'
            ]
        ];
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function config()
    {
        $config = [
            'debug'     => config('packagetest.debug'),
            'driver'    => config('packagetest.driver')
        ];

        $config = collect($config)->toJson();

        return view($this->_blade_prefix . 'config', compact('config'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

        return view($this->_blade_prefix . 'migration', compact('migration'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function views()
    {

        $views = [
            'config.blade.php',
            'migration.blade.php',
            'views.blade.php'
        ];

        $views = collect($views)->toJson();

        return view($this->_blade_prefix . 'views', compact('views'));
    }

}