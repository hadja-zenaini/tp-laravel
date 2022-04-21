function activateMenuItem() {
    const navbarMenuTriggerId = 'navbar-avatar-trigger';
    const navbarMenuTrigger = document.getElementById(navbarMenuTriggerId);
    const navbarMenu = document.getElementById('navbar-avatar-menu');
    let menuItemOpened = false;
    navbarMenuTrigger.addEventListener('click', ($event) => {
        $event.stopPropagation();
        navbarMenu.classList.add('active');
        menuItemOpened = true;
    });

    document.addEventListener('click', ($event) => {
        $event.stopPropagation();
        if($event.target.id !== navbarMenuTriggerId && menuItemOpened) {
            navbarMenu.classList.remove('active');
            menuItemOpened = false;
        }
    });
}

activateMenuItem();
