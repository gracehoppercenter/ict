<?php
$projects = [
    [
        'id' => 'arcade',
        'title' => 'Code and Composition: Video Game Design + Music',
        'course' => 'DE Web Design and DE Music Appreciation',
        'instructor' => 'Chris Jones and Gerri Maskelony',
        'grades' => '10-12',
        'driving_question' => 'How can game designers and music composers 
        collaborate to build a cohesive digital world where visuals and 
        music tell the same story?',
        'hero_image' => 'arcade/fish.png',
        'full_writeup' => <<<WRITEUP
        <p>
        In this collaborative project, teams of web design students worked 
        together to design and implement video games that run in a web browser. 
        Teams also acted as clients, providing music students with 
        'vibe concepts' (e.g., dangerous, ethereal, or playful) for their 
        custom video games. 
        </p>
        <br>
        <p>
        To achieve this goal, web design teams studied the HTML canvas element 
        and how to interact with it through JavaScript APIs, how to receive and 
        process user interaction events, how to track game state, and how to use 
        version control systems to share a codebase with a team. After studying 
        musical motifs; theme and variations; and tonic-dominant relationships 
        for seamless looping, the music students composed original game scores. 
        Through an iterative feedback loop, the composers then refined their 
        tracks to perfectly meet the game designers' specifications.
        </p>
        <p>Students published their final games to 
        <a href="https://ict.gracehopper.center/s26/courses/itd210/projects/game_team_assignments.html">
        an online gallery, here</a></p>
        here 
        WRITEUP,
        'quotes' => [
            'I learned so much from this project!' => 'Student 1, 9th Grade',
            'I am so proud of my game' => 'Student 2, 10th Grade',
            'I\'ll never listen to video game music the same way again. ' => 'Student 3, 12th Grade'
        ],
        'learning_highlights' => [
            'The conductor of the Washington Metropolitan Gamer Symphony Orchestra, Jamin Morden, came as an expert collaborator to help music students better understand the parameters of video game music design and refine their compositions.',
        ],
        'gallery' => [
            ['file' => 'fish.png', 'caption' => 'One student game, about fishing'],
            ['file' => 'jamin.jpg', 'caption' => 'Guest speaker Jamin Morden, gives feedback on a student\'s composition'],
        ]
    ],[
        'id' => 'maze',
        'title' => 'Table Top Maze',
        'course' => 'Geometry',
        'instructor' => 'Chris Mann and Allison Hillstrom',
        'grades' => '9',
        'driving_question' => 'How can we use coordinate geometry & transformations to make a reproducible plan for an engaging table top maze?',
        'hero_image' => 'maze/colorful.jpg',
        'full_writeup' => <<<WRITEUP
        <p>
        Students design and build a table top maze using coordinate geometry 
        and transformations to place the shapes and traps around the maze.
        </p>
        <br>
        <p>
        Students plot specified shapes on a coordinate plane and then use 
        transformations to place additional shapes around the maze. They write 
        rules for these transformations using correct notation. Before building 
        they switch their design book with another group and then build the maze 
        using a different group\'s design. They meet the following standards:
        </p>
        <ul>
        <li>G.RLT.3b - Determine whether a figure has point symmetry, line 
        symmetry, both or neither. 
        </li><li>G.RLT.3c - Identify and write rules for translations, 
        reflections, rotations and dilations given an image or pre-image.
        </li><li>G.PC.1b - Investigate and use formulas for determining 
        distance, midpoint, and slope. 
        </li>
        </ul>
        WRITEUP,
        'quotes' => [
            'I learned so much from this project!' => 'Student 1, 9th Grade',
            'I am so proud of my maze' => 'Student 2, 10th Grade',
            'I loved seeing my friends play with my maze.' => 'Student 3, 12th Grade'
        ],
        'learning_highlights' => [
            'Students hosted a game event',
        ],
        'gallery' => [
            ['file' => 'complex.jpg', 'caption' => ''],
            ['file' => 'pink.jpg', 'caption' => ''],
            ['file' => '3mazes.jpg', 'caption' => ''],
            ['file' => 'colorful.jpg', 'caption' => ''],
        ]
    ],
    [
        'id' => 'elementary',
        'title' => 'Physics, it\'s elementary!',
        'course' => 'Physics',
        'instructor' => 'Nick Gray',
        'grades' => '11',
        'driving_question' => 'How can we synthesize a secondary physics concept 
        and teach to an elementary school class?',
        'hero_image' => 'elementary/catapults.jpg',
        'full_writeup' => <<<WRITEUP
        <p>
        Students will plan and deliver an interactive science lesson for 
        elementary students that align with standards for both their physics 
        class and the elementary school science classes. Lessons must have an 
        interactive activity to reinforce concepts introduced in their lesson 
        and a way to measure student learning at the end of the lesson.
        </p>
        WRITEUP,
        'quotes' => [
            'Presenting to a class of young students really helped me figure out 
            which parts of the material were most important' => 'Student 1, 9th Grade',
            'I loved getting to meet young students I don\'t normally 
            interact with' => 'Student 2, 10th Grade',
            'I had so much fun!' => 'Student 3, 3rd Grade'
        ],
        'learning_highlights' => [
            '',
        ],
        'gallery' => [
            ['file' => 'presenting.jpg', 'caption' => 'High school students 
            deliver a presentation to an elementary school class room'],
            ['file' => 'catapults.jpg', 'caption' => 'Title slide of one 
            student presentation'],
        ]
    ],
    
    
    
    //here's an empty template we can copy
    /*
    [
        'id' => 'maze',
        'title' => '',
        'course' => '',
        'instructor' => '',
        'grades' => '',
        'driving_question' => '',
        'hero_image' => '',
        'full_writeup' => <<<WRITEUP
        <p>
        
        </p>
        <br>
        <p>
        
        </p>
        WRITEUP,
        'quotes' => [
            'I learned so much from this project!' => 'Student 1, 9th Grade',
            'I am so proud of my game' => 'Student 2, 10th Grade',
            'I\'ll never listen to video game music the same way again. ' => 'Student 3, 12th Grade'
        ],
        'learning_highlights' => [
            '',
        ],
        'gallery' => [
            ['file' => '1.png', 'caption' => ''],
            ['file' => '2.png', 'caption' => ''],
        ]
    ],
    */
];
?>