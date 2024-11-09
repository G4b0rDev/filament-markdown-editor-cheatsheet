<?php

declare(strict_types=1);

namespace FilamentMarkdownEditorCheatsheet;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use FilamentMarkdownEditorCheatsheet\Actions\HandleCheatsheetModal;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMarkdownEditorCheatsheetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-markdown-editor-cheatsheet')
            ->hasAssets()
            ->hasTranslations();
    }

    public function packageRegistered(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-markdown-editor-cheatsheet');
    }

    public function packageBooted(): void
    {
        $this->registerFilamentAssets();

        RichEditor::macro('withCheatsheet', function (bool $slideOver = false) {
            return app()
                ->make(HandleCheatsheetModal::class)
                ->handle($slideOver, $this);
        });

        MarkdownEditor::macro('withCheatsheet', function (bool $slideOver = false) {
            return app()
                ->make(HandleCheatsheetModal::class)
                ->handle($slideOver, $this);
        });
    }

    protected function registerFilamentAssets(): void
    {
        FilamentAsset::register([
            Css::make('markdown-cheatsheet-style', __DIR__ . '/../dist/markdown-cheatsheet.css')->loadedOnRequest(),
            Js::make('markdown-cheatsheet-script', __DIR__ . '/../dist/markdown-cheatsheet.js')->loadedOnRequest(),
        ], 'markdown-cheatsheet');
    }
}

