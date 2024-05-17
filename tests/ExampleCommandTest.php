 <?php

use Isimmons\Example\Commands\ExampleCommand;
use Symfony\Component\Console\Command\Command;

use function Pest\Laravel\artisan;

it('can output value from config', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(Command::SUCCESS);
});

// not useful because we are testing the command, not the config
// but good to know
it('can output a dynamically set value from config', function () {
    config()->set('example.command_output', 'dynamic value');

    artisan(ExampleCommand::class)
        ->expectsOutput('dynamic value')
        ->assertExitCode(Command::SUCCESS);
});
