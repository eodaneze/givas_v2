function toggleDropdown(event, menuId) {
    event.stopPropagation();
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu.id !== menuId) {
        menu.style.display = 'none';
        }
    });

    const dropdown = document.getElementById(menuId);
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }
    window.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.style.display = 'none';
    });
    });