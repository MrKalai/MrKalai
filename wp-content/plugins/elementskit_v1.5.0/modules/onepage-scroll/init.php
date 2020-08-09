<?php
namespace ElementsKit\Modules\Onepage_Scroll;

defined( 'ABSPATH' ) || exit;

class Init{
    private $dir;
    private $url;

    public function __construct(){

        // get current directory path
        $this->dir = dirname(__FILE__) . '/';

        // get current module's url
		$this->url = \ElementsKit::plugin_url() . 'modules/onepage-scroll/';
		
		// enqueue styles and scripts
		add_action('elementor/frontend/after_enqueue_styles', [$this, 'load_styles']);
		add_action('elementor/frontend/before_enqueue_scripts', [$this, 'load_scripts']);
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'editor_scripts']);

		// include all necessary files
		$this->include_files();

		// calling the sticky controls
		new \Elementor\ElementsKit_Extend_Onepage_Scroll();
		new \Elementor\ElementsKit_Pro_Extend_Onepage_Scroll();
	}
	
	public function include_files(){
		include $this->dir . 'extend-controls.php';
		include $this->dir . 'extend-controls-pro.php';
	}

	public function load_styles(){
		if ( $this->get_page_setting('ekit_onepagescroll') ):
			wp_enqueue_style( 'one-page-scroll', $this->url . 'assets/css/one-page-scroll.min.css', [], \ElementsKit::VERSION );
		endif;
	}

	public function load_scripts(){
		if ( $this->get_page_setting('ekit_onepagescroll') ):
			wp_enqueue_script( 'one-page-scroll', $this->url . 'assets/js/one-page-scroll.js', ['jquery', 'elementor-frontend'], \ElementsKit::VERSION, true );
		endif;
	}

	public function editor_scripts(){
		wp_enqueue_script( 'ekit-onepage-scroll-editor', $this->url . 'assets/js/editor.js', ['jquery', 'editor'], \ElementsKit::VERSION, true );
	}

	public static function get_page_setting($id) {
		$post_id = get_the_ID();

		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $post_id );

		return $page_settings_model->get_settings( $id );
	}
}
