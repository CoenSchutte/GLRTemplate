<?php

namespace CoenSchutte\GLRTemplate\Commands;

use Illuminate\Console\Command;

class GLRTemplateCommand extends Command
{
    public $signature = 'glrtemplate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
