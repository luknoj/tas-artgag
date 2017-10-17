$(function() {
	$("#sign-up-link").click(function() {
		$("#sign-up").show();
		$("#login").hide();
		return false;
	});
	$("#login-back").click(function(){
		$("#sign-up").hide();
		$("#login").show();
		return false;
	});
});