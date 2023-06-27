<?php

namespace Psi\Qflex;

use Psi\Qflex\Commands\QflexCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QflexServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('qflex')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_qflex_table')
            ->hasCommand(QflexCommand::class);
    }
}
