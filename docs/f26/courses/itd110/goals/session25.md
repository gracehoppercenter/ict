<!-- competencies: V46 V47 V68 N9 W4.8 -->

## Lesson Objectives
By the end of this lesson, you should:
- **Know**: That there are a wide variety of fonts available on the web
- **Understand**: That font selection impacts readability, accessibility, and meaning.
- **Be Able To**: Select and apply an appropriate font for your website.

## What We'll Do In Class

### Nevermind: I'm Here!

Last class, I told you that I'd be out today. My plans changed, so I'll be here after all! Lucky you - you get to hear me talk about fonts today.

### No Reading Quiz

As promised, no reading quiz today. If you watched the optional video about
fonts, I hope you came away with a general appreciation for the power that
fonts have to convey meaning and emotion. Here's an example:

<style>
@import url('https://fonts.bunny.net/css?family=pacifico:400|nosifer:400');
.font-demo {
    padding: 1.5rem;
    margin: 1rem 0;
    border-radius: 0.5rem;
    text-align: center;
    font-size: 2rem;
}
.font-demo-cute {
    background-color: #ffe4f1;
    color: #ff4fa3;
    font-family: 'Pacifico', cursive;
}
.font-demo-horror {
    background-color: black;
    color: #d10000;
    font-family: 'Nosifer', fantasy;
    text-shadow: 0 0 0.5rem #ff0000;
}
</style>

<div class="font-demo font-demo-cute">I made you something special</div>

<div class="font-demo font-demo-horror">I made you something special</div>

Instead of a reading quiz, [we'll watch this youtube video](https://www.youtube.com/watch?v=jVhlJNJopOQ).

If you want to learn more rules and techniques for selecting the best font for
your website, [I really like this series on Youtube](https://www.youtube.com/watch?v=SXxI0fLtQyE&list=PLaC4Y-Cy7tlhQA_YM8PUGcgtG9KNtdHFZ).

### Font Review

We'll review the details about fonts that I do want you to know:

- Fonts vs Typefaces
- Serifs, x-heights, ascenders/descenders
- spacing, and kerning (we'll briefly look at [kerntype](https://type.method.ac/#) for this part)
- Web-safe fonts
- Font families

### Where Do Fonts Come From?

If you've looked up how to add a font to a website, you've probably found
[Google Fonts](https://fonts.google.com/). It's free, it has thousands of
fonts, and it only takes one `<link>` element. We'll briefly discuss why I don't love this solution.

Every time someone visits your page, their browser asks *Google's* servers for
the font. We'll use the browser's DevTools (Network tab) to find that request
and see what your visitors are sharing with Google. (If you're curious,
[a German court ruled in 2022 that this broke European privacy law](https://www.bitdefender.com/blog/hotforsecurity/german-website-fined-100-euros-after-court-says-googles-font-library-violates-gdpr/).)

Here are three options that don't involve Google:

1. **Web-safe fonts**: The classic fonts that almost every computer has, like
   Arial, Georgia, and Verdana.
   [See this website for a nice list of web-safe fonts](https://www.dreamhost.com/blog/web-safe-fonts/)

2. **[Bunny Fonts](https://fonts.bunny.net/)**: Intentionally works the same was as Google, but doesn't violate privacy laws. 

3. **[Modern Font Stacks](https://modernfontstacks.com/)**: No downloads at all!
   Each stack is a list of similar-looking fonts that already come installed on
   Mac, Windows, and Linux computers. Every visitor sees a slightly different
   font, but they all have the same style. Just copy a `font-family` line from
   the website.


(There's a fourth option: download a font file and put it in your repo. We'll
save that for another day.)

### My Favorite Font

[Atkinson Hyperlegible](https://www.brailleinstitute.org/freefont/) is basically the lemonchiffon of fonts.

It's free, and it's on Bunny Fonts, so you're welcome to use
it too:

```html
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=atkinson-hyperlegible:400,700">
```
```css
body {
    background-color: lemonchiffon;
    font-family: 'Atkinson Hyperlegible', Verdana, sans-serif;
}
```

### Exploration

To play around with fonts, add some to your main homepage (`index.html` in your repo's root). Find reasonable places to apply each of these techniques:

- Add at least two different reasonable fonts, and be sure to provide a good
  backup font stack for each. You can use any of the three options above. Add
  a CSS comment that says which option you chose.
- Use the `text-align` property at least two times
- Use the `text-transform` property at least once

You may need to add some `div`/`span` elements to help apply these styles.

## Homework

### Finish Your Homepage Fonts

For practice, Commit your updated homepage before next class. I will not use this as a graded assignment.
