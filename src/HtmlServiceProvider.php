<?php

namespace Rokde\LaravelBootstrap\Html;

use Collective\Html\HtmlBuilder;
use Illuminate\Support\ServiceProvider;

/**
 * Class HtmlServiceProvider
 *
 * @package Rokde\LaravelBootstrap\Html
 */
class HtmlServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlBuilder();

        $this->registerFormBuilder();

        $this->app->alias('html', 'Collective\Html\HtmlBuilder');
        $this->app->alias('form', 'App\Html\BootstrapFormBuilder');
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function ($app) {
            return new HtmlBuilder($app['url']);
        });
    }

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->bindShared('form', function ($app) {
            $form = new BootstrapFormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['html', 'form', 'Collective\Html\HtmlBuilder', 'App\Html\BootstrapFormBuilder'];
    }
}