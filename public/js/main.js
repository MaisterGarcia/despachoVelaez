// menu
$(".menu-container").children("span").on("click", function(){
	var menu = $(this).siblings(".menu");
	var padre = $(this).parent();

	menu.toggle(400);
	padre.toggleClass("menu-active");
});