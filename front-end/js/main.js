$(document).ready(function(){

	/* Slider */
	$('#slider .flexslider').flexslider({
		controlNav: false,
		animation: "slide",
		start: function(slider) { $('#slider .flexslider').removeClass('loading') }
	});
	
	$('#main .features .flexslider').flexslider({
		directionNav: false,
		animation: "slide",
		animationLoop: false,
	    slideshow: false,
		start: function(slider) { $('#main .features .flexslider').removeClass('loading') }
	});
	
	$('#main .testimonials .flexslider').flexslider({
		directionNav: false,
		controlNav: false,
		start: function(slider) { $('#main .testimonials .flexslider').removeClass('loading') }
	});
	
	$('#main .tweets .flexslider').flexslider({
		directionNav: false,
		controlNav: false,
		start: function(slider) { $(slider).removeClass('loading'); }	
	});
	/* End slider */
	
	
	/* Contact us process */
	$("#contact-form").submit(function() {
		var submitData 	= $('#contact-form').serialize();
		$("#contact-form input[name='name']").attr('disabled','disabled');
		$("#contact-form input[name='email']").attr('disabled','disabled');
		$("#contact-form input[name='subject']").attr('disabled','disabled');
		$("#contact-form textarea[name='message']").attr('disabled','disabled');
		$("#contact-form input[name='submit']").attr('disabled','disabled');
		$("#contact-form .data-status").show().html('<div class="alert alert-info"><strong>Loading...</strong></div>');
		$.ajax({ // Send an offer process with AJAX
			type: "POST",
			url: "contact.php",
			data: submitData + "&action=add",
			dataType: "html",
			success: function(msg){
				if(parseInt(msg)!=0)
					{
					var msg	= msg.split("|");
					if(msg[0]=="success") {
						$("#contact-form input[name='name']").val('').removeAttr('disabled');
						$("#contact-form input[name='email']").val('').removeAttr('disabled');
						$("#contact-form input[name='subject']").val('').removeAttr('disabled');
						$("#contact-form textarea[name='message']").val('').removeAttr('disabled');
						$("#contact-form input[name='submit']").removeAttr('disabled');
						$("#contact-form .data-status").html(msg[1]).fadeIn();
					} else {
						$("#contact-form input[name='name']").removeAttr('disabled');
						$("#contact-form input[name='email']").removeAttr('disabled');
						$("#contact-form input[name='subject']").removeAttr('disabled');
						$("#contact-form textarea[name='message']").removeAttr('disabled');
						$("#contact-form input[name='submit']").removeAttr('disabled');
						$("#contact-form .data-status").html(msg[1]).fadeIn();
					}
					}
				}
		});
		return false;
	});
	/* End contact us process */
	
	
	// jQuery smooth scrolling
	$('#header .nav-menu ul li a').bind('click', function(event) {
		var $anchor = $(this);		
		$('html, body').stop().animate({
			scrollTop: parseInt($($anchor.attr('href')).offset().top)
		}, 2000,'easeInOutExpo');
		event.preventDefault();
	});
	
	// Works or portofolios filter with jQuery Isotope
	$(window).load(function(){
        var $container          = $('#main .works .works-items');
        var $filter             = $('#main .works .works-filter');
        
		// Initialize
        $container.isotope({
            filter              : '*',
            layoutMode          : 'fitRows',
            animationOptions    : {duration: 400}
        });
        
        // Trigger item lists filter when link clicked
        $filter.find('a').click(function() {
            var selector = $(this).attr('data-filter');
            $filter.find('a').removeClass('active');
            $(this).addClass('active');
            $container.isotope({ 
                filter             : selector,
                animationOptions   : {animationDuration  : 400, queue : false}
            });
            return false;
        });
    });
	
	// jQuery placeholder for IE
	$("input, textarea").placeholder();
	
	// jQuery figure hover effect
	$('figure.figure-hover').hover(
		function() {
			var divHeight = $(this).children("a").children("div").height();
			var pHeight = $(this).children("a").children("div").children("p").height();
			var marginTop = parseInt(divHeight - pHeight) / 2;
			$(this).children("a").children("div").children("p").css('marginTop', marginTop);
			$(this).children("a").children("div").animate({opacity:1}, 300);
		},
		function() { $(this).children("a").children("div").animate({opacity:0}, 300); }
	);
	
	// Pretty Photo for image gallery modal popup
	$("a[rel^='prettyPhoto']").prettyPhoto({ social_tools: false });
	
	
	/* Twitter integration */
	$.getJSON('includes/get-tweets.php',
        function(feeds) {
            // alert(feeds);
			var displaylimit		= 5;
			var showdirecttweets	= false;
			var showretweets		= true;
            var feedHTML			= '';
            var displayCounter		= 1;
			var $tweets				= $('#main .tweets .slides');
			
			if(feeds !== null) {
				for (var i=0; i<feeds.length; i++) {
					var tweetscreenname	= feeds[i].user.name;
					var tweetusername	= feeds[i].user.screen_name;
					var profileimage	= feeds[i].user.profile_image_url_https;
					var status			= feeds[i].text;
					var isaretweet		= false;
					var isdirect		= false;
					var tweetid			= feeds[i].id_str;
	 
					// If the tweet has been retweeted, get the profile pic of the tweeter
					if (typeof feeds[i].retweeted_status !== 'undefined') {
						profileimage	= feeds[i].retweeted_status.user.profile_image_url_https;
						tweetscreenname	= feeds[i].retweeted_status.user.name;
						tweetusername	= feeds[i].retweeted_status.user.screen_name;
						tweetid			= feeds[i].retweeted_status.id_str;
						isaretweet		= true;
					}
					
					// Check to see if the tweet is a direct message
					if (feeds[i].text.substr(0,1) === '@') {
						isdirect = true;
					}
					
					// console.log(feeds[i]);
					
					if (((showretweets === true) || ((isaretweet === false) && (showretweets === false))) && ((showdirecttweets === true) || ((showdirecttweets === false) && (isdirect === false)))) {
						if ((feeds[i].text.length > 1) && (displayCounter <= displaylimit)) {
	 
							if (displayCounter === 1) {
								feedHTML = '';
							}
							
							feedHTML	+= '<li>';
							feedHTML	+= JQTWEET.ify.clean(status);
							feedHTML	+= '&nbsp;&nbsp;<span class="date"><a href="http://twitter.com/' + tweetscreenname + '/status/' + tweetid + '" target="_blank">' +  JQTWEET.timeAgo(feeds[i].created_at) + '</a></span>';
							feedHTML	+= '</li>';
							
							displayCounter++;
						}
					}
				}
	 
				$tweets.html(feedHTML);
				$tweets.hide().fadeIn(1000);
				
				$('#main .tweets .flexslider').flexslider({
					directionNav: false,
					controlNav: false,
					start: function(slider) { $(slider).removeClass('loading'); }	
				});
			}
		}
	);
	
	var JQTWEET = { // Twitter data format function
		timeAgo: function(dateString) { // twitter date string format function
			var rightNow = new Date();
			var then = new Date(dateString);
			
			if ($.browser.msie) {
				// IE can't parse these crazy Ruby dates
				then = Date.parse(dateString.replace(/( \+)/, ' UTC$1'));
			}
			
			var diff = rightNow - then;
			var second = 1000,
			minute = second * 60,
			hour = minute * 60,
			day = hour * 24;
	 
			if (isNaN(diff) || diff < 0) { return ""; }
			if (diff < second * 2) { return "right now"; }
			if (diff < minute) { return Math.floor(diff / second) + " seconds ago"; }
			if (diff < minute * 2) { return "1 minute ago"; }
			if (diff < hour) { return Math.floor(diff / minute) + " minutes ago"; }
			if (diff < hour * 2) { return "1 hour ago"; }
			if (diff < day) { return  Math.floor(diff / hour) + " hours ago"; }
			if (diff > day && diff < day * 2) { return "1 day ago"; }
			if (diff < day * 365) { return Math.floor(diff / day) + " days ago"; }
			else { return "over a year ago"; }
		}, // timeAgo()
		 
		ify: {
			link: function(tweet) { // twitter link string replace function
				return tweet.replace(/\b(((https*\:\/\/)|www\.)[^\"\']+?)(([!?,.\)]+)?(\s|$))/g, function(link, m1, m2, m3, m4) {
					var http = m2.match(/w/) ? 'http://' : '';
					return '<a class="twtr-hyperlink" target="_blank" href="' + http + m1 + '">' + ((m1.length > 25) ? m1.substr(0, 24) + '...' : m1) + '</a>' + m4;
				});
			},
			
			at: function(tweet) { // twitter at (@) character format function
				return tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20})/g, function(m, username) {
					return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/intent/user?screen_name=' + username + '">@' + username + '</a>';
				});
			},
			
			list: function(tweet) { // twitter list string format function
				return tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20}\/\w+)/g, function(m, userlist) {
					return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/' + userlist + '">@' + userlist + '</a>';
				});
			},
			
			hash: function(tweet) { // twitter hash (#) string format function
				return tweet.replace(/(^|\s+)#(\w+)/gi, function(m, before, hash) {
					return before + '<a target="_blank" class="twtr-hashtag" href="http://twitter.com/search?q=%23' + hash + '">#' + hash + '</a>';
				});
			},
			
			clean: function(tweet) { // twitter clean all string format function
				return this.hash(this.at(this.list(this.link(tweet))));
			}
		} // ify
	};
	/* End twitter integration */
	
	
	// Fullscreen slider background
 	$("#slider").backstretch("images/sliders/1.jpg"); // change with your image url
	
	
	/* Back to top scroll */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) { $('.scrollup').slideDown(); } else { $('.scrollup').slideUp(); }
	}); 
	$('.scrollup').click(function(){
		$("html, body").stop().animate({ scrollTop: 0 }, 2000, 'easeInOutExpo');
		return false;
	});
	/* End Back to top scroll */
	
	
	/* Create a secondary menu */
	$("<select />").prependTo("#header");
	$("<option />", {
		"selected": "selected",
		"value"   : "#",
		"text"    : "Please select one option..."
	}).appendTo("#header select");
	
	// Dropdown menu list value
	$("#header .nav-menu ul li a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo("#header select");
	});
	
	// Make the drop-down work
	$("#header select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	/* End create a secondary menu */
	
	
	/* Customizer */
	$("#customize h5").click(function() {
		$("#customize .wrapper").slideToggle();
	});
	
	$("#customize .colors a").click(function(e) {
		$color = $(this).attr('class');
		$('head').append('<link rel="stylesheet" type="text/css" href="css/customizer/'+ $color +'.css">');
		$('#header .logo img').attr('src', 'images/contents/' + $color + '/logo.png');
		$('#main .features .item img').each(function(index, element) {
            $(element).attr('src', 'images/features/' + $color + '/' + element.src.substr(element.src.lastIndexOf('/')));
        });
		e.preventDefault();
	});
	
	$("#customize .background a").click(function(e) {
		$number = $(this).attr('class');
		$("#slider").backstretch("images/sliders/" + $number + ".jpg");
		e.preventDefault();
	});
	/* End customizer */

});