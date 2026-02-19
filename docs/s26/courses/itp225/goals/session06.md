## Today's objectives
By the end of this lesson, you should:

- Be able to quickly add new CRUD functionality using Django Generic Views
- Understand how Generic Views in Django relate to Python Inheritance

## What We'll Do In Class

### Quiz

As promised, we'll start with a reading quiz that covers the CRUD work we did in 
class the past few days and Dr Chuck's video about generic views.

### Views Inheritance

Django's class-based views are an awesome application of inheritance.
We'll spend a few minutes chatting about how generic views fit in with
the class inheritance concepts we studied last semester. 

We'll take a quick look at Django's source code for generic views, here: 
<https://github.com/django/django/tree/main/django/views/generic>.

To understand this, we'll need to introduce the concept of "mixins". 
This topic gets overwhelming fast, so we'll keep it high-level,
with a focus on <https://docs.djangoproject.com/en/6.0/topics/auth/default/#the-loginrequiredmixin-mixin>, which we'll use a lot soon!

### ToDo, repeated

In class, we'll re-write our ToDo app using generic views. It will be so easy!
[Here is the diff with all of the changes we'll discuss in class today][1] 

## Homework

Make your own new CRUD app. Think of something you'd like to keep track
of. Follow these steps:

- Create a model with appropriate fields (don't forget to migrate!)
- Create four generic views:
    - Create: CreateView
    - Read: ListView AND DetailView
    - Update: UpdateView
    - Delete: DeleteView
- For each view, make sure to add the URL path and the template


<!--links from above -->
[1]: https://codeberg.org/cj0ne5/csc221/commit/2a6864f84cef259666a1ad1edd08102e2937012d