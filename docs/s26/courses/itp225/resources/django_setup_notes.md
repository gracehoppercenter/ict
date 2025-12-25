## Setup your venv and gitignore

Add .venv to your .gitignore in preparation for setting up a virtual environment. A good .gitignore for our purposes here should include at least the following:

```
*.swp
__pycache__
*.sqlite3
*.db
.DS_Store
*.pyc
.venv
```

Create your virtual environment inside your project directory by running:

`% python3 -m venv .venv`

Activate it with:

`% source .venv/bin/activate`


## Start a brand new Django App

First you'll need to install django into your virtual environment, then run:

`django-admin startproject project_name`


## Setup Template Inheritance

[Follow my diff here](https://github.com/MrJonesAPS/django_projects/commit/0419417462e3e70943ffc50e038c85e098a7dbae)

Depending on how your apps are setup, you might also need to edit the `TEMPLATES` dictionary in `settings.py` to add the templates folder under the `DIRS` key.


## Creating a new app

These instructions are based on our in-class discussion about the `todo` app. You'll need to modify them based on your app name. If you aren't sure what to call it, I like the name `core`:

1. Create a new app: `manage.py startapp`
2. Register our app in `settings.py`
3. Write our models in `todo/models.py`
    - One model, called `item`, only a text description
4. Register our model in `todo/admin.py`
5. Migrate: `python3 manage.py makemigrations` `python3 manage.py migrate`
5. Login as admin and create some todo items
6. Make views (using genericviews: ListView and DetailView)
7. Tell DJanngo about those views in `todo/urls.py`
    - Tell the Django project about this urls file on project-level `urls.py`
8. Make new templates
    - Make templates folder
    - Write HTML files