## What we'll do in class

### Arlington API Project Presentations

We'll start class by presenting our Arlington Data API projects. Be ready to
open your notebook and walk us through:

- Which dataset you chose, and why
- Your queries: what questions you asked, and what you learned
- Your charts: what they show, and why you chose them
- Any surprises, assumptions, or issues you ran into along the way

If you need a refresher on the requirements, see the full write-up in
[Session 18](./session.html?num=18). Remember to commit your final `.ipynb`
to your github repo.

### Start Learning About NumPy

I'm not sure how much time we'll have left after presentations and/or how much I'll need to work with individuals for their projects, so I planned for an independent assignment the rest of class. 

Over the next several classes, we'll explore two super-powerful
libraries that make it easier to work with big datasets 
in Python. The first is called [NumPy](https://numpy.org/).
We won't actually work directly with NumPy a ton, but it's 
good to know that it is the computation power under the hood for all of the rest of the tools we'll learn next.


You'll use two readings:

- The NumPy page in our **Python for Data Science** textbook:
  <https://edube.org/learn/daep1/getting-started-with-numpy?action=page#what-is-numpy>
- The official NumPy quickstart guide:
  <https://numpy.org/doc/stable/user/quickstart.html>

#### Classwork: Take Notes in Your Own Jupyter Notebook

For classwork credit, produce your own Jupyter Notebook that does two things:

- Use Markdown to summarize some of the most important topics. Here are some
  topics I'd expect you to include:
    - The differences between a NumPy `ndarray` and a nested list in Python
    - How to construct an `ndarray` (try a few ways - from a list, `np.zeros`,
      `np.arange`, `np.linspace`, etc.)
    - Array attributes like `shape`, `ndim`, `size`, and `dtype`
    - NumPy's axis numbering system
    - How to access and modify values in an `ndarray` (indexing and slicing)
    - Views vs. copies (this topic is important and easy to get wrong. Write a
      few examples to play with it and make sure you feel comfortable with the
      difference)

- Write some Python cells that play with these concepts. You're welcome to
  reproduce some of the examples from the readings, but at least use your own
  numbers. Try changing some of the dimensions or making up your own examples
  to test your understanding.

I'm looking for a thoughtful blending of Markdown and Python - don't just write
a bunch of Markdown at the top and a bunch of Python at the bottom.

Commit your notebook to your github repo when you're done. If you don't finish
in class, finish it for homework.
