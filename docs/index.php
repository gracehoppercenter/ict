<?php
$current_semester = 's26';

// Check if a specific semester was requested
$requested_semester = isset($_GET['sem']) ? $_GET['sem'] : null;
$semesters = ['f24', 's25', 'f25', 's26', 'f26']; // Add as needed

if ($requested_semester && in_array($requested_semester, $semesters)) {
    $semester_to_show = $requested_semester;
} else {
    $semester_to_show = $current_semester;
}

// Generate navigation HTML
$nav_html = '<div id="semester_select" style="text-align: center; background: #f0f0f0;">';
$nav_html .= 'Want to view a different semester? Select it here: ';
foreach ($semesters as $sem) {
    if (file_exists(__DIR__ . "/{$sem}/index.html")) {
        $style = $sem === $semester_to_show ? 'style="font-weight: bold; text-decoration: underline;"' : '';
        $nav_html .= "<a href=\"?sem={$sem}\" {$style}>" . strtoupper($sem) . "</a> | ";
    }
}
$nav_html .= '</div>';

$semester_index = __DIR__ . "/{$semester_to_show}/index.html";

if (file_exists($semester_index)) {
    // Capture the semester page content
    ob_start();
    include($semester_index);
    $content = ob_get_clean();
    
    // Insert navigation after the <body> tag
    $content = preg_replace('/<body[^>]*>/', '$0' . $nav_html, $content);
    
    echo $content;
} else {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Page Not Found</h1>";
    echo "<p>The page for {$semester_to_show} doesn't exist yet.</p>";
}
?>
