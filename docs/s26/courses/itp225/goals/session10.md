## Today's objectives
By the end of this lesson, you should:

- Be ready to work in a team on your own django project

## What We'll Do In Class

### Grade Chat

As promised, I graded the todo work that you did last week. Some of you did great,
but I was disappointed overall. Here are some observations:

- This was a group assignment. Many of you refused to work in groups. For this grade, I searched individual repos so that I could give credit for individual effort. 
- The instructions were clear - if you couldn't get the work done, you were supposed to email me and cc your group members. One group did that (and ended
up with an A for the project), the rest did not. For the groups (/individuals) 
that did not reach out to me, I had to assume you were happy with your progress
and so I graded the work in your repo.

For grading, I gave C's to teams whose repos showed clear evidence of effort but
who were missing a lot of features, D's to teams whose repose showed very little
evidence, and E's when I could find no evidence of any work.

Today's goal will be to focus on the **process** of building software in teams. Starting today, this process is a requirement. I will only grade shared group repos, and grades will focus on evidence that you're following the process, not 
the product that you're building.

### Shared Repo Collaboration

This might be the first project many of you have worked on that involved sharing a repo with a lot of people. We'll discuss some norms and rules for sharing a git repo. To practice, we'll work together to create a single file with a list of 
all of our names. See the instructions at the bottom of this page.

### Form Teams

For most of the remainder of the year, we'll be working on large group projects.
We'll start by forming teams. My goal is to have four teams, each no larger than
four members. I'll let you choose these teams.

### Your own project

I'll let your team choose your own project to work on for the next few classes.
Here is what I'm looking for in this project:

- Your team shares a single repo, which you create in the <https://codeberg.org/GHC_Students> organization.
- Your team never commits to your main branch. All work is tracked by issues,
all code goes through PRs, which are reviewed collaboratively.
- Together, you build a Django project that has:
    - At least three custom models, connected together via one-to-many relationships
    - Nice looking HTML/CSS
    - A login system, with views protected by LoginRequiredMixin

My suggestion for today is that your team take these steps:

1. Decide what project you will build (I have lots of ideas if you need help!)
2. Work together to setup your repo, give everyone permissions, add branch protection to the main branch, and get it cloned on everyone's computers
3. Quickly run Django startapp for your initial commit ([reference my Django setup notes, here](../resources/django_setup_notes.md))
4. From there, divide into pairs to focus on the next step:
    - one pair should work on setting up the base template
    - the other should work start your models

As always, I'll wander around and help anyone who needs it.

### Git PR Instructions

#### **Step 1: Create an Issue**

1. Go to the **Issues** tab in this repository.
2. Click **New Issue**.
3. Title your issue: `Add name - <Your Name>` Example: `Add name - Alice`
4. In the description, write:  "I am adding my name to the contributors file."
5. Click **Submit new issue**.
6. Assign the issue to yourself.

#### **Step 2: Create a Branch**

    1. Open your terminal or GitHub Desktop.
    2. Clone this repository if you haven’t already:

    `git clone https://codeberg.org/GHC_Students/students`

    3. Navigate into the repository:

    `cd students`

    4. Create a new branch with your name:

    `git checkout -b add-name-<your-name>`

    Example:

    `git checkout -b add-name-alice`

#### Step 3: Add Your Name

    Open `README.md` in a text editor.
    Add your name on a new line.
    Save the file.

#### Step 4: Commit and Push Your Changes

    Stage your changes:

    `git add README.md`

    Commit your changes with a message:

    `git commit -m "Added my name"`

    Push your branch to GitHub:

        `git push origin add-name-<your-name>`

#### Step 5: Open a Pull Request

    1. Go to the repository on GitHub.
    2. Click Pull Requests > New Pull Request.
    3. Select your branch (add-name-<your-name>) as the source.
    4. In the description, write:

        Closes #<issue-number>

        Example:

        Closes #12

    5. Click Create Pull Request.

#### I'll go through and close all the PRs after class