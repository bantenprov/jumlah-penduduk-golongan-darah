<?php namespace Bantenprov\JumlahPendudukGolonganDarah;

use Illuminate\Support\ServiceProvider;
use Bantenprov\JumlahPendudukGolonganDarah\Console\Commands\JumlahPendudukGolonganDarahCommand;

/**
 * The JumlahPendudukGolonganDarahServiceProvider class
 *
 * @package Bantenprov\JumlahPendudukGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JumlahPendudukGolonganDarahServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('jumlah-penduduk-golongan-darah', function ($app) {
            return new JumlahPendudukGolonganDarah;
        });

        $this->app->singleton('command.jumlah-penduduk-golongan-darah', function ($app) {
            return new JumlahPendudukGolonganDarahCommand;
        });

        $this->commands('command.jumlah-penduduk-golongan-darah');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'jumlah-penduduk-golongan-darah',
            'command.jumlah-penduduk-golongan-darah',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('jumlah-penduduk-golongan-darah.php');

        $this->mergeConfigFrom($packageConfigPath, 'jumlah-penduduk-golongan-darah');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'jumlah-penduduk-golongan-darah');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/jumlah-penduduk-golongan-darah'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'jumlah-penduduk-golongan-darah');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/jumlah-penduduk-golongan-darah'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/jumlah-penduduk-golongan-darah'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
