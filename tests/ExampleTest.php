 <?php

use Isimmons\Example\Commands\ExampleCommand;
use Symfony\Component\Console\Command\Command;

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(ExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
