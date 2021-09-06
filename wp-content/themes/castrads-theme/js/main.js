const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener('click', function () {
  if (searchBox.style.top == '72px') {
    searchBox.style.top = '24px';
    searchBox.style.pointerEvents = 'none';
  } else {
    searchBox.style.top = '72px';
    searchBox.style.pointerEvents = 'auto';
  }
});

menuIcon.addEventListener('click', function () {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none';
  } else {
    slideoutMenu.style.opacity = '1';
    slideoutMenu.style.pointerEvents = 'auto';
  }
})

// Close onclick outside
document.addEventListener('click', (e) => {
	const toggle = document.querySelector('.search__toggle')
	const input = document.querySelector('.search__input')
	const clickedElement = e.target

	if (clickedElement == toggle) {
		input.value = ''
		return;
	}

	const isSearchField = clickedElement.closest('.search__field')		
	
	if (!isSearchField) {
		toggle.checked = false
		input.value = ''
	}
})