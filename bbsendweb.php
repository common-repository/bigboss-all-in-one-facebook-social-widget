<?php 


class BigbosssendWeblink extends WP_Widget{
	
	public function __construct(){
		
		parent::__construct('BigbosssendWeblink','Bigboss facebook Send web Link ',array(
		
		'description' => 'any facebook user Send your weblink to his/her facebook friend'
		
		));
		
		}//end __construct
		
		
		public function widget($args, $instance){
			
			$title = $instance['title'];
			$bbsendweblink = $instance['bbsendweblink'];

			
			
			?>
            
          <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=173355519848976&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        
        
          <?php echo $args['before_widget'];?>
            <?php echo $args['before_title']; ?>
            
            	<?php echo $title ; ?>
            <?php echo $args['after_title'];?>
        
        <div class="fb-send" data-href="<?php echo $bbsendweblink ; ?>"></div>
			
		<?php echo $args['after_widget'];?>	
		<?php }//end function widget
		
		
		
		
		
		public function form($instance){		
			
			$title = $instance['title'];
			$bbsendweblink = $instance['bbsendweblink'];
			
			
			
			?>
        
        <p>
        	<label for="<?php $this->get_field_id('title');?>"> Title </label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" 
            id="<?php echo $this->get_field_id('title');?>" 
            value="<?php echo $title ;?>" />
        
        
        
        </p>
        
        
          <p>
        	<label for="<?php $this->get_field_id('bbsendweblink');?>"> Website Url / Link </label>
            <input class="widefat" type="url" name="<?php echo $this->get_field_name('bbsendweblink');?>" 
            id="<?php echo $this->get_field_id('bbsendweblink');?>" 
            value="<?php echo $bbsendweblink ;?>" />
        
        
        
        </p>
        
        
          
      
			
			
			
		<?php }//end function form here 
	
	
	
	
	}// end class here 

?>