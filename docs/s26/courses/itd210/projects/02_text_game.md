# Self Portrait Project

## Project Introduction

We started the school year by playing [Terminus](https://web.mit.edu/mprat/Public/web/Terminus/Web/main.html) - a text-based adventure game.

Text-based adventure games are fun, and they are relatively easy to build with
Javascript! I wrote my own, here: <https://cj0ne5.github.io/projects/game/>. 

For this project, you will build your own text-based adventure game. The game you produce must have:

- At least five locations
- Connections between the locations
- At least one global variable that relates to the story and that you update 
as the game goes on
- A clear objective/story that uses all of the locations and the global variable

You can build any game you want for this project. It would be cool if, like mine,
your game had some grounding in your life. If you want to make a purely-fictional
game, that is okay too.

This project will be our most complicated code yet, so it will take careful
planning and you will need to develop it in stages. Multiple commits are an
absolute necessity for this project. I will not accept "I forgot to commit", 
"my git wasn't working", or any similar excuse for this assignment.

## Inspiration

Here are some other famous text-based games:

- <https://playclassic.games/games/adventure-dos-games-online/the-hitchhikers-guide-to-the-galaxy/play/>
- <https://textadventures.co.uk/games/play/5zyoqrsugeopel3ffhz_vq>

## Submission Instructions

Put this project in a directory in your repo called `projects/game/`

In there, you should start by copying my starter code from here:
<https://github.com/cj0ne5/cj0ne5.github.io/tree/main/projects/game>

The files you need are:

- `index.html`
- `game.css`
- `game_helpers.js`
- `game.js`

You should make an initial commit using this starter code.

Next, you should work on making a README.md file, which will help you plan out
your project. Your README.md file should include:

- A title for your game
- An explanation of the setting
- A map of locations (you can hand-draw this and include a photo
, draw online with <https://excalidraw.com/>)
, or use [mermaid diagrams](https://docs.github.com/en/get-started/writing-on-github/working-with-advanced-formatting/creating-diagrams)
 like I did in [my example](https://github.com/cj0ne5/cj0ne5.github.io/tree/main/projects/game/README.md)
- A summary of the story
- A list of global variables and their significance to the story

Once you have that figured out, you should start writing the code. You should 
only need to work inside of `game.js` (but you're welcome to
modify any of the files you want).

This project is due at the beginning of the school day on Tuesday, March 17th.
We will do an in-class writing exercise about this project on Thursday, March 19th.

## Grading

This project has several goals, which are reflected in the rubric

- Explore variables, functions, and conditional logic.
- Plan and Develop a complicated software project

| Assessment Criteria | Meets Expectations - 4 points | Partially Meets Expectations - 3 points | Does Not Meet Expectations - 2 points | Not Present - 0 points |
|---------------------|-------------------------------|------------------------------------------|---------------------------------------|------------------------|
| **Documentation and Planning** | README.md includes all required elements: Planning is thorough and shows careful thought about the game's structure. | README.md includes most required elements but may be missing 1-2 components or lacks detail. | README.md is missing multiple required elements or is too brief to be useful for planning. | No README.md provided or completely missing required elements. |
| **Locations and Navigation** | Game includes at least five distinct locations with working connections between them. | Game includes at least five locations but connections between them may be incomplete, unclear, or buggy. | Game has fewer than five locations, or connections are severely broken, making gameplay difficult or impossible. | No locations implemented or game doesn't function. |
| **Story and Game Mechanics** | Game has a clear objective/story that engages the player across all locations. At least one global variable is implemented correctly, updates appropriately based on player choices, and is meaningfully integrated into the story/gameplay. | Game has a story and uses a global variable, but they may be simplistic, have minimal impact on gameplay, or contain minor bugs in how the variable updates. | Story is unclear or incomplete. Global variable may be present but doesn't update correctly or has no real impact on the game experience. | No coherent story or no global variable implemented. |
| **Git Process** | Git history shows consistent, meaningful commits throughout development. Commit messages are descriptive and clearly document the development process. | Git history shows a few commits, or commit messages are vague/unhelpful. | Git history is sparse with only 2-3 total commits, or commits contain massive, disorganized changes. | Entire project committed in a single commit or no meaningful git history. |