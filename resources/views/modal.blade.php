<div
    x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('markdown-cheatsheet-style', package: 'markdown-cheatsheet'))]"
    x-load-js="[@js(\Filament\Support\Facades\FilamentAsset::getScriptSrc('markdown-cheatsheet-script', package: 'markdown-cheatsheet'))]"
    class="markdown-cheatsheet"
>
    <h2 class="text-xl">@lang('filament-markdown-editor-cheatsheet::cheatsheet.title')</h2>

    <p class="text-sm pt-4">
        @lang('filament-markdown-editor-cheatsheet::cheatsheet.description')
    </p>

    <div class="markdown-cheatsheet-sections">
        <div>
            <h3 class="border-b text-lg">{{ __('filament-markdown-editor-cheatsheet::cheatsheet.headers.title') }}</h3>

            <pre><code class="language-markdown dark:theme-markdown-cheatsheet-dark-theme markdown-cheatsheet-dark-theme"># @lang('filament-markdown-editor-cheatsheet::cheatsheet.headers.h1')

## @lang('filament-markdown-editor-cheatsheet::cheatsheet.headers.h2')

### @lang('filament-markdown-editor-cheatsheet::cheatsheet.headers.h3')

#### @lang('filament-markdown-editor-cheatsheet::cheatsheet.headers.h4')</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.bold_italic.title')</h3>
            <pre><code class="language-markdown">**@lang('filament-markdown-editor-cheatsheet::cheatsheet.bold_italic.bold')**
*@lang('filament-markdown-editor-cheatsheet::cheatsheet.bold_italic.italic')*
_**@lang('filament-markdown-editor-cheatsheet::cheatsheet.bold_italic.bold_italic')**_</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.unordered_list.title')</h3>
            <pre><code class="language-markdown">- @lang('filament-markdown-editor-cheatsheet::cheatsheet.unordered_list.item1')

- @lang('filament-markdown-editor-cheatsheet::cheatsheet.unordered_list.item2')

- @lang('filament-markdown-editor-cheatsheet::cheatsheet.unordered_list.item3')</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.ordered_list.title')</h3>
            <pre><code class="language-markdown">1. @lang('filament-markdown-editor-cheatsheet::cheatsheet.ordered_list.item1')

2. @lang('filament-markdown-editor-cheatsheet::cheatsheet.ordered_list.item2')

3. @lang('filament-markdown-editor-cheatsheet::cheatsheet.ordered_list.item3')</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.blockquote.title')</h3>
            <pre><code class="language-markdown">> @lang('filament-markdown-editor-cheatsheet::cheatsheet.blockquote.text')</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.link.title')</h3>
            <pre><code class="language-markdown">[@lang('filament-markdown-editor-cheatsheet::cheatsheet.link.text')](https://www.example.com)</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.image.title')</h3>
            <pre><code class="language-markdown">![@lang('filament-markdown-editor-cheatsheet::cheatsheet.image.alt')](https://www.example.com/image.jpg)</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.code.title')</h3>
            <p class="text-sm py-3">@lang('filament-markdown-editor-cheatsheet::cheatsheet.code.inline')</p>
            <pre><code class="language-markdown">`@lang('filament-markdown-editor-cheatsheet::cheatsheet.code.inline_code')`</code></pre>

            <p class="text-sm py-3">@lang('filament-markdown-editor-cheatsheet::cheatsheet.code.block')</p>
            <pre><code class="language-markdown">```
@lang('filament-markdown-editor-cheatsheet::cheatsheet.code.block_code')

```</code></pre>
        </div>

        <div>
            <h3 class="border-b text-lg">@lang('filament-markdown-editor-cheatsheet::cheatsheet.table.title')</h3>
            <pre><code class="language-markdown">| @lang('filament-markdown-editor-cheatsheet::cheatsheet.table.header1') | @lang('filament-markdown-editor-cheatsheet::cheatsheet.table.header2') |
| -------- | -------- |
| @lang('filament-markdown-editor-cheatsheet::cheatsheet.table.row1_col1')    | @lang('filament-markdown-editor-cheatsheet::cheatsheet.table.row1_col2')    |
| @lang('filament-markdown-editor-cheatsheet::cheatsheet.table.row2_col1')    | @lang('filament-markdown-editor-cheatsheet::cheatsheet.table.row2_col2')    |</code></pre>
        </div>
    </div>
</div>
