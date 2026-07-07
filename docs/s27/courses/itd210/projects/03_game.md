## Game Project Instructions

## Groups

[Click Here to see group assignments](game_team_assignments.html)

### Requirements

Our last project was a text-based game. This time, you'll use JavaScript and
the Canvas API to build a real game.

Your game should:
  - Have a clear goal or story. A way to keep track of the game state or score, and display that information to the player.
  - Look nice. You have a lot of experience making art with the Canvas API - so use those skills!
  - Be interactive - decide whether you'll use the keyboard, mouse, or other interface and use appropriate event handlers.
  - Be presented on a nice-looking HTML page. Include text that introduces your game and explains how to play.

Your game should also **sound** nice. You'll partner with students in 
the DE Music Appreciation class who will compose original music that you'll
include in your game.

### Team Work

This will be a team project - Each team of 3 or 4 students will share a single 
github repo, which should live in GHC_Students.
Everyone else should be collaborators on that repo.

This will be our first project that requires sharing a git repo. You'll find 
that (as with everything else in life) sharing takes a bit of extra care and 
patience. You will need to be good about running `git pull` consistently, before 
making any commits. If a commit slips in, you might need to run `git merge`.

We've also discussed the role of branch-based development in class, and we 
practiced by making branches on, and pull requests to, 
[my students repo](https://github.com/MrJonesAPS/students). For this project, 
I expect everyone to make at least one pull request. You can merge your own 
pull request.

### Bonus Opportunities

If you want more of a challenge, there are tons of ways that you can go beyond
the requirements of this project. I'm always excited to chat about ideas!

- Add levels to your game.
- Interact with other things on your HTML page, like forms and buttons.
- Use animated sprites.
- Make your game multiplayer.
- Track high scores across plays.

### Process

We'll take a few class periods to work on this project, and will have deliverables
in three steps:

#### Deliverable 1: Game Concept  (Due EOD Friday, April 17)

With your team, think about what kind of game you'll want to make. Together, Create 
a `README.md` file. There are no length requirements
, but you must answer the following questions:

- What genre will your game be?
- What do you want your music to sound like? Write four words or phrases that capture the vibe you're going for.
- What are the game objectives? Will there be a score? How do you win or lose?
- How will the player interact with the game?
- Make some concept art - in a file called `concept_art.html`, use JS and an HTML canvas
to create a still image of what your game might look like.

I'll review these game concepts and give feedback. Some proposals will be easier
than others, so my feedback will focus on making sure that your project is reasonably
challenging.

#### Deliverable 2: MVP  (Due EOD Monday, April 27)

You'll create your "Minimum Viable Product", the simplest possible version of 
your game that you can imagine. For your MVP, you'll focus on just a few features
like the user input.

#### Deliverable 3: Final Game (Due By EOD Friday, May 8)

After your MVP is complete, you'll add features that make your game prettier,
more functional, and more engaging.

### Important Note About Plagiarism

All code, art, and designs that you submit must be your own original work. You
should not just re-implement an already-popular game (don't just make pong, snake,
space invaders, etc.)

You should NOT use generative AI tools to write your code for this game.
It's obviously hard for me to prove whether or not you violate this rule, but:
- Your github commit log should make it clear that you've done your work in steps.
Everyone will be graded based on the commits that you make to your team's repo.
- We've learned specific techniques in class for drawing animation, detecting 
collisions, etc. You're welcome to deviate from these techniques, but I'll 
expect that you are able to explain why!
- We'll do our standard post-project code narrative assessment where I'll print
out your code and ask you to explain it. You are responsible for the entire code
that your team submits - even if someone else on your team wrote the code, you
must understand it!

If you're eager to use generative AI for a project, just wait! I have some ideas
for our final project.

### Need Inspiration?

- **List of Game Genres:** [iD Tech Game Genres](https://www.idtech.com/blog/different-types-of-video-game-genres)

- **Example Games:**
  - [Fighting Game Example](https://academy.cs.cmu.edu/sharing/aquamarineCamel6618)
  - [Card Game Example](https://academy.cs.cmu.edu/sharing/ivoryWolf8903)
  - [Soccer Game Example](https://academy.cs.cmu.edu/sharing/oliveCheetah5402)
  - [Pac-Man Example](https://academy.cs.cmu.edu/sharing/aliceBlueCat1044)
  - [Wordle Example](https://academy.cs.cmu.edu/sharing/fuchsiaSeal2901)

### Rubric

This project is graded on a **16-point scale**. 
This rubric does not specifically include my general expectations such as 
semantic and valid HTML/CSS, linking to your project from your portfolio,
and not plagiarizing. 

I will take additional points off for these issues. I will also adjust score based on your individual contributions to 
the team, and will subtract points if your team fails to 
respectfully incorporate and give feedback to your music
composer.

| **Assessment Criteria**         | **Meets Expectations - 4 points**                                                                                  | **Partially Meets Expectations - 3 points**                                     | **Does Not Meet Expectations - 2 points**                                                          | **Not Present - 0 points**                    |
|---------------------------------|---------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------|-----------------------------------------------|
| **Visual Design**               | Game is visually appealing; includes at least one rectangle, one circle, and one other shape (e.g., triangle, path). | Shapes are present but lack polish or cohesion.                                | Only 1–2 required shapes are included, or visuals are disjointed.                                  | No shapes or minimal effort.                 |
| **Gameplay Mechanics**          | Clear objective is defined; score/game state is tracked and displayed logically.                                   | Objective or score tracking is present but unclear or buggy.                   | Objective is vague, or score/game state is missing/not functional.                                 | No gameplay mechanics implemented.          |
| **Interactivity**               | At least one event handler (e.g., `keydown`, `mousedown`) works flawlessly to control gameplay.                        | Event handler is implemented but has minor bugs or limitations.                | Event handler is incomplete or non-functional.                                                     | No interactivity.                            |
| **HTML Presentation**           | HTML page introduces the game and explains rules clearly; game is embedded properly.                               | Instructions or embedding are present but unclear or poorly formatted.         | Instructions are missing, or game is not properly linked/embedded.                                 | No HTML page submitted.                      |
