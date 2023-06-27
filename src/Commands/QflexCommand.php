<?php

namespace Psi\Qflex\Commands;

use Illuminate\Console\Command;

class QflexCommand extends Command
{
    public $signature = 'qflex';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
