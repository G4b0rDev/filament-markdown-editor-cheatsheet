import '../css/markdown-cheatsheet.css'

import hljs from 'highlight.js/lib/core'
import markdown from 'highlight.js/lib/languages/markdown'

hljs.registerLanguage('markdown', markdown)

document.querySelectorAll('.language-markdown').forEach((block) => {
  hljs.highlightElement(block, { language: 'markdown', ignoreIllegals: true })
})
