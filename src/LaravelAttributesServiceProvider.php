<?php

namespace Mgcodeur\LaravelAttributes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mgcodeur\LaravelAttributes\Commands\LaravelAttributesCommand;

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
