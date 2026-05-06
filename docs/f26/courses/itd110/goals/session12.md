## Lesson Objectives
By the end of this lesson, you should:

- **Know**: 🔗 How to create a link in HTML
- **Understand**: 🕸️ The importance of links in the structure of the web
- **Be Able To**: 🧑‍💻 Add links to your HTML pages

## What We'll Do In Class

### Reading Quiz
As usual, we'll start class with a reading quiz. See the previous class for details on the reading assignment.

### Housekeeping

As we prepare for the unit project, I've made a few tweaks to our validator and 
our vimrc file. 

First, we'll add these two lines to our `.vimrc` file:

```
set columns=80
set colorcolumn=80
```

Then we'll modify our validate.js to be this:
```
(function() {
  var script = document.createElement("script");
  script.src = "https://cdn.jsdelivr.net/gh/gracehoppercenter/validate@1.0.0/validate.js";
  script.async = false;
  document.head.appendChild(script);
})();
```

I will explain both of these changes in more detail in class.

### Project: Family Recipe Book

We'll introduce our unit project. See more details about the project here: [See the detailed instructions here](../projects/project.html?id=01_recipes).

This is the first big project in my class, so we'll spend some time discussing 
my grading procedure, which is described here: [Project homepage](../projects/index.html)

### Links

We'll work together to write the first few pages in our recipe book project, and we'll use this as an opportunity to practice with hyperlinks.

To fill out the template pages, I'll generate filler text with [lipsum.com](https://www.lipsum.com/)

## Homework

No new reading assignment this week. Work on your project and start reviewing for the test.

I'll have a detailed study guide next class.
