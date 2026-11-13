<!-- competencies: V1 V10 V45 V46 V47 V67 V70 N9 W4.8 W4.10 W5.3 -->

## Lesson Objectives
By the end of this lesson, you should:
- Be able to identify common design elements on a real web page
- Know when to use `px`, `rem`, `%`, and `vw`/`vh` to size things in CSS
- Have planned a page design with a team, then built it yourself

## What We'll Do In Class

### Reading Quiz

As promised, I'll give you a screenshot of a web page, and you'll label its
design elements.

### Calendar Updates

I have a rough plan for how we'll pace the rest of this unit. We'll quickly
talk through the calendar.

### CSS Units

So far, most of our sizes have been in pixels. Pixels are easy to understand,
but they aren't always the best choice. Here are the four units you need to know:

| Unit | Relative to... | Good for |
|------|----------------|----------|
| `px` | Nothing - it's a fixed size | Borders, small details that should never change size |
| `rem` | The root (`html`) font size, usually 16px | Font sizes, padding, margins - almost everything |
| `%` | The **parent** element (for `width`, the parent's width) | Widths of things inside a container |
| `vw` / `vh` | The **viewport** (browser window): `1vw` is 1% of its width, `1vh` is 1% of its height | Things that should fill the screen, like a hero section |

Here are some examples:
```css
body   { padding: 1rem; }                /* 16px... unless the user changed it */
h1     { font-size: 2.5rem; }            /* 2.5x the root font size */
.hero  { min-height: 100vh; }            /* exactly fill the screen */
.card  { width: 45%; border: 1px solid; }/* 45% of its parent; a crisp 1px border */
```

Why does `rem` matter so much? Some people set a bigger default font
size in their browser because they have trouble reading small text. If you size
everything in `px`, your page ignores that setting. If you use `rem`, the whole
page grows with it. This is our first look at **accessibility**, and we'll
get much more of it soon.

A warning about `vw`: it's tempting to size text with it, because it grows
and shrinks with the window. But on a phone, `3vw` text is *tiny*, and it
ignores the user's font settings. Use `vw`/`vh` for big layout pieces, not for text.

(You may also run into `em`, which is like `rem` but relative to the *parent's*
font size. That makes it compound in confusing ways when you nest elements, so I
recommend sticking with `rem` for now.)

### Top Chef

We're eventually working towards a project where we'll design real websites for real customers. To help build our confidence, let's practice with pretend ones.
I have a bunch of imaginary clients written down, and each table will randomly
draw one.

1. **Plan together.** With the folks at your table, hand-draw a web page for your
   client. Decide which design elements the page needs (hero? cards? a nav
   bar?), how they should be laid out, and what content will go in them.
2. **Build it yourself.** Once your table agrees on a design, everyone builds
   the page on their own in `practice/top_chef.html`.
3. **Share.** At the end of class, each table picks one member to show off their page.

This is today's graded assignment: [Top Chef](../assignments/activity.php?id=02_top_chef).
See the assignment page for the full requirements. Pay special attention to
the **units** requirement: use at least one each of `rem`, `%`, `vw`/`vh`, and
`px`.

## Homework

### Finish Top Chef

[Top Chef](../assignments/activity.php?id=02_top_chef) is due at **8AM on
Tuesday, November 17**. Commit `practice/top_chef.html` before then.

### Next Class: I'm Out

I'll be out on Tuesday. You'll have a self-guided activity on CSS selectors and
fonts. Check this website at the start of class for instructions.

### Optional: A Video About Fonts

Fonts are lowkey peak. If you disagree, [this 30-minute documentary
is a great introduction](https://www.youtube.com/watch?v=WVfRxFwVHQc). Don't
worry about memorizing the fonts in it - just focus on how much meaning and
emotion a font can carry. It's a nice warm-up for Tuesday's activity, where
you'll be choosing fonts for a page.
