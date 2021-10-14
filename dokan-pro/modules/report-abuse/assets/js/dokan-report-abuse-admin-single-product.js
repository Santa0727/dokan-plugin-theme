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

/***/ "./modules/report-abuse/assets/src/js/admin/single-product.js":
/*!********************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/admin/single-product.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _less_single_product_less__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../less/single-product.less */ \"./modules/report-abuse/assets/src/less/single-product.less\");\n\n;\n\n(function ($) {\n  $('.dokan-report-abuse-admin-single-product-delete-item').on('click', function (e) {\n    e.preventDefault();\n    var button = $(this);\n    var id = button.data('id');\n    var tr = button.parents('tr');\n    var fieldset = button.parents('fieldset');\n\n    if (!confirm(dokanReportAbuse.i18n.confirmDelete)) {\n      return;\n    }\n\n    fieldset.prop('disabled', true);\n    button.html(\"<i class=\\\"fa fa-refresh fa-spin\\\"></i> \".concat(dokanReportAbuse.i18n.deleting, \"...\"));\n    $.ajax({\n      url: \"\".concat(dokanReportAbuse.rest.root, \"dokan/v1/abuse-reports/\").concat(id),\n      method: 'post',\n      beforeSend: function beforeSend(xhr) {\n        xhr.setRequestHeader('X-WP-Nonce', dokanReportAbuse.rest.nonce);\n        xhr.setRequestHeader('X-HTTP-Method-Override', 'DELETE');\n      }\n    }).done(function (response) {\n      tr.remove();\n      alert(dokanReportAbuse.i18n.deletedSuccessfully);\n    }).fail(function (jqXHR) {\n      button.html(\"<i class=\\\"fa fa-trash\\\"></i> \".concat(dokanReportAbuse.i18n.delete));\n\n      if (jqXHR.responseJSON && jqXHR.responseJSON.message) {\n        alert(jqXHR.responseJSON.message);\n      }\n    }).always(function () {\n      fieldset.prop('disabled', false);\n    });\n  });\n})(jQuery);\n\n//# sourceURL=webpack://dokan-pro/./modules/report-abuse/assets/src/js/admin/single-product.js?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/less/single-product.less":
/*!******************************************************************!*\
  !*** ./modules/report-abuse/assets/src/less/single-product.less ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://dokan-pro/./modules/report-abuse/assets/src/less/single-product.less?");

/***/ })

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
/******/ 	var __webpack_exports__ = __webpack_require__("./modules/report-abuse/assets/src/js/admin/single-product.js");
/******/ 	
/******/ })()
;