<?php

namespace Livewire\Commands;

class TouchCommand extends MakeCommand
{
    protected $signature = 'livewire:touch {name} {--force} {--inline} {--test} {--stub=default}';

    protected function configure(): void
    {
        $this->setHidden(true);
    }
}
