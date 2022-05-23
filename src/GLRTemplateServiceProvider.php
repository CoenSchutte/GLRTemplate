<?php

namespace CoenSchutte\GLRTemplate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CoenSchutte\GLRTemplate\Commands\GLRTemplateCommand;

class GLRTemplateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('glrtemplate')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_glrtemplate_table')
            ->hasCommand(GLRTemplateCommand::class);
    }
}
