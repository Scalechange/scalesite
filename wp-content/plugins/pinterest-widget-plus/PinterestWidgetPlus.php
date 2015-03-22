<?php
/**
 * @package pinterest-widget-plus
*/
/*
Plugin Name: Pinterest Widget Plus
Plugin URI: http://www.socialwidgets.net
Description: Thanks for installing Pinterest Widget Plus.
Version: 1.1
Author: Muhammad Riduan
Author URI: http://www.socialwidgets.net
*/

class PinterestWidgetPlus extends WP_Widget{
    
    public function __construct() {
        $params = array(
            'description' => 'Thanks for installing Pinterest Widget',
            'name' => ' Pinterest Widget Plus'
        );
        parent::__construct('PinterestWidgetPlus','',$params);
    }
    
    public function form($instance) {
        extract($instance);
        
        ?>
<!-- here will put all widget configuration -->
<p style="background: #000000; color: #ffffff; font-weight: bold; padding: 2px 5px;">Pinterest Settings</p>
			<p>
				<label for="<?php echo $this->get_field_id('title');?>">Title : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('title');?>"
				name="<?php echo $this->get_field_name('title');?>"
					value="<?php echo !empty($title) ? $title : "Pinterest Widget Plus"; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('pinterest');?>">Pinterest Username(profile name) : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('pinterest');?>"
				name="<?php echo $this->get_field_name('pinterest');?>"
					value="<?php echo !empty($pinterest) ? $pinterest : "pinterest"; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('image_width');?>">Image Width : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('image_width');?>"
				name="<?php echo $this->get_field_name('image_width');?>"
					value="<?php echo !empty($image_width) ? $image_width : "50"; ?>" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('board_height');?>">Board Height : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('board_height');?>"
				name="<?php echo $this->get_field_name('board_height');?>"
					value="<?php echo !empty($board_height) ? $board_height : "300"; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('board_width');?>">Board Width : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('board_width');?>"
				name="<?php echo $this->get_field_name('board_width');?>"
					value="<?php echo !empty($board_width) ? $board_width : "300"; ?>" />
			</p>
                        <p style="background: #000000; color: #ffffff; font-weight: bold; padding: 2px 5px;">Display Single Pin</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'pinwidget' ); ?>">Show Pin widget:</label> 
				<select id="<?php echo $this->get_field_id( 'pinwidget' ); ?>"
					name="<?php echo $this->get_field_name( 'pinwidget' ); ?>"
					class="widefat" style="width:100%;">
						<option value="true" <?php if ($pinwidget == 'true') echo 'selected="true"'; ?> >YES</option>
						<option value="false" <?php if ($pinwidget == 'false') echo 'selected="false"'; ?> >NO</option>	
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('pin_widget');?>">Pinterest Pin ID : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('pin_widget');?>"
				name="<?php echo $this->get_field_name('pin_widget');?>"
					value="<?php echo !empty($pin_widget) ? $pin_widget : ""; ?>" />
			</p>
                        <p style="font-size: 9px;"><b>Note: Every single pin name a numeric id like this - 99360735500167749 (Get more info from documentation)</b></p>
			<p>
				<label for="<?php echo $this->get_field_id('pin_title');?>">Pinterest Title : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('pin_title');?>"
				name="<?php echo $this->get_field_name('pin_title');?>"
					value="<?php echo !empty($pin_title) ? $pin_title : ""; ?>" />
			</p>
                        <p style="background: #000000; color: #ffffff; font-weight: bold; padding: 2px 5px;">Pinterest Follow Button</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'follow' ); ?>">Show Follow Button:</label> 
				<select id="<?php echo $this->get_field_id( 'follow' ); ?>"
					name="<?php echo $this->get_field_name( 'follow' ); ?>"
					class="widefat" style="width:100%;">
						<option value="true" <?php if ($follow == 'true') echo 'selected="true"'; ?> >YES</option>
						<option value="false" <?php if ($follow == 'false') echo 'selected="false"'; ?> >NO</option>	
				</select>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('pin_follow');?>">Pinterest User URL : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('pin_follow');?>"
				name="<?php echo $this->get_field_name('pin_follow');?>"
					value="<?php echo !empty($pin_follow) ? $pin_follow : "pinterest"; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('pin_follow_name');?>">Pinterest Full Name : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('pin_follow_name');?>"
				name="<?php echo $this->get_field_name('pin_follow_name');?>"
					value="<?php echo !empty($pin_follow_name) ? $pin_follow_name : "Pinterest"; ?>" />
			</p>
                        <p style="background: #000000; color: #ffffff; font-weight: bold; padding: 2px 5px;">Pin It Button</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'pinit' ); ?>">Show Pin It Button:</label> 
				<select id="<?php echo $this->get_field_id( 'pinit' ); ?>"
					name="<?php echo $this->get_field_name( 'pinit' ); ?>"
					class="widefat" style="width:100%;">
						<option value="true" <?php if ($pinit == 'true') echo 'selected="true"'; ?> >Yes</option>
						<option value="false" <?php if ($pinit == 'false') echo 'selected="false"'; ?> >No</option>	
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('url');?>">External URL for pin : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('url');?>"
				name="<?php echo $this->get_field_name('url');?>"
					value="<?php echo !empty($url) ? $url : ""; ?>" />
			</p>
                        <p style="font-size: 9px;"><b>Note: External URL - Which you want to link with your pin</b></p>
			<p>
				<label for="<?php echo $this->get_field_id('image');?>">Image for Pin It Button : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('image');?>"
				name="<?php echo $this->get_field_name('image');?>"
					value="<?php echo !empty($image) ? $image : ""; ?>" />
			</p>
                        <p style="font-size: 9px;"><b>Note: External Image URL (must need to have extension .jpg or .png)</b></p>
			<p>
				<label for="<?php echo $this->get_field_id('description');?>">Description for Pin It Button : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('description');?>"
				name="<?php echo $this->get_field_name('description');?>"
					value="<?php echo !empty($description) ? $description : "I love my site so pin it."; ?>" />
			</p>

<?php
    }
    
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $title = apply_filters('widget_title', $title);
        $description = apply_filters('widget_description', $description);
	    if(empty($title)) $title = "Pinterest Widget Plus";
        if(empty($pinterest)) $pinterest = "pinterest";
        if(empty($image_width)) $image_width = "50";
        if(empty($board_height)) $board_height = "300";
		if(empty($board_width)) $board_width = "300";
        if(empty($pinwidget)) $pinwidget = "false";
        if(empty($pin_widget)) $pin_widget = "";
        if(empty($pin_title)) $pin_title = "";
        if(empty($follow)) $follow = "false";
        if(empty($pin_follow)) $pin_follow = "pinterest";
        if(empty($pin_follow_name)) $pin_follow_name = "Pinterest";
		if(empty($pinit)) $pinit = "false";
		if(empty($url)) $url = "";
		if(empty($image)) $image = "";
		if(empty($description)) $description = "I love my pin so pin it";
        echo $before_widget;
            echo $before_title . $title . $after_title;
            
            ?>


 <div class="pinterest_widget">

   <div>
		<?php 
			$pins='';
			$follows='';
		?>
		<?php if($pinit=='true' && $url == '' && $image == ''){?>
		<a href="//www.pinterest.com/pin/create/button/?url=<?php echo $url;?>&media=<?php echo $image;?>&description=<?php echo $description;?>" data-pin-do="buttonPin" data-pin-config="beside" data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
		<?php } elseif($url == '' && $image == ''){
                    echo "URL and Image Link can't be blank";
                } else{ echo $pins;}?>
   </div>

     
                                            <!------------------------------   end pinit   ------------------------------>

	<div>	
		<?php if($follow=='true'){?>     
		<a data-pin-do="buttonFollow" href="http://www.pinterest.com/<?php echo $pin_follow;?>/"><?php echo $pin_follow_name;?></a>
		<?php } else{ echo $follows;}?>
   </div>   
                                           <!-------------------------------   end follow ------------------------------>

   <div style="padding:5px 0px">
		<?php 
        $widgets='';
        $widget="<a data-pin-do='embedPin' href='http://www.pinterest.com/pin/$pin_widget/'>$pin_title</a>";
        ?>
                                        
        <?php if($pinwidget=='true' && $pin_widget == "" && $pin_title == ""){ echo $widget; } elseif($pin_widget == "" && $pin_title == ""){
           echo "Must need Pinterest ID and It's title to display Single Pin Widget";
        }
        else{  echo $widgets; } ?>  
		<div class="support" style="font-size: 9px; text-align: right; position: relative; top: -10px;"><a href="http://www.bestdumpsterdeals.com" title="click here" target="_blank">BestDumpsterDeals.com</a></div>
   </div>             
                                            <!-------------------------------   end widget  ---------------------------->
		
     <a data-pin-do="embedUser" href="http://www.pinterest.com/<?php echo $pinterest;?>" data-pin-scale-width="<?php echo $image_width;?>" data-pin-scale-height="<?php echo $board_height;?>" data-pin-board-width="<?php echo $board_width;?>"></a>			
			
	<script>
	!function(a,b,c){var d,e,f;f="PIN_"+~~((new Date).getTime()/864e5),a[f]||(a[f]=!0,a.setTimeout(function(){d=b.getElementsByTagName("SCRIPT")[0],e=b.createElement("SCRIPT"),e.type="text/javascript",e.async=!0,e.src=c,d.parentNode.insertBefore(e,d)},10))}(window,document,"//assets.pinterest.com/js/pinit_main.js");
	</script>
	
</div>        
	
   <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
   </script> 
      
   <?php
        echo $after_widget;
    }
 }

add_action('widgets_init','register_PinterestWidgetPlus');
function register_PinterestWidgetPlus(){
    register_widget('PinterestWidgetPlus');
}