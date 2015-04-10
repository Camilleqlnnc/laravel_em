<?php namespace App\Providers;

use App\Http\ViewComposer\Active;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use App\Student;
use App\Category;
use View, Form;

class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// injection dans sidebar
		View::composer('partials.nav', function($view){
            $view->with('menu', Category::all());
            $view->with('students', Student::all());
        });

        Form::macro('date', function($name, $value, $options=[]){

        $value = $value ? Carbon::parse($value)->format('Y-m-d') : Carbon::now()->format('Y-m-d');

        return '<input type="date" value="'.$value.'" name="'.$name.'">';
        });

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('active', function($app){
           return new Active($app['request']);
        });
	}

}
