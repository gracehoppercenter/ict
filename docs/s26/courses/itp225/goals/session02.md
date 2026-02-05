## Today's objectives
By the end of this lesson, you should:

- 🔢 Build a useful calculator in Django

## What We'll Do In Class

### Reading Quiz

As promised, we'll start class with a reading quiz where you'll
demonstrate that you understood Dr. Chuck's lesson about forms.

### End of Semester check-in

Semester 1 is over. We submitted your final grades to NOVA and APS. 
Onward to Semester 2!

We've also posted your first grade for Q3 - the DJango template  assignment. This was just a completion assignment - you got credit if you did it =)

### Classwork: Web Calculator

Last class we learned how to add Python to our views so that they do some 
thinking before sending the response back to the user. Today we'll expand
on that to build a simple calculator.

To do this, we'll need to chat about two new important concepts:

- Django's View class (<https://docs.djangoproject.com/en/6.0/ref/class-based-views/base/#view>). We'll spend a minute talking about
the difference between functions and classes.
- Sessions (<https://docs.djangoproject.com/en/6.0/topics/http/sessions/>)

We'll create a new Django view that takes in a user's height
and weight as URL parameters, calculates their BMI, and then renders it in a
template. [See this link for the formulae](https://www.nhsinform.scot/healthy-living/food-and-nutrition/healthy-eating-and-weight-management/body-mass-index-bmi/)

I broke today's code changes down into two steps:

1. [Setting up the form and the redirect](https://codeberg.org/MrJonesAPS/csc221/commit/ed2467ed0898b1368fcd5270e06d468cd0f7890d)
2. [Handling the session](https://codeberg.org/MrJonesAPS/csc221/commit/54dd5d48cfe00754591641ef20f1b1ed51aeb307)

## Homework

### Make two more calculators!

Repeat the BMI steps to create two new calculators of your own. 
To make this more fun, choose
a calculator that you might actually use (there are too many pythagorean theorem
calculators out there!). Next class, you'll present your calculator. Your 
presentation should include a brief explanation of why you think it's useful,
and then you'll enter some realistic values. I'll demonstrate that presentation 
today with a bread hydration calculator I built!

Choose a calculator thats's useful to you. Here are some
examples from my life that I'd love to have a nice calculator for:

- Total Time/Cost: I spend a lot of time thinking about how small decisions add 
up. If my phone screentime is x minutes per day, how many years of my life is that? Or If I buy a cup of coffee for $x dollars per day, how much will I spend in my lifetime?
- Fitness Stuff:
    - Running splits: given a target 5k time, what mile pace should I shoot for?
    - Grade Adjusted Pace: If I run a mile for time outside on a steep hill, how different would my mile time be on a flat track? <https://aaron-schroeder.github.io/reverse-engineering/grade-adjusted-pace.html>
    - Wilks Score: weight lifters like to calculate this score. It's standardized
        across genders and bodyweights - so any two people can compare their 
        strengths: <https://en.wikipedia.org/wiki/Wilks_coefficient>
    - There are all kinds of fun cycling calculations out there, like this one <https://www.surplace.fr/ffgc/>
- Games:
    - ELO Score Updates: <https://en.wikipedia.org/wiki/Elo_rating_system#Theory>
    - Poker Probabilities, like <https://en.wikipedia.org/wiki/Pot_odds>
