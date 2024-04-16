<?php
/**
 * Wicket functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wicket
 */

if ( ! function_exists( 'wicket_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wicket_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Wicket, use a find and replace
		 * to change 'wicket' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wicket', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'wicket' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wicket_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/**
		 * Add Post Format Support
		 */
		add_theme_support( 'post-formats', array( 
			'audio',
			'aside', 
			'gallery', 
			'image',
			'link',
			'video',
		) );

		/**
		 * WooCommerce Support
		 */
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'wicket_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wicket_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wicket_content_width', 640 );
}
add_action( 'after_setup_theme', 'wicket_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wicket_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wicket' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer Widget 1
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'wicket' ),
		'id'            => 'footer-widget-1',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<div id="%1$s" class="widget wicket-footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	// Footer Widget 2
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'wicket' ),
		'id'            => 'footer-widget-2',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<div id="%1$s" class="widget wicket-footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	// Footer Widget 3
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'wicket' ),
		'id'            => 'footer-widget-3',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<div id="%1$s" class="widget wicket-footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	// Footer Widget 4
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 4', 'wicket' ),
		'id'            => 'footer-widget-4',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<div id="%1$s" class="widget wicket-footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	// Copyright Widget 1
	register_sidebar( array(
		'name'          => esc_html__( 'Copyright Widget 1', 'wicket' ),
		'id'            => 'copyright-widget-1',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<div id="%1$s" class="widget wicket-copyright-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	// Copyright Widget 2
	register_sidebar( array(
		'name'          => esc_html__( 'Copyright Widget 2', 'wicket' ),
		'id'            => 'copyright-widget-2',
		'description'   => esc_html__( 'Add widgets here.', 'wicket' ),
		'before_widget' => '<div id="%1$s" class="widget wicket-copyright-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'wicket_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wicket_public_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'wicket', get_template_directory_uri() . '/assets/css/theme.css' );
    wp_enqueue_style( 'wicket-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'wicket-style', get_stylesheet_uri() );

    wp_enqueue_script( 'wicket-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'wicket-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '20180708', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '20180708', true );
	wp_enqueue_script( 'wicket', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '20180708', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wicket_public_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Bootstrap 4 Navwalkers
 */
require get_template_directory() . '/navwalkers.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce/wicket-woocommerce.php';
	require get_template_directory() . '/inc/woocommerce/wicket-woocommerce-template-hooks.php';
	require get_template_directory() . '/inc/woocommerce/wicket-woocommerce-functions.php';
}

/**
 * TGM Plugin Activation
 */
require get_template_directory() . '/inc/plugins/tgm-plugin-activation.php';


/**
 * Change the defualt WP login logo
 */
function wicket_login_screen_logo() {
	echo '<style type="text/css">
	.login h1 a {background-image: url('.get_bloginfo( 'template_directory' ).'/assets/img/login-screen.png) !important; height: auto !important; }
	</style>';
}
add_action( 'login_head', 'wicket_login_screen_logo' );

function wicket_login_head_url( $url ) {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'wicket_login_head_url' );

/**
 * A function that contains all options value
 */
function wicket_theme_options() {
	return $wicket_options = array(
		'wicket_header_type' => 'default', // Options: default, large, minimal, none
	);
}












// custom function added
function custom_user_list_posts_html_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'category' => '', // Default value for category
        ),
        $atts,
        'custom_user_list' // Shortcode name
    );


	// Get categories from shortcode attribute and convert them into an array
	$categories = !empty($atts['category']) ? array_map('trim', explode(',', $atts['category'])) : array();

    $args = array(
        'post_type' => 'user-list',
        'posts_per_page' => -1, // Retrieve all posts
    );

    // If categories are specified, add them to the query
    if (!empty($categories)) {
        $args['category_name'] = implode(',', $categories);
    }

    $user_list_posts = new WP_Query($args);
	
    ob_start(); // Start output buffering

    if ($user_list_posts->have_posts()) {
        while ($user_list_posts->have_posts()) {
            $user_list_posts->the_post();
            ?>


			<div class="list-box">
				<div class="focus-part">
					<div class="user-id">
						<p class="id-ti">এজেন্ট আইডি</p>
						<div class="id-value"><?php echo get_post_meta(get_the_ID(), 'user_id', true); ?></div>
					</div>
					<div class="name-dig">

						<div class="img"><?php the_post_thumbnail(); ?></div>

						<div class="title-cat">
							<div class="title"><?php the_title(); ?></div>
							<div class="cat-dig <?php echo esc_attr(implode(' ', get_post_class())); ?>">
								<?php 
								$postcat = get_the_category(get_the_ID());
								if(isset($postcat[0])){
								$postcat_name = $postcat[0]->name;
								// var_dump(esc_html( $postcat[0]->name )); 
								//echo get_the_category_list(', '); ?>
								<?php //echo "বাংলাদেশ"; ?>


								<?php
								if ($postcat_name == "Customer Service") {
									echo "কাস্টমার সার্ভিস";
								} elseif ($postcat_name == "Sub Admin") {
									echo "সাব-এডমিন";
								} elseif ($postcat_name == "Admin") {
									echo "এডমিন";
								} elseif ($postcat_name == "Super Agent") {
									echo "সুপার এজেন্ট";
								} elseif ($postcat_name == "Master Agent") {
									echo "মাস্টার এজেন্ট";
								}else {
									echo "";
								}
							    }
								?>


							</div>
						</div>

					</div>
				</div>
				<!-- <div class="social-connection-group" style=""> -->
				<div class="social-connection-group" style="display: none;">

				<?php if(get_post_meta(get_the_ID(), 'whatsapp_primary', true) != ''){ ?>
					<div class="group-1">
						<span class="value-1">WhatsApp <span>(Primary)</span></span>
						<span class="value-2"><?php echo get_post_meta(get_the_ID(), 'whatsapp_primary', true); ?></span>
						<span class="copy-btn">Copy Number</span>
						<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'whatsapp_primary_link', true); ?> " target="_blank">Message</a></span>
					</div>
                <?php } ?>

				<?php if(get_post_meta(get_the_ID(), 'whatsapp_secondary', true) != ''){ ?>
					<div class="group-2">
						<span class="value-1">WhatsApp <span>(Secondary)</span></span>
						<span class="value-2"><?php echo get_post_meta(get_the_ID(), 'whatsapp_secondary', true); ?></span>
						<span class="copy-btn">Copy Number</span>
						<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'whatsapp_secondary_link', true); ?>" target="_blank">Message</a></span>
					</div>
				<?php } ?>	

				<?php if(get_post_meta(get_the_ID(), 'messenger', true) != ''){ ?>
					<div class="group-3">
						<span class="value-1">Messenger</span>
						<span class="value-2"><a href="<?php echo get_post_meta(get_the_ID(), 'messenger', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'messenger', true); ?></a></span>
						<span class="copy-btn">Copy</span>
						<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'messenger', true); ?>" target="_blank">Message</a></span>
					</div>
				<?php } ?>


				</div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        // No posts found
    }

    $output = ob_get_clean(); // Get the output and clean the buffer
    return $output; // Return the generated HTML
}
add_shortcode('custom_user_list', 'custom_user_list_posts_html_shortcode');
// [custom_user_list category="Category Name"]
// [custom_user_list category="Category Name 1, Category Name 2, Category Name 3"]










function custom_user_list_posts_html_shortcode_complain($atts) {
    $atts = shortcode_atts(
        array(
            'category' => '', // Default value for category
        ),
        $atts,
        'custom_user_list' // Shortcode name
    );

    $args = array(
        'post_type' => 'user-list',
        'posts_per_page' => -1, // Retrieve all posts
    );

    // If a category is specified, add it to the query
    if (!empty($atts['category'])) {
        $args['category_name'] = $atts['category'];
    }

    $user_list_posts = new WP_Query($args);

    ob_start(); // Start output buffering

    if ($user_list_posts->have_posts()) {
        while ($user_list_posts->have_posts()) {
            $user_list_posts->the_post();

			// var_dump(get_post_meta(get_the_ID(), 'complain_agent', true));

			if(get_post_meta(get_the_ID(), 'complain_agent', true) == '1'){
				?>
					<div class="complain-box">
						<div class="focus-part-complain">

							<div class="name-dig">

								<div class="img"><?php the_post_thumbnail(); ?></div>

								<div class="title-cat">
									<div class="title"><?php the_title(); ?></div>
									<div class="cat-dig <?php echo esc_attr(implode(' ', get_post_class())); ?>">
										<?php 
										$postcat = get_the_category(get_the_ID());
										if(isset($postcat[0])){
										$postcat_name = $postcat[0]->name;
										// var_dump(esc_html( $postcat[0]->name )); 
										//echo get_the_category_list(', '); ?>
										<?php //echo "বাংলাদেশ"; ?>


										<?php
										if ($postcat_name == "Customer Service") {
											echo "কাস্টমার সার্ভিস";
										} elseif ($postcat_name == "Sub Admin") {
											echo "সাব-এডমিন";
										} elseif ($postcat_name == "Admin") {
											echo "এডমিন";
										} elseif ($postcat_name == "Super Agent") {
											echo "সুপার এজেন্ট";
										} elseif ($postcat_name == "Master Agent") {
											echo "মাস্টার এজেন্ট";
										}else {
											echo "";
										}
									    }
										?>


									</div>
								</div>

							</div>

							<div class="user-id">
								<p class="id-ti">এজেন্ট আইডি</p>
								<div class="id-value"><?php echo get_post_meta(get_the_ID(), 'user_id', true); ?></div>
							</div>


						</div>
						<div class="social-connection-group complain-ss">

						   <?php if(get_post_meta(get_the_ID(), 'whatsapp_primary', true) != ''){ ?>
								<div class="group-1">
									<span class="value-1">WhatsApp <span>(Primary)</span></span>
									<span class="value-2"><?php echo get_post_meta(get_the_ID(), 'whatsapp_primary', true); ?></span>
									<span class="copy-btn">Copy Number</span>
									<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'whatsapp_primary_link', true); ?> " target="_blank">Message</a></span>
								</div>
							<?php } ?>

							<?php if(get_post_meta(get_the_ID(), 'whatsapp_secondary', true) != ''){ ?>
								<div class="group-2">
									<span class="value-1">WhatsApp <span>(Secondary)</span></span>
									<span class="value-2"><?php echo get_post_meta(get_the_ID(), 'whatsapp_secondary', true); ?></span>
									<span class="copy-btn">Copy Number</span>
									<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'whatsapp_secondary_link', true); ?>" target="_blank">Message</a></span>
								</div>
							<?php } ?>

							<?php if(get_post_meta(get_the_ID(), 'messenger', true) != ''){ ?>
								<div class="group-3">
									<span class="value-1">Messenger</span>
									<span class="value-2"><a href="<?php echo get_post_meta(get_the_ID(), 'messenger', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'messenger', true); ?></a></span>
									<span class="copy-btn">Copy</span>
									<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'messenger', true); ?>" target="_blank">Message</a></span>
								</div>
							<?php } ?>

						</div>
					</div>
				<?php
			}
        }
        wp_reset_postdata();
    } else {
        // No posts found
    }

    $output = ob_get_clean(); // Get the output and clean the buffer
    return $output; // Return the generated HTML
}
add_shortcode('complain_admin_list', 'custom_user_list_posts_html_shortcode_complain');





function custom_user_list_posts_html_shortcode_new_account($atts) {
    $atts = shortcode_atts(
        array(
            'category' => '', // Default value for category
        ),
        $atts,
        'custom_user_list' // Shortcode name
    );

    $args = array(
        'post_type' => 'user-list',
        'posts_per_page' => -1, // Retrieve all posts
    );

    // If a category is specified, add it to the query
    if (!empty($atts['category'])) {
        $args['category_name'] = $atts['category'];
    }

    $user_list_posts = new WP_Query($args);

    ob_start(); // Start output buffering

    if ($user_list_posts->have_posts()) {
        while ($user_list_posts->have_posts()) {
            $user_list_posts->the_post();

			// var_dump(get_post_meta(get_the_ID(), 'complain_agent', true));

			if(get_post_meta(get_the_ID(), 'new_account_agent', true) == '1'){
				?>
					<div class="complain-box">
						<div class="focus-part-complain">

							<div class="name-dig">

								<div class="img"><?php the_post_thumbnail(); ?></div>

								<div class="title-cat">
									<div class="title"><?php the_title(); ?></div>
									<div class="cat-dig <?php echo esc_attr(implode(' ', get_post_class())); ?>">
										<?php 
										$postcat = get_the_category(get_the_ID());

										// var_dump($postcat);
                                    if(isset($postcat[0])){
										$postcat_name = $postcat[0]->name;
										// var_dump(esc_html( $postcat[0]->name )); 
										//echo get_the_category_list(', '); ?>
										<?php //echo "বাংলাদেশ"; ?>


										<?php
										if ($postcat_name == "Customer Service") {
											echo "কাস্টমার সার্ভিস";
										} elseif ($postcat_name == "Sub Admin") {
											echo "সাব-এডমিন";
										} elseif ($postcat_name == "Admin") {
											echo "এডমিন";
										} elseif ($postcat_name == "Super Agent") {
											echo "সুপার এজেন্ট";
										} elseif ($postcat_name == "Master Agent") {
											echo "মাস্টার এজেন্ট";
										}else {
											echo "";
										}
									}
										?>


									</div>
								</div>

							</div>

							<div class="user-id">
								<p class="id-ti">এজেন্ট আইডি</p>
								<div class="id-value"><?php echo get_post_meta(get_the_ID(), 'user_id', true); ?></div>
							</div>


						</div>
						<div class="social-connection-group complain-ss">

						    <?php if(get_post_meta(get_the_ID(), 'whatsapp_primary', true) != ''){ ?>
								<div class="group-1">
									<span class="value-1">WhatsApp <span>(Primary)</span></span>
									<span class="value-2"><?php echo get_post_meta(get_the_ID(), 'whatsapp_primary', true); ?></span>
									<span class="copy-btn">Copy Number</span>
									<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'whatsapp_primary_link', true); ?> " target="_blank">Message</a></span>
								</div>
							<?php } ?>

							<?php if(get_post_meta(get_the_ID(), 'whatsapp_secondary', true) != ''){ ?>
								<div class="group-2">
									<span class="value-1">WhatsApp <span>(Secondary)</span></span>
									<span class="value-2"><?php echo get_post_meta(get_the_ID(), 'whatsapp_secondary', true); ?></span>
									<span class="copy-btn">Copy Number</span>
									<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'whatsapp_secondary_link', true); ?>" target="_blank">Message</a></span>
								</div>
							<?php } ?>

                            <?php if(get_post_meta(get_the_ID(), 'messenger', true) != ''){ ?>
								<div class="group-3">
									<span class="value-1">Messenger</span>
									<span class="value-2"><a href="<?php echo get_post_meta(get_the_ID(), 'messenger', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'messenger', true); ?></a></span>
									<span class="copy-btn">Copy</span>
									<span class="value-4"><a href="<?php echo get_post_meta(get_the_ID(), 'messenger', true); ?>" target="_blank">Message</a></span>
								</div>
							<?php } ?>

						</div>
					</div>
				<?php
			}
        }
        wp_reset_postdata();
    } else {
        // No posts found
    }

    $output = ob_get_clean(); // Get the output and clean the buffer
    return $output; // Return the generated HTML
}
add_shortcode('new_account_list', 'custom_user_list_posts_html_shortcode_new_account');