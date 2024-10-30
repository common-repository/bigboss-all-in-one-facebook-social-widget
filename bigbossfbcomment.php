<?php 


class BigbossFbcomment extends WP_Widget{
	
	public function __construct(){
		
		parent::__construct('BigbossFbcomment','Bigboss facebook Comment Plugin',array(
		
		'description' => 'Bigboss Facebook comments Allow you to show facebook comment in widget , Posts or page of your site'
		
		));
		
		}//end __construct
		
		
		public function widget($args, $instance){
			
			$title = $instance['title'];
			$bbfbcommneturl = $instance['bbfbcommneturl'];
			$bbfbcomwidth = $instance['bbfbcomwidth'];
			$bbcomcount = $instance['bbcomcount'];

			
			
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
        
      			
                
               <div class="fb-comments" 
                   data-href="<?php echo $bbfbcommneturl ;?>" 
                   data-width="<?php echo $bbfbcomwidth ;?>" 
                   data-numposts="<?php echo $bbcomcount ;?>">
               </div>
                
               
			
		<?php echo $args['after_widget'];?>	
		<?php }//end function widget
		
		
		
		
		
		public function form($instance){		
			
			$title = $instance['title'];
			$bbfbcommneturl = $instance['bbfbcommneturl'];
			$bbfbcomwidth = $instance['bbfbcomwidth'];
			$bbcomcount = $instance['bbcomcount'];
			
			
			
			?>
        
        <p>
        	<label for="<?php echo $this->get_field_id('title');?>"> Title </label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" 
            id="<?php echo $this->get_field_id('title');?>" 
            value="<?php echo $title ;?>" />
        
        
        
        </p>
        
            <p>
        	<label for="<?php echo $this->get_field_id('bbfbcommneturl');?>">Link of Post or web url </label>
            <input class="widefat" type="url" name="<?php echo $this->get_field_name('bbfbcommneturl');?>" 
            id="<?php echo $this->get_field_id('bbfbcommneturl');?>" 
            value="<?php echo $bbfbcommneturl ;?>" />
        
        
        
        </p>
        
        
           <p>
        <label for="<?php echo $this->get_field_id('bbfbcomwidth');?>">Comments Area Width </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bbfbcomwidth');?>" 
        id="<?php echo $this->get_field_id('bbfbcomwidth');?>" value="<?php echo $bbfbcomwidth ; ?> "/>
        Example :  200
        
        	
       </p>
       
         <p>
        <label for="<?php echo $this->get_field_id('bbcomcount');?>">Number of Comments want to show </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bbcomcount');?>" 
        id="<?php echo $this->get_field_id('bbcomcount');?>" value="<?php echo $bbcomcount ; ?> "/>
        Example :  20
        
        	
       </p>
        
          
      
			
			
			
		<?php }//end function form here 
	
	
	
	
	}// end class here 

?>