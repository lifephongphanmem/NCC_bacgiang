var loginAttempt = 0 ;	
$(document).ready(function() {
	authUtil();	
	//loadAppInMobile();
	initBackground(this);
    $("#buttonLogin").click(function(e) {
        e.preventDefault();
		var input_username  = document.getElementById("username");
		var input_password  = document.getElementById("password");
		var input_captcha  = document.getElementById("jcaptcha");
		if(validateInput()){
			$.ajax({
				type: "POST",
				url: dirS + "login",
				data: {username: $("#username").val(), password: $("#password").val(), captcha: $("#jcaptcha").val()},
				dataType: "json",
				headers: {'X-Requested-By': (new Date()).getTime()},
				beforeSend: function() {
          		 	$("#overlay").show();
       			 },
      		    complete: function() {			
            		$("#overlay").hide();		 
 			    },								
				success: function(response) {
					if (response.result === 'SUCCESS') {
						if(response.roleId === '3'){
							window.location.href = 'mt-admin';
						}else if (response.type === '2'&& response.groupRoot === '1'){
							window.location.href = 'connectuser.html';
						} else{
							window.location.href = 'monitor.html';
						}
					} else {
						if (parseInt(response.loginAttempt) >= 3) {
							$("#captchaId").removeClass("hidden");
							if($("#jcaptcha").val().length == 0){
								alert(login.captchaNotEmpty);
								input_captcha.focus();
								return;
							}					
						}
						if (response.code === '1') {
							alert(login.loginFail);
							input_captcha.value = '';
							input_captcha.focus();
						} else {
							alert(login.loginFail);
							input_username.value = '';
							input_password.value = '';
							input_captcha.value = '';
							input_username.focus();
						}
						reloadCaptcha();
						document.getElementById("jcaptcha").value = '';

					}
				},
				error: function(xhr, textStatus, errorThrown) {
					window.location.href = 'error.html';
				}
			});
	
	}else{
		return;
	}
	});
    document.getElementById("login-captcha").src = dirS + "jcaptcha.jpg";
    $("#username").focus();
});


function authUtil()
{
    $.ajax({
        url: '../mtapi/rest/authutil',
        dataType: 'json',
//		cache: false,
        success: function(json) {
			var language = json.language;
			localStorage.setItem('language', language);
			
            if (json.success == 'TRUE') {
				groupType = json.type;
				if(json.roleId === '3'){
					window.location.href = 'mt-admin';
				} else if(json.type === '2' && json.groupRoot === '1'){
					window.location.href = 'connectuser.html';
				}else{
					window.location.href = 'monitor.html';
				}	
            }			
        }
    });
}

function validateInput() {
	
		var input_username  = document.getElementById("username");
		var input_password  = document.getElementById("password");
		var username =  $.trim($('#username').val());
		var password = $.trim($('#password').val())
 		if(username.length  == 0) {
			  alert(login.usernameNotEmpty); 
			  input_username.focus();
			  return false;
	  	}
			if(password.length  == 0) {
			  alert(login.passwordNotEmpty); 
			  input_password.focus();
			  return false;
	  	}
		

		return true;
}

function reloadCaptcha() {
    var d = new Date();
    document.getElementById("login-captcha").src = dirS + "jcaptcha.jpg#" + d.getTime();
}

function loadAppInMobile() {
	var os = getMobileOperatingSystem();
	if (os == 'Android') {
		var str = '<span class="googleplay"><a href="market://details?id=com.viettel.ttgpgt.smartmotor"><img src="Images/googleplay-slider.png" width="150" alt="Smart Motor trĂªn Android"></a></span>'
		document.getElementById('using-mobile').innerHTML = str;
	} else if (os == 'iOS') {
		var str = '<span class="appstore"><a href="https://itunes.apple.com/us/app/smart-motor-2.0/id962665899" target="_blank"><img src="Images/slider-appstore.png" width="150" alt="Smart Motor trĂªn iOS"></a></span>'
		document.getElementById('using-mobile').innerHTML = str;
	} else if (os == 'unknown'){
		var str = '<p><b>' + login.downloadLabel + '</b></p>';
		str += '<span class="unknown"><a href="https://play.google.com/store/apps/details?id=com.viettel.ttgpgt.smartmotor" target="_blank"><img src="Images/googleplay-slider.png" width="150" alt="Smart Motor trĂªn Android"></a></span>';
		str += '&nbsp;&nbsp;';
		str += '<span class="appstore"><a href="https://itunes.apple.com/us/app/smart-motor-2.0/id962665899" target="_blank"><img src="Images/slider-appstore.png" width="150" alt="Smart Motor trĂªn iOS"></a></span>';
		document.getElementById('using-mobile').innerHTML = str;
	} else {
		
	}
}

/**
 * Determine the mobile operating system.
 * This function either returns 'iOS', 'Android' or 'unknown'
 *
 * @returns {String}
 */
function getMobileOperatingSystem() {
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;
	if( userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ) ) {
		return 'iOS';
	} else if( userAgent.match( /Android/i ) ) {
		return 'Android';
	} else {
		return 'unknown';
	}
}

$( window ).resize(function() {
	initBackground(this);
});
function initBackground(wd) {
	var w = $(wd).width();
	if (w >= 1200) {
		$('#logo-bg').css({'background' : login.backgroundLogoFull});
		$('#content-bg').css({'background' : login.backgroundContentFull});
	} else {
		$('#logo-bg').css({'background' : login.backgroundLogoMobile});
		$('#content-bg').css({'background' : 'none'});
	}
}