// you can import modules from the theme lib or even from
// NPM packages if they support it…
// import ExampleComponent1 from "./components/ExampleComponent1";
import SVGInject from '../../node_modules/@iconfu/svg-inject/dist/svg-inject.min';

// you can also require modules if they support it…
// const ExampleModule2 = require('./components/example-2');

// Some convenient tools to get you started…
// import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
import AnimateOnPageLinks from "./components/AnimateOnPageLinks";

document.addEventListener('DOMContentLoaded', function () {
    AnimateOnPageLinks.init();
    SVGInject(document.querySelectorAll("img.injectable"));
})