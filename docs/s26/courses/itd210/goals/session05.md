## Lesson Objectives  
By the end of this lesson, you should:
- **Understand** how variables represent values that change over time
- **Be able to** use `let` and `const` to declare and update values
- **Be able to** animate shapes using `requestAnimationFrame()`
- **Understand** how scope affects how and where variables can be used


## What We'll Do In Class

### Reading Quiz: Functions

As promised, we'll start with a quiz to make sure you're comfortable
with functions.

### Discussion: What is animation?

We'll watch a few short videos to motivate this discussion:
- <https://www.youtube.com/shorts/tGFhNQ5eY4Y>
- <https://www.youtube.com/watch?v=yr3ngmRuGUc>
- <https://www.youtube.com/watch?v=8YGQmV3NxMI>
- <https://www.youtube.com/watch?v=3_vrMWkLRQ8> <-- my favorite band =)


### Activity: Automatically call functions using `requestAnimationFrame()`  
Here's some starter code. We'll work through this example together and 
talk about animation, variables, and scope.

```javascript
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");


//define functions
function drawRect(x,y) {
    console.log("drawing rect");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = 'blue';
    ctx.fillRect(x,y,50,50);
    ctx.fill();
}

function animate() {
    drawRect(50,50);

    // TODO: Add some code here 
    //  that will change the rectangle's position

    requestAnimationFrame(animate);
}

//call our function
animate();
```


## Homework

### Reading Assignment  
Next class we'll have a short reading quiz on variables and if statements. To review:

- Read the [MDN JavaScript Variables Guide](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Variables). Specifically focus on the difference between `let` and `const` (don't worry about `var` - we aren't using that syntax)
- Read the [MDN Javascript Conditionals Guide](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Scripting/Conditionals) (just focus on if statements, we haven't learned any of the fancier stuff on this page yet)


## Useful Resources For Today's Class
- [MDN: `requestAnimationFrame()`](https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame)
- [MDN: JavaScript Variables](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Variables)
- [Canvas Reference](https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial)
