<?php namespace Laravelrus\LocalizedCarbon;

use Illuminate\Support\ServiceProvider;

class LocalizedCarbonServiceProvider extends ServiceProvider {

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
		//Laravel4 support
		//$this->package('laravelrus/localized-carbon');
		//Laravel5 support
		$this->loadTranslationsFrom(__DIR__ . '/../../lang', 'localized-carbon');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('difffactory', function() {
            return new DiffFormatterFactory();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('difffactory');
	}

}
