## Today's objectives
By the end of this lesson, you should:

- Be able to use sessions to set and retrieve values across page refreshes


## What We'll Do In Class

### Reading Quiz

As promised, we'll start class with the reading quiz you all convinced me to postpone last time. We discussed most of the answers in class last time, so I'm confident you will all do great =)

### Quick pitch - coding contests

There was an awesome event here at ACC this weekend. We want to tell you 
about it and we want help making more events like that happen. Here's a news article about last year's event: <https://www.arlnow.com/2026/01/09/student-led-programming-competition-returns-for-a-second-year-at-aps/>

### Presentations

Your homework was to setup a calculator, and I said that I'd have you do presentations for your grade. I'm thinking we should wait until the results
show up on the page - so we'll do these presentations later (Wednesday or Friday depending on how chaotic Wednesday's semi-synchronous half day is).

### Classwork: Web Calculator

Last class (and for homework) we setup some calculators in Django, but we ended
at an anticlimactic point - when you submit the calculator your browser reloads
to a blank form and prints the result to the command line. Today we'll use 
sessions to display the answer on the web page.

Here's the relevant Django documentation about sessions <https://docs.djangoproject.com/en/6.0/topics/http/sessions/>

And here's my code:
[Handling the session](https://codeberg.org/cjones/csc221/commit/54dd5d48cfe00754591641ef20f1b1ed51aeb307)

## Homework

Your homework has two parts:

- Update your calculator so that it uses sessions to display the result. Be prepared to present in class next time!

- We're starting to get really good at URL routing, views, and templates. It's time to layer models back in. Start this with some review on your own. Next class we'll work on building a simple todo list. To get started:
    - create a new model in `core/models.py` called `Task` and give it two fields:
        + a text field called `description`
        + a boolean field called `done`
    - `makemigrations` and `migrate`
    - Register your new model in `core/admin.py` by adding these two lines:
        ```
        from core.models import Task
        admin.site.register(Task)
        ```
    - Runserver, login to the Django admin interface, and create a few tasks.
        + You might need to `python3 manage.py createsuperuser` so that you can login.

If you need a reminder about how to do this, revisit Dr. Chuck's Lesson 6: [Django Data Models](https://www.dj4e.com/lessons/dj4e_modules)

I'm going to hold you responsible for getting through this review on your own. Commit your model code before 8am on Wednesday so that I can give you a grade for preparation!

