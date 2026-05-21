<?php include 'projects-data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBL Student Projects | Our School</title>
    <link rel="stylesheet" href="/pbl/style.css">
</head>
<body>
    <header class="index-header">
        <div class="index-header-text">
            <p class="index-school-name">Arlington Tech</p>
            <h1>Project-Based Learning Showcase</h1>
            <div class="index-about">
                <p>Project-Based Learning at Arlington Tech is learning with a focus on
                    inquiry and process.</p>
                <p>We start with essential questions, identify projects to explore that
                    question, build collaborative teams for project management, and
                    present our projects to authentic audiences. Project development
                    is an iterative process, where we test ideas, receive feedback, and
                    improve our project and presentations.</p>
                <p>Throughout the school year, we’ll post ongoing projects here.</p>
            </div>
        </div>
        <div class="index-header-photo">
            <img src="/pbl/images/ghc_render.jpg" alt="Arlington Tech school building">
        </div>
    </header>

    <main class="container">
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <a href="/pbl/project.php?id=<?php echo $project['id']; ?>" class="project-card">
                    <?php if (!empty($project['hero_image'])): ?>
                        <img src="/pbl/images/<?php echo $project['hero_image']; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    <?php else: ?>
                        <div class="card-placeholder">Project Image Coming Soon</div>
                    <?php endif; ?>
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="course-name"><?php echo htmlspecialchars($project['course']); ?></p>
                        <p class="driving-question">❝ <?php echo htmlspecialchars($project['driving_question']); ?> ❞</p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>


</body>
</html>