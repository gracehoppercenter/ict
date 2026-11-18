## Lesson Objectives
By the end of this lesson, you should:

- Be able to explain, with real numbers, how much faster NumPy is than plain Python loops, and how that gap changes as data grows.
- **Python review group:** Be able to explain every line of the Arlington dog API starter code.

## What we'll do in class

### NumPy Efficiency Presentations (everyone)

We'll start with short presentations about NumPy from the students who worked
on that last time.

I'm excited for these presentations - one thing that I'll be looking out for is
whether the speedup is different from different functions.

**Python review group:** stay for the presentations and take notes. You don't need to
understand every line of the NumPy code yet, but you **are** responsible for the
conclusions: about how much faster NumPy is, how that changes as the data
grows, and why. These are important concepts that we'll revisit a lot this year!

### Python Review Group: Independent Work

After presentations, you'll work on your own today. I'll be working with the other
group, so I'm looking for you to step up and take ownership of your learning. Definitely help each other out and ask questions!

#### Step 1: Finish the readings

In the [Python Fundamentals for Data Analysis](https://edube.org/study/catalog/python-for-data-analytics-101-pd101-pced-ready-english/course-dashboard)
course, finish:

- The section on **lists** that you started last time
- The section on **dictionaries**

As you read, try the examples in a Jupyter notebook.

#### Step 2: Understand the dog starter code, line by line

Open my [Arlington dog API sample notebook](https://codeberg.org/cjones/ITE140/src/branch/main/arlington_dog_api.ipynb)
(the same starter code from the Arlington project). With lists and dictionaries
done, you've now covered enough Python to understand **every single line** of it.

Make your own copy of the notebook and add a Markdown cell (or a `#` comment)
that explains each line in your own words. Run the cells, change things, and
see what happens. Make sure you can answer questions like these:

- What does each `import` line give us, and what would break without it?
- How does `full_url` get built? What data type is it?
- What does `requests.get()` return, and what does `.json()` turn it into?
- What does `json.dumps(data, indent=4)` do, and why is it more readable than `print(data)`?
- Is `data` a list or a dictionary? What about `data[0]`? How do you know?
- What does `len(data)` count?
- In the `for d in data:` loop, what is `d` on each pass? What does
  `d['dogSexCode']` do?
- What does `m += 1` mean? Why do `m` and `f` start at `0`?
- In the `plt.pie(...)` and `plt.legend(...)` calls, what are the values in the brackets, and what do the
  `name=value` arguments (like `loc=` and `title=`) do?

#### Friday: Quiz

We'll start Friday's class with a **quiz about how this code works**. For the
Python review group, this quiz replaces the NumPy efficiency assignment grade.
If you can explain every line of this notebook and answer the types of questions listed above, you'll do great.

### NumPy students: Instagram Filters

Now that you can appreciate NumPy's speed, we'll apply it for something fun. I mentioned that NumPy is under the hood of tons of libraries we'll be using - one of those is MatPlotLib, the graphing library we've already used. A digital image is just a 3-dimension NumPy array. A color image is a 3D array with shape
`(rows, columns, 3)`. The last axis holds the red, green, and blue values for each pixel. We can use NumPy to manipulate those values and produce lots of cool visual effects.

This will be a mini project, and the final deliverable will be a cool new instagram-style filter. We'll present our filters on Tuesday before we leave for
Thanksgiving break.

Today, we'll just get started by loading an image and doing some basic
manipulation. I'll share the rest of the details next time.

#### Step 1: Load an image and play with it

Find a PNG image to start with. Other types will work too with minor modifications to these instructions, but I recommend PNG. You can download one from the internet, or take any image you have and convert it to a PNG (on your mac, screenshots are PNGs by default - so a nice shortcut might be to just screenshot an image). Then load it into Python with this code:
   `img = plt.imread('your_image.png')`. Print its `shape` and `dtype`, and show it
   with `plt.imshow(img)`. What range are the values in?
   - Many PNGs have a 4th channel for transparency (alpha). Use `img = img[:, :, :3]` to keep just red, green, and blue.

Then, pick a few of these to play with:
* Use list slices to crop the image down to just the interesting part.
* Can you use list slices to flip the image upside down or left-to-right?
* Play with channels: Show only the red channel. Then make a version where you swap the red and blue channels.
* Invert the colors (`1 - img`). Brighten it, and use `np.clip` so values
   don't go past the max. Convert it to grayscale by averaging across the color axis. (When you display it, try `plt.imshow(gray, cmap='gray')`.)
* Experiment with copies: Make `corner = img[:50, :50]`, then set `corner[:] = 0`. What happened to the original image? Why? How would you avoid that?

Once you've gotten used to the mechanics, start playing with a new filter of your own design. Save your notebook and commit it to GitHub. We'll keep building on it next class.

## Homework

- **Python review group:** finish the readings and the line-by-line review of the
  dog notebook. Be ready for Friday's quiz.
- **Everyone else:** none required. Keep playing with your image if you're having fun.
