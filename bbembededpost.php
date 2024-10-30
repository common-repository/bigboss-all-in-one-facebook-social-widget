<?php 


class BigbossembededPost extends WP_Widget{
	
	public function __construct(){
		
		parent::__construct('BigbossembededPost','Bigboss facebook Embedded Posts',array(
		
		'description' => 'Bigboss Facebook Embedded Allow you to show facebook Posts or Video  in your site'
		
		));
		
		}//end __construct
		
		
		public function widget($args, $instance){
			
			$title = $instance['title'];
			$bbembededcode = $instance['bbembededcode'];

			
			
			?>

			<div id="fb-root"></div>
			<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=173355519848976";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
        
        
        
          <?php echo $args['before_widget'];?>
            <?php echo $args['before_title']; ?>
            
            	<?php echo $title ; ?>
            <?php echo $args['after_title'];?>
        
      			
                
                <?php echo $bbembededcode ;?>
                
               
			
		<?php echo $args['after_widget'];?>	
		<?php }//end function widget
		
		
		
		
		
		public function form($instance){		
			
			$title = $instance['title'];
			$bbembededcode = $instance['bbembededcode'];
			
			
			
			?>
        
        <p>
        	<label for="<?php echo $this->get_field_id('title');?>"> Title </label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" 
            id="<?php echo $this->get_field_id('title');?>" 
            value="<?php echo $title ;?>" />
        
        
        
        </p>
        
        
          <p>
        	<label for="<?php echo $this->get_field_id('bbembededcode');?>">Facebook Post Embeded Code </label>
           
            
            <textarea style="height:auto; min-height:300px;" class="widefat" 
                name="<?php echo $this->get_field_name('bbembededcode');?>" 
                id="<?php  echo $this->get_field_id('bbembededcode');?>" 
                placeholder="Put your Facebook post or any embeded code here">
                <?php echo $bbembededcode ;?>
            
            </textarea>
        
        
        
        </p>
        
        
          
      
			
			
			
		<?php }//end function form here 
	
	
	
	
	}// end class here 

?>