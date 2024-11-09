<?php

declare(strict_types=1);

namespace FilamentMarkdownEditorCheatsheet\Actions;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\HtmlString;

class HandleCheatsheetModal
{
    public function handle(bool $slideOver, RichEditor | MarkdownEditor $editor): RichEditor | MarkdownEditor
    {
        $action = Action::make('showCheatsheet')
            ->label(__('filament-markdown-editor-cheatsheet::cheatsheet.title'))
            ->icon(fn() => new HtmlString('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M22.27 19.385H1.73A1.73 1.73 0 0 1 0 17.655V6.345a1.73 1.73 0 0 1 1.73-1.73h20.54A1.73 1.73 0 0 1 24 6.345v11.308a1.73 1.73 0 0 1-1.73 1.731zM5.769 15.923v-4.5l2.308 2.885l2.307-2.885v4.5h2.308V8.078h-2.308l-2.307 2.885l-2.308-2.885H3.46v7.847zM21.232 12h-2.309V8.077h-2.307V12h-2.308l3.461 4.039z"/>
                </svg>'))
            ->slideOver($slideOver)
            ->modalHeading(__('filament-markdown-editor-cheatsheet::cheatsheet.title'))
            ->modalContent(view('filament-markdown-editor-cheatsheet::modal'))
            ->modalCancelAction(false)
            ->modalSubmitAction(false);

        return $editor->hintAction($action);
    }
}