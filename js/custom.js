$(function () {
    //animate on scrol
    new WOW().init();
});

function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
}
$(function(){
	$("#team-members").owlCarousel();
});