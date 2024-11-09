<?php

declare(strict_types=1);

namespace FilamentMarkdownEditorCheatsheet\Tests;

use FilamentMarkdownEditorCheatsheet\FilamentMarkdownEditorCheatsheetServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentMarkdownEditorCheatsheetServiceProvider::class,
        ];
    }
}
