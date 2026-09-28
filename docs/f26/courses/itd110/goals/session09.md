## Lesson Objectives
By the end of this lesson, you should:

- **Understand**: 👩‍💻 The importance of semantic HTML
- **Understand**: 🌲 That the Document Object Model represents the structure of an HTML page

## What We'll Do In Class

### Quiz

As promised, we'll start class with a quiz where you'll demonstrate that you've learned about the HTML text tags from the reading.

### Quick Pitch - Your Final Exam is Ready

One of my promises is that you'll never be bored in this class. I know that there are a few of you here who are already really good at HTML. Your final exam for ITD110 is the certification test at the end of the 
edube text we've been reading. I'll share more details about that later, but I'd be **thrilled** if any of you want to take and pass that test early, and then start using class time to work on some cool HTML projects!


### Block vs Inline Elements

This topic has come up a few times. Today, we'll spend time making sure we really understand the difference between block vs inline elements, and how they work together to build our pages.

The definitive source for all things HTML is the [MDN Web Docs](https://developer.mozilla.org/en-US/blog/mdn-turns-20/). (MDN used to stand for Mozilla Developer Network, but these days they just want to be called MDN). We'll take a look
[at their page on this topic](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Display/Block_and_inline_layout), but might find it too overwhelming for now.

Then, we'll play with a website that I built to help learn this topic: <https://layouter.dev/>.


### Semantic HTML

We'll continue our discussion about the difference between HTML content and CSS formatting. We'll discuss [Semantic HTML](https://en.wikipedia.org/wiki/Semantic_HTML) and Web Agents - computer programs that automatically read and compile information from the internet.

With the help of layouter.dev, we'll work on what i'm calling the minimal *semantic* html page, which will include a few new elements. Here's the whole thing:

```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World!</title>
    <script src='validate.js'></script>
</head>
<body>
    <header>
        <h1>Hello World!</h1>
    </header>
    <main>
        <section>
            <h2>About Me</h2>
            <p>This is my first web page.</p>
        </section>
    </main>
    <footer>
        <p>Made by me.</p>
    </footer>
</body>
</html>
```

## Today's Classwork

It's time to practice with some of our new HTML skills.

To do this, make a new HTML page in your repo called `practice/terminal.html`. 
In this page, write a nice html page that I might use to teach one of my lessons 
next year on either the Terminal or Vim. Produce a new HTML file that 
summarizes what we learned. You can start by looking at the session calendar,
but I'll expect that you include more code snippets and examples that you gained
from vimtutor and/or terminus.

For example, you might make an HTML page about vim - I would expect that page to
include instructions about how to open/close vim, how to save files, and some of
the most useful vim commands.

I'll expect that your page has:
- All of the minimal semantic elements we learned today.
- A list, and an unordered list, used appropriately
    - e.g. use an ordered list to give specific instruction steps, and an unordered list to provide a list of features
- A few `<pre>` / `<code>` elements, used appropriately
    - pay attention to the way that they used `&lt;` in the `<pre>` element in the page titled "Paragraphs and Text Formatting – Part 4"
- A few `<kbd>` / `<samp>` tags, used appropriately

This will be **Due** at the beginning of next class. It will count as a classwork grade,
and must be valid for full credit.

Remember that we haven't really learned CSS yet. I expect that this page will
just be black text on a white background - we're focusing on semantic correctness
first!

### Read the next few pages in Module 2

In our [edube.org](https://edube.org/) text, read the next pages in Module 2:

- Tables

This is only one page, but don't underestimate it. There are a lot of new tags
here, so I'd encourage you to make some HTML files on your own to play around
with them. Next class, we'll have a reading quiz and then we'll practice
together.