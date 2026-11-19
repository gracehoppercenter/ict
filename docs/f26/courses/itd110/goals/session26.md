<!-- competencies: V1 V45 V46 V47 N36 N37 W4.7 W4.8 -->

## Lesson Objectives
By the end of this lesson, you should:
- Be able to use CSS selectors to target elements without adding classes or ids
- Understand why web pages need to adapt to different screen sizes
- Be able to use media queries to change a grid layout for small screens
- Be able to choose a color palette for a website

## What We'll Do In Class

### Warm-Up: CSS Diner

Our next project will ask you to style a page *without* changing much of its
HTML. That means you'll need to get good at selectors. Let's practice with a
game:

<https://flukeout.github.io/>

See how far you can get in about 10 minutes. You already know some of these
selectors (`#id`, `.class`, `div p`). Others will be new (`+`, `~`, `>`,
`:first-child`, `:nth-child`). Keep track of the new ones that you like. They'll
come in handy for your project!

### One HTML Page, Many Designs

Remember back when we cloned layouts? We looked at a real page and figured out
how its boxes were arranged. Today we'll look at the opposite idea: one HTML
page, styled in lots of different ways.

- [CSS Zen Garden](https://csszengarden.com/): The original, from 2003. Every
  design on this site uses the exact same HTML. Click through some of the
  designs in the sidebar.
- [Style Stage](https://stylestage.dev/): A modern version of the same idea,
  built to show off newer CSS features like grid. Click "Styles" at the top to
  browse the designs.

As you look through these, notice how much each design changes: colors, fonts,
layout, even the *order* that things appear on the page. All of that is
CSS.

### Introducing the Zen Garden Project

Our next project is our own Zen Garden. We'll read through the assignment page
together:

[Zen Garden Project](../assignments/project.php?id=02_zen_garden)

It's due at **8AM on Thursday, December 3**.

### Media Queries

Let's start with a question: How big is a pixel? If you make something
`300px` wide, will it be the same width on every screen?

Try opening your homepage on your phone (or, on your computer, make the browser window
about the size of a phone). How does it look? It probably looks the same as it
always does, just smaller and harder to read. A page that adapts to the size of
the screen is called **responsive**.

#### Testing on Different Screen Sizes

Every browser's DevTools has a tool that lets you pretend to be a phone. In
Firefox, it's called **Responsive Design Mode**, and in Chrome it's the
**Device Toolbar**. I'll show you how to find it. Use it to test your pages
on lots of different screen sizes.

#### The Viewport Tag

Phones try to be helpful: they pretend their screen is as wide as a computer
screen, and then zoom out. That makes most pages tiny. This tag in your `head`
tells the phone not to do that:

```html
<meta name="viewport" content="width=device-width, initial-scale=1">
```

The Zen Garden starter code already has it. Make sure that every page you
build from now on does too!

#### Writing a Media Query

A **media query** is a block of CSS that only applies when some condition is
true. The condition we'll use most is the width of the screen:

```css
/* These rules always apply */
body {
    font-size: 1.25rem;
}

/* These rules only apply when the screen is 600px wide or less */
@media (max-width: 600px) {
    body {
        font-size: 1rem;
    }
}
```

#### Media Queries and Named Grid Areas

Media queries work really well with the `grid` shorthand that we learned in
[Session 23](./session.php?num=23). You can draw one map of your page for big
screens, and a different map for small screens. Nothing else has to change!

```css
body {
    display: grid;
    grid:
        "head head" auto
        "menu main" 1fr
        "foot foot" auto
        / 200px 1fr;
}
header { grid-area: head; }
nav    { grid-area: menu; }
main   { grid-area: main; }
footer { grid-area: foot; }

/* On small screens: one column, with everything stacked */
@media (max-width: 600px) {
    body {
        grid:
            "head" auto
            "menu" auto
            "main" 1fr
            "foot" auto
            / 1fr;
    }
}
```

I really like the way that this article sets up named grid areas, and then
reconfigures them with media queries:
[Thoughtbot - Concise Media Queries with CSS Grid](https://thoughtbot.com/blog/concise-media-queries-with-css-grid)

### Color Palettes

The Zen Garden is the first project where you'll need to think carefully
about a color palette. A good palette usually has just a few colors: one or
two main colors, an accent color for things like buttons and links, and a
background and text color that are easy to read together.

You don't have to invent a palette from scratch. Here's a site that has
lots of nice starter palettes, with the hex codes ready to copy:

<https://palettes.shecodes.io/>

Pick a palette that fits your design concept. We'll spend more time next week
on making sure your colors are accessible, but for now, a quick rule: make
sure there's plenty of contrast between your text and its background.

### Classwork: Start Your Zen Garden

For today's classwork, get started on the project:

1. Download the [starter files](../../../resources/zen_garden/zen_garden.zip)
   and unzip them into a new directory in your repo: `projects/zen_garden`
2. Commit the starter files *before* you change anything. (That way, your
   commit history shows exactly what you changed.)
3. Fill in the comment at the top of `style.css` with your name and your
   design concept.
4. Pick a color palette, and add a CSS comment that lists your colors.
5. Start styling! Try to get at least one grid layout and one media query
   working before the end of class.

Commit and push before you leave. Check that DUCK can see it:
<https://duck.apscs.org/file_list?path=projects/zen_garden/style.css>

## Homework

### Keep Working on Your Zen Garden

The [Zen Garden Project](../assignments/project.php?id=02_zen_garden) is due at
**8AM on Thursday, December 3**. Remember to commit as you go!

### Optional: Read More About Media Queries

If you'd like more practice with media queries, there's a page about them in
the Edube CSS course. As usual, you'll need to be logged in to Edube before
you click on this link:

- [Media Queries](https://edube.org/learn/web-dev-ess-css/media-queries?action=page#intro-to-media-queries)

(This page uses some float rules that we haven't covered. You can skip
those parts.)
