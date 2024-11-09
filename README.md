## Filament Rich Editor Markdown Cheatsheet

The `filament-markdown-editor-cheatsheet` module provides a comprehensive cheatsheet for Markdown syntax, designed to be integrated with the Filament `RichEditor` and `MarkdownEditor` component.
This module helps users quickly reference Markdown syntax and apply it.

## Features

- **Comprehensive Markdown Syntax**: Covers all basic and advanced Markdown syntax.
- **Easy Integration**: Can be easily integrated with the Filament `RichEditor` & `MarkdownEditor` component.
- **User-Friendly**: Provides a clean and easy-to-navigate interface for users.

## Installation

To install the `filament-markdown-editor-cheatsheet` module, you can use the following command:

```bash
composer require g4b0rdev/filament-markdown-editor-cheatsheet
```

## Usage

### Integrating with Filament `RichEditor` & `MarkdownEditor` Component

To integrate the markdown cheatsheet with the Filament `RichEditor` / `MarkdownEditor` component, follow these steps:

```php
use Filament\Forms\Components\RichEditor;

RichEditor::make('content')
    ->withCheatsheet()
    ->...,

// or

use Filament\Forms\Components\MarkdownEditor;

MarkdownEditor::make('content')
    ->withCheatsheet()
    ->...,
```

If you want to change the modal behavior, enable the slide over mode:

```php
use Filament\Forms\Components\RichEditor;

RichEditor::make('content')
    ->withCheatsheet(slideOver: true)
    ->...,

// or

use Filament\Forms\Components\MarkdownEditor;

MarkdownEditor::make('content')
    ->withCheatsheet(slideOver: true)
    ->...,
```

### Publishing and Customizing Translations

To publish the translation files for customization, use the following command:

```bash
php artisan vendor:publish --tag=filament-markdown-editor-cheatsheet-translations
```

This command will publish the translation files to the `resources/lang/vendor/filament-markdown-editor-cheatsheet` directory.
You can then customize the translations as needed.

#### Example of Customizing Translations

1. Open the published translation file, e.g., `resources/lang/vendor/filament-markdown-editor-cheatsheet/en/cheatsheet.php`.

2. Modify the translation strings as needed

3. Save the changes.

## Versioning

This project follow the [Semantic Versioning](https://semver.org/) guidelines.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
