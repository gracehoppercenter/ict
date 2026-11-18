## Lesson Objectives
By the end of this lesson, you should:

- Understand why NumPy is so efficient at handling large datasets.
- Know how to use the Jupyter magic commands `%%timeit` and `%timeit` to measure how long code takes to run.
- Be able to compare the performance of plain Python loops with NumPy ufuncs.
- Be able to describe how that performance gap changes as the data grows.

## What we'll do in class

We'll continue in our same groups as last time. Folks with me will work on reviewing Python lists and loops. As homework, this group will read through the rest of the chapter on lists.


The rest of the class will work independently on an assignment about NumPy efficiency, and will come prepared to make a short presentation at the beginning of next class.

### Assignment: Explore NumPy Efficiency
We'll keep working in the groups we set up last class.

Hopefully your takeaway from the NumPy reading was that NumPy is pretty cool. It's
specifically engineered to make working with large datasets very efficient. We
won't use NumPy directly very much, but it's working under the hood of most of the
Python data tools we'll use next. In this assignment, you'll measure just how
efficient it is.

Complete this assignment in a Jupyter notebook and commit it to one group member's
GitHub repo. As always, include a thoughtful amount of Markdown in your notebook
that explains your reasoning and conclusions.

#### Magic Commands
Jupyter has special built-in commands called "magic commands" (or just "magics").
We'll use two of them today:

- `%%timeit` (two percent signs) goes on the first line of a cell and times the
  **whole cell**.
- `%timeit` (one percent sign) times **one line** of code. If you add the `-o`
  option, it gives you back the result, so you can store it in a variable.

We'll play with these together in class. You can read more in the
[official IPython documentation on timeit](https://ipython.readthedocs.io/en/stable/interactive/magics.html#magic-timeit).

#### Instructions
1. **Setup**: Create a large NumPy 2D array of random integers (1000 rows x
   10 columns). Use `rng.integers` as described in the
   [NumPy random quick start](https://numpy.org/doc/stable/reference/random/index.html#random-quick-start).
   Use a lower bound of 1 (not 0) and a fairly small upper bound, like 100. Some
   functions break on 0 or on very large numbers (see the notes under the group
   table below).

2. **Task 1: Plain Python**: Write a function that uses traditional nested `for`
   loops to visit each element of the array and apply your group's function to it
   (use [ndarray.shape](https://numpy.org/doc/stable/reference/generated/numpy.ndarray.shape.html)
   to get the number of rows and columns). Use the `math` module, not NumPy, inside
   the loop. Time it with `%%timeit`. For an extra challenge, write this a few
   different ways (nested loops, list comprehension, etc.) and see which is fastest.

3. **Task 2: NumPy**: Do the same thing to the same array using the matching NumPy
   ufunc. Time it with `%%timeit`.

4. **Task 3: Grow the data**: One measurement only tells part of the story. Repeat
   both versions with arrays of different sizes. Use at least these row counts
   (keep 10 columns each time):

   | Rows       | Total elements |
   | ---------- | -------------- |
   | 1,000      | 10,000         |
   | 10,000     | 100,000        |
   | 100,000    | 1,000,000      |
   | 1,000,000  | 10,000,000     |

   Use `%timeit -o` inside a loop to collect your timings in a list or a
   DataFrame. **Tip:** the plain Python version gets slow at the larger sizes. Use
   options like `-r 3 -n 1` (3 repeats, 1 loop each) so you aren't waiting all
   class. If your computer handles it, try 10 million rows too.

5. **Task 4: Visualize**: Use pyplot to make a chart of run time vs. number of
   rows, with one line for plain Python and one for NumPy. For
   a second chart, plot the **speedup** at each size: plain Python time divided by
   NumPy time. Look back at the
   [pyplot examples](https://codeberg.org/cjones/ITE140/src/branch/main/pyplot_examples.ipynb)
   if you need a refresher.

   If this chart is too hard to read, you might consider putting a log scale on one or both axes via `plt.xscale('log')` and/or `plt.yscale('log')`. [Check out this wikipedia page for some theory about that](https://en.wikipedia.org/wiki/Log%E2%80%93log_plot)

6. **Task 5: Explain**: In Markdown, explain:
    - Both versions of your code
    - The efficiency difference at each size. Give actual numbers, like "NumPy
      was ___ times faster."
    - Whether the gap **grows, shrinks, or stays about the same** as the data
      gets bigger, and why you think that is. Look closely at the smallest size.
      Is NumPy's advantage as big there?

We'll start next class with presentations.

#### Group Assignments
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

| Group Members | Function                   | NumPy ufunc         | Plain Python                  |
| ------------- | -------------------------- | ------------------- | ----------------------------- |
| TBD           | natural log                | `np.log(arr)`       | `math.log(x)`                 |
| TBD           | sin                        | `np.sin(arr)`       | `math.sin(x)`                 |
| TBD           | modulo                     | `np.mod(arr, 7)`    | `x % 7`                       |
| TBD           | square root                | `np.sqrt(arr)`      | `math.sqrt(x)`                |
| TBD           | square                     | `np.square(arr)`    | `x ** 2` or `x * x` (are they different?)          |
| TBD           | exponential                | `np.exp(arr)`       | `math.exp(x)`                 |
| TBD           | multiply by a constant     | `np.multiply(arr, 3)` | `x * 3`                     |

**Watch out:**

- **natural log**: `math.log(0)` raises an error, so make sure your array starts at 1, not 0.
- **exponential**: `math.exp` raises an `OverflowError` for numbers above about 709. Keep your integers small (for example, 1 to 100). What does NumPy do with a number that big? Try it!

