var checkScroll = function() {
	if (window.pageYOffset > 0) {
		document.querySelector("#firanganaHead").classList.add("fixed");
	} else {
		document.querySelector("#firanganaHead").classList.remove("fixed");
	}
}
document.addEventListener("scroll", checkScroll);

document.addEventListener("DOMContentLoaded", function() {
	var f = "flex", e = document.createElement("b");
	e.style.display = f;
	if (e.style.display !== "flex") {
		document.location.href = "http://outdatedbrowser.com/en";
	}
});

document.querySelector(".showPhoneCase").addEventListener("click", function(e) {
	document.querySelector(".phone-cases-hover").style.display = "block";
	setTimeout(function() {
		document.querySelector(".phone-cases-hover").style.opacity = "1";
	}, 1);
	setInterval(function() {
		document.querySelector(".phone-cases-hover").style.overflow = "auto";
	}, 500);
	//window.history.pushState("object or string", "Title", "/phone-cases");
	return false;
});
document.querySelector(".close-btn").addEventListener("click", function() {
	document.querySelector(".phone-cases-hover").style.opacity = "0";
	setTimeout(function() {
		document.querySelector(".phone-cases-hover").style.display = "none";
	}, 500);
});

for (i = 0; i < document.querySelectorAll("a").length; i++) {
	document.querySelectorAll("a")[i].addEventListener("click", function() {
		if (this.getAttribute("href").charAt(0) != "#") {
			document.querySelector(".redirector").style.display = "block";
			setTimeout(function() {
				document.querySelector(".redirector").style.opacity = "1";
			}, 1);
		}
	});
}