## What we'll do in class

### Chris Out Again

Sorry to have to miss a second class in a row! Do your best to keep making progress on the project. Please do support each other if you get stuck, and don't hesitate to reach out to me if you need help.

At the beginning of class on Thursday, we'll share progress and figure out a reasonable due date for this project. I won't mind if we need some more time, but I'll expect that you'll have some good progress to share (or that you've sent me an email asking for help).

Here's a full write-up of what I'm expecting for this project:

### Arlington Data API Project

#### Project Introduction

In class, we've played with Arlington's Open Data Portal: <https://opendata.arlingtonva.us/>. 

For this project, you'll pick one dataset, ask it some questions, and tell us what you 
found. Thanks to James for pointing out that some datasets on that website are more 
complicated than others. You're encouraged to click around and find one that's really easy.

You can refer to the API documentation here: <https://docs.data.arlingtonva.us/resources/#api>

Remember that the goal is to keep this simple. I'm expecting you to NOT use NumPy, Pandas, Seaborn, or any other fancy data library we haven't specifically discussed in class. We're trying to stick to fundamentals for now and we'll play with those later!

#### Sample Project

If you want to look at my sample implementation, [I've committed it here](https://codeberg.org/cjones/ITE140/src/branch/main/arlington_dog_api.ipynb). Note that Codeberg represents 
as raw JSON - if you download that file and open it in VSCode, it'll look 
like the jupyter notebook you're used to.

#### Project Requirements

Create a Jupyter notebook for your dataset. Your notebook should be organized into the 
following parts, each with a markdown heading.

**Part 0: Introduction**

- Which dataset did you choose, and why?
- Link to the dataset's page on the Open Data Portal and to the API documentation.

**Part 1: Explore the data**

- Make a request for just a few records of sample data (for example, using `$top=2`) and print the result.
- In markdown, explain the structure of the data: Is it a list? A dictionary? What 
  does a single object represent? List the attributes and what you think each one means (you should be able to find the attribute definitions from the Arlington API website)

**Part 2: Queries**

- Make **at least 3 queries** against the API that use query parameters (like `$filter`, or the other options listed in the documentation). The queries should answer fundamentally different questions (don't just repeat the same query with 3 different dates)
- Before each query, write a markdown cell that states the question you're trying to answer.
- After each query, write a markdown cell that explains what you learned.

**Part 3: Summary stats**

- Answer **at least 2 summary-statistics questions** by using a Python `for` loop to 
  traverse the JSON data. For example: How many of each category are there? What's the 
  earliest and latest date? What's the average of some numeric field? Which value shows 
  up most often?
- State the question in markdown before the code, and state the answer in markdown after.

**Part 4: Visualizations**

- Make **at least 2 different types of charts** using matplotlib
- Pick charts that show something you actually find interesting. In markdown, explain 
  what each chart shows and why you chose it.
- Every chart needs a title, and axis labels or a legend so a reader can understand it.
- For ideas, see [the official matplotlib examples page](https://matplotlib.org/stable/plot_types/index.html).

**Throughout: Document your process**

Use markdown cells throughout your notebook to describe your full process. Write it so 
that someone who has never seen your dataset could follow along. In particular, include:

- **Assumptions** you made. (Example: "I'm assuming every dog that isn't `MALE` is female.
  I should check whether there are other values.")
- **Questions or issues** you ran into. Things that surprised you, data that looked wrong 
  or missing, queries that didn't work the way you expected, and how you worked around 
  them. (Example: "There are no dogs registered after early 2025. I wonder why?")

#### Submission Instructions

The exact due date is TBD - pending our discussion in class on Thursday.

Submit your `.ipynb` file by committing it to your github repo. Before you submit, 
restart your kernel and run all cells (`Restart` → `Run All`) to make sure everything 
runs from top to bottom without errors.

