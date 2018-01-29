webpackJsonp([2],{

/***/ 11:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_vue-loader@11.3.4@vue-loader/lib/component-normalizer.js'");

/***/ }),

/***/ 121:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_lodash@4.17.4@lodash/lodash.js'");

/***/ }),

/***/ 269:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_buefy__ = __webpack_require__(73);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_buefy___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_buefy__);
// 后台管理 的 js


__webpack_require__(94);


Vue.use(__WEBPACK_IMPORTED_MODULE_0_buefy__["default"]);

Vue.component('Menus', __webpack_require__(559));
Vue.component('MenuItem', __webpack_require__(558));

var app = new Vue({
    el: '#app'
});

$(document).ready(function () {

    //Menu
    // if ($('.menu .menu-list a').hasClass('is-active')){
    //
    //     $('.menu .menu-list li ul').show();
    // }else{
    //     $('.menu .menu-list li ul').hide();
    // }

    //
    //
    //     //  Dropdowns
    //     $('.dropdown').hover(function(e) {
    //         $(this).toggleClass('is-open')
    //     })
});

/***/ }),

/***/ 527:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(269);


/***/ }),

/***/ 548:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: {
        icon: String,
        to: {
            default: '/'
        },
        isActive: {
            type: Boolean,
            default: false
        },
        click: {
            type: Function
        },
        router: {
            type: Boolean,
            default: true
        }
    },
    data: function data() {
        return {
            hasChildren: false,
            isOpen: false,
            arrowClass: 'fa-caret-down',
            type: this.$parent.type
        };
    },

    //
    //  computed: {
    //    isOpen() {
    //      return this.isActive;
    //    },
    //  },
    methods: {
        toggle: function toggle() {
            this.isOpen = !this.isOpen;
        },
        getChildrenStatus: function getChildrenStatus() {
            var _this = this;

            this.$children.every(function (item) {
                if (item.isOpen) _this.isOpen = true;
                if (item.type === 'float') _this.arrowClass = 'fa-caret-right';
                return true;
            });
        }
    },
    mounted: function mounted() {
        this.isOpen = this.isActive;
        this.hasChildren = !!this.$slots.sub;
        if (this.hasChildren) {
            this.getChildrenStatus();
            if (this.arrowClass === 'fa-caret-right') {
                this.$el.addEventListener('mouseenter', this.toggle);
                this.$el.addEventListener('mouseleave', this.toggle);
            }
        }
    },
    beforeDestroy: function beforeDestroy() {
        this.$el.removeEventListener('mouseenter', this.toggle);
        this.$el.removeEventListener('mouseleave', this.toggle);
    }
});

/***/ }),

/***/ 549:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: {
        label: String,
        type: {
            type: String,
            default: 'collapse'
        }
    },
    data: function data() {
        return {
            typeClass: this.type,
            isOpen: false
        };
    },

    methods: {
        hasOpened: function hasOpened() {
            var _this = this;

            this.$children.every(function (item) {
                if (item.isOpen) _this.isOpen = true;
                return true;
            });
            return false;
        }
    },
    mounted: function mounted() {
        this.hasOpened();
    }
});

/***/ }),

/***/ 558:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(548),
  /* template */
  __webpack_require__(561),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/home/MenuItem.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] MenuItem.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-65b04de8", Component.options)
  } else {
    hotAPI.reload("data-v-65b04de8", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 559:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(549),
  /* template */
  __webpack_require__(560),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/home/Menus.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Menus.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-43dc4f2c", Component.options)
  } else {
    hotAPI.reload("data-v-43dc4f2c", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 560:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(_vm.label) ? _c('p', {
    staticClass: "menu-label"
  }, [_vm._v(_vm._s(_vm.label))]) : _vm._e(), _vm._v(" "), _c('ul', {
    staticClass: "menu-list",
    class: _vm.type
  }, [_vm._t("default")], 2)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-43dc4f2c", module.exports)
  }
}

/***/ }),

/***/ 561:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('li', {
    class: {
      'is-active': _vm.isActive
    }
  }, [(!_vm.hasChildren) ? _c('span', [(!_vm.click) ? _c('router-link', {
    attrs: {
      "to": _vm.to,
      "exact": ""
    }
  }, [(_vm.icon) ? _c('i', {
    staticClass: "fa",
    class: [("fa-" + _vm.icon)]
  }) : _vm._e(), _vm._v(" "), _vm._t("default")], 2) : _vm._e(), _vm._v(" "), (_vm.click) ? _c('a', {
    attrs: {
      "href": "javascript:void(0)"
    },
    on: {
      "click": _vm.click
    }
  }, [(_vm.icon) ? _c('i', {
    staticClass: "fa",
    class: [("fa-" + _vm.icon)]
  }) : _vm._e(), _vm._v(" "), _vm._t("default")], 2) : _vm._e()], 1) : _vm._e(), _vm._v(" "), (_vm.hasChildren) ? _c('span', [_c('a', {
    staticClass: "has-children",
    class: {
      'is-active': _vm.isActive, 'is-open': _vm.isOpen,
    },
    attrs: {
      "href": "javascript:void(0)"
    },
    on: {
      "click": _vm.toggle
    }
  }, [(_vm.icon) ? _c('i', {
    staticClass: "fa",
    class: [("fa-" + _vm.icon)]
  }) : _vm._e(), _vm._v(" "), _vm._t("default"), _vm._v(" "), _c('span', {
    staticClass: "nav-right"
  }, [_c('i', {
    staticClass: "fa",
    class: [_vm.arrowClass]
  })])], 2)]) : _vm._e(), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.isOpen),
      expression: "isOpen"
    }]
  }, [_vm._t("sub")], 2)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-65b04de8", module.exports)
  }
}

/***/ }),

/***/ 71:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_jquery@3.2.1@jquery/dist/jquery.js'");

/***/ }),

/***/ 76:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_axios@0.15.3@axios/index.js'");

/***/ }),

/***/ 94:
/***/ (function(module, exports, __webpack_require__) {


window._ = __webpack_require__(121);

window.Vue = __webpack_require__(75);

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.$ = window.jQuery = __webpack_require__(71);
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = __webpack_require__(76);

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });


window.events = new Vue();

window.flash = function (text) {
  var level = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'success';


  var message = { 'text': text, 'level': level };
  window.events.$emit('flash', message);
};

/***/ })

},[527]);