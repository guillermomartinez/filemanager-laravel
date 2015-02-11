<?php namespace Pqb\FilemanagerLaravel;

use Illuminate\Support\ServiceProvider;

class FilemanagerLaravelServiceProvider extends ServiceProvider {

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
		// $this->package('Pqb/FilemanagerLaravel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['FilemanagerLaravel'] = $this->app->share( function($app){
			return new FilemanagerLaravel;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('FilemanagerLaravel', 'Pqb\FilemanagerLaravel\Facades\FilemanagerLaravel');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('FilemanagerLaravel');
	}

}
