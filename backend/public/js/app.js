/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// Enhanced JavaScript for login page with smooth animations
console.log('HRMS Login Page Loaded');
document.addEventListener('DOMContentLoaded', function () {
  // Add loading animation to submit button
  var loginForm = document.querySelector('form');
  var submitButton = document.querySelector('.login-button');
  if (loginForm && submitButton) {
    loginForm.addEventListener('submit', function (e) {
      submitButton.classList.add('loading');
      submitButton.disabled = true;
      submitButton.textContent = 'Memproses...';

      // Simulate loading for demo purposes
      setTimeout(function () {
        submitButton.classList.remove('loading');
        submitButton.disabled = false;
        submitButton.textContent = 'Masuk';
      }, 2000);
    });
  }

  // Enhanced input interactions
  var inputs = document.querySelectorAll('.form-input');
  inputs.forEach(function (input) {
    // Focus effect
    input.addEventListener('focus', function () {
      this.parentElement.classList.add('focused');
      this.style.transform = 'translateY(-2px)';
      this.style.boxShadow = '0 8px 25px rgba(255, 255, 255, 0.15)';
    });

    // Blur effect
    input.addEventListener('blur', function () {
      this.parentElement.classList.remove('focused');
      this.style.transform = 'translateY(0)';
      this.style.boxShadow = 'none';
    });

    // Real-time validation
    input.addEventListener('input', function () {
      if (this.value.trim() !== '') {
        this.classList.add('has-value');
      } else {
        this.classList.remove('has-value');
      }
    });
  });

  // Add floating label effect
  var labels = document.querySelectorAll('.form-label');
  labels.forEach(function (label) {
    label.style.transition = 'all 0.3s ease';
  });

  // Password visibility toggle (optional enhancement)
  var passwordInput = document.getElementById('password');
  if (passwordInput) {
    var passwordToggle = document.createElement('span');
    passwordToggle.innerHTML = '👁️';
    passwordToggle.style.position = 'absolute';
    passwordToggle.style.right = '15px';
    passwordToggle.style.top = '50%';
    passwordToggle.style.transform = 'translateY(-50%)';
    passwordToggle.style.cursor = 'pointer';
    passwordToggle.style.opacity = '0.6';
    passwordToggle.style.transition = 'opacity 0.3s ease';
    passwordToggle.addEventListener('mouseenter', function () {
      passwordToggle.style.opacity = '1';
    });
    passwordToggle.addEventListener('mouseleave', function () {
      passwordToggle.style.opacity = '0.6';
    });
    passwordToggle.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordToggle.innerHTML = '🔒';
      } else {
        passwordInput.type = 'password';
        passwordToggle.innerHTML = '👁️';
      }
    });
    var passwordGroup = passwordInput.parentElement;
    passwordGroup.style.position = 'relative';
    passwordGroup.appendChild(passwordToggle);
  }

  // Add subtle background animation
  function createFloatingParticles() {
    var container = document.querySelector('.login-container');
    if (!container) return;
    for (var i = 0; i < 15; i++) {
      var particle = document.createElement('div');
      particle.style.position = 'absolute';
      particle.style.width = Math.random() * 4 + 2 + 'px';
      particle.style.height = particle.style.width;
      particle.style.background = 'rgba(255, 255, 255, 0.1)';
      particle.style.borderRadius = '50%';
      particle.style.top = Math.random() * 100 + '%';
      particle.style.left = Math.random() * 100 + '%';
      particle.style.pointerEvents = 'none';
      particle.style.zIndex = '1';
      container.appendChild(particle);

      // Animate the particle
      animateParticle(particle);
    }
  }
  function animateParticle(particle) {
    var duration = Math.random() * 10 + 10;
    var xMovement = (Math.random() - 0.5) * 100;
    var yMovement = (Math.random() - 0.5) * 100;
    particle.animate([{
      transform: 'translate(0, 0)',
      opacity: 0
    }, {
      transform: "translate(".concat(xMovement, "px, ").concat(yMovement, "px)"),
      opacity: 0.3
    }, {
      transform: "translate(".concat(xMovement * 2, "px, ").concat(yMovement * 2, "px)"),
      opacity: 0
    }], {
      duration: duration * 1000,
      iterations: Infinity
    });
  }
  createFloatingParticles();
  console.log('Enhanced login interactions loaded');
});

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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;