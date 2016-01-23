<?php
/*

	Plugin Name: 	PageLines Section Expand Shortcode
	Description: 	Extends Expand Section To Be Used As A Shortcode. Note: Please Do Not Use The Builder Button Displayed For This Section. Use In Your Shortcodes Only.

	Author: 	    World Webscapes
	Author URI: 	http://www.worldwebscapes.com
	Demo:  			http://www.worldwebscapes.com

	Version: 			5.0.2
	
	PageLines: 		PL_expandshortcode
	Filter: 			component

	Category:     framework, sections, featured, third party

	Tags:       	expandshortcodes, items
	

*/

if( ! class_exists( 'PL_Section' ) )
	return;

class PL_expandshortcode extends PL_Section {
	 /** 
 * Include extra scripts and styles here
 * Use the pl_script and pl_style functions (which enqueues the files)
 
 */
function section_styles(){

  /** Include the sample script */
  pl_script( $this->id, $this->base_url . '/scripts.js' );
  pl_script( $this->id, $this->base_url . '<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>' );
  pl_style( 'style-css', 	$this->base_url.'/style.css');
 
  
}
	


	function section_opts(){

		$options = array();


		$options[] = array(
			'key'				=> 'item_array',
	        'type'			=> 'multi', 
			'title'			=> __('expandshortcode Items Setup', 'pl-section-expandshortcode'), 
			'post_type'	=> __('Box', 'pl-section-expandshortcode'), 
			
			'opts'			=> array(
			    pl_std_opt('title'),
				pl_std_opt('text'),
				pl_std_opt('text_alignment'),
			
				pl_std_opt('section_alignment'),
				
				
				pl_std_opt('button'),
				array(
					'type' 		=> 'multi',
					'toggle'	=> 'open', 
					'title'		=> 'Header Background Options',
					'opts'	=> array(
							pl_std_opt('scheme'),
							pl_std_opt('background_color'),
							pl_std_opt('background_image'),
						)
				)
				
				
				
			)
	    );

		return $options;
	}


	function section_template(){ ?>

		<div class="pl-expandshortcode-container" data-bind="multi: item_array">	
			
				<div class="pl-content-area">
					<div  data-bind="plclassname: section_alignment">
						
						<div  data-bind="plclassname: [text_alignment(), scheme()]">
 
  
   <div class="pl-expandshortcode-container">
	<a href="#" class="pl-expandshortcode-toggle pl-bg-cover" data-bind="plbg: background_image, style: {'background-color': background_color}"><h2 data-bind="pltext: title"></h2></a>
	<div class="pl-expandshortcode-content">
		<p data-bind="pltext: text"></p>
          <div><p><a class="pl-btn" href="#" data-bind="plbtn: 'button'" ></a></p></div>
	</div>
  
					</div>
				</div>
			</div>
            </div>
	
   
</div>



    
<?php 
	}



	



}
