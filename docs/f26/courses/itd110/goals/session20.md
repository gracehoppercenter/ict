## Lesson Objectives

By the end of this lesson, you should:
- Be able to use `display: flex` to put elements side by side
- Be able to use `justify-content` to space out flex items
- Have a working navigation bar on the zoo website

## What We'll Do In Class

### 4th Period: Chris Late

I have a meeting that will make me miss about the first hour of 4th period class today, so I tried to write up an activity on this 
page that you can complete on your own. Do your best, help each other out, and we'll catch up at the end of class.

### First: Finish Flexbox Froggy

Most of you didn't get very far into [Flexbox Froggy](https://flexboxfroggy.com/)
last class. Pick up where you left off and get through **level 13**.

If you get stuck on a level, carefully read the words above the text box on the left - it pretty much tells you what to type!

If you finish level 13 early, keep going! Levels 14-24 are great practice.

You can also check out [Flexbox Defense](http://www.flexboxdefense.com/) - I haven't played much of this yet, but it looks cute =)

### Part 2: A Flex Nav Bar for the Zoo (the rest of class)

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
Your goal is to turn this into a nice looking horizontal nav bar, like you'd see at the top
of a real website. 

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

### Submit

Commit and push your zoo website. This is a graded classwork assignment due at
the beginning of next class. Here is how I'll grade it:

- 5 points: The nav links are in a row, with no bullets, spaced with
`justify-content`, styled like buttons, and on both pages
- 4 points: The nav links are in a row with no bullets and some styling, but
something is missing
- 3 points: The nav links are in a row, but have no other styling
- 2 points: You tried to use flex, but the links are still stacked
- 0 points: No changes to the nav

Use this link to make sure DUCK can see your page: <https://duck.apscs.org/file_list?path=practice/zoo/index.html>

### When I Get Back

We'll look at a few of your nav bars together. Then we'll talk about the 
*main axis* and the *cross axis*, which explain why `justify-content` and
`align-items` do different things.

## Homework

Finish your nav bar if you didn't get to it in class. No reading quiz next class.
