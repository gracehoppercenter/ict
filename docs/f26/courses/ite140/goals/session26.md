## Lesson Objectives
By the end of this lesson, you should:

- **Python review group:** Show that you can explain every line of the Arlington dog API starter code.
- **NumPy group:** Be able to describe what hue, saturation, and value mean, and convert an image between RGB and HSV.
- **NumPy group:** Be able to manipulate the H, S, and V channels of an image with NumPy to create new effects.

## What we'll do in class

We'll stay in the same two groups we've been in for the past few classes.

### Python Review Group

#### Quiz: Arlington Dog API Code

We'll start class with the quiz on the
[Arlington dog API sample notebook](https://codeberg.org/cjones/ITE140/src/branch/main/arlington_dog_api.ipynb)
that we prepared for last class.

#### Assignment: Redo Your Arlington API Project

Now that you understand every line of the dog notebook, I'm giving you the chance to redo
your Arlington Data API project and **present it again in class on Tuesday**.

You can start from your old notebook or start fresh. The original requirements from
[Session 18](./session.html?num=18) still apply: an introduction, exploring the
data, at least 3 queries, and at least 2 different types of charts, with Markdown
explaining what you did throughout.

This time, here's what I'm looking for:

- **Simple code that you can fully explain.** Your code should look about like the
  dog notebook and the examples we've done in class over the past few days. If you can't explain a line in your own words, it shouldn't be in
  your notebook.
- **Compelling graphs.** Your charts should show something interesting and be easy to
  understand. Every chart needs a title, and axis labels or a legend.
  Look back at the [pyplot examples](https://codeberg.org/cjones/ITE140/src/branch/main/pyplot_examples.ipynb)
  and the [matplotlib plot types page](https://matplotlib.org/stable/plot_types/index.html)
  for ideas. We shouldn't see scatter plots with only one point in them.

During your presentation, I'll point to lines of your code and ask you to explain
them, just like last time. Be ready to explain:

- What each query asks for and what the API sends back (a list? a dictionary?)
- How your loops turn that data into the numbers you graph
- Why you picked each chart, and what it tells us

Before Tuesday, restart your kernel and run all cells (`Restart` → `Run All`) to make
sure everything runs from top to bottom, then commit your `.ipynb` to your GitHub repo.

### NumPy Group: HSV Filters

Last class, you loaded an image as a NumPy array and did some simple slicing and dicing. Today, I'll give you a bit 
of color theory that will help make your filters more compelling.

Read the [Wikipedia page on HSL and HSV](https://en.wikipedia.org/wiki/HSL_and_HSV).

You don't need to follow all the math. Focus on the intro, the pictures of the
color cylinder, and the "Motivation" section. Then make sure you can answer: if I
change only the hue of a pixel, what stays the same?

#### Starter Code

Matplotlib has functions that convert a whole image array between RGB and HSV in one
step. Start with the image you used last class:

```python
import numpy as np
import matplotlib.pyplot as plt
from matplotlib.colors import rgb_to_hsv, hsv_to_rgb

# Load the image, just like last class
img = plt.imread('your_image.png')
img = img[:, :, :3]          # drop the alpha channel if there is one

# Convert RGB -> HSV. The shape stays (rows, columns, 3),
# but now the last axis holds hue, saturation, and value.
hsv = rgb_to_hsv(img)

# Pull out each channel as its own 2D array.
# These are views, so changing them changes hsv too!
h = hsv[:, :, 0]
s = hsv[:, :, 1]
v = hsv[:, :, 2]

print(hsv.shape, hsv.dtype)
print('hue range:', h.min(), h.max())
print('saturation range:', s.min(), s.max())
print('value range:', v.min(), v.max())
```

Then, once you've changed the HSV values, convert back to RGB so you can show it
and save it:

```python
# Make your changes on a copy, so you can compare to the original
new_hsv = hsv.copy()

# --- your filter goes here ---
# Example: shift every hue a third of the way around the color wheel
new_hsv[:, :, 0] = (new_hsv[:, :, 0] + 0.33) % 1.0

# All values must stay between 0 and 1 before converting back
new_hsv = np.clip(new_hsv, 0, 1)

# Convert HSV -> RGB
new_img = hsv_to_rgb(new_hsv)

# Show the original and the result side by side
fig, (ax1, ax2) = plt.subplots(1, 2, figsize=(10, 5))
ax1.imshow(img)
ax1.set_title('Original')
ax2.imshow(new_img)
ax2.set_title('Filtered')
plt.show()

# Write it out to a new image file
plt.imsave('filtered.png', new_img)
```

Note that in matplotlib, hue goes from 0 to 1 instead of 0 to 360 degrees.
Why do you think the hue example uses `% 1.0`, but we use `np.clip` for the rest?


#### Your Goal for Tuesday

By the start of next class, design an **original filter** and be ready to present it.
In your presentation, you should:

- Show a before and after of at least one image (bonus points if it looks good on a
  couple of different images)
- Walk us through your code and explain how it works: which channels you changed,
  how, and why

Put your filter in a Jupyter notebook with Markdown explaining each step, and commit
it to your GitHub repo along with your before and after images.

## Homework

- **Python review group:** Redo your Arlington API project with simple code you can
  fully explain and compelling graphs. Be ready to present on Tuesday.
- **NumPy group:** Finish your original HSV filter and be ready to present it on
  Tuesday.
