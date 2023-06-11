<?php

/**
 * About setup
 *
 * @package CarExpert
 */

if (!function_exists('car_expert_about_setup')) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function car_expert_about_setup()
	{
		$theme = wp_get_theme();
		$xtheme_name = $theme->get('Name');
		$theme_slug = 'car-expert';



		$config = array(
			// Menu name under Appearance.
			'menu_name'               => sprintf(esc_html__('%s Info', 'car-expert'), $xtheme_name),
			// Page title.
			'page_name'               => sprintf(esc_html__('%s Info', 'car-expert'), $xtheme_name),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'car-expert'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('You are now using the %1$s free version on your website. Transform your website and take it to the next level with Car Expert Pro! ', 'car-expert'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'car-expert'),
				'recommended_actions' => esc_html__('Recommended Actions', 'car-expert'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'car-expert'),
				'free_pro'  => esc_html__('Free Vs Pro', 'car-expert'),
			),

			// Quick links.
			'quick_links' => array(
				'update_url' => array(
					'text'   => esc_html__('UPGRADE CAR EXPERT PRO', 'car-expert'),
					'url'    => 'https://wpthemespace.com/product/car-expert-pro/?add-to-cart=8966',
					'button' => 'danger',
				),
				'xmagazine_url' => array(
					'text'   => esc_html__('VIEW DEMO', 'car-expert'),
					'url'    => 'https://akit.fullsitediting.com/carfix/demos/',
					'button' => 'danger',
				),


			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Demo Content', 'car-expert'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'car-expert'), esc_html__('One Click Demo Import', 'car-expert')),
					'button_text' => esc_html__('UPGRADE For  Demo Content', 'car-expert'),
					'button_url'  => 'https://wpthemespace.com/product/car-expert-pro/?add-to-cart=8966',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),

				'two' => array(
					'title'       => esc_html__('Theme Options', 'car-expert'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'car-expert'),
					'button_text' => esc_html__('Customize', 'car-expert'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'car-expert'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show Xblog short video for better understanding', 'car-expert'), esc_html__('One Click Demo Import', 'car-expert')),
					'button_text' => esc_html__('Show video', 'car-expert'),
					'button_url'  => 'https://www.youtube.com/watch?v=Cu3eFFQskCs',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'four' => array(
					'title'       => esc_html__('Theme Documentation', 'car-expert'),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__('Please check our full documentation for detailed information on how to setup and customize the theme.', 'car-expert'),
					'button_text' => esc_html__('View Documentation', 'car-expert'),
					'button_url'  => 'http://wpthemespace.com/CarExpert/doc/',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'car-expert'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'car-expert'),
					'button_text' => esc_html__('Add Widgets', 'car-expert'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'car-expert'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'car-expert'),
					'button_text' => esc_html__('View Demo', 'car-expert'),
					'button_url'  => 'https://wpthemespace.com/product/colorful-blog',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'car-expert'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'car-expert'),
					'button_text' => esc_html__('Contact Support', 'car-expert'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'car-expert'),
				'already_activated_message' => esc_html__('Already activated', 'car-expert'),
				'version_label' => esc_html__('Version: ', 'car-expert'),
				'install_label' => esc_html__('Install and Activate', 'car-expert'),
				'activate_label' => esc_html__('Activate', 'car-expert'),
				'deactivate_label' => esc_html__('Deactivate', 'car-expert'),
				'content'                   => array(
					array(
						'slug' => 'magical-addons-for-elementor',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-products-display',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-blocks'
					),
					array(
						'slug' => 'magical-posts-display'
					),
					array(
						'slug' => 'click-to-top'
					),
					array(
						'slug' => 'gallery-box',
						'icon' => 'svg',
					),
					array(
						'slug' => 'easy-share-solution',
						'icon' => 'svg',
					),
					array(
						'slug' => 'wp-edit-password-protected',
						'icon' => 'svg',
					),
				),
			),
			// Required actions array.
			'recommended_actions'        => array(
				'install_label' => esc_html__('Install and Activate', 'car-expert'),
				'activate_label' => esc_html__('Activate', 'car-expert'),
				'deactivate_label' => esc_html__('Deactivate', 'car-expert'),
				'content'            => array(
					'magical-blocks' => array(
						'title'       => __('Magical Posts Display', 'car-expert'),
						'description' => __('The best part of Magical Addons is that you can design anything without having to touch a single line of code. Magical Addons has a huge collection of premium and highly functional extensions that can be used in an Elementor page builder. This is really a premium plugin that you can get for free.', 'car-expert'),
						'plugin_slug' => 'magical-addons-for-elementor',
						'id' => 'magical-addons-for-elementor'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/car-expert-pro/?add-to-cart=8966">' . __('UPGRADE CAR EXPERT PRO', 'car-expert') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'car-expert'),
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $xtheme_name,
				'pro_theme_name'      => $xtheme_name . __(' Pro', 'car-expert'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/car-expert-pro/?add-to-cart=8966',
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'car-expert'), 'car-expert'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'car-expert'),
						'description' => esc_html__('Car Expert\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'car-expert'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'car-expert'),
						'description' => esc_html__('Car Expert makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'car-expert'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'car-expert'),
						'description' => esc_html__('Car Expert gives you extra slider feature. You can create awesome home slider in this theme.', 'car-expert'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'car-expert'),
						'description' => esc_html__('Car Expert comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'car-expert'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'car-expert'),
						'description' => esc_html__('Car Expert gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'car-expert'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Banner Slider Options', 'car-expert'),
						'description' => esc_html__('Car Expert\'s PRO version comes with more Slider options to display and filter posts. For instance, you can have far more control on setting the source of the posts or how they are displayed, everything to push the content to the right people and promote it by the blink of an eye.', 'car-expert'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'car-expert'),
						'description' => esc_html__('Car Expert\'s PRO version has more controll available to enable you to place widgets on Footer or Below the Post at the end of your articles.', 'car-expert'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Read Time Calculator and total words counter', 'car-expert'),
						'description' => esc_html__('Minimal Lit\'s PRO verison has a feature to let your viewer know the read time of the standared article you have posted on the basis of words per minute which you can control on your customizer .', 'car-expert'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'car-expert'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'car-expert'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'car-expert'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'car-expert'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'car-expert'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'car-expert'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Premium Support and Assistance', 'car-expert'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'car-expert'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'car-expert'),
						'description' => esc_html__('You can easily remove the Theme: Car Expert by CarExpert copyright from the footer area and make the theme yours from start to finish.', 'car-expert'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

		);

		car_expert_About::init($config);
	}

endif;

add_action('after_setup_theme', 'car_expert_about_setup');


/**
 * Pro notice text
 *
 */
function car_expert_pnotice_output()
{

?>
	<div class="mgadin-hero">
		<div class="mge-info-content">
			<div class="mge-info-hello">
				<?php
				$current_theme = wp_get_theme();
				$current_theme_name = $current_theme->get('Name');
				$current_user = wp_get_current_user();
				$pro_link = 'https://wpthemespace.com/product/car-expert-pro/?add-to-cart=8966';
				$demo_link = 'https://wpthemespace.com/product/car-expert-pro/';

				esc_html_e('Hello, ', 'car-expert');
				echo esc_html($current_user->display_name);
				?>

				<?php esc_html_e('👋🏻', 'car-expert'); ?>
			</div>
			<div class="mge-info-desc">
				<div><?php printf(esc_html__('Attention all Car Expert users! 🚨 Upgrade to Car Expert Pro today and enjoy premade demos, one-click demo import, custom Elementor premium widgets, and so much more. With the pro version, you can take your website to the next level and truly stand out from the competition.', 'car-expert'), $current_theme_name); ?></div>
				<div class="mge-offer"><?php printf(esc_html__('Don\'t miss out on these incredible features - upgrade to Car Expert Pro now! ', 'car-expert'), $current_theme_name); ?></div>
			</div>
			<div class="mge-info-actions">
				<a href="<?php echo esc_url($pro_link); ?>" target="_blank" class="button button-primary upgrade-btn">
					<?php esc_html_e('Upgrade Pro', 'car-expert'); ?>
				</a>
				<a href="<?php echo esc_url($demo_link); ?>" target="_blank" class="button button-primary demo-btn">
					<?php esc_html_e('View Details', 'car-expert'); ?>
				</a>
				<button class="button button-info btnend"><?php esc_html_e('Dismiss this notice', 'car-expert') ?></button>
			</div>

		</div>

	</div>
<?php
}


//Admin notice 
function car_expert_new_optins_texts()
{
	$hide_date = get_option('car_expert_proinfo_hidedate');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 25) {
			return;
		}
	}


?>
	<div class="mgadin-notice notice notice-success mgadin-theme-dashboard mgadin-theme-dashboard-notice mge is-dismissible meis-dismissible">
		<?php car_expert_pnotice_output(); ?>
	</div>
<?php

}
add_action('admin_notices', 'car_expert_new_optins_texts');

function car_expert_new_optins_texts_init()
{
	$install_date = get_option('car_expert_theme_install_date');
	if (empty($install_date)) {
		update_option('car_expert_theme_install_date', current_time('mysql'));
	}

	if (isset($_GET['xbnotice']) && $_GET['xbnotice'] == 1) {
		update_option('car_expert_proinfo_hidedate', current_time('mysql'));
	}
}
add_action('init', 'car_expert_new_optins_texts_init');
