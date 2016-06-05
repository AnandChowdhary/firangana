var query = function(elt) {
	return document.querySelector(elt);
}

var defaultNavLeft = 0;

var fixWidth = function() {
	query("#masthead nav").style.width = (window.innerWidth - query("#masthead .menu").offsetWidth - query("#masthead #logo").offsetWidth - query("#masthead .nav-icons").offsetWidth - 50) + "px";
	if (window.innerWidth <= 600) {
		query(".navbar-over-inside").style.display = "block";
		if (query(".navbar-over-inside").innerHTML == "") {
			query(".navbar-over-inside").innerHTML = query("#masthead nav ul").innerHTML + "<div class='line'></div>";
		}
	} else {
		query(".navbar-over-inside").style.display = "none";
	}
}

document.addEventListener("DOMContentLoaded", function() {
	fixWidth();
	defaultNavLeft = query(".navbar-over").style.left;
});

window.addEventListener("resize", function() {
	fixWidth();
});

query(".search-input").addEventListener("focus", function() {
	this.style.width = window.innerWidth - query("#masthead .menu").offsetWidth - query("#masthead #logo").offsetWidth - 110 - 75 + "px";
	query("#masthead nav").style.opacity = "0";
});

query(".search-input").addEventListener("blur", function() {
	this.style.width = "20vw";
	query("#masthead nav").style.opacity = "1";
});

query(".menu").addEventListener("click", function() {
	query(".navbar-over").style.display = "block";
	query(".bg-before").style.display = "block";
	setTimeout(function() {
		query(".navbar-over").style.opacity = "1";
		query(".navbar-over").style.left = "0";
		query(".bg-before").style.opacity = "1";
	}, 1);
});

query(".cart-icon").addEventListener("click", function() {
	query(".cart-over").style.display = "block";
	query(".bg-before").style.display = "block";
	setTimeout(function() {
		query(".cart-over").style.opacity = "1";
		query(".cart-over").style.right = "0";
		query(".bg-before").style.opacity = "1";
	}, 1);
});

var removeBackground = function() {
	query(".bg-before").style.opacity = "0";
	query(".navbar-over").style.opacity = "0";
	query(".navbar-over").style.left = defaultNavLeft;
	query(".cart-over").style.opacity = "0";
	query(".cart-over").style.right = defaultNavLeft;
	setTimeout(function() {
		query(".bg-before").style.display = "none";
		query(".navbar-over").style.display = "none";
		query(".cart-over").style.display = "none";
	}, 301);
}

query(".bg-before").addEventListener("click", function() {
	removeBackground();
});

for (i = 0; i < document.querySelectorAll(".close-btn").length; i++) {
	document.querySelectorAll(".close-btn")[i].addEventListener("click", function() {
		removeBackground();
	});
}