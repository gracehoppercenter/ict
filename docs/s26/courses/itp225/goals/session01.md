## Today's objectives
By the end of this lesson, you should:

- 🤝 Know what we'll be studying this semester
- 🔢 Build a page visit counter in Django

## What We'll Do In Class

### New Course

Congrats on finishing CSC221. Officially, today is the start of a totally
new course, ITP225. We have a new syllabus, new course website, etc. You're certainly encouraged to review the new syllabus, but all of our policies are identical. 

### Certification Exams

The gradebook from last semester is closing. If you were hoping to take a certification exam, today is your last chance!

### Web 1.0 -> Web 2.0

Everything we've done so far in ITD110, ITD210, and CSC221 could be considered Web 1.0. Today, we'll take our first leap into Web 2.0 functionality by building a pageview counter in Django. This won't feel like much for now, but it's a big step. We'll take a few minutes to appreciate the difference. Read more about web 2.0 here: <https://en.wikipedia.org/wiki/Web_2.0>

## Homework

Review Dr. Chuck's Lesson 11: "Forms in HTTP and  HTML". <https://www.dj4e.com/lessons/dj4e_forms_html>

There is a lot in this lesson, so here's some advice:

- The first two videos should be review about how HTML forms work. If you took DE Web Design last year, you got all of this. Regardless, it's probably a good idea for everyone to review these videos. I'll expect that you understand HTML forms and GET vs POST requests going forward.
- The next few videos are about CSRF, a serious vulnerability that we must always take into account when we're building web forms. The conclusion of these videos is that Django takes care of it for us (as long as we include the {% csrf_token %} tag in our forms) - so I won't test you on the details. You can skip these videos for now, or can watch them if you're curious!
- The final video is the one I really want you to pay attention to: "Implementing POST Redirect in Django (8:04)". Take that one slow and make sure you understand it (especially if you skip over some of the other videos) - we'll start with a reading quiz about this video next class!


