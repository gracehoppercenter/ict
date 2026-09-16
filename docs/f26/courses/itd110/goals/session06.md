## Lesson Objectives
By the end of this lesson, you should:
- **Know**: 👩‍💻 That HTML is the language of web pages. 
- **Know**: 🧠 The basic structure of an HTML document. 
- **Understand**: 💡 The purpose of each part of the minimal HTML page. 
- **Do**: 🖊️ Write a simple HTML page from memory. 


## What We'll Do In Class

### Quiz
As usual, we'll start with a quiz. I'll tell you something that I want you to add to your index.html. You should:
1. Use Vim to add the requested text to your index.html
2. Use git to apply the same change to your repo on github.com

### Grades

I've entered a grade into StudentVue for the repo setup assignment. Everyone
got either a 5/5 or 0/5.

You can see exactly what I see at this link <https://duck.apscs.org/file_list>.
Just select which section you're in and click "Submit Query" - then click on the
link that pops up next to your name.

if you got a 0/5, that means your repo won't show up on that link, so I'll have no way to grade any of your assignments for the rest of the year. Please get this fixed ASAP!
Let me know if you need help. Also let me know if you think you did everything
right - it's very possible that the 🦆 is confused =)

### gitignore

There are a few files that we want to keep out of your repo. I'll show you how 
to make a file that tells git to ignore these patterns:

```
.DS_Store
# ---> Vim
# Swap
[._]*.s[a-v][a-z]
# comment out the next line if you don't need vector files
!*.svg
[._]*.sw[a-p]
[._]s[a-rt-v][a-z]
[._]ss[a-gi-z]
[._]sw[a-p]
```

### Our First HTML Page!
Now that you're comfortable with the terminal, vim, and git, we can finally start learning HTML.

We'll go over a demo together where we'll write an HTML file in vim and view it in your browser.

### Register for HTML course
For the next several classes, we'll be following this online textbook: <https://edube.org/study/html-essentials>. Create an account on this website, register for this class, and start reading through Module 1.

## Homework

### Finish Unit 1
Work through the remainder of Module 1 in [our online HTML text](https://edube.org/), and the module 1 project. This project is for your own practice and will not be graded.

### Memorize the minimal HTML page
We will start next class with a reading quiz that will look a lot like the Module 1 project. For this quiz, you will need to write an entire HTML (simple) page on your own, so you should memorize the minimal HTML page that we looked at in class today. For convenience, here it is again:

```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World!</title>
</head>
<body>
    <p>This is my first web page.</p>
</body>
</html>
```

