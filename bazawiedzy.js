// MENU ------------------------------------------------------------------------

jQuery(document).ready(function($){
	var $root = $('html, body'),
		menu_toggle = $('.menu-toggle');

	menu_toggle.on('click', function(){
		var $this = $(this);

		$this.toggleClass('close');
		$('.menu, .menu-nav, .menu-nav-item').toggleClass('show');
	});
});

// LOGOWANIE -------------------------------------------------------------------

$(document).ready(function(){
	$("#login").on('click', function(){
		username=$("#username").val();
		password=$("#password").val();

		$.ajax({
			type: "POST",
			url: "logincheck.php",
			data: "username="+username+"&password="+password,
			success: function(html) {
				if(html=='true')
				{
					window.location.href = "index.php";
				} else if (html=='false') {
					$("#login-error").html('<div class="alert alert-red"><p>Niepoprawny login lub hasło.</p></div>');
				} else {
					$("#login-error").html('<div class="alert alert-red"><p>Błąd logowania. Spróbuj ponownie później.</p></div>');
				}
			}, beforeSend: function() {
				$("login-error").html("loading...");
			}
		});
		return false;
	});
});

// DODAWANIE ARTYKUŁU ----------------------------------------------------------

$(document).ready(function(){
	$("#add_article").on('click', function(){
		title=$("#title").val();
		postw=$("#postw").val();
		postu=$("#postu").val();
		tags=$("#tags").val();
		product=$("#bw_product").val();
		category=$("#bw_category").val();

		$.ajax({
			type: "POST",
			url: "post_process.php",
			data: "title="+title+"&postw="+postw+"&postu="+postu+"&tags="+tags+"&product="+product+"&category="+category,
			success: function(html) {
				if(html=='true')
				{
					$("#post-error").html('<div class="alert alert-green"><p>Artykuł został poprawnie dodany.</p></div>');
				} else if (html=='false') {
					$("#post-error").html('<div class="alert alert-red"><p>Tutaj będzie komunikat błędu.</p></div>');
				} else {
					$("#post-error").html('<div class="alert alert-red"><p>Wystąpił błąd. Spróbuj ponownie później.</p></div>');
				}
			}, beforeSend: function() {
				$("post-error").html("loading...");
			}
		});
		return false;
	});
});
