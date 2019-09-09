jQuery(document).ready(function ($) {
    // Display form from link inside a popup
	jQuery('#pop_login, #pop_signup').live('click', function (e) {
        formToFadeOut = jQuery('form#register');
        formtoFadeIn = jQuery('form#login');
        if (jQuery(this).attr('id') == 'pop_signup') {
            formToFadeOut = jQuery('form#login');
            formtoFadeIn = jQuery('form#register');
        }
        formToFadeOut.fadeOut(500, function () {
            formtoFadeIn.fadeIn();
        })
        return false;
    });
	
	// Display lost password form 
	jQuery('#pop_forgot').click(function(){
		formToFadeOut = jQuery('form#login');
		formtoFadeIn = jQuery('form#forgot_password');
		formToFadeOut.fadeOut(500, function () {
        	formtoFadeIn.fadeIn();
		})
		return false;
	});

	// Close popup
    jQuery(document).on('click', '.close', function () {
		jQuery('form#login, form#register, form#forgot_password').fadeOut(500, function () {
            jQuery('.crl_overlay').remove();
        });
        return false;
    });

    // Show the login/signup popup on click
    jQuery('#show_login, .show_signup').on('click', function (e) {
        jQuery('body').prepend('<div class="crl_overlay"></div>');
        if (jQuery(this).attr('id') == 'show_login')
            {
                jQuery('form#login').fadeIn(500);
                jQuery('form#login').find("input").first().focus();
            }
        else 
            {
                jQuery('form#register').fadeIn(500);
                jQuery('form#register').find(".close").focus();
                jQuery('form#register .input__field').removeClass('error');
                jQuery('form#register .cwr_error').text('');
            }
        e.preventDefault();
    });

    jQuery('.cwr_form .input__field').on('keydown blur',function(){
		if(jQuery(this).val().length){
			jQuery(this).parent().addClass('input--filled');
			jQuery(this).parent('.input').removeClass('input--error');
		}
		else
			jQuery(this).parent().removeClass('input--filled');
		});

	// Perform AJAX login/register on form submit
	jQuery('form#login, form#register').on('submit', function (e) {
		if (!jQuery(this).valid()) return false;
		
		// Give the URL parameters variable names
		var source = getParameterByName('utm_source');
		var medium = getParameterByName('utm_medium');
		var campaign = getParameterByName('utm_campaign');
		 
		// Put the variable names into the hidden fields in the form.
		document.getElementsByName("utm_source").value = source;
		document.getElementsByName("utm_medium").value = medium;
		document.getElementsByName("utm_campaign").value = campaign;

        jQuery('p.status', this).show().text(ajax_auth_object.loadingmessage);
		//action = 'ajaxlogin';
		//username = 	jQuery('form#login #username').val();
		//password = jQuery('form#login #password').val();
		//email = '';
		security = jQuery('form#login #security').val();
		if (jQuery(this).attr('id') == 'register') {
			action = 'ajaxregister';
			//salutation = jQuery('#salutation').val();
			first_name = jQuery('#first_name').val();
			last_name = jQuery('#last_name').val();
			school = jQuery('#school').val();
			username = jQuery('#signonname').val();
			email = jQuery('#user_email').val();
			role = jQuery('#role').val();
			utm_source = source,
			utm_medium = medium,
			utm_campaign = campaign,
			security = jQuery('#signonsecurity').val();
		}
		ctrl = jQuery(this);
		$.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
			data: {
				'action': action,
				'last_name': last_name,
				'first_name': first_name,
				'school': school,
				'username': username,
				'email': email,
				'role': role,
				'security': security,
				'utm_source' : source,
				'utm_medium' : medium,
				'utm_campaign' : campaign,          },
            success: function (data) {
				//if((jQuery(ctrl).attr ('id') == 'register') && (data.loggedin == false)) grecaptcha.reset();
				jQuery('p.status', ctrl).text(data.message);
				if (data.loggedin == true) {
					//document.location.href = jQuery(ctrl).attr ('id') == 'register' ? ajax_auth_object.register_redirect : ajax_auth_object.redirecturl;
					jQuery('form#register')[0].reset();
					//jQuery('form#register').fadeOut(500);
					//jQuery('form#login').fadeIn(500);
					var s = document.createElement("script");
					s.type = "text/javascript";
					s.src = "https://calendly.com/assets/external/widget.js";
					$("head").append(s);
					$(ctrl).html('<a class="close" href=""><img src="http://dev-bnedcourseware.pantheonsite.io/wp-content/uploads/2016/09/close_icon.png" alt="close icon"></a>').append('<div class="calendly-inline-widget" data-url="https://calendly.com/courseware/webinar/?first_name='+first_name+'&last_name='+last_name+'&email='+email+'" style="min-width:320px;height:540px;"></div>');
					ga('send', {
                		'hitType' : 'pageview',
                		'page' : '/contact-us-success' 
                	});
                }
            }
        });
        e.preventDefault();
    });

	// Perform AJAX forget password on form submit
	jQuery('form#forgot_password').on('submit', function(e){
		if (!jQuery(this).valid()) return false;
		jQuery('p.status', this).show().text(ajax_auth_object.loadingmessage);
		ctrl = jQuery(this);
		$.ajax({
			type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
			data: { 
				'action': 'ajaxforgotpassword', 
				'user_login': jQuery('#user_login').val(), 
				'security': jQuery('#forgotsecurity').val(), 
			},
			success: function(data){					
				jQuery('p.status',ctrl).text(data.message);				
			}
		});
		e.preventDefault();
		return false;
	});

	// Client side form validation
    if (jQuery("#register").length) 
		jQuery("#register").validate({
			  rules: {
			    email: {
			      required: true,
			      email: true
			    }
			  },
			errorPlacement:function(error, element) {
            	error.appendTo(element.parent(".input").find(".cwr_error"));
            }
		});
    else if (jQuery("#login").length) 
		jQuery("#login").validate();
	if(jQuery('#forgot_password').length)
		jQuery('#forgot_password').validate();
});

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "none" : decodeURIComponent(results[1].replace(/\+/g, " "));
}