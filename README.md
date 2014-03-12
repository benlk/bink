# Bink: a theme for Dropplets

> adj: 1. (slang) refers to a sharp dresser or swell looker. see also: dapper

This theme is a single-author fork of [Jason Schuller][]'s `simple` theme that is packaged with [Dropplets 1.5][], incorporating some styling from [Simple Dark][] by [Chris Reynolds][] and other places. 

## Features:

* Intro uses a separately-styled <header> tag
* Optional buttons in the intro
* Custom post types, including asides and [reveal.js][]

### Custom post types

Post types are set in the header. Currently supported are:

* `draft`
    * Hidden by Dropplets
* `published`
    * Square post thumbnail
    * Supports all markdown that Dropplets supports
* `feature`
    * White background for content
    * Background image defined in `custom/style.css`
    * But seriously, use this as a template to make your own feature posts
* `aside`
    * No thumbnail or decoration on post meta
    * No post headline on front page
    * No "Continue Reading" button on front page
    * No way to access the post itself at all
    * It's just `$post_content` on the front page
* `revealjs`
    * Includes reveal.js and relevant stylesheets
    * Put reveal.js `<section>...</section>` HTML after Dropplets Markdown post header, before Markdown body of article.
    * Separate `<section>...</section>` from Markdown body of article with eight dashes: `--------` (the Markdown `<hr>` equivalent)
    * Has "Click for slide deck &rarr;" button on front page
    
Post types are set by changing the post status:

    # Post title 
    - Post author
    - Post author's twitter @
    - YYYY-MM-DD
    - category
    - draft/published/feature/aside/revealjs
    
### Intro buttons 

Buttons that go in the intro. See `custom/intro-buttons.php`. Leave the file blank after `?>` for no buttons. 

### Reveal.js

Your `post.md` file should look like this:

    # Post title
    - Post author
    - Post author's twitter @
    - YYYY-MM-DD
    - category
    - revealjs

    <section>
        <h1>Reveal.js</h1>
    </section>

    ----‐---

    > Markdown! This content is included in the template with
    > `<?php echo(Markdown($markdown)); ?>` and some parsing.

The eight dashes are mandatory, and will not show up in your post. If you have "--------" in your post before that line, *that* is where the slideshow will end and where your Markdown()'d post will start. Try to escape them with other markup.

## Version History

1.6:

- Adds [reveal.js][] support in single post and posts list
- Adds `$post_content` to `aside` posts in front page
- Front page gets `<body class="home">`
- Category pages get `<body class="category">`
- Changes font from Oswald/Fenix to Squada One/Averia Libre
- Removes `custom/comments-disqus.php` (it never worked)

1.5: Updated for Dropplets 1.5 compatibility.

1.1: Added custom post functionality.

1.0: Initial modifications off of `Simple` and `Simple-Dark`.

## Attribution and Licenses

Efforts have been made to attribute code where possible. 

`/style.css` is the modified stylesheet, including some formatting taken from [Simple Dark][] and from the original `/style.css` distributed with Dropplets' `simple` theme, copyright Circa75 Media, LLC. [Circa75's Media's license][] on the `simple` theme is as follows:

> Copyright (c) 2013 Circa75 Media, LLC

> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

`revealjs/` includes scripts and CSS copied from [reveal.js][], Copyright 2013 Hakim El Hattab.

> Copyright (C) 2013 Hakim El Hattab, http://hakim.se

> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS ORIMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

`custom/nasty_fabric.png` comes from [Brandon Ebrahim](http://dribbble.com/graphcoder) and [Subtle Patterns](http://subtlepatterns.com/nasty-fabric/), and is [CC BY-SA 3.0](http://creativecommons.org/licenses/by-sa/3.0/)

`custom/squairy_light.png` comes from Tia Newbury and [Subtle Patterns](http://subtlepatterns.com/squairy/), and is [CC BY-SA 3.0](http://creativecommons.org/licenses/by-sa/3.0/)

[Dropplets]: http://dropplets.com/
[Jason Schuller]: http://jason.sc/
[Simple Dark]: https://gist.github.com/jazzsequence/5162736
[Chris Reynolds]: http://chrisreynolds.io/
[chrisreynolds.io/blog/]: http://chrisreynolds.io/blog/
[Circa75's Media's license]: https://github.com/circa75/dropplets#license
[reveal.js]: https://github.com/hakimel/reveal.js
