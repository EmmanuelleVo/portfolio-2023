import domReady from '@roots/sage/client/dom-ready';
import Tab from "@scripts/components/Tab.js";
import BurgerMenu from '@scripts/components/BurgerMenu';
import CirclesAnimation from '@scripts/components/CirclesAnimation';

/**
 * Application entrypoint
 */
domReady(async() => {
  // ...
  const mainDiv = document.getElementById('js');
  const canvas = document.getElementById('canvas');
  const burger = new BurgerMenu();
    if(canvas) {
        const animation = new CirclesAnimation;
    }

    if (mainDiv && mainDiv.classList.contains('project')) {
        const tab = new Tab();
    }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) {
    import.meta.webpackHot.accept(console.error);
}
