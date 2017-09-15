<?php
/**
 * Address Widget
 *
 * The Address Widget is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Evr_Address
 * @author    Jefe <jefftemes@gmail.com>
 * @license   GPL-2.0+
 * @link      http://github.com/temefleet
 * @copyright 2017 eljefe
 *
 * @wordpress-plugin
 * Plugin Name:       Address Widget
 * Plugin URI:        http://github.com/temefleet
 * Description:       Easily update address in WordPress
 * Version:           1.0.0
 * Author:            Jefe
 * Author URI:        github.com/temefleet
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class EVR_Address extends WP_Widget {

    /**
     *
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'evr-address';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Address Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => "Add the store's Address."
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$address = empty( $instance['address'] ) ? '' : apply_filters( 'widget_title', $instance['address'] );
		$city = empty( $instance['city'] ) ? '' : apply_filters( 'widget_title', $instance['city'] );
		$region = empty( $instance['region'] ) ? '' : apply_filters( 'widget_title', $instance['region'] );
		$phone = empty( $instance['phone'] ) ? '' : apply_filters( 'widget_title', $instance['phone'] );


		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['address'] = strip_tags( $new_instance['address'] );
		$instance['city'] = strip_tags( $new_instance['city'] );
		$instance['region'] = strip_tags( $new_instance['region'] );
		$instance['phone'] = strip_tags( $new_instance['phone'] );

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'         => 'Address',
				'address'       => '', 
				'city' 					=> '',
				'region'      	=> '',
				'phone' 				=> '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$address = strip_tags( $instance['address'] );
		$city = strip_tags( $instance['city'] );
		$region = strip_tags( $instance['region'] );
		$phone = strip_tags( $instance['phone'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'EVR_Address' );
});
