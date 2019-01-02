/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ 5:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(6);


/***/ }),

/***/ 6:
/***/ (function(module, exports) {

window.addEventListener("load", function () {
	var sideC = document.getElementById("product-price");
	var paral = document.getElementById("related-tours");
	var footer = document.getElementById("foobar");
	// let tab = document.getElementById("tab-wrapper");

	window.addEventListener("scroll", function () {
		if (paral.getBoundingClientRect().top - window.innerHeight <= 0) {
			$('#product-price').fadeOut();
		} else {
			$('#product-price').fadeIn();
		}
	});
	window.addEventListener("scroll", function () {
		if (footer.getBoundingClientRect().top - window.innerHeight <= 0) {
			$('#tab-wrapper').fadeOut();
		} else {
			$('#tab-wrapper').fadeIn();
		}
	});
});

(function ($) {
	$(document).ready(function () {

		$(window).scroll(function () {
			if ($(this).scrollTop() > 150) {
				$("#nav-wrapper").removeClass("animated fadeInDown");
				$("#nav-wrapper").fadeOut(900, 'linear');
			} else {
				$("#nav-wrapper").addClass("animated fadeIn").show();
			}
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#quick-enquiry').on('submit', function (e) {
			e.preventDefault();
			$(".submit").prop("disabled", true);
			data = $(this).serialize();
			action = $(this).attr('action');
			$.ajax({
				type: 'POST',
				url: action,
				data: data,
				success: function success(data) {
					if ($.isEmptyObject(data.error)) {
						$("#quick-enquiry").trigger("reset");
						$('.print-error-msg').find('ul').empty();
						$('.print-error-msg').css('display', 'block');
						$("#response-msg").toggleClass('uk-alert-danger uk-alert-success');
						$('.print-error-msg').find('ul').append("<li>" + data.success + "</li>");
						setTimeout(function () {
							$('.print-error-msg').fadeOut();
							$(".submit").prop("disabled", false);
							UIkit.modal("#modal-quick-enquiry").hide();
						}, 3000);
					} else {
						printMessageErrors(data.error);
					}
				}
			});
		});
		function printMessageErrors(msg) {
			$('.print-error-msg').find('ul').empty();
			$('.print-error-msg').css('display', 'block');
			$.each(msg, function (key, value) {
				$('.print-error-msg').find('ul').append("<li>" + value + "</li>");
			});
		}
	});
})(jQuery);

/***/ })

/******/ });