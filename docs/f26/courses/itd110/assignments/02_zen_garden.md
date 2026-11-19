<!-- competencies: V1 V2 V45 V46 V47 V68 V70 N9 N30 N36 N37 W4.7 W4.8 W4.9 W4.10 W5.1 W5.8 -->

# Zen Garden Project

## Project Introduction

In class, we played with 
[CSS Zen Garden](https://csszengarden.com/). 

We're going to run our own Zen Garden. Your HTML page is a copy of a website
you know well: the [Arlington Tech homepage](https://arlingtontech.apsva.us/).
I've taken the real page, kept the content, and removed all the complicated
WordPress code. Your job is to write **all** of the CSS, and to make the page
look like something that *you* designed.

This project brings together everything we've learned in Unit 2: selectors,
the box model, flex, grid, units, typography, media queries, and accessibility.

## Starter Files

Download the starter files here: [zen_garden.zip](../../../resources/zen_garden/zen_garden.zip)

The zip has:

- `index.html`: the page you'll be styling
- `style.css`: an empty stylesheet (except for a comment at the top for you to fill in)
- `images/`: every image on the page, including the icons in `images/icons/`

You can also [see the unstyled page here](../../../resources/zen_garden/index.html).
Before you write any CSS, read through `index.html` and get a sense of how it's
organized. I've put an `id` on every big section, and a `class` on things that
repeat (like `.card` and `.event`), so you have plenty of hooks to select.

## The Rules

The whole point of a Zen Garden is that the HTML stays (almost) the same, and
the CSS does the work. So:

- **You MAY** add `div` and `span` elements, and `class` and `id` attributes, if
  you need them for styling. (Try to get as far as you can without them first! You'll
  be surprised how much you can do with the selectors we already know.)
- **You MAY** add `link` elements in the `head` for fonts or a favicon, and the
  validator script that we use on every page.
- **You MAY NOT** delete, reword, or reorder any of the content.
- **You MAY NOT** use `style` attributes or a `style` element. All of your CSS
  goes in `style.css`.
- **You MAY NOT** use `tabindex`. (See "Moving Things Around" below for why.)
- **You MAY NOT** add `img` elements. You can still add your own images, with
  CSS. (See "Adding Your Own Images" below.)

If you want to hide something (for example, the submenus in the nav bar), you
can use CSS to do that. But think about whether your visitors still need it!

## The Disclaimer

This is a copy of a real school's website, and we don't want anyone to
confuse your page with the real thing. At the top of the HTML, there's an
`aside` with `id="disclaimer"`. It says that this page is a class project and
links to the real Arlington Tech website.

**Your design must feature the disclaimer prominently.** That means:

- It's visible as soon as the page loads, without scrolling, on a computer *and* on a phone
- It's easy to read, and its colors pass the WCAG AA contrast check
- The link to the real website looks like a link
- You may not hide it, shrink it, or make it hard to notice

It doesn't have to be ugly! Make it a part of your design. A banner, a sticker,
a ribbon across the top: be creative. But someone who lands on your page
should never think they're on the real Arlington Tech website. This is part of
your grade.

## Pick a Design Concept

The designs on the real CSS Zen Garden are memorable because each one has a
*concept*: a mood, a theme, or an audience that drives every choice the
designer made. Before you write any CSS, pick one. Here are some ideas:

- **The tour:** redesign the page for 8th graders who are deciding whether to
  apply to Arlington Tech
- **Time machine:** what would this page have looked like in 1998? In 2008?
  In 2050?
- **The newspaper:** make it look like the front page of a printed newspaper
- **The terminal:** make it look like it's running in the Unix terminal we
  used in Unit 0
- **The arcade:** bright colors, pixel fonts, big chunky buttons
- **The real zen garden:** calm, quiet, lots of white space

You're welcome to come up with your own. Write your concept in one sentence in
the comment at the top of `style.css`. Then make sure every choice you make
(colors, fonts, layout) fits your concept.

## Requirements

Your stylesheet must show off everything we've learned in Unit 2:

1. **Selectors:** Use element, class, and `id` selectors. Use at least one
   descendant selector (like `#news .card h3`).
2. **Box model:** Use `padding`, `border`, and `margin` intentionally to give
   your content room to breathe.
3. **Flex:** Use flex for at least one row of things. The nav bars are a great
   place for this.
4. **Grid:** Use grid for at least one layout. At least one of your grids must
   use named grid areas (`grid-template-areas`, or the `grid` shorthand).
5. **Units:** Use `rem`, `%`, `vw` or `vh`, and `px`, each where it makes sense.
6. **Typography:** Use at least two fonts that fit your concept, each with a
   good fallback font stack. Remember: no Google Fonts! Use web-safe fonts,
   [Bunny Fonts](https://fonts.bunny.net/), or [Modern Font
   Stacks](https://modernfontstacks.com/).
7. **Colors:** Choose a color palette that fits your concept. All of your text
   must pass the WCAG AA contrast check. You can test your colors with the
   [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/).
8. **Media queries:** Your page must look good on a computer *and* on a phone.
   Use at least one media query to change your layout for small screens. Test
   it with your browser's DevTools device toolbar.
9. **Focus styles:** When someone uses the Tab key to move through your page,
   it must always be easy to see which link they're on. If you change how
   links look, check that you didn't hide the focus outline. (Try styling
   `a:focus` to match your design!)
10. **Images:** Every image should fit nicely in your layout. None of them should
    be stretched, squished, or overflowing their container.

## Moving Things Around

Grid gives you a lot of power to rearrange the page. With named grid areas,
you could put Upcoming Events at the top of the page, or move the Quick Links
into a sidebar, without touching the HTML. That's a big part of what makes a
Zen Garden fun, and you're welcome to do it.

But there's a catch. When someone moves through the page with the **Tab** key
(or with a screen reader), they follow the order of the **HTML**, not the
order that things appear on the screen. If your CSS moves things too far from
the HTML order, keyboard users will see their focus jump around the page in a
confusing way. The WCAG accessibility guidelines say that the focus order has to make sense.

So here's our rule:

- **Big sections can move.** You may use grid to place the big sections
  (`#hero`, `#news`, `#events`, `#quick-links`, and the parts of the header
  and footer) anywhere you want.
- **Small things stay in order.** Inside a section, keep things in their
  HTML order. Don't use `order`, `row-reverse`, or `column-reverse` to shuffle
  nav links, cards, or events.
- **Do the Tab Test.** When you're done, click in the address bar and press
  Tab over and over until you've gone through the entire page. Can you always see where you
  are? Does the order make sense? If you moved sections around, add a comment
  in your CSS that explains your choice, and what you saw when you did the Tab Test.

Also try out the "Skip to Content" link at the top of the page: it's the
very first thing you'll reach when you press Tab. Lots of designers hide it
until it's focused. If you hide it, make sure it still shows up when someone tabs to it!

## Adding Your Own Images

Lots of the designs on the CSS Zen Garden have illustrations, patterns, and
textures that aren't in the HTML at all. You can do that too! But first, you
need to know the difference between two kinds of images:

- **Content images** are part of what the page is *saying*. The photos on the
  news cards are content: if you couldn't see them, you'd be missing some
  information. Content images belong in the HTML, in an `img` element, with
  `alt` text. All of the content images for this page are already in the HTML.
- **Decorative images** are part of how the page *looks*. A background
  pattern, a doodle in the corner, or a robot standing next to the title are
  decoration. If you couldn't see them, you wouldn't miss any information.
  Decorative images belong in the **CSS**.

Since your design is all CSS, every image you add will be decorative. Put your
image files in your `images/` directory, and add them with the
`background-image` property:

```css
body {
    background-image: url('images/stars.png');  /* tiles across the whole page */
}

#hero {
    background-image: url('images/clouds.svg');
    background-size: cover;       /* stretch to fill the box, without squishing */
    background-position: center;  /* keep the middle of the image in view */
    background-repeat: no-repeat; /* show it once, instead of tiling */
}
```

A few things to know:

- **The path is relative to your CSS file.** `style.css` and the `images/`
  directory are in the same place, so `url('images/stars.png')` works.
- **A background image only shows up if its box has a size.** If you want an
  image in a spot where there's no element, add an empty `div` (like
  `<div class="robot"></div>`) and give it a `width` and `height` in your CSS.
  Grid is a great way to put that `div` exactly where you want it.
- **Text on top of an image still has to be readable.** If you put text on a
  background image, check the contrast against the *darkest and lightest*
  parts of the image behind it. A solid or semi-transparent background color
  behind the text can help.
- **Don't use a background image to replace text.** If you want a fancy
  heading, use a fancy font. Screen readers can't read a background image,
  and some people's browsers turn background images off completely.
- **You need the rights to every image.** Just like in our recipe project,
  your own images are always fine, and you can use
  <https://search.creativecommons.org/> to find images made by others. Add a
  CSS comment next to each image that shows where it came from and why you're
  allowed to use it:

```css
/* clouds.svg: drawn by me in Inkscape */
/* stars.png: "Night Sky" by J. Doe, CC BY 2.0, https://... */
```

If you want to go further, look up the `::before` and `::after`
pseudo-elements. They let you add a decorative box to any element without
adding a `div` to the HTML. We haven't covered them in class, so if you use
them, add a comment that explains how they work.

## Process Requirements

- Like our recipe project, your commit history is **part of the project**. Commit
  as you work, with messages that describe what you did ("Add grid layout
  for news cards", not "update"). If you submit your entire project in a single
  commit, I will assume that you did not do the project on your own.
- Your HTML and CSS must both be valid. Remember to check the
  [CSS validator](https://jigsaw.w3.org/css-validator/) too!
- As always, you must understand every line of CSS that you submit. If you
  find a technique online that we didn't cover in class, that's great, but add a
  comment that explains what it does and where you found it.

## Showcase

On the day this project is due, we'll do a gallery walk to see everyone's
designs. Expect to see a lot of different ideas, all from the same HTML!

## Submission

Put the project in your repo in a new directory called `projects/zen_garden`:

- `projects/zen_garden/index.html` ([DUCK](https://duck.apscs.org/file_list?path=projects/zen_garden/index.html))
- `projects/zen_garden/style.css` ([DUCK](https://duck.apscs.org/file_list?path=projects/zen_garden/style.css))
- `projects/zen_garden/images/`

This project is due at **8AM on Thursday, December 3**.

## Grading

This project will be graded in two parts: half of the project grade will come
from your code, based on the rubric below. The other half will come from an
in-class code narrative on Friday, December 4, where you'll explain your CSS.

| Assessment Criteria | Meets Expectations - 4 points | Partially Meets Expectations - 3 points | Does Not Meet Expectations - 2 points | Not Present - 0 points |
|---------------------|-------------------------------|-----------------------------------------|---------------------------------------|------------------------|
| **Design Concept** | The design concept is stated in `style.css`, and colors, fonts, and layout all clearly fit it. The page looks like a finished, intentional design. | The concept is stated, but some choices don't fit it, or parts of the page are left unstyled. | No clear concept, or much of the page is unstyled. | Little or no CSS. |
| **Layout** | Uses the box model, flex, and grid (with named areas) effectively. Images fit their containers. Any reordering follows the "Moving Things Around" rule. | Uses flex and grid, but some parts of the layout are broken or crowded. | Layout is missing flex or grid, or is hard to read. | No layout CSS. |
| **Typography, Color, and Units** | Two or more fonts with good fallback stacks, no Google Fonts. A consistent color palette. `rem`, `%`, `vw`/`vh`, and `px` are each used where they make sense. | Fonts, colors, or units are mostly good, with one requirement missing. | Several typography, color, or unit requirements are missing. | Not present. |
| **Responsive and Accessible** | Looks good on a phone and a computer. All text passes WCAG AA contrast. Focus is always visible and the Tab Test passes. The disclaimer is prominent. | One accessibility or responsive requirement is missing. | Several requirements are missing, or the disclaimer isn't prominent. | No media query, or the disclaimer is hidden. |
| **Code Quality and Git Process** | Valid HTML and CSS. Only allowed changes to the HTML. CSS is organized and commented. Commit history clearly shows your work process. | Minor validation errors, or commit messages aren't descriptive. | Several errors, disallowed HTML changes, or a sparse commit history. | Invalid code, or the entire project in a single commit. |
