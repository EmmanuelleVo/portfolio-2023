import domReady from '@roots/sage/client/dom-ready';
import Tab from "@scripts/components/Tab.js";

/**
 * Application entrypoint
 */
domReady(async() => {
  // ...
    const mainDiv = document.getElementById('js');

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
