<!-- competencies: V50 V67 V70 V73 N10 N13 N30 N31 W2.7 W4.10 W5.3 -->

# Zoo Flex Nav Bar

## Assignment Purpose

Use flexbox to turn a plain list of links into a horizontal navigation bar, like
you'd see at the top of a real website.

## Requirements

Open your zoo website (`practice/zoo/index.html`) and your zoo stylesheet. You
should already have a `<nav>` that looks something like this:

```html
<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="animals.html">Animals</a></li>
    </ul>
</nav>
```

Right now, those links are stacked on top of each other with bullet points.
Work through these steps in your external stylesheet:

1. **Put the links in a row.** The flex container should be the element whose
*children* you want to line up. Which element is that here? (Hint: it's not
the `<a>` tags.)
2. **Get rid of the bullets.** Research the `list-style` CSS property.
3. **Remove the extra space.** The `<ul>` comes with some default margin and
padding. Use what we learned about the box model to remove it.
4. **Space out the links.** Use `justify-content` the same way you did in
Flexbox Froggy. Try a few values (`center`, `space-around`,
`space-between`, `space-evenly`) and keep the one you like best.
5. **Make the links look like buttons.** Give each `<a>` some padding, a
background color, and a border. Research the `text-decoration` CSS property to remove the
underline.
6. **Add more links.** A nav bar with two links is a little boring. Add at
least two more (they can link to `#` for now, e.g. `<a href="#">Tickets</a>`).
7. **Use the same nav on every page.** Make sure `animals.html` has the same nav bar and links to the same stylesheet.
8. **Make the links change color when your mouse moves over them.** Look up the
`:hover` pseudo-class on [MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/:hover).

Validate your HTML and CSS when you're done!

## Submission

Commit and push your zoo website. Check that DUCK can see it:
<https://duck.apscs.org/file_list?path=practice/zoo/index.html>

## Grading

- 5 points: The nav links are in a row, with no bullets, spaced with
`justify-content`, styled like buttons, and on both pages
- 4 points: The nav links are in a row with no bullets and some styling, but
something is missing
- 3 points: The nav links are in a row, but have no other styling
- 2 points: You tried to use flex, but the links are still stacked
- 0 points: No changes to the nav
