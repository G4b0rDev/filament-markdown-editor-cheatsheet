<?php

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\HtmlString;

function testWithCheatsheetMacro($componentClass)
{
    $macros = (new ReflectionClass($componentClass))
        ->getStaticPropertyValue('macros');

    expect(array_key_exists('withCheatsheet', $macros))
        ->toBeTrue('withCheatsheet macro is not registered');
}

function testCheatsheetAction($componentClass, $slideOver = false)
{
    $action = $componentClass::make('test')->withCheatsheet($slideOver);

    /** @var Action $action */
    $action = $action->getHintActions()['showCheatsheet'];

    expect($action)->toBeInstanceOf(Action::class);
    expect($action->getName())->toBe('showCheatsheet');
    expect($action->getLabel())->toBe('Markdown Cheatsheet');
    expect($action->getIcon())->toBeInstanceOf(HtmlString::class);
    expect($action->isModalSlideOver())->toBe($slideOver);
    expect($action->getModalHeading())->toBe('Markdown Cheatsheet');
    expect($action->getModalContent()->name())->toBe('filament-markdown-editor-cheatsheet::modal');
    expect($action->getModalCancelAction())->toBeNull();
    expect($action->getModalSubmitAction())->toBeNull();
}

function testComponent($componentClass)
{
    it("registers the withCheatsheet macro for the {$componentClass} component", function () use ($componentClass) {
        testWithCheatsheetMacro($componentClass);
    });

    it("creates the cheatsheet action for {$componentClass}", function () use ($componentClass) {
        testCheatsheetAction($componentClass);
    });

    it("should slide over the cheatsheet modal for {$componentClass}", function () use ($componentClass) {
        testCheatsheetAction($componentClass, true);
    });
}

testComponent(RichEditor::class);
testComponent(MarkdownEditor::class);
