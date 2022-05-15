<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

use Symfony\Component\Console\Input\InputOption;

class GuardMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:guard';

    /**
     * The name of the console command.
     *
     * This name is used to identify the command during lazy loading.
     *
     * @var string|null
     *
     * @deprecated
     */
    protected static $defaultName = 'make:guard';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new guard class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Guard';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->option('example')
            ? $this->resolveStubPath('/stubs/guard.example.stub')
            : $this->resolveStubPath('/stubs/guard.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
                        ? $customPath
                        : __DIR__.$stub;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Guards';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_NONE, 'Indicates the guard should contain example functionality'],
        ];
    }
}
