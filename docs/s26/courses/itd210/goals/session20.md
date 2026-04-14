## Lesson Objectives  
By the end of this lesson, you should:

- **Know** who will be your teammates for this project, and how you'll collaborate
- **Have Experience** dealing with merge issues
- **Be Prepared** with a project repo where you'll start working!

### Practice With Merge Issues

We'll pick up where we left off on last class's practice with shared repos. I want
to make sure everyone has experience dealing with merge issues! Here's the 
procedure we'll follow:

1. Make sure that everyone at your table has the repo checked out
2. Everyone run a `git pull` to make sure you have the same code.
3. Everyone create a new file with your name (eg `touch chris.txt`)
4. Everyone add and commit their new file, but don't push yet!
5. Take turns pushing. When you push, here's what should happen:
    1. You'll get an error that says your push was rejected
    2. Run `git pull` and you'll get an error saying that you can't because you have divergent branches
    3. Run `git merge`, which will make a new merge commit
    4. Run `git push`, which will successfully commit your code

After that, we'll repeat the same exercise, but you'll all edit the same file. 
This time when you run `git merge` it will tell you that you have a merge
conflict. You'll need to use vim to manually resolve the conflict, and then
add/commit/push the file.

### Form Teams

Thanks to everyone who emailed me about your team selection. I'm keeping a list of
teams on this page: [https://ict.gctaa.net/s26/courses/itd210/projects/game_team_assignments.html].
Today, I'll play matchmaker and assign everyone to a team.

With your team:
- Discuss how you'll collaborate. Exchange phone numbers, email addresses, discord handles,
or whatever else you need to do to make sure you can communicate outside of class.
- Discuss what game you'll make
    - Today you should decide on the game's title, genre, and style
- Create a single new repository with an appropriate name in the 
[GHC_Students](https://codeberg.org/GHC_Students) organization, and add everyone as collaborators.
- Get this repository cloned to everyone's computers.
- Start working on a README.md that introduces your game

Your first deliverable is due at the end of the day **this Friday**. 
See the project assignment for a list
of everything that's due in that deliverable. Divide up the work for that 
deliverable (make a plan for how you'll avoid merge conflicts!) and start working!

## Homework

No specific assignment for the next few weeks other than working on your project.