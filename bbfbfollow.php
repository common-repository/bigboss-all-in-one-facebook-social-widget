<?php 
// Facebook Follow Button 

	class BigbossFbfollow extends WP_Widget{
		
		public function __construct(){
			parent::__construct('BigbossFbfollow','Bigboss Facebook Follow Me Button',array(
			
			'description' => 'Bigboss Facebook Follow me Button Widget , Just drop And drop' 
			
			
			));
			
			
			} //__construct 
			
			
		public function widget($args, $instance){
			$title = $instance['title'];
			$bbfbprourl = $instance['bbfbprourl'];
			$bbfollowwidth = $instance['bbfollowwidth'];
			$bbfollowhight = $instance['bbfollowhight'];
			$bbthemefollow = $instance['bbthemefollow'];
			
			
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
            
			<div class="fb-follow" data-href="<?php echo $bbfbprourl ; ?>" 
            data-width="<?php echo $bbfollowwidth ;  ?>" 
            data-height="<?php echo $bbfollowhight;  ?>" 
            data-layout="
            <?php if($bbthemefollow=='button'){
					echo 'button';
				}
				else if($bbthemefollow=='box_count'){
				 echo 'box_count' ;	
				}
				else if($bbthemefollow== 'button_count'){
					echo 'button_count' ;
				
				}
				else{
					echo 'standard';
					
					}
				
				 ?>
            
            " 
            data-show-faces="true">
            </div>
			 <?php echo $args['after_widget'];?>
			<?php }
			//end widget function here
			
		public function form($instance){
			
			$title = $instance['title'];
			$bbfbprourl = $instance['bbfbprourl'];
			$bbfollowwidth = $instance['bbfollowwidth'];
			$bbfollowhight = $instance['bbfollowhight'];
			$bbthemefollow = $instance['bbthemefollow'];
			
			
			?>
        
        <p>
        	<label for="<?php echo $this->get_field_id('title');?>"> 
            N.B Facebook removed this feature on February 5, 2018. 
                So This Feature will not work anymore 
                </label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" 
            id="<?php echo $this->get_field_id('title');?>" 
            value="<?php echo $title ;?>" />
        
        
        
        </p>
        
        
          <p>
        	<label for="<?php echo $this->get_field_id('bbfbprourl');?>">Facebook Profile Link</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('bbfbprourl');?>" 
            id="<?php echo $this->get_field_id('bbfbprourl');?>" 
            value="<?php echo $bbfbprourl ;?>" />
        
        
        
        </p>
        
        
           <p>
        <label for="<?php echo $this->get_field_id('bbfollowwidth');?>">Follow Button area Width </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bbfollowwidth');?>" 
        id="<?php echo $this->get_field_id('bbfacebookwidth');?>" value="<?php echo $bbfollowwidth ; ?> "/>
        Example :  200
        
        	
       </p>
        
       
         <p>
        <label for="<?php echo $this->get_field_id('bbfollowhight');?>">Follow button area Height </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bbfollowhight');?>" 
        id="<?php echo $this->get_field_id('bbfollowhight');?>" value="<?php echo $bbfollowhight ; ?> "/>
        Example :  400
       
        	
       </p>
       
       
       
         <p>
       <label for="<?php echo $this->get_field_id('bbthemefollow');?>">Follow Button Theme </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bbthemefollow');?>" 
       name="<?php echo $this->get_field_name('bbthemefollow');?>">
       
       <option><?php echo $bbthemefollow ; ?> </option>
       <option value="standard">standard</option>
       <option value="box_count">box_count</option>
       <option value="button_count">button_count</option>
       <option value="button">button</option>
       
       
       
       
       </select>
       
       
       
       
       </p>
       
			
			
			
			<?php }//end form function here
		
				
		
		
		
		
		}//end class here 

?>