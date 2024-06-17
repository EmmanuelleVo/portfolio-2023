export default class BurgerMenu {
    constructor() {
        this.hamburger = document.querySelector('.hamburger');
        this.menuContainer = document.querySelector('.nav');
        this.menu = document.querySelector('.nav__links-container');
        this.isOpen = false;        
        
        this.openMenu()
        this.closeMenuOnClickOutside();
    }
    
    openMenu() {
        this.hamburger.addEventListener('click',() => {
            this.isOpen = !this.isOpen;
            this.menuContainer.classList.toggle('is-active');
            this.menuContainer.classList.toggle('menu-open');
            this.menu.classList.toggle('is-active');
            this.hamburger.classList.toggle('is-active')
        });
    }


    closeMenuOnClickOutside() {
        document.addEventListener('click', (event) => {
            // Close the menu if it's open and the click target is not within the menu container or hamburger
            if (this.isOpen && !event.target.closest('.nav__links-container') && !event.target.closest('.hamburger')) {
                this.hamburger.classList.remove('is-active');
                this.menuContainer.classList.remove('is-active');
                this.menuContainer.classList.remove('menu-open');
                this.menu.classList.remove('is-active');
                this.hamburger.classList.remove('is-active')
                this.isOpen = false; // Update menu state
            }
        });
    }


}