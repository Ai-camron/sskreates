<?php
/**
 * S&S Kreates Astra Child functions and definitions.
 *
 * @package ssk-astra-child
 */

define( 'SSK_ASTRA_CHILD_VERSION', '1.0.0' );

add_action( 'wp_enqueue_scripts', 'ssk_astra_child_enqueue_styles', 15 );
function ssk_astra_child_enqueue_styles() {
    $parent_handle = 'astra-theme-css';

    // Parent CSS
    wp_enqueue_style(
        $parent_handle,
        get_template_directory_uri() . '/style.css',
        array(),
        SSK_ASTRA_CHILD_VERSION
    );

    // Child CSS
    wp_enqueue_style(
        'ssk-astra-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_handle ),
        SSK_ASTRA_CHILD_VERSION
    );

    // Global S&S layout CSS (only if file exists)
    if ( file_exists( get_stylesheet_directory() . '/css/global.css' ) ) {
        wp_enqueue_style(
            'ssk-astra-global',
            get_stylesheet_directory_uri() . '/css/global.css',
            array( 'ssk-astra-child' ),
            SSK_ASTRA_CHILD_VERSION
        );
    }

    // Optional JS
    if ( file_exists( get_stylesheet_directory() . '/main.js' ) ) {
        wp_enqueue_script(
            'ssk-astra-main',
            get_stylesheet_directory_uri() . '/main.js',
            array(),
            SSK_ASTRA_CHILD_VERSION,
            true
        );
    }
}

function ssk_get_user_progress_data() {
    if ( ! is_user_logged_in() ) {
        return null;
    }

    $user_id  = get_current_user_id();
    $wins_raw = get_user_meta( $user_id, 'ssk_mini_wins', true );
    $goal_raw = get_user_meta( $user_id, 'ssk_mini_goal', true );

    $wins = is_numeric( $wins_raw ) ? (int) $wins_raw : 0;
    $goal = is_numeric( $goal_raw ) ? (int) $goal_raw : 40; // default

    if ( $goal <= 0 ) {
        $goal = 40;
    }

    $percentage = $goal > 0 ? round( ( $wins / $goal ) * 100 ) : 0;
    $percentage = max( 0, min( 100, $percentage ) );

    return array(
        'wins'       => $wins,
        'goal'       => $goal,
        'percentage' => $percentage,
    );
}

function ssk_shortcode_mini_wins_number() {
    $data = ssk_get_user_progress_data();

    if ( ! $data ) {
        return '24'; // guest demo
    }

    return (string) $data['wins'];
}
add_shortcode( 'ssk_mini_wins_number', 'ssk_shortcode_mini_wins_number' );

function ssk_shortcode_savings_progress_bar() {
    $data = ssk_get_user_progress_data();

    if ( ! $data ) {
        $wins       = 24;
        $goal       = 40;
        $percentage = 60;
    } else {
        $wins       = $data['wins'];
        $goal       = $data['goal'];
        $percentage = $data['percentage'];
    }

    $percentage_style = 'width:' . $percentage . '%;';

    ob_start();
    ?>
    <div class="ssk-progress" role="img" aria-label="<?php echo esc_attr( "You have logged {$wins} of {$goal} mini wins" ); ?>">
        <div class="ssk-progress-bar" style="<?php echo esc_attr( $percentage_style ); ?>"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'ssk_savings_progress_bar', 'ssk_shortcode_savings_progress_bar' );
