<!-- competencies: V1 V45 V46 V67 V69 V70 W4.9 W5.3 -->

## Lesson Objectives
By the end of this lesson, you should:
- Be able to use `grid-area` and the `grid` shorthand to easily create and place items in the CSS grid
- Be able to look at a real web page and break it down into its grid and flex layouts
- Be able to plan a page layout with a wireframe tool, then export it to HTML and CSS

## What We'll Do In Class

### Check-In: Box of Chocolates and Exam Prep

Your [Box of Chocolates](../assignments/activity.php?id=02_chocolates) and your
[WDE Exam Prep Self-Assessment](../assignments/activity.php?id=02_exam_prep) were
both due today.

### CSS Grid Shorthand

Over the last few classes, we used flex to put things side by side
([Session 20](./session.php?num=20)) and grid to put things in rows and columns
([Session 21](./session.php?num=21)). Last class, I told you about how grids
are based on old, physical media. If you're interested, [I found a cool
article about that, here](https://webflow.com/blog/history-of-grids)

I'll expect you to know the CSS grid
syntax that we've learned so far (and that you can review any time on
<https://cssgridgarden.com/>), but there is a very convenient shorthand that I
usually prefer.

We'll talk through the examples on this page:

<https://thoughtbot.com/blog/css-grid-shorthand>

The big idea: instead of placing each item with row and column numbers, you
*name* the areas of your grid, draw a little ASCII-art map of the page, and then
put each element in an area by name:

```css
body {
    display: grid;
    grid:
        "head head" 100px
        "menu main" 1fr
        "foot foot" 50px
        / 200px 1fr;
}
header { grid-area: head; }
nav    { grid-area: menu; }
main   { grid-area: main; }
footer { grid-area: foot; }
```

This layout is traditionally called the **"holy grail"**, because it was
famously tricky to build before CSS grid. Now it's 12 lines of CSS.

### Introducing Layouter

I've been building a tool to make it easier to plan out page layouts. It's
called **Layouter**, and you can use it here:

<https://ict.gctaa.net/f26/resources/layouter/>

(I originally published it as layouter.dev, but that address is blocked on your school laptops. So use the link above.)

I'll do a quick demo of building the holy grail layout in Layouter. A few
things to notice:

- Drag HTML elements from the left sidebar onto the canvas. Drop elements on
  top of each other to nest them.
- Click any element to edit its properties. Set the layout to **grid** or
  **flex**.
- For grid, you can type area names into the cell editor, *or* type the `grid`
  shorthand from above right into the CSS box.
- The **DOM tree** view shows you how the browser sees your page.
- The whole design is saved in the URL. Copy the link to save your work or
  share it - and use the back button to undo.
- **Export** gives you real HTML and CSS that you can paste into a file.

### Practice: Clone a Real Web Page

Building the holy grail is a little *too* easy now, so for today's practice
you'll do something harder: pick a real web page and use Layouter to recreate
its structure.

This is today's graded assignment: [Layout Clone](../assignments/activity.php?id=02_clone).
See the assignment page for the list of pages to choose from and the full
instructions.

## Homework

### Finish Your Layout Clone

[Layout Clone](../assignments/activity.php?id=02_clone) is due at the start of
class on **Friday, November 13**.

### Reading Quiz!

We haven't had a reading quiz in a while. It's time to get back into it.

Next class we'll start thinking about approaches to designing a website. To do
that, we need to learn about design elements. Read about them here:

<https://blog.tubikstudio.com/anatomy-of-web-page/>

Our reading quiz next class will be a bit different. I'll give you a screenshot
of a web page and ask you to name and identify the design elements. Here's the
vocabulary from that article that is fair game:

- Header
- Footer
- Hero
- Call to Action
- Types of Menu
    - Horizontal Menu
    - Dropdown Menu
    - Megamenu
    - Hamburger Menu
- Breadcrumbs
- Cards
- Progress Indicator
- Tags

(Tip: the page you cloned today probably has a lot of these! Try to spot them.)

If you like this article and want to think more about design elements, I really
like this other article on the same website, which has lots of great examples
about how these are used.

<https://blog.tubikstudio.com/types-of-web-pages/>
