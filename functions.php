<?php
function menos_enqueue_fonts() {
    wp_enqueue_style('menos-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:wght@400;700&family=Noto+Mono&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'menos_enqueue_fonts');
