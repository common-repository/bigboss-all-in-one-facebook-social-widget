<?php 


class BigbossWeblinklikeShare extends WP_Widget{
	
	public function __construct(){
		
		parent::__construct('BigbossWeblinklikeShare','Bigboss Web Site Like Share',array(
		
		'description' => 'Bigboss Web Site Like Share'
		
		));
		
		}//end __construct
		
		
		public function widget($args, $instance){
			
			$title = $instance['title'];
			$bbweburl = $instance['bbweburl'];
			$bblikesharewidh = $instance['bblikesharewidh'];
			$bbweburltheme = $instance['bbweburltheme'];
			
			
			$bbthemefollow = $instance['bbthemefollow'];
			$bbdataaction = $instance['bbdataaction'];
			$bbweburlface = $instance['bbweburlface'];
			$bbbshareweb = $instance['bbbshareweb'];

			
			
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
        
        <div class="fb-like" 
        data-href="<?php echo $bbweburl ; ?>" 
        data-width="<?php echo $bblikesharewidh ; ?>" 
        data-layout="
        
        <?php if($bbweburltheme=='button'){
					echo 'button';
				}
				else if($bbweburltheme=='box_count'){
				 echo 'box_count' ;	
				}
				else if($bbweburltheme== 'button_count'){
					echo 'button_count' ;
				
				}
				else{
					echo 'standard';
					
					}
				
				 ?>
        
        
        " 
        data-action="<?php if ($bbdataaction== 'like'){ echo 'like';} else{echo 'recommend' ;} ?>" 
        data-show-faces="<?php echo $bbweburlface ; ?>" 
        data-share="<?php echo $bbbshareweb; ?>"></div>
			
		<?php echo $args['after_widget'];?>	
		<?php }//end function widget
		
		
		
		
		
		public function form($instance){		
			
			$title = $instance['title'];
			$bbweburl = $instance['bbweburl'];
			$bblikesharewidh = $instance['bblikesharewidh'];
			$bbfollowhight = $instance['bbfollowhight'];
			$bbweburltheme = $instance['bbweburltheme'];
			$bbdataaction = $instance['bbdataaction'];
			$bbweburlface = $instance['bbweburlface'];
			$bbbshareweb= $instance['bbbshareweb'];
			
			
			?>
        
        <p>
        	<label for="<?php echo $this->get_field_id('title');?>"> Title </label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" 
            id="<?php echo $this->get_field_id('title');?>" 
            value="<?php echo $title ;?>" />
        
        
        
        </p>
        
        
          <p>
        	<label for="<?php echo $this->get_field_id('bbweburl');?>">Website Url / Link </label>
            <input class="widefat" type="url" name="<?php echo $this->get_field_name('bbweburl');?>" 
            id="<?php echo $this->get_field_id('bbweburl');?>" 
            value="<?php echo $bbweburl ;?>" />
        
        
        
        </p>
        
        
           <p>
        <label for="<?php echo $this->get_field_id('bblikesharewidh');?>">Follow Button area Width </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bblikesharewidh');?>" 
        id="<?php echo $this->get_field_id('bblikesharewidh');?>" value="<?php echo $bblikesharewidh ; ?> "/>
        Example :  200
        
        	
       </p>
        
       
      <p>
       <label for="<?php echo $this->get_field_id('bbweburltheme');?>">Follow Button Theme </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bbweburltheme');?>" 
       name="<?php echo $this->get_field_name('bbweburltheme');?>">
       
       <option><?php echo $bbweburltheme ; ?> </option>
       <option value="standard">standard</option>
       <option value="box_count">box_count</option>
       <option value="button_count">button_count</option>
       <option value="button">button</option>
       
       
       
       
       </select>
       
       
       
       
       </p>
       
            <p>
       <label for="<?php echo $this->get_field_id('bbdataaction');?>">Select Data action  </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bbdataaction');?>" 
       name="<?php echo $this->get_field_name('bbdataaction');?>">
       
       <option><?php echo $bbdataaction ; ?> </option>
       <option value="like">like</option>
       <option value="recommend">recommend</option>
       
       
       </select>
       
       
       
       
       </p>
       
       
             <p>
       <label for="<?php echo $this->get_field_id('bbweburlface');?>">Show web url liker Face  </label><br/>
       
       <select class="widefat" id="<?php $this->get_field_id('bbweburlface');?>" 
       name="<?php echo $this->get_field_name('bbweburlface');?>">
       
       <option><?php echo $bbweburlface ; ?> </option>
       <option value="true">true</option>
       <option value="false">false</option>
       
       
       </select>
       
       
       
       
       </p>
       
       
              <p>
       <label for="<?php echo $this->get_field_id('bbbshareweb');?>">Share Button Show  </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bbbshareweb');?>" 
       name="<?php echo $this->get_field_name('bbbshareweb');?>">
       
       <option><?php echo $bbbshareweb ; ?> </option>
       <option value="true">true</option>
       <option value="false">false</option>
       
       
       </select>
       
       
       
       
       </p>
			
			
			
		<?php }//end function form here 
	
	
	
	
	}// end class here 

?>