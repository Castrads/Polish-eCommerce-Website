const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");


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
document.addEventListener('click', function(e)  {
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