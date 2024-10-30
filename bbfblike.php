<?php 




class BigbossFacebook extends WP_Widget{
	
	
	public function __construct(){
			parent::__construct('BigbossFacebook','bigboss facebook Like box', array(
			
					'description' => 'Bigboss Facebook like box in widget' 
			));
		
		}
		
		
		
public function widget($args, $instance){
		
		$title = $instance['title'];
		$bbfacebookurl = $instance['bbfacebookpageurl'];
		$smallheaderb = $instance['small-header'];
		$bbfacebookwidth = $instance['bbfacebookwidth'];
		$bbfacebookheight = $instance['bbfacebookheight'];
		$bbtimeline = $instance['bbtimeline'];
		$bbfbcover = $instance['bbfbcover'];
		$bblikerface  = $instance['bblikerface'];
		
		?>
        
        
        
        <?php echo $args['before_widget'];?>
        
        <?php echo $args['before_title'] . $title .$args['after_title'] ; ?>
        
       <div id="fb-root"></div>
			<script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=173355519848976";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            
            
            
         
           <div class="fb-page" data-href="<?php echo $bbfacebookurl ; ?>" 
                data-tabs="<?php if ($bbtimeline== 'Yes'){ echo 'timeline';} else{echo '' ;} ?>" data-width="<?php echo $$bbfacebookwidth ;?>"
                data-height="<?php echo $bbfacebookheight ;?>" 
                data-small-header="<?php echo $smallheaderb ;?>" 
                data-adapt-container-width="true" 
                data-hide-cover="<?php if ($bbfbcover== 'Yes'){ echo 'true';} else{echo 'false' ;} ?>" 
                data-show-facepile="<?php if ($bblikerface== 'Yes'){ echo 'true';} else{echo 'false' ;} ?>">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="<?php echo $bbfacebookurl ; ?>">
                        <a href="<?php echo $bbfacebookurl ; ?>"><?php echo $title ; ?></a>
                        </blockquote>
                    </div>
            </div>
            
            <?php echo $args['after_widget']; ?>
        
       
		
		
		<?php  }
		
		
	
	
/*form function from here 

Form Function Start from here 

*/		
public function form($instance){
		$title = $instance['title'];
		$bbfacebookurl = $instance['bbfacebookpageurl'];
		$smallheaderb = $instance['small-header'];
		$bbfacebookwidth = $instance['bbfacebookwidth'];
		$bbfacebookheight = $instance['bbfacebookheight'];
		$bbtimeline = $instance['bbtimeline'];
		$bbfbcover = $instance['bbfbcover'];
	    $bblikerface  = $instance['bblikerface'];
		?>
    
    <p>
    	<label for="<?php echo $this->get_field_id('title');?>">Title</label>
        <input type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id('title');?>" 
        class="widefat" value="<?php echo $title ; ?>" />
        
        </p>
        
        
        
        
        
        
         <p>
        <label for="<?php echo $this->get_field_id('bbfacebookpageurl');?>">Facebook Page Link/url </label>
        
        <input type="url" class="widefat" name="<?php echo $this->get_field_name('bbfacebookpageurl');?>" 
        id="<?php echo $this->get_field_id('bbfacebookpageurl');?>" value="<?php echo $bbfacebookurl ; ?> "/>
        
        	
       </p>
        
        
        <p>
        	<label for="<?php echo $this->get_field_id('small-header');?>">Show Small Header</label>
        	<select class="widefat" name="<?php echo $this->get_field_name('small-header'); ?>" id="<?php echo $this->get_field_id('small-header');?>">
            
            				<option><?php echo $smallheaderb ; ?></option>
                            <option value="true">true</option>
                            <option value="false">false</option>
            
            
            
            </select>
        
        
        </p>
        
        
          <p>
        <label for="<?php echo $this->get_field_id('bbfacebookwidth');?>">Like Box Width </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bbfacebookwidth');?>" 
        id="<?php echo $this->get_field_id('bbfacebookwidth');?>" value="<?php echo $bbfacebookwidth ; ?> "/>
        Example :  200
        
        	
       </p>
        
       
         <p>
        <label for="<?php echo $this->get_field_id('bbfacebookheight');?>">Like Box Height </label>
        
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('bbfacebookheight');?>" 
        id="<?php echo $this->get_field_id('bbfacebookheight');?>" value="<?php echo $bbfacebookheight ; ?> "/>
        Example :  400
       
        	
       </p>
       
       <p>
       <label for="<?php echo $this->get_field_id('bbtimeline');?>">Show Timeline Post </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bbtimeline');?>" 
       name="<?php echo $this->get_field_name('bbtimeline');?>">
       
       <option><?php echo $bbtimeline ; ?> </option>
       <option value="Yes">Yes</option>
       <option value="No">No</option>
       
       
       </select>
       
       
       
       
       </p>
       
       
       <p>
       <label for="<?php echo $this->get_field_id('bbfbcover');?>">Hide Cover Photo </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bbfbcover');?>" 
       name="<?php echo $this->get_field_name('bbfbcover');?>">
       
       <option><?php echo $bbfbcover ; ?> </option>
       <option value="Yes">Yes</option>
       <option value="No">No</option>
       
       
       </select>
       
       
       
       
       </p>
       
       
          <p>
       <label for="<?php echo $this->get_field_id('bblikerface');?>">Show Liker Face  </label><br/>
       
       <select class="widefat" id="<?php echo $this->get_field_id('bblikerface');?>" 
       name="<?php echo $this->get_field_name('bblikerface');?>">
       
       <option><?php echo $bblikerface ; ?> </option>
       <option value="Yes">Yes</option>
       <option value="No">No</option>
       
       
       </select>
       
       
       
       
       </p>
        
        
        
		
		
		<?php }
		
	
	
	
	}//end class BbWidgetArea here


	
	
	
	
	
	