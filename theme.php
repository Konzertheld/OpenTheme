<?php

define( 'THEME_CLASS', 'opentheme' );

class opentheme extends Theme
{	
	
	var $defaults = array(
		'show_title_image' => false,
		'title_image_url' => '/user/files/images/header.png'
		);
	
	/**
	 * On theme activation, set the default options and activate a default menu*/
	 
	public function action_theme_activated()
	{
		$opts = Options::get_group( __CLASS__ );
		if ( empty( $opts ) ) {
			Options::set_group( __CLASS__, $this->defaults );
		}

	}
	
	/**
	 * Configuration form for the Charcoal theme
	 **/
	public function action_theme_ui( $theme )
	{
		$ui = new FormUI( __CLASS__ );
		// This is a fudge as I only need to add a little bit of styling to make things look nice.
		$ui->append( 'checkbox', 'show_title_image', __CLASS__.'__show_title_image', _t( 'Show Title Image:'), 'optionscontrol_checkbox' );
			$ui->show_title_image->helptext = _t( 'Check to show the title image, uncheck to display the title text.' );
		$ui->append( 'text', 'title_image_url', __CLASS__.'__title_image_url', _t( 'Title Image URL:' ), 'optionscontrol_text' );
			$ui->title_image_url->helptext = _t( 'Set URL for title image.' );
		// Save
		$ui->append( 'submit', 'save', _t( 'Save' ) );
		$ui->set_option( 'success_message', _t( 'Options saved' ) );
		$ui->out();
	}
	
		public function action_init_theme()
	{
		Format::apply( 'autop', 'post_content_excerpt' );
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
		// Truncate content excerpt at "more" …
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', '','', 1 );
	}
	
	/**
	 * Add some variables to the template output
	 */
	public function action_add_template_vars( $theme, $handler_vars )
	{
		// Use theme options to set values that can be used directly in the templates
		$opts = Options::get_group( __CLASS__ );
				
		$this->assign( 'show_title_image', $opts['show_title_image'] );
		$this->assign( 'title_image_url', $opts['title_image_url'] );
		
		$locale =Options::get( 'locale' );
		if ( file_exists( Site::get_dir( 'theme', true ). $locale . '.css' ) ){
			$this->assign( 'localized_css',  $locale . '.css' );
		}
		else {
			$this->assign( 'localized_css', false );
		}
		
		if( !$this->template_engine->assigned( 'pages' ) ) {
			$this->assign('pages', Posts::get( array( 'content_type' => 'page', 'status' => Post::status('published'), 'nolimit' => 1 ) ) );
		}
		$this->assign( 'post_id', ( isset($this->post) && $this->post->content_type == Post::type('page') ) ? $this->post->id : 0 );
	}
		
	/**
	 * Convert a post's tags array into a usable list of links
	 *
	 * @param array $array The tags array from a Post object
	 * @return string The HTML of the linked tags
	 */
	public function filter_post_tags_out($array)
	{
		if ( ! is_array( $array ) ) {
			$array = array ( $array );
		}
		$fn = create_function('$a,$b', 'return "<a href=\\"" . URL::get("display_entries_by_tag", array( "tag" => $b) ) . "\\" rel=\\"tag\\">" . $a . "</a>";');
		$array = array_map($fn, $array, array_keys($array));
		$out = implode(' ', $array);
		return $out;
	}

	public function theme_post_comments_link($theme, $post, $zero, $one, $more)
	{
		$c = $post->comments->approved->count;
		switch ($c) {
			case '0':
				return $zero;
				break;
			case '1':
				return str_replace( '%s', '1', $one );
				break;
			default :
				return str_replace( '%s', $c, $more);
		}
	}

/*	public function filter_post_content_excerpt($return)
	{
		return strip_tags($return);
	}*/

	public function theme_search_prompt( $theme, $criteria, $has_results )
	{
		$out =array();
		$keywords =explode(' ',trim($criteria));
		foreach ($keywords as $keyword) {
			$out[]= '<a href="' . Site::get_url( 'habari', true ) .'search?criteria=' . $keyword . '" title="' . _t( 'Search for ' ) . $keyword . '">' . $keyword . '</a>';
		}
		
		if ( sizeof( $keywords ) > 1 ) {
			if ( $has_results ) {
				return sprintf( _t( 'Search results for \'%s\'' ), implode(' ',$out) );
				exit;
			}
			return sprintf( _t('No results found for your search \'%1$s\'') . '<br>'. _t('You can try searching for \'%2$s\''), $criteria, implode('\' or \'',$out) );
		}
		else {
			return sprintf( _t( 'Search results for \'%s\'' ), $criteria );
			exit;
		}
		return sprintf( _t( 'No results found for your search \'%s\'' ), $criteria );

	}
	
}
?>
