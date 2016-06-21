# laravel-bootstrap-formbuilder

Laravel 5.1 FormBuilder for Blade Engine and the Twitter Bootstrap CSS Framework.

[![Latest Stable Version](https://poser.pugx.org/rokde/laravel-bootstrap-formbuilder/v/stable.svg)](https://packagist.org/packages/rokde/laravel-bootstrap-formbuilder) [![Latest Unstable Version](https://poser.pugx.org/rokde/laravel-bootstrap-formbuilder/v/unstable.svg)](https://packagist.org/packages/rokde/laravel-bootstrap-formbuilder) [![License](https://poser.pugx.org/rokde/laravel-bootstrap-formbuilder/license.svg)](http://rok.mit-license.org/) [![Total Downloads](https://poser.pugx.org/rokde/laravel-bootstrap-formbuilder/downloads.svg)](https://packagist.org/packages/rokde/laravel-bootstrap-formbuilder)


This FormBuilder enhances the [Laravel Collective FormBuilder](https://github.com/LaravelCollective/html) for its use
 within the [Bootstrap CSS Framework](http://getbootstrap.com).


## Installation

	$> composer require "rokde/laravel-bootstrap-formbuilder:~0.1"

For Laravel 5.1:

	$> composer require "rokde/laravel-bootstrap-formbuilder:~0.0.1"

Then updating:

	$> composer update

Next, add your new provider to the `providers` array of `config/app.php`:

	Rokde\LaravelBootstrap\Html\HtmlServiceProvider::class,

Finally, add two class aliases to the `aliases` array of `config/app.php`:

	'Form' => Collective\Html\FormFacade::class,
	'Html' => Collective\Html\HtmlFacade::class,

We use the Facades from Laravel Collective.

## Usage

All Bootstrap recommendations for form and input elements are built in, so you do not have to worry about the right 
 classes and tag-soup.


### Form Groups

	{!! Form::openGroup('name', 'Name') !!}
		{!! Form::text('name') !!}
	{!! Form::closeGroup() !!}

Will render:

	<div class="form-group"><label for="name">Name</label>
		<input class="form-control" name="name" type="text" id="name">
	</div>

Error handling is also included.


### Further Resources

Heavily inspired by [Easy Bootstrap Forms In Laravel](http://blog.stidges.com/post/easy-bootstrap-forms-in-laravel), so 
 the main credits goes to [Stidges](https://github.com/stidges).

You can read at [Laravel Collective](http://laravelcollective.com/docs/5.1/html#opening-a-form) another usage examples.
