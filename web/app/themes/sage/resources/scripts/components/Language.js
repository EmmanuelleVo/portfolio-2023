export default class Language {
    constructor() {
        this.languageSwitcher = document.querySelector('.pll-parent-menu-item');
        this.languageMenu = this.languageSwitcher.querySelector('.sub-menu');

        // Mouse enter on language switcher
        this.languageSwitcher.addEventListener('mouseenter', () => {
            this.openSubMenu();
        });

        // Mouse leave from language switcher
        this.languageSwitcher.addEventListener('mouseleave', (event) => {
            if(this.languageMenu.classList.contains('lang__current--open')) {
                
                this.closeSubMenu();
            }
            // if (!this.languageMenu.contains(event.relatedTarget)) {
            //     this.closeSubMenu();
            // }
        });

        // // Mouse enter on language menu
        // this.languageMenu.addEventListener('mouseenter', () => {
        //     this.openSubMenu();
        // });

        // // Mouse leave from language menu
        // this.languageMenu.addEventListener('mouseleave', (event) => {
        //     if (!this.languageSwitcher.contains(event.relatedTarget)) {
        //         this.closeSubMenu();
        //     }
        // });
    }

    openSubMenu() {
        this.languageMenu.classList.add('lang__current--open');
    }

    closeSubMenu() {
        this.languageMenu.classList.remove('lang__current--open');
    }
}
