jQuery.noConflict();
function slideFrame(thumbid, move_by, direction, type, match_height)
	{
		/* Set the new position & frame number */
		frame_left = jQuery(thumbid).css(type).replace("px", "");
		frame_no = (-(frame_left/move_by));
		maxsize = (jQuery(thumbid).children("li").size()-1);
		jQuery("#slider-dots a").removeClass("dot-selected");
		
		if(direction == 0)
			{
				new_frame_no =  Math.round((frame_no/1)+1);
				if(maxsize <= frame_no)
					new_frame_no = 0;
				new_left = -(new_frame_no*move_by)+"px";
				
			}
		else
			{
				new_frame_no = Math.round((frame_no/1)-1);
				
				if(frame_no == 0)
					new_frame_no = maxsize;
					
				new_left = -(new_frame_no*move_by)+"px";
			}
			
		jQuery("#slider-dots a").eq(new_frame_no).addClass("dot-selected");
		jQuery(".slider .copy ul").children("li").eq(frame_no).slideUp();
		jQuery(".slider .copy ul").children("li").eq(new_frame_no).slideDown();
		
		setTimeout(function(){jQuery.noslide = 0;}, 500);
		
		if(type == "left")
			{jQuery(thumbid).animate({"left": new_left}, {duration: 500});}
		else
			{jQuery(thumbid).animate({"top": new_left}, {duration: 300});}
	}	
jQuery(document).ready(function()
	{
		if(jQuery.browser.msie || jQuery.browser.mozilla)
			{Screen = jQuery("html");}
		else
			{Screen = jQuery("body");}
			
		jQuery.frame_no = 0;		
		jQuery.noslide = 0;
		thumbid = ".slider ul.gallery-container";
		jQuery(thumbid).animate({"left": 0}, {duration: 500});
		jQuery("div[id^='slider-auto-']").each(function(){
			if(!isNaN(jQuery(this).text()) && jQuery(this).text() !== "0" && jQuery(this).text() !== "")
				{
					var SliderInterval = setInterval(function(){
						jQuery.noslide = 1;
						slideFrame(thumbid, 960, 0, "left");
					}, (jQuery(this).text()*1000));
				}
		});
		jQuery(".slider .next").click(function(){
			if(jQuery.noslide == 0)
				{
					jQuery.noslide = 1;					
					slideFrame(thumbid, 960, 0, "left");
				}
			return false;
		});
		
		jQuery(".slider .previous").click(function(){
			if(jQuery.noslide == 0)
				{
					jQuery.noslide = 1;
					slideFrame(thumbid, 960, 1, "left");
				}
			return false;
		});

		jQuery("#slider-dots .dot").click(function(){
			if(jQuery.noslide == 0)
				{
					jQuery.noslide = 1;
					new_left  = -(jQuery(this).index()*960);
					jQuery(".dot-selected").removeClass("dot-selected");
					jQuery(this).addClass("dot-selected");
					jQuery(thumbid).animate({"left": new_left}, {duration: 500});
				
					frame_left = jQuery(thumbid).css("left").replace("px", "");
					frame_no = (-(frame_left/960));
				
					jQuery(".slider .copy ul").children("li").eq(frame_no).slideUp();
					jQuery(".slider .copy ul").children("li").eq(jQuery(this).index()).slideDown();
					
					setTimeout(function(){jQuery.noslide = 0;}, 500);
					
				}
			return false;
			
		});
		
function clear_auto_slide(){
	jQuery("div[id^='slider-auto-']").each(function(){
		if(!isNaN(jQuery(this).text()) && jQuery(this).text() !== "0" && jQuery(this).text() !== "")
			{clearInterval(SliderInterval);}
	});
}
		
		jQuery.video_frame = 1;
		jQuery(".latest-videos .pagination .next").click(function(){
			i = ((jQuery.video_frame/1)+1);
			vidmax = jQuery("[id^='video_widget_']").size();
			
			if(vidmax < i)
				i = 1;
				
			new_videoid = "#video_widget_"+i;
			old_videoid = "#video_widget_"+jQuery.video_frame;
			
			jQuery("[rel='"+old_videoid+"']").fadeOut({duration: 400});
			setTimeout(function(){jQuery("[rel='"+new_videoid+"']").fadeIn()}, 500);
				
			newleft = (i*(-300)+300)+"px";
			
			
			jQuery(".latest-videos .content").animate({"left": newleft},{duration: 500});
			
			jQuery.video_frame = i;
			return false;
		});
		jQuery(".latest-videos .pagination .previous").click(function(){
			i = ((jQuery.video_frame/1)-1);
			
			if(i < 1)
				i = 1;
			
			new_videoid = "#video_widget_"+i;
			old_videoid = "#video_widget_"+jQuery.video_frame;
			
			jQuery("[rel='"+old_videoid+"']").fadeOut({duration: 400});
			setTimeout(function(){jQuery("[rel='"+new_videoid+"']").fadeIn()}, 500);
			
			newleft = (i*(-300)+300)+"px";
			
			jQuery(".latest-videos .content").animate({"left": newleft},{duration: 500});
			
			jQuery.video_frame = i;
			return false;
		});
		
		jQuery.video_frame = 1;
		jQuery(".video-selector li a").click(function(){
			videoid = jQuery(this).attr("rel");
			
			new_videoid = jQuery(this).attr("rel").replace("#video_widget_", "");
			old_videoid = "#video_widget_"+jQuery.video_frame;
			
			jQuery(old_videoid).slideUp();
			jQuery(videoid).slideDown();
			
			jQuery(this).parent().parent().children(".selected").removeClass("selected");
			jQuery(this).parent().addClass("selected");
			
			jQuery.video_frame = new_videoid;
			return false;
		});
		
		/*************************/
		/* Comments Form Clearer */
		var author = "author";
		jQuery("#"+author).focus(function(){
			if(jQuery("#"+author).attr("value") == "Name")
				{jQuery("#"+author).attr("value", "");}
		});
		
		jQuery("#"+author).blur(function(){
			if(jQuery("#"+author).attr("value") == "")
				{jQuery("#"+author).attr("value", "Name");}
		});
		
		var email = "email";	
		jQuery("#"+email).focus(function(){
			if(jQuery("#"+email).attr("value") == "Email")
				{jQuery("#"+email).attr("value", "");}
		});
		
		jQuery("#"+email).blur(function(){
			if(jQuery("#"+email).attr("value") == "")
				{jQuery("#"+email).attr("value", "Email");}
		});
		
		var url = "url";		
		jQuery("#"+url).focus(function(){
			if(jQuery("#"+url).attr("value") == "URL")
				{jQuery("#"+url).attr("value", "");}
		});
		jQuery("#"+url).blur(function(){
			if(jQuery("#"+url).attr("value") == "")
				{jQuery("#"+url).attr("value", "URL");}
		});
		
		var twitter = "twitter";		
		jQuery("#"+twitter).focus(function(){
			if(jQuery("#"+twitter).attr("value") == "Twitter")
				{jQuery("#"+twitter).attr("value", "");}
		});
		jQuery("#"+twitter).blur(function(){
			if(jQuery("#"+twitter).attr("value") == "")
				{jQuery("#"+twitter).attr("value", "Twitter");}
		});
	});
jQuery(function(){jQuery("a[rel=lightbox]").lightBox();});