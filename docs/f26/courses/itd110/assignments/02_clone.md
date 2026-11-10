<!-- competencies: V1 V45 V46 V67 V69 V70 W4.9 W5.3 -->

# Layout Clone

## Assignment Purpose

Real web pages are built out of grids and flex rows nested inside each other.
In this assignment, you'll practice *seeing* that structure by recreating the
layout of a real page in [Layouter](https://ict.gctaa.net/f26/resources/layouter/).

## Pick a Page

Choose one of these pages to clone. Each one uses both CSS grid and flexbox.

- [Smithsonian's National Zoo](https://nationalzoo.si.edu/)
- [Wikipedia: Grace Hopper](https://en.wikipedia.org/wiki/Grace_Hopper)
- [WNRN](https://www.wnrn.org/) (my favorite local radio station!)
- [Shenandoah National Park](https://www.nps.gov/shen/index.htm)
- [Library of Congress](https://www.loc.gov/)
- [National Geographic](https://www.nationalgeographic.com/)
- [National Children's Museum](https://nationalchildrensmuseum.org/)
- [Atlas Obscura](https://www.atlasobscura.com/)
- [Bandcamp Daily](https://daily.bandcamp.com/)

If you really want to clone a different page, ask me first. It needs to have
some real complexity (more than just a header, a column, and a footer).

## Requirements

1. **Don't look at the page's source code** The point is to practice seeing layouts with your eyes. Squint at
   the page: what are the biggest boxes? Inside each box, are things in a row
   (flex), or in rows *and* columns (grid)?
2. **Rebuild the structure in Layouter.** Use semantic elements (`header`, `nav`, `main`,
   `section`, `aside`, `footer`) where they make sense. Some of these pages are 
   complex, so I'm not grading you on exact replicas. Do the best you can!
3. **Use both grid and flex.** Your layout needs at least one grid and at least
   one flex container.
4. **Name your own grid areas.** Make up your own names for every grid area
   (like `hero`, `news`, `sidebar`). Don't worry about what the real site
   calls them
5. **Export it.** Use Layouter's Export button and save the HTML in
   `practice/clone.html`. Don't worry about the content - you can keep the lorem ipsum text and grey image boxes that Layouter gives you.
6. **Say what you cloned.** Add a link to the original page somewhere on your
   page (An h1 at the top is a good spot), like:
   `<p>Layout cloned from <a href="https://nationalzoo.si.edu/">Smithsonian's National Zoo</a></p>`
7. **Validate.** Layouter's export includes a validator button - make sure
   your page is valid HTML and CSS.

Tip: Layouter saves your whole design in the URL. Copy the link every so often
(and paste it somewhere safe) so you don't lose your work.

## Submission

Commit and push `practice/clone.html`. Check that DUCK can see it:
<https://duck.apscs.org/file_list?path=practice/clone.html>

## Grading

- 5 points: The layout is clearly recognizable as the original page, uses both
  grid and flex, uses your own named grid areas, and links to the original
- 4 points: The layout is mostly recognizable, but is missing one of the
  requirements
- 3 points: A layout with grid and/or flex, but hard to recognize as the
  original page
- 2 points: A basic page exported from Layouter that doesn't attempt to match
  the original
- 0 points: Nothing submitted
