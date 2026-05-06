## Lesson Objectives
By the end of this lesson, you should:

- **Understand**: 👩‍💻 The importance of semantic HTML
- **Understand**: 🌲 That the Document Object Model represents the structure of an HTML page

## What We'll Do In Class

### Quiz
As promised, we'll start class with a quiz where you'll demonstrate that you've learned about the HTML text tags from the reading.

### Organization - validation, .gitignore, .vimrc
Last class, we didn't get as far in our validation setup as I hoped. Today, we'll get the validator working and do a bit more organization in our github repos.

I've been getting a lot of questions about `.swp` and `.DS_STORE` files. I'll talk about where those come from, and we'll tell git to ignore them. 

Here's what your repo should look like at the end of this part:

- website/
    - practice/
        - minimal.html
    - js/
        - [validate.js](./resources/validate.js)
    - index.html
    - README.md
    - .gitignore

#### .gitignore
I discussed this at length in class. If you were out, I still want you to create this file. Here is what it should look like: <https://github.com/cj0ne5/cj0ne5.github.io/blob/main/.gitignore>. You should read more about this file here: [gitignore Documentation](https://git-scm.com/docs/gitignore)

#### vimrc
In class, we also spent a while talking about our vimrc file. If you were out, here's what you might want to put in your vimrc file. You can read more about this file here: 
[Vimrc | Learn Vim](https://learnvim.irian.to/customize/vimrc)

```
syntax enable

syntax enable

filetype indent on

set background=dark
colorscheme desert

set number
```

### Practice
Update your index.html page to include everything we've learned so far about HTML.

By the beginning of next class, I'd like everyone to have an index.html page that includes:

- My validation code, and passes the validation
- At least one header, using the `<h1>` tag
- Some text that introduces your website and what you plan to write about. Use `<p>` tags as appropriate.
- Your favorite quote. Make sure to use `<q>`, `<blockquote>`, and/or `<cite>` tags appropriately!

## Homework

### Read the next few pages in Module 2
On our [edube.org](https://edube.org/) class, read the next few pages in Module 2:

- Paragraphs and Text Formatting - Part 3
- Paragraphs and Text Formatting - Part 4
- Lists

There are a lot of new tags here, so I'd encourage you to make some HTML files on your own to play around with them. We'll start next class with a reading quiz where I'll expect that you're comfortable with everything introduced in these pages.