import '../css/main.css';

var langlist = [];

function setupMenuTop() {
	// Select all dropdown toggle buttons
	const dropdownToggles = document.querySelectorAll(".dropdown-toggle")

	dropdownToggles.forEach((toggle) => {
		toggle.addEventListener("click", () => {
			// Find the next sibling element which is the dropdown menu
			const dropdownMenu = toggle.nextElementSibling;

			// Toggle the 'hidden' class to show or hide the dropdown menu
			if (dropdownMenu.classList.contains("hidden")) {
				// Hide any open dropdown menus before showing the new one
				document.querySelectorAll(".dropdown-menu").forEach((menu) => {
					menu.classList.add("hidden");
				});

				dropdownMenu.classList.remove("hidden");
			} else {
				dropdownMenu.classList.add("hidden");
			}
		});
	});

	// Optional: Clicking outside of an open dropdown menu closes it
	window.addEventListener("click", (event) => {
		if (!event.target.matches(".dropdown-toggle")) {
			document.querySelectorAll(".dropdown-menu").forEach((menu) => {
				if (!menu.contains(event.target)) {
					menu.classList.add("hidden");
				}
			});
		}
	});

	// hamburger
	const hamburger = document.getElementById("hamburger");
	const navigation = document.getElementById("navigation-menu");
	hamburger.addEventListener("click", () => {
		navigation.classList.toggle("hidden");
	});

	// change languages
	const currentLanguage = document.getElementById("current-language");
	langlist.push(currentLanguage.innerHTML);
	const languages = document.getElementById("languages");
	const langs = document.querySelectorAll(".language");
	langs.forEach((lang) => {
		langlist.push(lang.innerHTML);
		lang.addEventListener("click", function () {
			currentLanguage.innerHTML = this.innerHTML;
			var j = -1;
			langlist.forEach((l, i) => {
				if (l != currentLanguage.innerHTML) {
					j++;
					langs[j].innerHTML = l;
				}
			});
			languages.classList.toggle("hidden");
		});
	});
}

document.addEventListener("DOMContentLoaded", () => {
	setupMenuTop();
});