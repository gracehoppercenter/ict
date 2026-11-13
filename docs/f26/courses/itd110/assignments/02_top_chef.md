<!-- competencies: V1 V10 V45 V46 V47 V67 V70 N9 W4.7 W4.8 W4.10 W5.3 -->

# Top Chef

## Assignment Purpose

Soon, you'll design websites for real clients. Before that, let's practice with
pretend ones. You'll plan a page with your table, then build it yourself with
everything we've learned about HTML and CSS so far.

## Steps

1. **Draw a client.** Each table will randomly draw an imaginary client.
2. **Plan together.** With the folks at your table, hand-draw a web page for
   your client. Decide:
    - Which design elements the page needs (hero? cards? a nav bar? a call to
      action?)
    - How those elements should be laid out on the page (where's the grid?
      where's the flex?)
    - What content will go in them
3. **Build it yourself.** Once your table agrees on a design, everyone builds
   the page on their own in `practice/top_chef.html`. Your code can be
   different from your tablemates' code, but your page should match your
   table's drawing.
4. **Share.** At the end of class, each table picks one member to show off
   their page.

## Requirements

Your page should show that you're being thoughtful about:

- **Design elements:** use at least three elements from our design elements
  vocabulary (header, footer, hero, call to action, menus, breadcrumbs, cards,
  progress indicator, tags)
- **Semantic HTML:** use `header`, `nav`, `main`, `section`, `footer`, etc.
  where they make sense
- **CSS selectors:** use classes and IDs to target specific elements
- **Layout:** use flex and/or grid
- **Colors and fonts:** choose a color palette and fonts that fit your client
- **Units:** use at least one each of `rem`, `%`, `vw` or `vh`, and `px`, each
  where it makes sense. Add a CSS comment next to each one explaining why you
  chose that unit, like:

```css
h1 {
    font-size: 2.5rem; /* rem: grows if the user picks a bigger default font */
}
```

Your styles can go in a `<style>` element in the `<head>`, so the whole page
stays in one file.

## Submission

Commit and push `practice/top_chef.html`. Check that DUCK can see it:
<https://duck.apscs.org/file_list?path=practice/top_chef.html>

## Grading

- 5 points: The page matches your table's design, uses at least three design
  elements, uses flex or grid, and uses all four units with comments
  explaining each one
- 4 points: A thoughtful page that is missing one of the requirements
- 3 points: A styled page that is missing several requirements
- 2 points: Mostly unstyled HTML
- 0 points: Nothing submitted
