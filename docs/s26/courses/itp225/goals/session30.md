### Django final grade (interview)

Come to class with one pull request that you'd like to discuss. Be prepared to 
answer questions about the code in that PR, and any adjacent M/V/T code that it 
interacts with.

During the interview, we'll quickly review your overall contributions to our
project, and then I'll roll a six-sided die to determine which topics we'll discuss.
Here are the topics, along with a preview of the kinds of questions I'll ask 
for each topic.

1. Models (Django ORM)

    In the pull request you brought, did you create or modify any Django models? If so, walk me through the model changes and explain how they relate to the database structure and business logic.
    If not: Pick a model that's relevant to your PR. How is it defined, and how does your PR interact with it—directly or indirectly?

2. Views & Request Handling

    Tell me about a view you implemented or modified in this pull request. How does it process incoming HTTP requests and what kind of responses does it return?
    If not: Find a view that triggers or depends on the logic in your PR. How does that view work, and where does your code fit into the request-response cycle?

3. URL Routing & Architecture

    Did your contribution involve any changes to the urls.py or the overall project structure? Can you explain how Django resolves URLs and how your route fits into the project?
    If not: Identify the route that ultimately leads to the code in your PR. Show how Django maps the URL to a view, and explain where your code runs in that flow.

4. Templates & Context

    If your PR involved rendering templates, how did you structure the context passed to the template? What strategies did you use to keep the templates clean and maintainable?
    If not: Find a template that is affected by or displays data related to your PR. How is the context built, and how might your code contribute to it?

5. Python Functions & Logic

    Show me a function or method you wrote in this PR. What does it do, and why did you design it this way? Could it be improved in terms of clarity, performance, or reusability?
    If not: Pick a function from your PR that interacts with logic written elsewhere. Trace how data flows through that function and explain how the pieces work together.

6. Object-Oriented Programming (e.g., Class-Based Views or Custom Classes)

    Did your pull request involve working with any classes, such as Django class-based views or custom helper classes? Walk me through one and explain how object-oriented concepts like inheritance or encapsulation are used.
    If not: Find a class elsewhere in the codebase that interacts with your PR—this could be a class-based view, model, or utility class. How does that class work, and how does your code relate to it or rely on its structure?
