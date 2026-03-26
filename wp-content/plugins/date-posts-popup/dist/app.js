/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scss/app.scss"
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("{__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://date-posts-popup/./src/scss/app.scss?\n}");

/***/ },

/***/ "./src/js/app.js"
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/app.scss */ \"./src/scss/app.scss\");\n\ndocument.addEventListener('DOMContentLoaded', () => {\n    const popup = document.querySelector('[data-dpp-popup]');\n\n    if (!popup) {\n        return;\n    }\n\n    const popupImage = popup.querySelector('[data-dpp-popup-image]');\n    const popupDate = popup.querySelector('[data-dpp-popup-date]');\n    const popupTitle = popup.querySelector('[data-dpp-popup-title]');\n    const popupExcerpt = popup.querySelector('[data-dpp-popup-excerpt]');\n    const popupLink = popup.querySelector('[data-dpp-popup-link]');\n\n    const openButtons = document.querySelectorAll('[data-dpp-open-popup]');\n    const closeButtons = popup.querySelectorAll('[data-dpp-close-popup]');\n\n    const openPopup = (button) => {\n        const title = button.dataset.title || '';\n        const date = button.dataset.date || '';\n        const excerpt = button.dataset.excerpt || '';\n        const image = button.dataset.image || '';\n        const link = button.dataset.link || '#';\n\n        popupTitle.textContent = title;\n        popupDate.textContent = date;\n        popupExcerpt.textContent = excerpt;\n        popupLink.setAttribute('href', link);\n\n        if (image) {\n            popupImage.setAttribute('src', image);\n            popupImage.setAttribute('alt', title);\n            popupImage.removeAttribute('hidden');\n        } else {\n            popupImage.setAttribute('src', '');\n            popupImage.setAttribute('alt', '');\n            popupImage.setAttribute('hidden', '');\n        }\n\n        popup.removeAttribute('hidden');\n        document.body.classList.add('dpp-popup-open');\n    };\n\n    const closePopup = () => {\n        popup.setAttribute('hidden', '');\n        document.body.classList.remove('dpp-popup-open');\n    };\n\n    openButtons.forEach((button) => {\n        button.addEventListener('click', () => {\n            openPopup(button);\n        });\n    });\n\n    closeButtons.forEach((button) => {\n        button.addEventListener('click', closePopup);\n    });\n\n    document.addEventListener('keydown', (event) => {\n        if (event.key === 'Escape' && !popup.hasAttribute('hidden')) {\n            closePopup();\n        }\n    });\n});\n\n//# sourceURL=webpack://date-posts-popup/./src/js/app.js?\n}");

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/app.js");
/******/ 	
/******/ })()
;