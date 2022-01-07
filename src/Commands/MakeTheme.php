<?php

namespace Aerni\LivewireForms\Commands;

use Aerni\LivewireForms\Facades\Component;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Statamic\Console\RunsInPlease;

class MakeTheme extends Command
{
    use RunsInPlease;

    protected $signature = 'livewire-forms:theme {theme?}';
    protected $description = 'Create a new Livewire form theme';

    public function handle(): void
    {
        $theme = $this->argument('theme') ?? Component::defaultTheme();
        $path = resource_path('views/livewire/forms/' . $theme);

        if (! File::exists($path) || $this->confirm("A theme with the name <comment>$theme</comment> already exists. Do you want to overwrite it?")) {
            File::copyDirectory(__DIR__ . '/../../resources/views/', $path);
            $this->line("<info>[✓]</info> The theme was successfully created: <comment>{$this->getRelativePath($path)}</comment>");
        }
    }

    protected function getRelativePath($path): string
    {
        return str_replace(base_path() . '/', '', $path);
    }
}