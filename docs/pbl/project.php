<?php
include 'projects-data.php';
$project_id = isset($_GET['id']) ? $_GET['id'] : 0;
$project = null;
foreach ($projects as $p) {
    if ($p['id'] === $project_id) {
        $project = $p;
        break;
    }
}
if (!$project) {
    header('HTTP/1.0 404 Not Found');
    echo '<h1>Project not found</h1><a href="index.php">Back to projects</a>';
    exit;
}

// Build gallery from data
$gallery_images = [];
if (!empty($project['gallery'])) {
    $gallery_path = 'images/' . $project['id'];
    foreach ($project['gallery'] as $item) {
        $gallery_images[] = [
            'src'     => $gallery_path . '/' . $item['file'],
            'caption' => $item['caption'] ?? '',
        ];
    }
}

// Get first quote for hero section
$first_quote_text = array_key_first($project['quotes']);
$first_quote_author = $project['quotes'][$first_quote_text];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($project['title']); ?> | PBL Showcase</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <a href="index.php" class="back-link">← Back to all projects</a>
        <h1><?php echo htmlspecialchars($project['title']); ?></h1>
    </header>

    <div class="project-hero">
        <div class="hero-image">
            <img src="images/<?php echo $project['hero_image']; ?>" alt="">
        </div>
        <div class="hero-panel">
            <div class="hero-question">
                <span class="hero-label">Driving Question</span>
                <h2><?php echo htmlspecialchars($project['driving_question']); ?></h2>
            </div>
            <div class="hero-quote">
                <p>"<?php echo htmlspecialchars($first_quote_text); ?>"</p>
                <span>— <?php echo htmlspecialchars($first_quote_author); ?></span>
            </div>
        </div>
    </div>

    <main class="container project-detail">
        <!-- Full writeup -->
        <section class="course">
            <h3>Course</h3>
            <?php echo $project['course']; ?>
        </section>

        <section class="instructor">
            <h3>Instructors</h3>
            <?php echo $project['instructor']; ?>
        </section>

        <section class="writeup">
            <h3>About the Project</h3>
            <?php echo $project['full_writeup']; ?>
        </section>

        <!-- Additional student quotes (all quotes except the first one) -->
        <section class="quotes-section">
            <h3>What Students Are Saying</h3>
            <div class="quotes-grid">
                <?php 
                $is_first = true;
                foreach ($project['quotes'] as $quote => $name): 
                    if ($is_first) {
                        $is_first = false;
                        continue; // Skip the first quote since it's already shown above
                    }
                ?>
                    <div class="quote-card">
                        <p>"<?php echo htmlspecialchars($quote); ?>"</p>
                        <cite>— <?php echo htmlspecialchars($name); ?></cite>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Learning highlights -->
        <?php if (!empty($project['learning_highlights'])): ?>
        <section class="highlights-section">
            <h3>Learning Highlights</h3>
            <ul class="highlights-list">
                <?php foreach ($project['learning_highlights'] as $highlight): ?>
                    <li><?php echo htmlspecialchars($highlight); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <?php endif; ?>

        <!-- Photo gallery -->
        <section class="gallery-section">
            <h3>Project Gallery</h3>
            <p>(Click on an image to enlarge)</p>
            <?php if (count($gallery_images) > 0): ?>
                <div class="gallery-grid">
                    <?php foreach ($gallery_images as $item): ?>
                        <div class="gallery-item"
                             data-src="<?php echo htmlspecialchars($item['src']); ?>"
                             data-caption="<?php echo htmlspecialchars($item['caption']); ?>">
                            <img src="<?php echo htmlspecialchars($item['src']); ?>"
                                 alt="<?php echo htmlspecialchars($item['caption'] ?: 'Gallery image'); ?>">
                            <?php if ($item['caption']): ?>
                                <p class="gallery-caption"><?php echo htmlspecialchars($item['caption']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p>No gallery images yet.</p>
            <?php endif; ?>
        </section>
    </main>

    <!-- Modal structure -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImg">
        <div id="modalCaption"></div>
    </div>

    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImg');
        const modalCaption = document.getElementById('modalCaption');
        const closeSpan = document.getElementsByClassName('close')[0];
        const galleryItems = document.querySelectorAll('.gallery-item');

        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                modal.style.display = 'flex';
                modalImg.src = this.getAttribute('data-src');
                modalCaption.textContent = this.getAttribute('data-caption') || '';
            });
        });

        closeSpan.onclick = function() {
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>