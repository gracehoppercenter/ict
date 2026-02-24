## Today's objectives
By the end of this lesson, you should:

- Feel confident about our learning plan for the next few weeks

## What We'll Do In Class

### Grade Check-in

Thanks for the chat last time - it helped me to understand what is an isn't 
working so far in our study of Django. I come away even more confident
that we're making good progress and will get to some cool projects soon. I 
hope you all felt the same 🫶.

You all spent the back half of class working in groups to start a new Django
project with a simple, single-model CRUD system for scratch, and we didn't 
assign any homework. I'm expecting that we'll want to continue today. As a 
reminder, we referenced 
[my Django setup notes, here](../resources/django_setup_notes.md)

Jeff and I will both be out at a conference on Thursday. Let's make a plan for
what we'll do each of the next few classes.

Here are my goals:

- You have everything you need to make productive and confident use of your class time on Thursday
    - I have some way to keep everyone accountable.
    - Also, Thursday's substitute is a new friend of the program. I'd like 
    to make sure that you all have something cool to show him.
- We get through the next few concepts:
    - CRUD on one-to-many models
    - Login and "Owned Rows"
- We start brainstorming about our big projects that we'll work on for the bulk of the semester.

### Homework

Your homework is to watch the Dr. Chuck lesson about [Users and Authentication](https://www.dj4e.com/lessons/dj4e_users). The key parts I'm expecting you 
to learn from this are:

- that you're responsible for writing the login form
- the importance of the `next parameter`
- That Django automatically sets `request.user` in the view and the `user` variable in the template context
- The [loginRequiredMixIn](https://docs.djangoproject.com/en/6.0/topics/auth/default/#the-loginrequiredmixin-mixin)
    
There won't be a quiz (because I won't be here to give it). So you'll demonstrate
your knowledge by working in class to add a login to the teamwork project you've
been working on the past few classes.

By the beginning of class next Monday, you should have:

- A working Django project, in a repo
    - You can have one per team - I know who has been working together and will 
    give credit to the rest of your team
- The project should have one app, with one model
- Working CRUD for that model
- A login system. For now:
    - if you're logged out, you shouldn't be able to see anything
    - If you're logged in, you can see everything
    - The ability to see your own list requires the next Dr. Chuck video. We'll
    work on that next week!

As always, don't hesitate to reach out if you need help.

And finally, come to class on Monday with an open mind ready for our 
brainstorming session!