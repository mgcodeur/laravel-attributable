<?php

namespace Mgcodeur\LaravelAttributes;

use Mgcodeur\LaravelAttributes\Commands\LaravelAttributesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAttributesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-attributes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_attributes_table')
            ->hasCommand(LaravelAttributesCommand::class);
    }
}
