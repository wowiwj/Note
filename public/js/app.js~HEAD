webpackJsonp([0],{

/***/ 11:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_vue-loader@11.3.4@vue-loader/lib/component-normalizer.js'");

/***/ }),

/***/ 121:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_lodash@4.17.4@lodash/lodash.js'");

/***/ }),

/***/ 124:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__ = __webpack_require__(72);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__);
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }



var MdeImageHelper = function () {
    function MdeImageHelper() {
        _classCallCheck(this, MdeImageHelper);
    }

    _createClass(MdeImageHelper, null, [{
        key: "selectImage",
        value: function selectImage(editor) {

            var fileBtn = document.getElementById("btn_file");

            console.log(this);

            fileBtn.onchange = function () {

                MdeImageHelper.uploadImage(editor);
            }.bind(editor);

            fileBtn.click();
        }
    }, {
        key: "uploadImage",
        value: function uploadImage(editor) {

            console.log(editor);

            var fileBtn = document.getElementById("btn_file");
            var formData = new FormData();
            formData.append("file", fileBtn.files[0]);
            axios.post('/api/v1/image/upload', formData).then(function (_ref) {
                var data = _ref.data;


                var pos = editor.codemirror.getCursor();
                editor.codemirror.setSelection(pos, pos);
                editor.codemirror.replaceSelection('![](' + data.data.image + ')');

                console.log(data);
            });
            console.log(fileBtn.files[0]);
            console.log(1);
        }
    }]);

    return MdeImageHelper;
}();

/* harmony default export */ __webpack_exports__["a"] = ({
    getToolBarConfig: function getToolBarConfig() {
        return [{
            name: "bold",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleBold,
            className: "fa fa-bold",
            title: "Bold"
        }, {
            name: "italic",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleItalic,
            className: "fa fa-italic",
            title: "Italic"
        }, {
            name: "strikethrough",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleStrikethrough,
            className: "fa fa-strikethrough",
            title: "Strikethrough"
        }, {
            name: "header",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleHeadingSmaller,
            className: "fa fa-header",
            title: "Heading"
        }, {
            name: "code",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleCodeBlock,
            className: "fa fa-code",
            title: "Code"
        }, {
            name: "quote",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleBlockquote,
            className: "fa fa-quote-left",
            title: "Quote"
        }, {
            name: "unordered-list",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleUnorderedList,
            className: "fa fa-list-ul",
            title: "Generic List"
        }, {
            name: "ordered-list",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleOrderedList,
            className: "fa fa-list-ol",
            title: "Numbered List"
        }, {
            name: "link",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].drawLink,
            className: "fa fa-link",
            title: "Create Link"
        }, {
            name: "image",
            action: MdeImageHelper.selectImage,
            className: "fa fa-picture-o",
            title: "Insert Image"
        }, {
            name: "table",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].drawTable,
            className: "fa fa-table",
            title: "Insert Table"
        }, {
            name: "horizontal-rule",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].drawHorizontalRule,
            className: "fa fa-minus",
            title: "Insert Horizontal Line"
        }, {
            name: "preview",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].togglePreview,
            className: "fa fa-eye no-disable",
            title: "Toggle Preview"
        }, {
            name: "side-by-side",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleSideBySide,
            className: "fa fa-columns no-disable no-mobile",
            title: "Toggle Side by Side"
        }, {
            name: "fullscreen",
            action: __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"].toggleFullScreen,
            className: "fa fa-arrows-alt no-disable no-mobile",
            title: "Toggle Fullscreen"
        }, {
            name: "guide",
            action: function openGuide(editor) {
                window.open("https://simplemde.com/markdown-guide");
            },
            className: "fa fa-question-circle",
            title: "Markdown Guide"
        }];
    }
});

/***/ }),

/***/ 268:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(94);

try {
    __webpack_require__(550);
} catch (e) {}

Vue.prototype.authorize = function (hander) {
    var user = window.App.user;

    return user ? hander(user) : false;
};

__webpack_require__(289);

__webpack_require__(288);

// var VueQuillEditor = require('vue-quill-editor');
//
// Vue.use(VueQuillEditor);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example1', require('./components/Example.vue'));
Vue.component('flash', __webpack_require__(491));
Vue.component('ArticleEditor', __webpack_require__(556));
Vue.component('ArticleMdEditor', __webpack_require__(486));
Vue.component('parse', __webpack_require__(498));
Vue.component('ArticleInfo', __webpack_require__(557));
Vue.component('ArticleView', __webpack_require__(500));
Vue.component('Paginator', __webpack_require__(497));
Vue.component('Comments', __webpack_require__(489));
Vue.component('UploadAvatar', __webpack_require__(499));
Vue.component('PageMdEditor', __webpack_require__(496));

window.marked = __webpack_require__(481);

var app = new Vue({
    el: '#app'
});

/***/ }),

/***/ 270:
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n@import \"node_modules/bootstrap-sass/assets/stylesheets/bootstrap\";\n^\n      File to import not found or unreadable: node_modules/bootstrap-sass/assets/stylesheets/bootstrap.\nParent style sheet: stdin\n      in /Users/wangju/Desktop/Code/PHP/Note/resources/assets/sass/app.scss (line 14, column 1)\n    at runLoaders (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_webpack@2.3.3@webpack/lib/NormalModule.js:192:19)\n    at /Users/wangju/Desktop/Code/PHP/Note/node_modules/_loader-runner@2.3.0@loader-runner/lib/LoaderRunner.js:364:11\n    at /Users/wangju/Desktop/Code/PHP/Note/node_modules/_loader-runner@2.3.0@loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_loader-runner@2.3.0@loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js:57:13)\n    at Object.<anonymous> (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_async@2.4.1@async/dist/async.js:2243:31)\n    at Object.callback (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_async@2.4.1@async/dist/async.js:906:16)\n    at options.error (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_node-sass@4.5.3@node-sass/lib/index.js:294:32)");

/***/ }),

/***/ 271:
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n@import \"node_modules/font-awesome/scss/font-awesome\";\n^\n      File to import not found or unreadable: node_modules/font-awesome/scss/font-awesome.\nParent style sheet: stdin\n      in /Users/wangju/Desktop/Code/PHP/Note/resources/assets/sass/home.scss (line 7, column 1)\n    at runLoaders (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_webpack@2.3.3@webpack/lib/NormalModule.js:192:19)\n    at /Users/wangju/Desktop/Code/PHP/Note/node_modules/_loader-runner@2.3.0@loader-runner/lib/LoaderRunner.js:364:11\n    at /Users/wangju/Desktop/Code/PHP/Note/node_modules/_loader-runner@2.3.0@loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_loader-runner@2.3.0@loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js:57:13)\n    at Object.<anonymous> (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_async@2.4.1@async/dist/async.js:2243:31)\n    at Object.callback (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_async@2.4.1@async/dist/async.js:906:16)\n    at options.error (/Users/wangju/Desktop/Code/PHP/Note/node_modules/_node-sass@4.5.3@node-sass/lib/index.js:294:32)");

/***/ }),

/***/ 273:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue_multiselect__ = __webpack_require__(74);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue_multiselect___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue_multiselect__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Switch_vue__ = __webpack_require__(544);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Switch_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__Switch_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__ = __webpack_require__(72);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__);
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
//
//
//
//
//






__webpack_require__(543);

/* harmony default export */ __webpack_exports__["default"] = ({
    components: { Multiselect: __WEBPACK_IMPORTED_MODULE_0_vue_multiselect__["default"], VueSwitch: __WEBPACK_IMPORTED_MODULE_1__Switch_vue___default.a },
    props: ['articleId'],
    data: function data() {
        return {
            categories: [],
            category: null,
            title: '',
            article: {},
            simplemde: '',
            pageImage: '',
            isOriginal: true
        };
    },

    computed: {
        isUpdate: function isUpdate() {
            return this.articleId != null;
        }

    },
    mounted: function mounted() {

        this.simplemde = new __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"]({
            toolbar: [{
                name: "bold",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleBold,
                className: "fa fa-bold",
                title: "Bold"
            }, {
                name: "italic",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleItalic,
                className: "fa fa-italic",
                title: "Italic"
            }, {
                name: "strikethrough",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleStrikethrough,
                className: "fa fa-strikethrough",
                title: "Strikethrough"
            }, {
                name: "header",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleHeadingSmaller,
                className: "fa fa-header",
                title: "Heading"
            }, "|", {
                name: "code",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleCodeBlock,
                className: "fa fa-code",
                title: "Code"
            }, {
                name: "quote",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleBlockquote,
                className: "fa fa-quote-left",
                title: "Quote"
            }, {
                name: "unordered-list",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleUnorderedList,
                className: "fa fa-list-ul",
                title: "Generic List"
            }, {
                name: "ordered-list",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleOrderedList,
                className: "fa fa-list-ol",
                title: "Numbered List"
            }, "|", {
                name: "link",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].drawLink,
                className: "fa fa-link",
                title: "Create Link"
            }, {
                name: "image",
                action: this.selectImage,
                className: "fa fa-picture-o",
                title: "Insert Image"
            }, {
                name: "table",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].drawTable,
                className: "fa fa-table",
                title: "Insert Table"
            }, {
                name: "horizontal-rule",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].drawHorizontalRule,
                className: "fa fa-minus",
                title: "Insert Horizontal Line"
            }, "|", {
                name: "preview",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].togglePreview,
                className: "fa fa-eye no-disable",
                title: "Toggle Preview"
            }, {
                name: "side-by-side",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleSideBySide,
                className: "fa fa-columns no-disable no-mobile",
                title: "Toggle Side by Side"
            }, {
                name: "fullscreen",
                action: __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"].toggleFullScreen,
                className: "fa fa-arrows-alt no-disable no-mobile",
                title: "Toggle Fullscreen"
            }, {
                name: "guide",
                action: function openGuide(editor) {
                    window.open("https://simplemde.com/markdown-guide");
                },
                className: "fa fa-question-circle",
                title: "Markdown Guide"
            }],
            element: document.getElementById("editor"),
            placeholder: '请输入文章内容.',
            autoDownloadFontAwesome: true,
            spellChecker: false
        });
    },

    methods: {
        create: function create() {

            if (!this.category) {
                flash('Category must select one or more.', 'danger');
                return;
            }
            var value = this.simplemde.value();
            console.log(value);

            var formData = new FormData(event.target);
            formData.append('body', this.simplemde.value());
            formData.append('title', this.title);
            formData.append('category_id', this.category.id);
            formData.append('is_original', this.isOriginal ? 1 : 0);

            console.log(formData);

            axios.post('/api/v1/articles', formData).then(function (response) {

                flash('添加成功', 'success');

                var article = response.data;
                console.log(article);

                var path = 'articles' + '/' + article.category.name + '/' + article.id;

                window.location.href = '/' + path;
                console.log(path);
            }, function (error) {
                console.log(error);
            });
        },
        update: function update() {

            if (!this.category) {
                flash('Category must select one or more.', 'danger');
                return;
            }
            var value = this.simplemde.value();
            console.log(value);

            var formData = new FormData(event.target);
            formData.append('content', value);
            formData.append('title', this.title);
            formData.append('category_id', this.category.id);
            formData.append('is_original', this.isOriginal ? 1 : 0);

            console.log(value);
            console.log(this.title);
            console.log(this.category.id);
            console.log(formData);

            axios.post('/api/v1/articles/' + this.articleId + '?_method=put', formData).then(function (response) {

                flash('修改成功', 'success');

                var article = response.data;
                console.log(response.data);

                var path = 'articles' + '/' + article.category.slug + '/' + article.id;

                window.location.href = '/' + path;
                console.log(path);
            }, function (error) {
                console.log(error);
            });
        },
        selectImage: function selectImage(editor) {
            var fileBtn = document.getElementById("btn_file");
            fileBtn.onchange = this.uploadImage;
            fileBtn.click();
        },
        uploadImage: function uploadImage() {
            var _this = this;

            var fileBtn = document.getElementById("btn_file");
            var formData = new FormData();
            formData.append("file", fileBtn.files[0]);
            axios.post('/api/v1/image/upload', formData).then(function (_ref) {
                var data = _ref.data;


                var pos = _this.simplemde.codemirror.getCursor();
                _this.simplemde.codemirror.setSelection(pos, pos);
                _this.simplemde.codemirror.replaceSelection('![](' + data.data.image + ')');

                console.log(data);
            });
            console.log(fileBtn.files[0]);
            console.log(1);
        },
        fetchCategories: function fetchCategories() {
            var _this2 = this;

            axios.get('/api/v1/categories/all').then(function (response) {
                console.log(response.data);
                _this2.categories = response.data.data;
            }, function (error) {
                console.log(error);
            });
        },
        fetchArticle: function fetchArticle() {
            var _this3 = this;

            axios.get('/api/v1/articles/' + this.articleId).then(function (response) {
                console.log(response.data);
                _this3.category = response.data.category;
                _this3.article = response.data;
                _this3.title = _this3.article.title;
                _this3.simplemde.value(JSON.parse(_this3.article.body).raw);
                _this3.isOriginal = _this3.article.is_original == 1;
            }, function (error) {
                console.log(error);
            });
        },
        changeOrignalState: function changeOrignalState(state) {

            this.isOriginal = state;
        }
    },
    created: function created() {

        this.fetchCategories();
        if (!this.isUpdate) {
            return;
        }
        this.fetchArticle();

        console.log('created');
    }
});

/***/ }),

/***/ 275:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_moment__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_moment___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_moment__);
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



__WEBPACK_IMPORTED_MODULE_0_moment__["default"].locale('zh-cn');

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['comment', 'index'],
    computed: {
        body: function body() {
            var comment = JSON.parse(this.comment.body);

            return marked(comment.raw);
        },
        ago: function ago() {

            return __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0_moment__["default"])(this.comment.created_at).fromNow();
        },
        profile: function profile() {
            return '/users/' + this.comment.user.id;
        },
        canReplyUser: function canReplyUser() {

            return window.App.signedIn;
        },
        canDelete: function canDelete() {
            return window.App.signedIn && this.comment.user.id == window.App.user.id;
        }
    },
    methods: {
        replyUser: function replyUser() {

            window.events.$emit('reply', this.comment.user);
        },
        deleteComment: function deleteComment() {
            var _this = this;

            axios.delete('/api/v1/comments/' + this.comment.id).then(function (_ref) {
                var data = _ref.data;


                flash('删除成功', 'success');

                _this.$emit('commentDelete', _this.index);
            }, function (_ref2) {
                var error = _ref2.error;

                flash('删除失败', 'danger');

                console.log(error);
            });
        }
    }

});

/***/ }),

/***/ 276:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Comment_vue__ = __webpack_require__(488);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Comment_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__Comment_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__NewComment_vue__ = __webpack_require__(495);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__NewComment_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__NewComment_vue__);
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
//
//
//
//
//
//





/* harmony default export */ __webpack_exports__["default"] = ({
    components: {
        Comment: __WEBPACK_IMPORTED_MODULE_0__Comment_vue___default.a,
        NewComment: __WEBPACK_IMPORTED_MODULE_1__NewComment_vue___default.a

    },
    data: function data() {
        return {
            dataSet: false,
            items: []

        };
    },
    created: function created() {

        this.fetch();
        console.log('success');
    },
    updated: function updated() {
        Prism.highlightAll();

        $('[data-toggle="tooltip"]').tooltip();
    },

    methods: {
        fetch: function fetch(page) {
            axios.get(this.url(page)).then(this.refresh);
        },
        url: function url(page) {
            if (!page) {
                var query = location.search.match(/page=(\d+)/);
                page = query ? query[1] : 1;
            }
            console.log(location.pathname);
            return '/api/v1' + location.pathname + '/comments?page=' + page;
        },
        refresh: function refresh(_ref) {
            var data = _ref.data;

            this.dataSet = data;
            this.items = data.data;

            window.scrollTo(0, 0);
        },
        add: function add(data) {
            this.items.push(data);
        },
        removeComment: function removeComment(index) {

            this.items.splice(index, 1);
        }
    }
});

/***/ }),

/***/ 278:
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

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['message', 'level'],
    data: function data() {
        return {
            body: '',
            showLevel: 'success',
            show: false
        };
    },
    created: function created() {
        var _this = this;

        console.log(this.message + this.level);
        if (this.message) {

            this.flash(this.message, this.level);
        }

        window.events.$on('flash', function (message) {
            _this.flash(message.text, message.level);
        });

        this.hide();
    },

    methods: {
        flash: function flash(message) {
            var level = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'success';

            this.body = message;
            this.showLevel = level;
            this.show = true;
            this.hide();
        },
        hide: function hide() {
            var _this2 = this;

            setTimeout(function () {
                _this2.show = false;
            }, 3000);
        }
    },
    computed: {
        levelClass: function levelClass() {
            return 'alert-' + this.showLevel;
        }
    }
});

/***/ }),

/***/ 282:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__ = __webpack_require__(72);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__);
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
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            body: '',
            simplemde: null
        };
    },

    methods: {
        newComment: function newComment() {
            var _this = this;

            var value = this.simplemde.value();
            if (!value) {
                flash('评论内容不能为空', 'danger');
                return;
            }
            var formData = new FormData(event.target);
            formData.append('body', value);

            axios.post('/api/v1' + location.pathname + '/comments', formData).then(function (_ref) {
                var data = _ref.data;

                console.log(data);
                _this.simplemde.value('');
                flash('添加评论成功');
                _this.$emit('created', data.data);
            });
        },
        initmde: function initmde() {
            this.simplemde = new __WEBPACK_IMPORTED_MODULE_0_simplemde_dist_simplemde_min_js__["default"]({
                toolbar: [{
                    name: "select image",
                    action: function customFunction(editor) {
                        var fileBtn = document.getElementById("btn_file");
                        fileBtn.click();

                        fileBtn.onchange = function () {
                            var formData = new FormData();
                            formData.append("file", fileBtn.files[0]);

                            axios.post('/api/v1/image/upload', formData).then(function (_ref2) {
                                var data = _ref2.data;


                                editor.value(editor.value() + '![](' + data.data.image + ')');
                                console.log(data);
                            }, function (_ref3) {
                                var error = _ref3.error;


                                flash('添加失败,请确认上传的为jpg,png,gif格式', 'danger');
                                fileBtn.value = '';
                                return;
                            });

                            console.log(fileBtn);

                            console.log(1);
                        };

                        // Add your own code
                    },
                    className: "fa fa-image",
                    title: "select image"
                }],
                element: document.getElementById("editor"),
                placeholder: '请输入评论内容.',
                autoDownloadFontAwesome: true,
                spellChecker: false
            });
        }
    },
    mounted: function mounted() {
        var _this2 = this;

        this.initmde();

        window.events.$on('reply', function (user) {
            _this2.simplemde.value('@' + user.name + ' ');
        });
    },

    computed: {
        signedIn: function signedIn() {
            return window.App.signedIn;
        }
    }

});

/***/ }),

/***/ 283:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue_multiselect__ = __webpack_require__(74);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue_multiselect___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue_multiselect__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Switch_vue__ = __webpack_require__(544);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Switch_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__Switch_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__ = __webpack_require__(72);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__modules_MdeConfig_js__ = __webpack_require__(124);
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







__webpack_require__(543);

/* harmony default export */ __webpack_exports__["default"] = ({
    components: { Multiselect: __WEBPACK_IMPORTED_MODULE_0_vue_multiselect__["default"], VueSwitch: __WEBPACK_IMPORTED_MODULE_1__Switch_vue___default.a },
    props: ['pageId'],
    data: function data() {
        return {
            route: '',
            title: '',
            article: {},
            simplemde: '',
            pageImage: '',
            isShowNav: true,
            mdeConfig: null
        };
    },

    computed: {
        isUpdate: function isUpdate() {
            return this.pageId != null;
        }

    },
    mounted: function mounted() {

        this.simplemde = new __WEBPACK_IMPORTED_MODULE_2_simplemde_dist_simplemde_min_js__["default"]({
            toolbar: __WEBPACK_IMPORTED_MODULE_3__modules_MdeConfig_js__["a" /* default */].getToolBarConfig(),
            element: document.getElementById("editor"),
            placeholder: '请输入页面内容.',
            autoDownloadFontAwesome: true,
            spellChecker: false
        });
    },

    methods: {
        create: function create() {

            if (!this.route) {
                flash('Route name can not empty.', 'danger');
                return;
            }
            var value = this.simplemde.value();
            console.log(value);

            var formData = new FormData(event.target);
            formData.append('body', this.simplemde.value());
            formData.append('title', this.title);
            formData.append('route', this.route);
            formData.append('isShowNav', this.isShowNav ? 1 : 0);

            console.log(formData);

            axios.post('/api/v1/special_pages', formData).then(function (response) {

                flash('添加成功', 'success');

                var page = response.data.data;

                var path = page.route;

                window.location.href = '/' + path;
            }, function (error) {
                console.log(error);
            });
        },
        update: function update() {

            if (!this.route) {
                flash('Route name can not empty.', 'danger');
                return;
            }
            var value = this.simplemde.value();
            console.log(value);

            var formData = new FormData(event.target);
            formData.append('body', this.simplemde.value());
            formData.append('title', this.title);
            formData.append('route', this.route);
            formData.append('isShowNav', this.isShowNav ? 1 : 0);

            axios.post('/api/v1/special_pages/' + this.pageId + '?_method=put', formData).then(function (response) {

                flash('修改成功', 'success');
                var page = response.data.data;

                var path = page.route;

                window.location.href = '/' + path;
                console.log(path);
            }, function (error) {
                console.log(error);
            });
        },
        fetchPage: function fetchPage() {
            var _this = this;

            axios.get('/api/v1/special_pages/' + this.pageId).then(function (response) {
                console.log(response.data);
                var data = response.data.data;
                _this.route = data.route;
                _this.title = data.title;
                _this.simplemde.value(data.body);

                _this.isShowNav = data.isShowNav;
            }, function (error) {
                console.log(error);
            });
        },
        changeShowNavState: function changeShowNavState(state) {

            this.isShowNav = state;
        }
    },
    created: function created() {

        if (!this.isUpdate) {
            return;
        }
        this.fetchPage();

        console.log('created');
    }
});

/***/ }),

/***/ 284:
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

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['dataSet'],
    data: function data() {
        return {
            page: 1,
            prevUrl: false,
            nextUrl: false
        };
    },

    watch: {
        dataSet: function dataSet() {
            this.page = this.dataSet.pagination.current_page;
            this.prevUrl = this.dataSet.pagination.links.previous;
            this.nextUrl = this.dataSet.pagination.links.next;
        },
        page: function page() {
            this.broadcast().updateUrl();
        }
    },
    computed: {
        shouldPaginate: function shouldPaginate() {
            return !!this.prevUrl || !!this.nextUrl;
        }
    },
    methods: {
        broadcast: function broadcast() {
            return this.$emit('changed', this.page);
        },
        updateUrl: function updateUrl() {
            history.pushState(null, null, '?page=' + this.page);
        }
    }
});

/***/ }),

/***/ 285:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: {
        markdown: String,
        content: {
            type: Object,
            default: function _default() {
                return null;
            }
        }
    },
    data: function data() {
        return {
            rawHtml: ''
        };
    },
    created: function created() {

        if (this.markdown) {

            this.rawHtml = marked(this.markdown);
            return;
        }

        this.rawHtml = marked(this.content.raw);
    }
});

/***/ }),

/***/ 286:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_polyfill__ = __webpack_require__(290);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_polyfill___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_polyfill__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vue_image_crop_upload_upload_2_vue__ = __webpack_require__(485);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vue_image_crop_upload_upload_2_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_vue_image_crop_upload_upload_2_vue__);
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
//
//

 // es6 shim


/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['avatar'],
    data: function data() {
        return {
            show: false,
            params: {
                _token: window.App.csrfTtoken,
                name: 'avatar'
            },
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": window.App.csrfTtoken,
                smail: '*_~'
            },
            imgDataUrl: this.avatar
        };
    },

    components: {
        'my-upload': __WEBPACK_IMPORTED_MODULE_1_vue_image_crop_upload_upload_2_vue__["default"]
    },
    methods: {
        toggleShow: function toggleShow() {
            this.show = !this.show;
        },

        /**
         * crop success
         *
         * [param] imgDataUrl
         * [param] field
         */
        cropSuccess: function cropSuccess(imgDataUrl, field) {
            console.log('-------- crop success --------');
            this.imgDataUrl = imgDataUrl;
        },

        /**
         * upload success
         *
         * [param] jsonData  server api return data, already json encode
         * [param] field
         */
        cropUploadSuccess: function cropUploadSuccess(jsonData, field) {
            console.log('-------- upload success --------');
            console.log(jsonData);
            console.log('field: ' + field);
        },

        /**
         * upload fail
         *
         * [param] status    server api return error status, like 500
         * [param] field
         */
        cropUploadFail: function cropUploadFail(status, field) {
            console.log('-------- upload fail --------');
            console.log(status);
            console.log('field: ' + field);
        }
    }

});

/***/ }),

/***/ 287:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });


/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['initialCommentsCount'],
    data: function data() {
        return {
            commentsCount: this.initialCommentsCount
        };
    }
});

/***/ }),

/***/ 288:
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

// Sticky Plugin v1.0.4 for jQuery
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 02/14/2011
// Date: 07/20/2015
// Website: http://stickyjs.com/
// Description: Makes an element on the page stick on the screen as you scroll
//              It will only set the 'top' and 'position' of your element, you
//              might need to adjust the width in some cases.

(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(71)], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else if ((typeof module === 'undefined' ? 'undefined' : _typeof(module)) === 'object' && module.exports) {
    // Node/CommonJS
    module.exports = factory(require('jquery'));
  } else {
    // Browser globals
    factory(jQuery);
  }
})(function ($) {
  var slice = Array.prototype.slice; // save ref to original slice()
  var splice = Array.prototype.splice; // save ref to original slice()

  var defaults = {
    topSpacing: 0,
    bottomSpacing: 0,
    className: 'is-sticky',
    wrapperClassName: 'sticky-wrapper',
    center: false,
    getWidthFrom: '',
    widthFromWrapper: true, // works only when .getWidthFrom is empty
    responsiveWidth: false,
    zIndex: 'inherit'
  },
      $window = $(window),
      $document = $(document),
      sticked = [],
      windowHeight = $window.height(),
      scroller = function scroller() {
    var scrollTop = $window.scrollTop(),
        documentHeight = $document.height(),
        dwh = documentHeight - windowHeight,
        extra = scrollTop > dwh ? dwh - scrollTop : 0;

    for (var i = 0, l = sticked.length; i < l; i++) {
      var s = sticked[i],
          elementTop = s.stickyWrapper.offset().top,
          etse = elementTop - s.topSpacing - extra;

      //update height in case of dynamic content
      s.stickyWrapper.css('height', s.stickyElement.outerHeight());

      if (scrollTop <= etse) {
        if (s.currentTop !== null) {
          s.stickyElement.css({
            'width': '',
            'position': '',
            'top': '',
            'z-index': ''
          });
          s.stickyElement.parent().removeClass(s.className);
          s.stickyElement.trigger('sticky-end', [s]);
          s.currentTop = null;
        }
      } else {
        var newTop = documentHeight - s.stickyElement.outerHeight() - s.topSpacing - s.bottomSpacing - scrollTop - extra;
        if (newTop < 0) {
          newTop = newTop + s.topSpacing;
        } else {
          newTop = s.topSpacing;
        }
        if (s.currentTop !== newTop) {
          var newWidth;
          if (s.getWidthFrom) {
            padding = s.stickyElement.innerWidth() - s.stickyElement.width();
            newWidth = $(s.getWidthFrom).width() - padding || null;
          } else if (s.widthFromWrapper) {
            newWidth = s.stickyWrapper.width();
          }
          if (newWidth == null) {
            newWidth = s.stickyElement.width();
          }
          s.stickyElement.css('width', newWidth).css('position', 'fixed').css('top', newTop).css('z-index', s.zIndex);

          s.stickyElement.parent().addClass(s.className);

          if (s.currentTop === null) {
            s.stickyElement.trigger('sticky-start', [s]);
          } else {
            // sticky is started but it have to be repositioned
            s.stickyElement.trigger('sticky-update', [s]);
          }

          if (s.currentTop === s.topSpacing && s.currentTop > newTop || s.currentTop === null && newTop < s.topSpacing) {
            // just reached bottom || just started to stick but bottom is already reached
            s.stickyElement.trigger('sticky-bottom-reached', [s]);
          } else if (s.currentTop !== null && newTop === s.topSpacing && s.currentTop < newTop) {
            // sticky is started && sticked at topSpacing && overflowing from top just finished
            s.stickyElement.trigger('sticky-bottom-unreached', [s]);
          }

          s.currentTop = newTop;
        }

        // Check if sticky has reached end of container and stop sticking
        var stickyWrapperContainer = s.stickyWrapper.parent();
        var unstick = s.stickyElement.offset().top + s.stickyElement.outerHeight() >= stickyWrapperContainer.offset().top + stickyWrapperContainer.outerHeight() && s.stickyElement.offset().top <= s.topSpacing;

        if (unstick) {
          s.stickyElement.css('position', 'absolute').css('top', '').css('bottom', 0).css('z-index', '');
        } else {
          s.stickyElement.css('position', 'fixed').css('top', newTop).css('bottom', '').css('z-index', s.zIndex);
        }
      }
    }
  },
      resizer = function resizer() {
    windowHeight = $window.height();

    for (var i = 0, l = sticked.length; i < l; i++) {
      var s = sticked[i];
      var newWidth = null;
      if (s.getWidthFrom) {
        if (s.responsiveWidth) {
          newWidth = $(s.getWidthFrom).width();
        }
      } else if (s.widthFromWrapper) {
        newWidth = s.stickyWrapper.width();
      }
      if (newWidth != null) {
        s.stickyElement.css('width', newWidth);
      }
    }
  },
      methods = {
    init: function init(options) {
      return this.each(function () {
        var o = $.extend({}, defaults, options);
        var stickyElement = $(this);

        var stickyId = stickyElement.attr('id');
        var wrapperId = stickyId ? stickyId + '-' + defaults.wrapperClassName : defaults.wrapperClassName;
        var wrapper = $('<div></div>').attr('id', wrapperId).addClass(o.wrapperClassName);

        stickyElement.wrapAll(function () {
          if ($(this).parent("#" + wrapperId).length == 0) {
            return wrapper;
          }
        });

        var stickyWrapper = stickyElement.parent();

        if (o.center) {
          stickyWrapper.css({ width: stickyElement.outerWidth(), marginLeft: "auto", marginRight: "auto" });
        }

        if (stickyElement.css("float") === "right") {
          stickyElement.css({ "float": "none" }).parent().css({ "float": "right" });
        }

        o.stickyElement = stickyElement;
        o.stickyWrapper = stickyWrapper;
        o.currentTop = null;

        sticked.push(o);

        methods.setWrapperHeight(this);
        methods.setupChangeListeners(this);
      });
    },

    setWrapperHeight: function setWrapperHeight(stickyElement) {
      var element = $(stickyElement);
      var stickyWrapper = element.parent();
      if (stickyWrapper) {
        stickyWrapper.css('height', element.outerHeight());
      }
    },

    setupChangeListeners: function setupChangeListeners(stickyElement) {
      if (window.MutationObserver) {
        var mutationObserver = new window.MutationObserver(function (mutations) {
          if (mutations[0].addedNodes.length || mutations[0].removedNodes.length) {
            methods.setWrapperHeight(stickyElement);
          }
        });
        mutationObserver.observe(stickyElement, { subtree: true, childList: true });
      } else {
        if (window.addEventListener) {
          stickyElement.addEventListener('DOMNodeInserted', function () {
            methods.setWrapperHeight(stickyElement);
          }, false);
          stickyElement.addEventListener('DOMNodeRemoved', function () {
            methods.setWrapperHeight(stickyElement);
          }, false);
        } else if (window.attachEvent) {
          stickyElement.attachEvent('onDOMNodeInserted', function () {
            methods.setWrapperHeight(stickyElement);
          });
          stickyElement.attachEvent('onDOMNodeRemoved', function () {
            methods.setWrapperHeight(stickyElement);
          });
        }
      }
    },
    update: scroller,
    unstick: function unstick(options) {
      return this.each(function () {
        var that = this;
        var unstickyElement = $(that);

        var removeIdx = -1;
        var i = sticked.length;
        while (i-- > 0) {
          if (sticked[i].stickyElement.get(0) === that) {
            splice.call(sticked, i, 1);
            removeIdx = i;
          }
        }
        if (removeIdx !== -1) {
          unstickyElement.unwrap();
          unstickyElement.css({
            'width': '',
            'position': '',
            'top': '',
            'float': '',
            'z-index': ''
          });
        }
      });
    }
  };

  // should be more efficient than using $window.scroll(scroller) and $window.resize(resizer):
  if (window.addEventListener) {
    window.addEventListener('scroll', scroller, false);
    window.addEventListener('resize', resizer, false);
  } else if (window.attachEvent) {
    window.attachEvent('onscroll', scroller);
    window.attachEvent('onresize', resizer);
  }

  $.fn.sticky = function (method) {
    if (methods[method]) {
      return methods[method].apply(this, slice.call(arguments, 1));
    } else if ((typeof method === 'undefined' ? 'undefined' : _typeof(method)) === 'object' || !method) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }
  };

  $.fn.unstick = function (method) {
    if (methods[method]) {
      return methods[method].apply(this, slice.call(arguments, 1));
    } else if ((typeof method === 'undefined' ? 'undefined' : _typeof(method)) === 'object' || !method) {
      return methods.unstick.apply(this, arguments);
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }
  };
  $(function () {
    setTimeout(scroller, 0);
  });
});

/***/ }),

/***/ 289:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {/* http://prismjs.com/download.html?themes=prism&languages=markup+css+clike+javascript+bash+c+csharp+cpp+git+go+http+java+json+kotlin+less+makefile+markdown+nginx+objectivec+php+php-extras+powershell+python+jsx+sass+scss+sql+swift */
var _self = "undefined" != typeof window ? window : "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? self : {},
    Prism = function () {
  var e = /\blang(?:uage)?-(\w+)\b/i,
      t = 0,
      n = _self.Prism = { manual: _self.Prism && _self.Prism.manual, util: { encode: function encode(e) {
        return e instanceof a ? new a(e.type, n.util.encode(e.content), e.alias) : "Array" === n.util.type(e) ? e.map(n.util.encode) : e.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/\u00a0/g, " ");
      }, type: function type(e) {
        return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1];
      }, objId: function objId(e) {
        return e.__id || Object.defineProperty(e, "__id", { value: ++t }), e.__id;
      }, clone: function clone(e) {
        var t = n.util.type(e);switch (t) {case "Object":
            var a = {};for (var r in e) {
              e.hasOwnProperty(r) && (a[r] = n.util.clone(e[r]));
            }return a;case "Array":
            return e.map && e.map(function (e) {
              return n.util.clone(e);
            });}return e;
      } }, languages: { extend: function extend(e, t) {
        var a = n.util.clone(n.languages[e]);for (var r in t) {
          a[r] = t[r];
        }return a;
      }, insertBefore: function insertBefore(e, t, a, r) {
        r = r || n.languages;var i = r[e];if (2 == arguments.length) {
          a = arguments[1];for (var l in a) {
            a.hasOwnProperty(l) && (i[l] = a[l]);
          }return i;
        }var o = {};for (var s in i) {
          if (i.hasOwnProperty(s)) {
            if (s == t) for (var l in a) {
              a.hasOwnProperty(l) && (o[l] = a[l]);
            }o[s] = i[s];
          }
        }return n.languages.DFS(n.languages, function (t, n) {
          n === r[e] && t != e && (this[t] = o);
        }), r[e] = o;
      }, DFS: function DFS(e, t, a, r) {
        r = r || {};for (var i in e) {
          e.hasOwnProperty(i) && (t.call(e, i, e[i], a || i), "Object" !== n.util.type(e[i]) || r[n.util.objId(e[i])] ? "Array" !== n.util.type(e[i]) || r[n.util.objId(e[i])] || (r[n.util.objId(e[i])] = !0, n.languages.DFS(e[i], t, i, r)) : (r[n.util.objId(e[i])] = !0, n.languages.DFS(e[i], t, null, r)));
        }
      } }, plugins: {}, highlightAll: function highlightAll(e, t) {
      var a = { callback: t, selector: 'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code' };n.hooks.run("before-highlightall", a);for (var r, i = a.elements || document.querySelectorAll(a.selector), l = 0; r = i[l++];) {
        n.highlightElement(r, e === !0, a.callback);
      }
    }, highlightElement: function highlightElement(t, a, r) {
      for (var i, l, o = t; o && !e.test(o.className);) {
        o = o.parentNode;
      }o && (i = (o.className.match(e) || [, ""])[1].toLowerCase(), l = n.languages[i]), t.className = t.className.replace(e, "").replace(/\s+/g, " ") + " language-" + i, o = t.parentNode, /pre/i.test(o.nodeName) && (o.className = o.className.replace(e, "").replace(/\s+/g, " ") + " language-" + i);var s = t.textContent,
          u = { element: t, language: i, grammar: l, code: s };if (n.hooks.run("before-sanity-check", u), !u.code || !u.grammar) return u.code && (n.hooks.run("before-highlight", u), u.element.textContent = u.code, n.hooks.run("after-highlight", u)), n.hooks.run("complete", u), void 0;if (n.hooks.run("before-highlight", u), a && _self.Worker) {
        var g = new Worker(n.filename);g.onmessage = function (e) {
          u.highlightedCode = e.data, n.hooks.run("before-insert", u), u.element.innerHTML = u.highlightedCode, r && r.call(u.element), n.hooks.run("after-highlight", u), n.hooks.run("complete", u);
        }, g.postMessage(JSON.stringify({ language: u.language, code: u.code, immediateClose: !0 }));
      } else u.highlightedCode = n.highlight(u.code, u.grammar, u.language), n.hooks.run("before-insert", u), u.element.innerHTML = u.highlightedCode, r && r.call(t), n.hooks.run("after-highlight", u), n.hooks.run("complete", u);
    }, highlight: function highlight(e, t, r) {
      var i = n.tokenize(e, t);return a.stringify(n.util.encode(i), r);
    }, matchGrammar: function matchGrammar(e, t, a, r, i, l, o) {
      var s = n.Token;for (var u in a) {
        if (a.hasOwnProperty(u) && a[u]) {
          if (u == o) return;var g = a[u];g = "Array" === n.util.type(g) ? g : [g];for (var c = 0; c < g.length; ++c) {
            var h = g[c],
                f = h.inside,
                d = !!h.lookbehind,
                m = !!h.greedy,
                p = 0,
                y = h.alias;if (m && !h.pattern.global) {
              var v = h.pattern.toString().match(/[imuy]*$/)[0];h.pattern = RegExp(h.pattern.source, v + "g");
            }h = h.pattern || h;for (var b = r, k = i; b < t.length; k += t[b].length, ++b) {
              var w = t[b];if (t.length > e.length) return;if (!(w instanceof s)) {
                h.lastIndex = 0;var _ = h.exec(w),
                    P = 1;if (!_ && m && b != t.length - 1) {
                  if (h.lastIndex = k, _ = h.exec(e), !_) break;for (var A = _.index + (d ? _[1].length : 0), j = _.index + _[0].length, x = b, O = k, S = t.length; S > x && (j > O || !t[x].type && !t[x - 1].greedy); ++x) {
                    O += t[x].length, A >= O && (++b, k = O);
                  }if (t[b] instanceof s || t[x - 1].greedy) continue;P = x - b, w = e.slice(k, O), _.index -= k;
                }if (_) {
                  d && (p = _[1].length);var A = _.index + p,
                      _ = _[0].slice(p),
                      j = A + _.length,
                      N = w.slice(0, A),
                      C = w.slice(j),
                      E = [b, P];N && (++b, k += N.length, E.push(N));var L = new s(u, f ? n.tokenize(_, f) : _, y, _, m);if (E.push(L), C && E.push(C), Array.prototype.splice.apply(t, E), 1 != P && n.matchGrammar(e, t, a, b, k, !0, u), l) break;
                } else if (l) break;
              }
            }
          }
        }
      }
    }, tokenize: function tokenize(e, t) {
      var a = [e],
          r = t.rest;if (r) {
        for (var i in r) {
          t[i] = r[i];
        }delete t.rest;
      }return n.matchGrammar(e, a, t, 0, 0, !1), a;
    }, hooks: { all: {}, add: function add(e, t) {
        var a = n.hooks.all;a[e] = a[e] || [], a[e].push(t);
      }, run: function run(e, t) {
        var a = n.hooks.all[e];if (a && a.length) for (var r, i = 0; r = a[i++];) {
          r(t);
        }
      } } },
      a = n.Token = function (e, t, n, a, r) {
    this.type = e, this.content = t, this.alias = n, this.length = 0 | (a || "").length, this.greedy = !!r;
  };if (a.stringify = function (e, t, r) {
    if ("string" == typeof e) return e;if ("Array" === n.util.type(e)) return e.map(function (n) {
      return a.stringify(n, t, e);
    }).join("");var i = { type: e.type, content: a.stringify(e.content, t, r), tag: "span", classes: ["token", e.type], attributes: {}, language: t, parent: r };if ("comment" == i.type && (i.attributes.spellcheck = "true"), e.alias) {
      var l = "Array" === n.util.type(e.alias) ? e.alias : [e.alias];Array.prototype.push.apply(i.classes, l);
    }n.hooks.run("wrap", i);var o = Object.keys(i.attributes).map(function (e) {
      return e + '="' + (i.attributes[e] || "").replace(/"/g, "&quot;") + '"';
    }).join(" ");return "<" + i.tag + ' class="' + i.classes.join(" ") + '"' + (o ? " " + o : "") + ">" + i.content + "</" + i.tag + ">";
  }, !_self.document) return _self.addEventListener ? (_self.addEventListener("message", function (e) {
    var t = JSON.parse(e.data),
        a = t.language,
        r = t.code,
        i = t.immediateClose;_self.postMessage(n.highlight(r, n.languages[a], a)), i && _self.close();
  }, !1), _self.Prism) : _self.Prism;var r = document.currentScript || [].slice.call(document.getElementsByTagName("script")).pop();return r && (n.filename = r.src, !document.addEventListener || n.manual || r.hasAttribute("data-manual") || ("loading" !== document.readyState ? window.requestAnimationFrame ? window.requestAnimationFrame(n.highlightAll) : window.setTimeout(n.highlightAll, 16) : document.addEventListener("DOMContentLoaded", n.highlightAll))), _self.Prism;
}();"undefined" != typeof module && module.exports && (module.exports = Prism), "undefined" != typeof global && (global.Prism = Prism);
Prism.languages.markup = { comment: /<!--[\s\S]*?-->/, prolog: /<\?[\s\S]+?\?>/, doctype: /<!DOCTYPE[\s\S]+?>/i, cdata: /<!\[CDATA\[[\s\S]*?]]>/i, tag: { pattern: /<\/?(?!\d)[^\s>\/=$<]+(?:\s+[^\s>\/=]+(?:=(?:("|')(?:\\\1|\\?(?!\1)[\s\S])*\1|[^\s'">=]+))?)*\s*\/?>/i, inside: { tag: { pattern: /^<\/?[^\s>\/]+/i, inside: { punctuation: /^<\/?/, namespace: /^[^\s>\/:]+:/ } }, "attr-value": { pattern: /=(?:('|")[\s\S]*?(\1)|[^\s>]+)/i, inside: { punctuation: /[=>"']/ } }, punctuation: /\/?>/, "attr-name": { pattern: /[^\s>\/]+/, inside: { namespace: /^[^\s>\/:]+:/ } } } }, entity: /&#?[\da-z]{1,8};/i }, Prism.hooks.add("wrap", function (a) {
  "entity" === a.type && (a.attributes.title = a.content.replace(/&amp;/, "&"));
}), Prism.languages.xml = Prism.languages.markup, Prism.languages.html = Prism.languages.markup, Prism.languages.mathml = Prism.languages.markup, Prism.languages.svg = Prism.languages.markup;
Prism.languages.css = { comment: /\/\*[\s\S]*?\*\//, atrule: { pattern: /@[\w-]+?.*?(;|(?=\s*\{))/i, inside: { rule: /@[\w-]+/ } }, url: /url\((?:(["'])(\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1|.*?)\)/i, selector: /[^\{\}\s][^\{\};]*?(?=\s*\{)/, string: { pattern: /("|')(\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/, greedy: !0 }, property: /(\b|\B)[\w-]+(?=\s*:)/i, important: /\B!important\b/i, "function": /[-a-z0-9]+(?=\()/i, punctuation: /[(){};:]/ }, Prism.languages.css.atrule.inside.rest = Prism.util.clone(Prism.languages.css), Prism.languages.markup && (Prism.languages.insertBefore("markup", "tag", { style: { pattern: /(<style[\s\S]*?>)[\s\S]*?(?=<\/style>)/i, lookbehind: !0, inside: Prism.languages.css, alias: "language-css" } }), Prism.languages.insertBefore("inside", "attr-value", { "style-attr": { pattern: /\s*style=("|').*?\1/i, inside: { "attr-name": { pattern: /^\s*style/i, inside: Prism.languages.markup.tag.inside }, punctuation: /^\s*=\s*['"]|['"]\s*$/, "attr-value": { pattern: /.+/i, inside: Prism.languages.css } }, alias: "language-css" } }, Prism.languages.markup.tag));
Prism.languages.clike = { comment: [{ pattern: /(^|[^\\])\/\*[\s\S]*?\*\//, lookbehind: !0 }, { pattern: /(^|[^\\:])\/\/.*/, lookbehind: !0 }], string: { pattern: /(["'])(\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/, greedy: !0 }, "class-name": { pattern: /((?:\b(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[a-z0-9_\.\\]+/i, lookbehind: !0, inside: { punctuation: /(\.|\\)/ } }, keyword: /\b(if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/, "boolean": /\b(true|false)\b/, "function": /[a-z0-9_]+(?=\()/i, number: /\b-?(?:0x[\da-f]+|\d*\.?\d+(?:e[+-]?\d+)?)\b/i, operator: /--?|\+\+?|!=?=?|<=?|>=?|==?=?|&&?|\|\|?|\?|\*|\/|~|\^|%/, punctuation: /[{}[\];(),.:]/ };
Prism.languages.javascript = Prism.languages.extend("clike", { keyword: /\b(as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|var|void|while|with|yield)\b/, number: /\b-?(0x[\dA-Fa-f]+|0b[01]+|0o[0-7]+|\d*\.?\d+([Ee][+-]?\d+)?|NaN|Infinity)\b/, "function": /[_$a-zA-Z\xA0-\uFFFF][_$a-zA-Z0-9\xA0-\uFFFF]*(?=\()/i, operator: /-[-=]?|\+[+=]?|!=?=?|<<?=?|>>?>?=?|=(?:==?|>)?|&[&=]?|\|[|=]?|\*\*?=?|\/=?|~|\^=?|%=?|\?|\.{3}/ }), Prism.languages.insertBefore("javascript", "keyword", { regex: { pattern: /(^|[^\/])\/(?!\/)(\[.+?]|\\.|[^\/\\\r\n])+\/[gimyu]{0,5}(?=\s*($|[\r\n,.;})]))/, lookbehind: !0, greedy: !0 } }), Prism.languages.insertBefore("javascript", "string", { "template-string": { pattern: /`(?:\\\\|\\?[^\\])*?`/, greedy: !0, inside: { interpolation: { pattern: /\$\{[^}]+\}/, inside: { "interpolation-punctuation": { pattern: /^\$\{|\}$/, alias: "punctuation" }, rest: Prism.languages.javascript } }, string: /[\s\S]+/ } } }), Prism.languages.markup && Prism.languages.insertBefore("markup", "tag", { script: { pattern: /(<script[\s\S]*?>)[\s\S]*?(?=<\/script>)/i, lookbehind: !0, inside: Prism.languages.javascript, alias: "language-javascript" } }), Prism.languages.js = Prism.languages.javascript;
!function (e) {
  var t = { variable: [{ pattern: /\$?\(\([\s\S]+?\)\)/, inside: { variable: [{ pattern: /(^\$\(\([\s\S]+)\)\)/, lookbehind: !0 }, /^\$\(\(/], number: /\b-?(?:0x[\dA-Fa-f]+|\d*\.?\d+(?:[Ee]-?\d+)?)\b/, operator: /--?|-=|\+\+?|\+=|!=?|~|\*\*?|\*=|\/=?|%=?|<<=?|>>=?|<=?|>=?|==?|&&?|&=|\^=?|\|\|?|\|=|\?|:/, punctuation: /\(\(?|\)\)?|,|;/ } }, { pattern: /\$\([^)]+\)|`[^`]+`/, inside: { variable: /^\$\(|^`|\)$|`$/ } }, /\$(?:[a-z0-9_#\?\*!@]+|\{[^}]+\})/i] };e.languages.bash = { shebang: { pattern: /^#!\s*\/bin\/bash|^#!\s*\/bin\/sh/, alias: "important" }, comment: { pattern: /(^|[^"{\\])#.*/, lookbehind: !0 }, string: [{ pattern: /((?:^|[^<])<<\s*)(?:"|')?(\w+?)(?:"|')?\s*\r?\n(?:[\s\S])*?\r?\n\2/g, lookbehind: !0, greedy: !0, inside: t }, { pattern: /(["'])(?:\\\\|\\?[^\\])*?\1/g, greedy: !0, inside: t }], variable: t.variable, "function": { pattern: /(^|\s|;|\||&)(?:alias|apropos|apt-get|aptitude|aspell|awk|basename|bash|bc|bg|builtin|bzip2|cal|cat|cd|cfdisk|chgrp|chmod|chown|chroot|chkconfig|cksum|clear|cmp|comm|command|cp|cron|crontab|csplit|cut|date|dc|dd|ddrescue|df|diff|diff3|dig|dir|dircolors|dirname|dirs|dmesg|du|egrep|eject|enable|env|ethtool|eval|exec|expand|expect|export|expr|fdformat|fdisk|fg|fgrep|file|find|fmt|fold|format|free|fsck|ftp|fuser|gawk|getopts|git|grep|groupadd|groupdel|groupmod|groups|gzip|hash|head|help|hg|history|hostname|htop|iconv|id|ifconfig|ifdown|ifup|import|install|jobs|join|kill|killall|less|link|ln|locate|logname|logout|look|lpc|lpr|lprint|lprintd|lprintq|lprm|ls|lsof|make|man|mkdir|mkfifo|mkisofs|mknod|more|most|mount|mtools|mtr|mv|mmv|nano|netstat|nice|nl|nohup|notify-send|npm|nslookup|open|op|passwd|paste|pathchk|ping|pkill|popd|pr|printcap|printenv|printf|ps|pushd|pv|pwd|quota|quotacheck|quotactl|ram|rar|rcp|read|readarray|readonly|reboot|rename|renice|remsync|rev|rm|rmdir|rsync|screen|scp|sdiff|sed|seq|service|sftp|shift|shopt|shutdown|sleep|slocate|sort|source|split|ssh|stat|strace|su|sudo|sum|suspend|sync|tail|tar|tee|test|time|timeout|times|touch|top|traceroute|trap|tr|tsort|tty|type|ulimit|umask|umount|unalias|uname|unexpand|uniq|units|unrar|unshar|uptime|useradd|userdel|usermod|users|uuencode|uudecode|v|vdir|vi|vmstat|wait|watch|wc|wget|whereis|which|who|whoami|write|xargs|xdg-open|yes|zip)(?=$|\s|;|\||&)/, lookbehind: !0 }, keyword: { pattern: /(^|\s|;|\||&)(?:let|:|\.|if|then|else|elif|fi|for|break|continue|while|in|case|function|select|do|done|until|echo|exit|return|set|declare)(?=$|\s|;|\||&)/, lookbehind: !0 }, "boolean": { pattern: /(^|\s|;|\||&)(?:true|false)(?=$|\s|;|\||&)/, lookbehind: !0 }, operator: /&&?|\|\|?|==?|!=?|<<<?|>>|<=?|>=?|=~/, punctuation: /\$?\(\(?|\)\)?|\.\.|[{}[\];]/ };var a = t.variable[1].inside;a["function"] = e.languages.bash["function"], a.keyword = e.languages.bash.keyword, a.boolean = e.languages.bash.boolean, a.operator = e.languages.bash.operator, a.punctuation = e.languages.bash.punctuation;
}(Prism);
Prism.languages.c = Prism.languages.extend("clike", { keyword: /\b(asm|typeof|inline|auto|break|case|char|const|continue|default|do|double|else|enum|extern|float|for|goto|if|int|long|register|return|short|signed|sizeof|static|struct|switch|typedef|union|unsigned|void|volatile|while)\b/, operator: /\-[>-]?|\+\+?|!=?|<<?=?|>>?=?|==?|&&?|\|?\||[~^%?*\/]/, number: /\b-?(?:0x[\da-f]+|\d*\.?\d+(?:e[+-]?\d+)?)[ful]*\b/i }), Prism.languages.insertBefore("c", "string", { macro: { pattern: /(^\s*)#\s*[a-z]+([^\r\n\\]|\\.|\\(?:\r\n?|\n))*/im, lookbehind: !0, alias: "property", inside: { string: { pattern: /(#\s*include\s*)(<.+?>|("|')(\\?.)+?\3)/, lookbehind: !0 }, directive: { pattern: /(#\s*)\b(define|elif|else|endif|error|ifdef|ifndef|if|import|include|line|pragma|undef|using)\b/, lookbehind: !0, alias: "keyword" } } }, constant: /\b(__FILE__|__LINE__|__DATE__|__TIME__|__TIMESTAMP__|__func__|EOF|NULL|stdin|stdout|stderr)\b/ }), delete Prism.languages.c["class-name"], delete Prism.languages.c["boolean"];
Prism.languages.csharp = Prism.languages.extend("clike", { keyword: /\b(abstract|as|async|await|base|bool|break|byte|case|catch|char|checked|class|const|continue|decimal|default|delegate|do|double|else|enum|event|explicit|extern|false|finally|fixed|float|for|foreach|goto|if|implicit|in|int|interface|internal|is|lock|long|namespace|new|null|object|operator|out|override|params|private|protected|public|readonly|ref|return|sbyte|sealed|short|sizeof|stackalloc|static|string|struct|switch|this|throw|true|try|typeof|uint|ulong|unchecked|unsafe|ushort|using|virtual|void|volatile|while|add|alias|ascending|async|await|descending|dynamic|from|get|global|group|into|join|let|orderby|partial|remove|select|set|value|var|where|yield)\b/, string: [{ pattern: /@("|')(\1\1|\\\1|\\?(?!\1)[\s\S])*\1/, greedy: !0 }, { pattern: /("|')(\\?.)*?\1/, greedy: !0 }], number: /\b-?(0x[\da-f]+|\d*\.?\d+f?)\b/i }), Prism.languages.insertBefore("csharp", "keyword", { "generic-method": { pattern: /[a-z0-9_]+\s*<[^>\r\n]+?>\s*(?=\()/i, alias: "function", inside: { keyword: Prism.languages.csharp.keyword, punctuation: /[<>(),.:]/ } }, preprocessor: { pattern: /(^\s*)#.*/m, lookbehind: !0, alias: "property", inside: { directive: { pattern: /(\s*#)\b(define|elif|else|endif|endregion|error|if|line|pragma|region|undef|warning)\b/, lookbehind: !0, alias: "keyword" } } } });
Prism.languages.cpp = Prism.languages.extend("c", { keyword: /\b(alignas|alignof|asm|auto|bool|break|case|catch|char|char16_t|char32_t|class|compl|const|constexpr|const_cast|continue|decltype|default|delete|do|double|dynamic_cast|else|enum|explicit|export|extern|float|for|friend|goto|if|inline|int|long|mutable|namespace|new|noexcept|nullptr|operator|private|protected|public|register|reinterpret_cast|return|short|signed|sizeof|static|static_assert|static_cast|struct|switch|template|this|thread_local|throw|try|typedef|typeid|typename|union|unsigned|using|virtual|void|volatile|wchar_t|while)\b/, "boolean": /\b(true|false)\b/, operator: /[-+]{1,2}|!=?|<{1,2}=?|>{1,2}=?|\->|:{1,2}|={1,2}|\^|~|%|&{1,2}|\|?\||\?|\*|\/|\b(and|and_eq|bitand|bitor|not|not_eq|or|or_eq|xor|xor_eq)\b/ }), Prism.languages.insertBefore("cpp", "keyword", { "class-name": { pattern: /(class\s+)[a-z0-9_]+/i, lookbehind: !0 } });
Prism.languages.git = { comment: /^#.*/m, deleted: /^[-–].*/m, inserted: /^\+.*/m, string: /("|')(\\?.)*?\1/m, command: { pattern: /^.*\$ git .*$/m, inside: { parameter: /\s(--|-)\w+/m } }, coord: /^@@.*@@$/m, commit_sha1: /^commit \w{40}$/m };
Prism.languages.go = Prism.languages.extend("clike", { keyword: /\b(break|case|chan|const|continue|default|defer|else|fallthrough|for|func|go(to)?|if|import|interface|map|package|range|return|select|struct|switch|type|var)\b/, builtin: /\b(bool|byte|complex(64|128)|error|float(32|64)|rune|string|u?int(8|16|32|64|)|uintptr|append|cap|close|complex|copy|delete|imag|len|make|new|panic|print(ln)?|real|recover)\b/, "boolean": /\b(_|iota|nil|true|false)\b/, operator: /[*\/%^!=]=?|\+[=+]?|-[=-]?|\|[=|]?|&(?:=|&|\^=?)?|>(?:>=?|=)?|<(?:<=?|=|-)?|:=|\.\.\./, number: /\b(-?(0x[a-f\d]+|(\d+\.?\d*|\.\d+)(e[-+]?\d+)?)i?)\b/i, string: { pattern: /("|'|`)(\\?.|\r|\n)*?\1/, greedy: !0 } }), delete Prism.languages.go["class-name"];
Prism.languages.http = { "request-line": { pattern: /^(POST|GET|PUT|DELETE|OPTIONS|PATCH|TRACE|CONNECT)\b\shttps?:\/\/\S+\sHTTP\/[0-9.]+/m, inside: { property: /^(POST|GET|PUT|DELETE|OPTIONS|PATCH|TRACE|CONNECT)\b/, "attr-name": /:\w+/ } }, "response-status": { pattern: /^HTTP\/1.[01] \d+.*/m, inside: { property: { pattern: /(^HTTP\/1.[01] )\d+.*/i, lookbehind: !0 } } }, "header-name": { pattern: /^[\w-]+:(?=.)/m, alias: "keyword" } };var httpLanguages = { "application/json": Prism.languages.javascript, "application/xml": Prism.languages.markup, "text/xml": Prism.languages.markup, "text/html": Prism.languages.markup };for (var contentType in httpLanguages) {
  if (httpLanguages[contentType]) {
    var options = {};options[contentType] = { pattern: new RegExp("(content-type:\\s*" + contentType + "[\\w\\W]*?)(?:\\r?\\n|\\r){2}[\\w\\W]*", "i"), lookbehind: !0, inside: { rest: httpLanguages[contentType] } }, Prism.languages.insertBefore("http", "header-name", options);
  }
};
Prism.languages.java = Prism.languages.extend("clike", { keyword: /\b(abstract|continue|for|new|switch|assert|default|goto|package|synchronized|boolean|do|if|private|this|break|double|implements|protected|throw|byte|else|import|public|throws|case|enum|instanceof|return|transient|catch|extends|int|short|try|char|final|interface|static|void|class|finally|long|strictfp|volatile|const|float|native|super|while)\b/, number: /\b0b[01]+\b|\b0x[\da-f]*\.?[\da-fp\-]+\b|\b\d*\.?\d+(?:e[+-]?\d+)?[df]?\b/i, operator: { pattern: /(^|[^.])(?:\+[+=]?|-[-=]?|!=?|<<?=?|>>?>?=?|==?|&[&=]?|\|[|=]?|\*=?|\/=?|%=?|\^=?|[?:~])/m, lookbehind: !0 } }), Prism.languages.insertBefore("java", "function", { annotation: { alias: "punctuation", pattern: /(^|[^.])@\w+/, lookbehind: !0 } });
Prism.languages.json = { property: /"(?:\\.|[^\\"])*"(?=\s*:)/gi, string: /"(?!:)(?:\\.|[^\\"])*"(?!:)/g, number: /\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee][+-]?\d+)?)\b/g, punctuation: /[{}[\]);,]/g, operator: /:/g, "boolean": /\b(true|false)\b/gi, "null": /\bnull\b/gi }, Prism.languages.jsonp = Prism.languages.json;
!function (n) {
  n.languages.kotlin = n.languages.extend("clike", { keyword: { pattern: /(^|[^.])\b(?:abstract|annotation|as|break|by|catch|class|companion|const|constructor|continue|crossinline|data|do|else|enum|final|finally|for|fun|get|if|import|in|init|inline|inner|interface|internal|is|lateinit|noinline|null|object|open|out|override|package|private|protected|public|reified|return|sealed|set|super|tailrec|this|throw|to|try|val|var|when|where|while)\b/, lookbehind: !0 }, "function": [/\w+(?=\s*\()/, { pattern: /(\.)\w+(?=\s*\{)/, lookbehind: !0 }], number: /\b(?:0[bx][\da-fA-F]+|\d+(?:\.\d+)?(?:e[+-]?\d+)?[fFL]?)\b/, operator: /\+[+=]?|-[-=>]?|==?=?|!(?:!|==?)?|[\/*%<>]=?|[?:]:?|\.\.|&&|\|\||\b(?:and|inv|or|shl|shr|ushr|xor)\b/ }), delete n.languages.kotlin["class-name"], n.languages.insertBefore("kotlin", "string", { "raw-string": { pattern: /(["'])\1\1[\s\S]*?\1{3}/, alias: "string" } }), n.languages.insertBefore("kotlin", "keyword", { annotation: { pattern: /\B@(?:\w+:)?(?:[A-Z]\w*|\[[^\]]+\])/, alias: "builtin" } }), n.languages.insertBefore("kotlin", "function", { label: { pattern: /\w+@|@\w+/, alias: "symbol" } });var e = [{ pattern: /\$\{[^}]+\}/, inside: { delimiter: { pattern: /^\$\{|\}$/, alias: "variable" }, rest: n.util.clone(n.languages.kotlin) } }, { pattern: /\$\w+/, alias: "variable" }];n.languages.kotlin.string.inside = n.languages.kotlin["raw-string"].inside = { interpolation: e };
}(Prism);
Prism.languages.less = Prism.languages.extend("css", { comment: [/\/\*[\s\S]*?\*\//, { pattern: /(^|[^\\])\/\/.*/, lookbehind: !0 }], atrule: { pattern: /@[\w-]+?(?:\([^{}]+\)|[^(){};])*?(?=\s*\{)/i, inside: { punctuation: /[:()]/ } }, selector: { pattern: /(?:@\{[\w-]+\}|[^{};\s@])(?:@\{[\w-]+\}|\([^{}]*\)|[^{};@])*?(?=\s*\{)/, inside: { variable: /@+[\w-]+/ } }, property: /(?:@\{[\w-]+\}|[\w-])+(?:\+_?)?(?=\s*:)/i, punctuation: /[{}();:,]/, operator: /[+\-*\/]/ }), Prism.languages.insertBefore("less", "punctuation", { "function": Prism.languages.less.function }), Prism.languages.insertBefore("less", "property", { variable: [{ pattern: /@[\w-]+\s*:/, inside: { punctuation: /:/ } }, /@@?[\w-]+/], "mixin-usage": { pattern: /([{;]\s*)[.#](?!\d)[\w-]+.*?(?=[(;])/, lookbehind: !0, alias: "function" } });
Prism.languages.makefile = { comment: { pattern: /(^|[^\\])#(?:\\(?:\r\n|[\s\S])|.)*/, lookbehind: !0 }, string: { pattern: /(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/, greedy: !0 }, builtin: /\.[A-Z][^:#=\s]+(?=\s*:(?!=))/, symbol: { pattern: /^[^:=\r\n]+(?=\s*:(?!=))/m, inside: { variable: /\$+(?:[^(){}:#=\s]+|(?=[({]))/ } }, variable: /\$+(?:[^(){}:#=\s]+|\([@*%<^+?][DF]\)|(?=[({]))/, keyword: [/-include\b|\b(?:define|else|endef|endif|export|ifn?def|ifn?eq|include|override|private|sinclude|undefine|unexport|vpath)\b/, { pattern: /(\()(?:addsuffix|abspath|and|basename|call|dir|error|eval|file|filter(?:-out)?|findstring|firstword|flavor|foreach|guile|if|info|join|lastword|load|notdir|or|origin|patsubst|realpath|shell|sort|strip|subst|suffix|value|warning|wildcard|word(?:s|list)?)(?=[ \t])/, lookbehind: !0 }], operator: /(?:::|[?:+!])?=|[|@]/, punctuation: /[:;(){}]/ };
Prism.languages.markdown = Prism.languages.extend("markup", {}), Prism.languages.insertBefore("markdown", "prolog", { blockquote: { pattern: /^>(?:[\t ]*>)*/m, alias: "punctuation" }, code: [{ pattern: /^(?: {4}|\t).+/m, alias: "keyword" }, { pattern: /``.+?``|`[^`\n]+`/, alias: "keyword" }], title: [{ pattern: /\w+.*(?:\r?\n|\r)(?:==+|--+)/, alias: "important", inside: { punctuation: /==+$|--+$/ } }, { pattern: /(^\s*)#+.+/m, lookbehind: !0, alias: "important", inside: { punctuation: /^#+|#+$/ } }], hr: { pattern: /(^\s*)([*-])([\t ]*\2){2,}(?=\s*$)/m, lookbehind: !0, alias: "punctuation" }, list: { pattern: /(^\s*)(?:[*+-]|\d+\.)(?=[\t ].)/m, lookbehind: !0, alias: "punctuation" }, "url-reference": { pattern: /!?\[[^\]]+\]:[\t ]+(?:\S+|<(?:\\.|[^>\\])+>)(?:[\t ]+(?:"(?:\\.|[^"\\])*"|'(?:\\.|[^'\\])*'|\((?:\\.|[^)\\])*\)))?/, inside: { variable: { pattern: /^(!?\[)[^\]]+/, lookbehind: !0 }, string: /(?:"(?:\\.|[^"\\])*"|'(?:\\.|[^'\\])*'|\((?:\\.|[^)\\])*\))$/, punctuation: /^[\[\]!:]|[<>]/ }, alias: "url" }, bold: { pattern: /(^|[^\\])(\*\*|__)(?:(?:\r?\n|\r)(?!\r?\n|\r)|.)+?\2/, lookbehind: !0, inside: { punctuation: /^\*\*|^__|\*\*$|__$/ } }, italic: { pattern: /(^|[^\\])([*_])(?:(?:\r?\n|\r)(?!\r?\n|\r)|.)+?\2/, lookbehind: !0, inside: { punctuation: /^[*_]|[*_]$/ } }, url: { pattern: /!?\[[^\]]+\](?:\([^\s)]+(?:[\t ]+"(?:\\.|[^"\\])*")?\)| ?\[[^\]\n]*\])/, inside: { variable: { pattern: /(!?\[)[^\]]+(?=\]$)/, lookbehind: !0 }, string: { pattern: /"(?:\\.|[^"\\])*"(?=\)$)/ } } } }), Prism.languages.markdown.bold.inside.url = Prism.util.clone(Prism.languages.markdown.url), Prism.languages.markdown.italic.inside.url = Prism.util.clone(Prism.languages.markdown.url), Prism.languages.markdown.bold.inside.italic = Prism.util.clone(Prism.languages.markdown.italic), Prism.languages.markdown.italic.inside.bold = Prism.util.clone(Prism.languages.markdown.bold);
Prism.languages.nginx = Prism.languages.extend("clike", { comment: { pattern: /(^|[^"{\\])#.*/, lookbehind: !0 }, keyword: /\b(?:CONTENT_|DOCUMENT_|GATEWAY_|HTTP_|HTTPS|if_not_empty|PATH_|QUERY_|REDIRECT_|REMOTE_|REQUEST_|SCGI|SCRIPT_|SERVER_|http|server|events|location|include|accept_mutex|accept_mutex_delay|access_log|add_after_body|add_before_body|add_header|addition_types|aio|alias|allow|ancient_browser|ancient_browser_value|auth|auth_basic|auth_basic_user_file|auth_http|auth_http_header|auth_http_timeout|autoindex|autoindex_exact_size|autoindex_localtime|break|charset|charset_map|charset_types|chunked_transfer_encoding|client_body_buffer_size|client_body_in_file_only|client_body_in_single_buffer|client_body_temp_path|client_body_timeout|client_header_buffer_size|client_header_timeout|client_max_body_size|connection_pool_size|create_full_put_path|daemon|dav_access|dav_methods|debug_connection|debug_points|default_type|deny|devpoll_changes|devpoll_events|directio|directio_alignment|disable_symlinks|empty_gif|env|epoll_events|error_log|error_page|expires|fastcgi_buffer_size|fastcgi_buffers|fastcgi_busy_buffers_size|fastcgi_cache|fastcgi_cache_bypass|fastcgi_cache_key|fastcgi_cache_lock|fastcgi_cache_lock_timeout|fastcgi_cache_methods|fastcgi_cache_min_uses|fastcgi_cache_path|fastcgi_cache_purge|fastcgi_cache_use_stale|fastcgi_cache_valid|fastcgi_connect_timeout|fastcgi_hide_header|fastcgi_ignore_client_abort|fastcgi_ignore_headers|fastcgi_index|fastcgi_intercept_errors|fastcgi_keep_conn|fastcgi_max_temp_file_size|fastcgi_next_upstream|fastcgi_no_cache|fastcgi_param|fastcgi_pass|fastcgi_pass_header|fastcgi_read_timeout|fastcgi_redirect_errors|fastcgi_send_timeout|fastcgi_split_path_info|fastcgi_store|fastcgi_store_access|fastcgi_temp_file_write_size|fastcgi_temp_path|flv|geo|geoip_city|geoip_country|google_perftools_profiles|gzip|gzip_buffers|gzip_comp_level|gzip_disable|gzip_http_version|gzip_min_length|gzip_proxied|gzip_static|gzip_types|gzip_vary|if|if_modified_since|ignore_invalid_headers|image_filter|image_filter_buffer|image_filter_jpeg_quality|image_filter_sharpen|image_filter_transparency|imap_capabilities|imap_client_buffer|include|index|internal|ip_hash|keepalive|keepalive_disable|keepalive_requests|keepalive_timeout|kqueue_changes|kqueue_events|large_client_header_buffers|limit_conn|limit_conn_log_level|limit_conn_zone|limit_except|limit_rate|limit_rate_after|limit_req|limit_req_log_level|limit_req_zone|limit_zone|lingering_close|lingering_time|lingering_timeout|listen|location|lock_file|log_format|log_format_combined|log_not_found|log_subrequest|map|map_hash_bucket_size|map_hash_max_size|master_process|max_ranges|memcached_buffer_size|memcached_connect_timeout|memcached_next_upstream|memcached_pass|memcached_read_timeout|memcached_send_timeout|merge_slashes|min_delete_depth|modern_browser|modern_browser_value|mp4|mp4_buffer_size|mp4_max_buffer_size|msie_padding|msie_refresh|multi_accept|open_file_cache|open_file_cache_errors|open_file_cache_min_uses|open_file_cache_valid|open_log_file_cache|optimize_server_names|override_charset|pcre_jit|perl|perl_modules|perl_require|perl_set|pid|pop3_auth|pop3_capabilities|port_in_redirect|post_action|postpone_output|protocol|proxy|proxy_buffer|proxy_buffer_size|proxy_buffering|proxy_buffers|proxy_busy_buffers_size|proxy_cache|proxy_cache_bypass|proxy_cache_key|proxy_cache_lock|proxy_cache_lock_timeout|proxy_cache_methods|proxy_cache_min_uses|proxy_cache_path|proxy_cache_use_stale|proxy_cache_valid|proxy_connect_timeout|proxy_cookie_domain|proxy_cookie_path|proxy_headers_hash_bucket_size|proxy_headers_hash_max_size|proxy_hide_header|proxy_http_version|proxy_ignore_client_abort|proxy_ignore_headers|proxy_intercept_errors|proxy_max_temp_file_size|proxy_method|proxy_next_upstream|proxy_no_cache|proxy_pass|proxy_pass_error_message|proxy_pass_header|proxy_pass_request_body|proxy_pass_request_headers|proxy_read_timeout|proxy_redirect|proxy_redirect_errors|proxy_send_lowat|proxy_send_timeout|proxy_set_body|proxy_set_header|proxy_ssl_session_reuse|proxy_store|proxy_store_access|proxy_temp_file_write_size|proxy_temp_path|proxy_timeout|proxy_upstream_fail_timeout|proxy_upstream_max_fails|random_index|read_ahead|real_ip_header|recursive_error_pages|request_pool_size|reset_timedout_connection|resolver|resolver_timeout|return|rewrite|root|rtsig_overflow_events|rtsig_overflow_test|rtsig_overflow_threshold|rtsig_signo|satisfy|satisfy_any|secure_link_secret|send_lowat|send_timeout|sendfile|sendfile_max_chunk|server|server_name|server_name_in_redirect|server_names_hash_bucket_size|server_names_hash_max_size|server_tokens|set|set_real_ip_from|smtp_auth|smtp_capabilities|so_keepalive|source_charset|split_clients|ssi|ssi_silent_errors|ssi_types|ssi_value_length|ssl|ssl_certificate|ssl_certificate_key|ssl_ciphers|ssl_client_certificate|ssl_crl|ssl_dhparam|ssl_engine|ssl_prefer_server_ciphers|ssl_protocols|ssl_session_cache|ssl_session_timeout|ssl_verify_client|ssl_verify_depth|starttls|stub_status|sub_filter|sub_filter_once|sub_filter_types|tcp_nodelay|tcp_nopush|timeout|timer_resolution|try_files|types|types_hash_bucket_size|types_hash_max_size|underscores_in_headers|uninitialized_variable_warn|upstream|use|user|userid|userid_domain|userid_expires|userid_name|userid_p3p|userid_path|userid_service|valid_referers|variables_hash_bucket_size|variables_hash_max_size|worker_connections|worker_cpu_affinity|worker_priority|worker_processes|worker_rlimit_core|worker_rlimit_nofile|worker_rlimit_sigpending|working_directory|xclient|xml_entities|xslt_entities|xslt_stylesheet|xslt_types)\b/i }), Prism.languages.insertBefore("nginx", "keyword", { variable: /\$[a-z_]+/i });
Prism.languages.objectivec = Prism.languages.extend("c", { keyword: /\b(asm|typeof|inline|auto|break|case|char|const|continue|default|do|double|else|enum|extern|float|for|goto|if|int|long|register|return|short|signed|sizeof|static|struct|switch|typedef|union|unsigned|void|volatile|while|in|self|super)\b|(@interface|@end|@implementation|@protocol|@class|@public|@protected|@private|@property|@try|@catch|@finally|@throw|@synthesize|@dynamic|@selector)\b/, string: /("|')(\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1|@"(\\(?:\r\n|[\s\S])|[^"\\\r\n])*"/, operator: /-[->]?|\+\+?|!=?|<<?=?|>>?=?|==?|&&?|\|\|?|[~^%?*\/@]/ });
Prism.languages.php = Prism.languages.extend("clike", { keyword: /\b(and|or|xor|array|as|break|case|cfunction|class|const|continue|declare|default|die|do|else|elseif|enddeclare|endfor|endforeach|endif|endswitch|endwhile|extends|for|foreach|function|include|include_once|global|if|new|return|static|switch|use|require|require_once|var|while|abstract|interface|public|implements|private|protected|parent|throw|null|echo|print|trait|namespace|final|yield|goto|instanceof|finally|try|catch)\b/i, constant: /\b[A-Z0-9_]{2,}\b/, comment: { pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/, lookbehind: !0 } }), Prism.languages.insertBefore("php", "class-name", { "shell-comment": { pattern: /(^|[^\\])#.*/, lookbehind: !0, alias: "comment" } }), Prism.languages.insertBefore("php", "keyword", { delimiter: { pattern: /\?>|<\?(?:php|=)?/i, alias: "important" }, variable: /\$\w+\b/i, "package": { pattern: /(\\|namespace\s+|use\s+)[\w\\]+/, lookbehind: !0, inside: { punctuation: /\\/ } } }), Prism.languages.insertBefore("php", "operator", { property: { pattern: /(->)[\w]+/, lookbehind: !0 } }), Prism.languages.markup && (Prism.hooks.add("before-highlight", function (e) {
  "php" === e.language && /(?:<\?php|<\?)/gi.test(e.code) && (e.tokenStack = [], e.backupCode = e.code, e.code = e.code.replace(/(?:<\?php|<\?)[\s\S]*?(?:\?>|$)/gi, function (a) {
    for (var n = e.tokenStack.length; -1 !== e.backupCode.indexOf("___PHP" + n + "___");) {
      ++n;
    }return e.tokenStack[n] = a, "___PHP" + n + "___";
  }), e.grammar = Prism.languages.markup);
}), Prism.hooks.add("before-insert", function (e) {
  "php" === e.language && e.backupCode && (e.code = e.backupCode, delete e.backupCode);
}), Prism.hooks.add("after-highlight", function (e) {
  if ("php" === e.language && e.tokenStack) {
    e.grammar = Prism.languages.php;for (var a = 0, n = Object.keys(e.tokenStack); a < n.length; ++a) {
      var t = n[a],
          r = e.tokenStack[t];e.highlightedCode = e.highlightedCode.replace("___PHP" + t + "___", '<span class="token php language-php">' + Prism.highlight(r, e.grammar, "php").replace(/\$/g, "$$$$") + "</span>");
    }e.element.innerHTML = e.highlightedCode;
  }
}));
Prism.languages.insertBefore("php", "variable", { "this": /\$this\b/, global: /\$(?:_(?:SERVER|GET|POST|FILES|REQUEST|SESSION|ENV|COOKIE)|GLOBALS|HTTP_RAW_POST_DATA|argc|argv|php_errormsg|http_response_header)/, scope: { pattern: /\b[\w\\]+::/, inside: { keyword: /(static|self|parent)/, punctuation: /(::|\\)/ } } });
Prism.languages.powershell = { comment: [{ pattern: /(^|[^`])<#[\s\S]*?#>/, lookbehind: !0 }, { pattern: /(^|[^`])#.*/, lookbehind: !0 }], string: [{ pattern: /"(`?[\s\S])*?"/, greedy: !0, inside: { "function": { pattern: /[^`]\$\(.*?\)/, inside: {} } } }, { pattern: /'([^']|'')*'/, greedy: !0 }], namespace: /\[[a-z][\s\S]*?\]/i, "boolean": /\$(true|false)\b/i, variable: /\$\w+\b/i, "function": [/\b(Add-(Computer|Content|History|Member|PSSnapin|Type)|Checkpoint-Computer|Clear-(Content|EventLog|History|Item|ItemProperty|Variable)|Compare-Object|Complete-Transaction|Connect-PSSession|ConvertFrom-(Csv|Json|StringData)|Convert-Path|ConvertTo-(Csv|Html|Json|Xml)|Copy-(Item|ItemProperty)|Debug-Process|Disable-(ComputerRestore|PSBreakpoint|PSRemoting|PSSessionConfiguration)|Disconnect-PSSession|Enable-(ComputerRestore|PSBreakpoint|PSRemoting|PSSessionConfiguration)|Enter-PSSession|Exit-PSSession|Export-(Alias|Clixml|Console|Csv|FormatData|ModuleMember|PSSession)|ForEach-Object|Format-(Custom|List|Table|Wide)|Get-(Alias|ChildItem|Command|ComputerRestorePoint|Content|ControlPanelItem|Culture|Date|Event|EventLog|EventSubscriber|FormatData|Help|History|Host|HotFix|Item|ItemProperty|Job|Location|Member|Module|Process|PSBreakpoint|PSCallStack|PSDrive|PSProvider|PSSession|PSSessionConfiguration|PSSnapin|Random|Service|TraceSource|Transaction|TypeData|UICulture|Unique|Variable|WmiObject)|Group-Object|Import-(Alias|Clixml|Csv|LocalizedData|Module|PSSession)|Invoke-(Command|Expression|History|Item|RestMethod|WebRequest|WmiMethod)|Join-Path|Limit-EventLog|Measure-(Command|Object)|Move-(Item|ItemProperty)|New-(Alias|Event|EventLog|Item|ItemProperty|Module|ModuleManifest|Object|PSDrive|PSSession|PSSessionConfigurationFile|PSSessionOption|PSTransportOption|Service|TimeSpan|Variable|WebServiceProxy)|Out-(Default|File|GridView|Host|Null|Printer|String)|Pop-Location|Push-Location|Read-Host|Receive-(Job|PSSession)|Register-(EngineEvent|ObjectEvent|PSSessionConfiguration|WmiEvent)|Remove-(Computer|Event|EventLog|Item|ItemProperty|Job|Module|PSBreakpoint|PSDrive|PSSession|PSSnapin|TypeData|Variable|WmiObject)|Rename-(Computer|Item|ItemProperty)|Reset-ComputerMachinePassword|Resolve-Path|Restart-(Computer|Service)|Restore-Computer|Resume-(Job|Service)|Save-Help|Select-(Object|String|Xml)|Send-MailMessage|Set-(Alias|Content|Date|Item|ItemProperty|Location|PSBreakpoint|PSDebug|PSSessionConfiguration|Service|StrictMode|TraceSource|Variable|WmiInstance)|Show-(Command|ControlPanelItem|EventLog)|Sort-Object|Split-Path|Start-(Job|Process|Service|Sleep|Transaction)|Stop-(Computer|Job|Process|Service)|Suspend-(Job|Service)|Tee-Object|Test-(ComputerSecureChannel|Connection|ModuleManifest|Path|PSSessionConfigurationFile)|Trace-Command|Unblock-File|Undo-Transaction|Unregister-(Event|PSSessionConfiguration)|Update-(FormatData|Help|List|TypeData)|Use-Transaction|Wait-(Event|Job|Process)|Where-Object|Write-(Debug|Error|EventLog|Host|Output|Progress|Verbose|Warning))\b/i, /\b(ac|cat|chdir|clc|cli|clp|clv|compare|copy|cp|cpi|cpp|cvpa|dbp|del|diff|dir|ebp|echo|epal|epcsv|epsn|erase|fc|fl|ft|fw|gal|gbp|gc|gci|gcs|gdr|gi|gl|gm|gp|gps|group|gsv|gu|gv|gwmi|iex|ii|ipal|ipcsv|ipsn|irm|iwmi|iwr|kill|lp|ls|measure|mi|mount|move|mp|mv|nal|ndr|ni|nv|ogv|popd|ps|pushd|pwd|rbp|rd|rdr|ren|ri|rm|rmdir|rni|rnp|rp|rv|rvpa|rwmi|sal|saps|sasv|sbp|sc|select|set|shcm|si|sl|sleep|sls|sort|sp|spps|spsv|start|sv|swmi|tee|trcm|type|write)\b/i], keyword: /\b(Begin|Break|Catch|Class|Continue|Data|Define|Do|DynamicParam|Else|ElseIf|End|Exit|Filter|Finally|For|ForEach|From|Function|If|InlineScript|Parallel|Param|Process|Return|Sequence|Switch|Throw|Trap|Try|Until|Using|Var|While|Workflow)\b/i, operator: { pattern: /(\W?)(!|-(eq|ne|gt|ge|lt|le|sh[lr]|not|b?(and|x?or)|(Not)?(Like|Match|Contains|In)|Replace|Join|is(Not)?|as)\b|-[-=]?|\+[+=]?|[*\/%]=?)/i, lookbehind: !0 }, punctuation: /[|{}[\];(),.]/ }, Prism.languages.powershell.string[0].inside.boolean = Prism.languages.powershell.boolean, Prism.languages.powershell.string[0].inside.variable = Prism.languages.powershell.variable, Prism.languages.powershell.string[0].inside.function.inside = Prism.util.clone(Prism.languages.powershell);
Prism.languages.python = { "triple-quoted-string": { pattern: /"""[\s\S]+?"""|'''[\s\S]+?'''/, alias: "string" }, comment: { pattern: /(^|[^\\])#.*/, lookbehind: !0 }, string: { pattern: /("|')(?:\\\\|\\?[^\\\r\n])*?\1/, greedy: !0 }, "function": { pattern: /((?:^|\s)def[ \t]+)[a-zA-Z_][a-zA-Z0-9_]*(?=\()/g, lookbehind: !0 }, "class-name": { pattern: /(\bclass\s+)[a-z0-9_]+/i, lookbehind: !0 }, keyword: /\b(?:as|assert|async|await|break|class|continue|def|del|elif|else|except|exec|finally|for|from|global|if|import|in|is|lambda|pass|print|raise|return|try|while|with|yield)\b/, "boolean": /\b(?:True|False)\b/, number: /\b-?(?:0[bo])?(?:(?:\d|0x[\da-f])[\da-f]*\.?\d*|\.\d+)(?:e[+-]?\d+)?j?\b/i, operator: /[-+%=]=?|!=|\*\*?=?|\/\/?=?|<[<=>]?|>[=>]?|[&|^~]|\b(?:or|and|not)\b/, punctuation: /[{}[\];(),.:]/ };
!function (a) {
  var e = a.util.clone(a.languages.javascript);a.languages.jsx = a.languages.extend("markup", e), a.languages.jsx.tag.pattern = /<\/?[\w\.:-]+\s*(?:\s+(?:[\w\.:-]+(?:=(?:("|')(\\?[\s\S])*?\1|[^\s'">=]+|(\{[\s\S]*?\})))?|\{\.{3}\w+\})\s*)*\/?>/i, a.languages.jsx.tag.inside["attr-value"].pattern = /=(?!\{)(?:('|")[\s\S]*?(\1)|[^\s>]+)/i, a.languages.insertBefore("inside", "attr-name", { spread: { pattern: /\{\.{3}\w+\}/, inside: { punctuation: /\{|\}|\./, "attr-value": /\w+/ } } }, a.languages.jsx.tag);var s = a.util.clone(a.languages.jsx);delete s.punctuation, s = a.languages.insertBefore("jsx", "operator", { punctuation: /=(?={)|[{}[\];(),.:]/ }, { jsx: s }), a.languages.insertBefore("inside", "attr-value", { script: { pattern: /=(\{(?:\{[^}]*\}|[^}])+\})/i, inside: s, alias: "language-javascript" } }, a.languages.jsx.tag);
}(Prism);
!function (e) {
  e.languages.sass = e.languages.extend("css", { comment: { pattern: /^([ \t]*)\/[\/*].*(?:(?:\r?\n|\r)\1[ \t]+.+)*/m, lookbehind: !0 } }), e.languages.insertBefore("sass", "atrule", { "atrule-line": { pattern: /^(?:[ \t]*)[@+=].+/m, inside: { atrule: /(?:@[\w-]+|[+=])/m } } }), delete e.languages.sass.atrule;var a = /((\$[-_\w]+)|(#\{\$[-_\w]+\}))/i,
      t = [/[+*\/%]|[=!]=|<=?|>=?|\b(?:and|or|not)\b/, { pattern: /(\s+)-(?=\s)/, lookbehind: !0 }];e.languages.insertBefore("sass", "property", { "variable-line": { pattern: /^[ \t]*\$.+/m, inside: { punctuation: /:/, variable: a, operator: t } }, "property-line": { pattern: /^[ \t]*(?:[^:\s]+ *:.*|:[^:\s]+.*)/m, inside: { property: [/[^:\s]+(?=\s*:)/, { pattern: /(:)[^:\s]+/, lookbehind: !0 }], punctuation: /:/, variable: a, operator: t, important: e.languages.sass.important } } }), delete e.languages.sass.property, delete e.languages.sass.important, delete e.languages.sass.selector, e.languages.insertBefore("sass", "punctuation", { selector: { pattern: /([ \t]*)\S(?:,?[^,\r\n]+)*(?:,(?:\r?\n|\r)\1[ \t]+\S(?:,?[^,\r\n]+)*)*/, lookbehind: !0 } });
}(Prism);
Prism.languages.scss = Prism.languages.extend("css", { comment: { pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/, lookbehind: !0 }, atrule: { pattern: /@[\w-]+(?:\([^()]+\)|[^(])*?(?=\s+[{;])/, inside: { rule: /@[\w-]+/ } }, url: /(?:[-a-z]+-)*url(?=\()/i, selector: { pattern: /(?=\S)[^@;\{\}\(\)]?([^@;\{\}\(\)]|&|#\{\$[-_\w]+\})+(?=\s*\{(\}|\s|[^\}]+(:|\{)[^\}]+))/m, inside: { parent: { pattern: /&/, alias: "important" }, placeholder: /%[-_\w]+/, variable: /\$[-_\w]+|#\{\$[-_\w]+\}/ } } }), Prism.languages.insertBefore("scss", "atrule", { keyword: [/@(?:if|else(?: if)?|for|each|while|import|extend|debug|warn|mixin|include|function|return|content)/i, { pattern: /( +)(?:from|through)(?= )/, lookbehind: !0 }] }), Prism.languages.scss.property = { pattern: /(?:[\w-]|\$[-_\w]+|#\{\$[-_\w]+\})+(?=\s*:)/i, inside: { variable: /\$[-_\w]+|#\{\$[-_\w]+\}/ } }, Prism.languages.insertBefore("scss", "important", { variable: /\$[-_\w]+|#\{\$[-_\w]+\}/ }), Prism.languages.insertBefore("scss", "function", { placeholder: { pattern: /%[-_\w]+/, alias: "selector" }, statement: { pattern: /\B!(?:default|optional)\b/i, alias: "keyword" }, "boolean": /\b(?:true|false)\b/, "null": /\bnull\b/, operator: { pattern: /(\s)(?:[-+*\/%]|[=!]=|<=?|>=?|and|or|not)(?=\s)/, lookbehind: !0 } }), Prism.languages.scss.atrule.inside.rest = Prism.util.clone(Prism.languages.scss);
Prism.languages.sql = { comment: { pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|(?:--|\/\/|#).*)/, lookbehind: !0 }, string: { pattern: /(^|[^@\\])("|')(?:\\?[\s\S])*?\2/, greedy: !0, lookbehind: !0 }, variable: /@[\w.$]+|@("|'|`)(?:\\?[\s\S])+?\1/, "function": /\b(?:COUNT|SUM|AVG|MIN|MAX|FIRST|LAST|UCASE|LCASE|MID|LEN|ROUND|NOW|FORMAT)(?=\s*\()/i, keyword: /\b(?:ACTION|ADD|AFTER|ALGORITHM|ALL|ALTER|ANALYZE|ANY|APPLY|AS|ASC|AUTHORIZATION|AUTO_INCREMENT|BACKUP|BDB|BEGIN|BERKELEYDB|BIGINT|BINARY|BIT|BLOB|BOOL|BOOLEAN|BREAK|BROWSE|BTREE|BULK|BY|CALL|CASCADED?|CASE|CHAIN|CHAR VARYING|CHARACTER (?:SET|VARYING)|CHARSET|CHECK|CHECKPOINT|CLOSE|CLUSTERED|COALESCE|COLLATE|COLUMN|COLUMNS|COMMENT|COMMIT|COMMITTED|COMPUTE|CONNECT|CONSISTENT|CONSTRAINT|CONTAINS|CONTAINSTABLE|CONTINUE|CONVERT|CREATE|CROSS|CURRENT(?:_DATE|_TIME|_TIMESTAMP|_USER)?|CURSOR|DATA(?:BASES?)?|DATE(?:TIME)?|DBCC|DEALLOCATE|DEC|DECIMAL|DECLARE|DEFAULT|DEFINER|DELAYED|DELETE|DELIMITER(?:S)?|DENY|DESC|DESCRIBE|DETERMINISTIC|DISABLE|DISCARD|DISK|DISTINCT|DISTINCTROW|DISTRIBUTED|DO|DOUBLE(?: PRECISION)?|DROP|DUMMY|DUMP(?:FILE)?|DUPLICATE KEY|ELSE|ENABLE|ENCLOSED BY|END|ENGINE|ENUM|ERRLVL|ERRORS|ESCAPE(?:D BY)?|EXCEPT|EXEC(?:UTE)?|EXISTS|EXIT|EXPLAIN|EXTENDED|FETCH|FIELDS|FILE|FILLFACTOR|FIRST|FIXED|FLOAT|FOLLOWING|FOR(?: EACH ROW)?|FORCE|FOREIGN|FREETEXT(?:TABLE)?|FROM|FULL|FUNCTION|GEOMETRY(?:COLLECTION)?|GLOBAL|GOTO|GRANT|GROUP|HANDLER|HASH|HAVING|HOLDLOCK|IDENTITY(?:_INSERT|COL)?|IF|IGNORE|IMPORT|INDEX|INFILE|INNER|INNODB|INOUT|INSERT|INT|INTEGER|INTERSECT|INTO|INVOKER|ISOLATION LEVEL|JOIN|KEYS?|KILL|LANGUAGE SQL|LAST|LEFT|LIMIT|LINENO|LINES|LINESTRING|LOAD|LOCAL|LOCK|LONG(?:BLOB|TEXT)|MATCH(?:ED)?|MEDIUM(?:BLOB|INT|TEXT)|MERGE|MIDDLEINT|MODIFIES SQL DATA|MODIFY|MULTI(?:LINESTRING|POINT|POLYGON)|NATIONAL(?: CHAR VARYING| CHARACTER(?: VARYING)?| VARCHAR)?|NATURAL|NCHAR(?: VARCHAR)?|NEXT|NO(?: SQL|CHECK|CYCLE)?|NONCLUSTERED|NULLIF|NUMERIC|OFF?|OFFSETS?|ON|OPEN(?:DATASOURCE|QUERY|ROWSET)?|OPTIMIZE|OPTION(?:ALLY)?|ORDER|OUT(?:ER|FILE)?|OVER|PARTIAL|PARTITION|PERCENT|PIVOT|PLAN|POINT|POLYGON|PRECEDING|PRECISION|PREV|PRIMARY|PRINT|PRIVILEGES|PROC(?:EDURE)?|PUBLIC|PURGE|QUICK|RAISERROR|READ(?:S SQL DATA|TEXT)?|REAL|RECONFIGURE|REFERENCES|RELEASE|RENAME|REPEATABLE|REPLICATION|REQUIRE|RESTORE|RESTRICT|RETURNS?|REVOKE|RIGHT|ROLLBACK|ROUTINE|ROW(?:COUNT|GUIDCOL|S)?|RTREE|RULE|SAVE(?:POINT)?|SCHEMA|SELECT|SERIAL(?:IZABLE)?|SESSION(?:_USER)?|SET(?:USER)?|SHARE MODE|SHOW|SHUTDOWN|SIMPLE|SMALLINT|SNAPSHOT|SOME|SONAME|START(?:ING BY)?|STATISTICS|STATUS|STRIPED|SYSTEM_USER|TABLES?|TABLESPACE|TEMP(?:ORARY|TABLE)?|TERMINATED BY|TEXT(?:SIZE)?|THEN|TIMESTAMP|TINY(?:BLOB|INT|TEXT)|TOP?|TRAN(?:SACTIONS?)?|TRIGGER|TRUNCATE|TSEQUAL|TYPES?|UNBOUNDED|UNCOMMITTED|UNDEFINED|UNION|UNIQUE|UNPIVOT|UPDATE(?:TEXT)?|USAGE|USE|USER|USING|VALUES?|VAR(?:BINARY|CHAR|CHARACTER|YING)|VIEW|WAITFOR|WARNINGS|WHEN|WHERE|WHILE|WITH(?: ROLLUP|IN)?|WORK|WRITE(?:TEXT)?)\b/i, "boolean": /\b(?:TRUE|FALSE|NULL)\b/i, number: /\b-?(?:0x)?\d*\.?[\da-f]+\b/, operator: /[-+*\/=%^~]|&&?|\|?\||!=?|<(?:=>?|<|>)?|>[>=]?|\b(?:AND|BETWEEN|IN|LIKE|NOT|OR|IS|DIV|REGEXP|RLIKE|SOUNDS LIKE|XOR)\b/i, punctuation: /[;[\]()`,.]/ };
Prism.languages.swift = Prism.languages.extend("clike", { string: { pattern: /("|')(\\(?:\((?:[^()]|\([^)]+\))+\)|\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/, greedy: !0, inside: { interpolation: { pattern: /\\\((?:[^()]|\([^)]+\))+\)/, inside: { delimiter: { pattern: /^\\\(|\)$/, alias: "variable" } } } } }, keyword: /\b(as|associativity|break|case|catch|class|continue|convenience|default|defer|deinit|didSet|do|dynamic(?:Type)?|else|enum|extension|fallthrough|final|for|func|get|guard|if|import|in|infix|init|inout|internal|is|lazy|left|let|mutating|new|none|nonmutating|operator|optional|override|postfix|precedence|prefix|private|Protocol|public|repeat|required|rethrows|return|right|safe|self|Self|set|static|struct|subscript|super|switch|throws?|try|Type|typealias|unowned|unsafe|var|weak|where|while|willSet|__(?:COLUMN__|FILE__|FUNCTION__|LINE__))\b/, number: /\b([\d_]+(\.[\de_]+)?|0x[a-f0-9_]+(\.[a-f0-9p_]+)?|0b[01_]+|0o[0-7_]+)\b/i, constant: /\b(nil|[A-Z_]{2,}|k[A-Z][A-Za-z_]+)\b/, atrule: /@\b(IB(?:Outlet|Designable|Action|Inspectable)|class_protocol|exported|noreturn|NS(?:Copying|Managed)|objc|UIApplicationMain|auto_closure)\b/, builtin: /\b([A-Z]\S+|abs|advance|alignof(?:Value)?|assert|contains|count(?:Elements)?|debugPrint(?:ln)?|distance|drop(?:First|Last)|dump|enumerate|equal|filter|find|first|getVaList|indices|isEmpty|join|last|lexicographicalCompare|map|max(?:Element)?|min(?:Element)?|numericCast|overlaps|partition|print(?:ln)?|reduce|reflect|reverse|sizeof(?:Value)?|sort(?:ed)?|split|startsWith|stride(?:of(?:Value)?)?|suffix|swap|toDebugString|toString|transcode|underestimateCount|unsafeBitCast|with(?:ExtendedLifetime|Unsafe(?:MutablePointers?|Pointers?)|VaList))\b/ }), Prism.languages.swift.string.inside.interpolation.inside.rest = Prism.util.clone(Prism.languages.swift);
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(36)))

/***/ }),

/***/ 290:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_babel-polyfill@6.23.0@babel-polyfill/lib/index.js'");

/***/ }),

/***/ 31:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_css-loader@0.14.5@css-loader/lib/css-base.js'");

/***/ }),

/***/ 32:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_vue-style-loader@2.0.5@vue-style-loader/lib/addStylesClient.js'");

/***/ }),

/***/ 36:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_webpack@2.3.3@webpack/buildin/global.js'");

/***/ }),

/***/ 473:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(31)();
exports.push([module.i, "\n.form-control {\n  height: 38px;\n}\n.editor-toolbar.fullscreen {\n  z-index: 1031 !important;\n}\n.CodeMirror-fullscreen {\n  z-index: 1031 !important;\n}\n.CodeMirror {\n  z-index: 0;\n  height: 500px;\n}\n.editor-preview-side {\n  z-index: 1032 !important;\n}\n.CodeMirror {\n  z-index: 0;\n  height: 500px;\n}\n@media screen and (min-width: 992px) {\n.no-left-padding {\n    padding-left: 0;\n}\n.no-right-padding {\n    padding-right: 0;\n}\n}\n", ""]);

/***/ }),

/***/ 474:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(31)();
exports.push([module.i, "\n.form-control {\n  height: 38px;\n}\n.editor-toolbar.fullscreen {\n  z-index: 1031 !important;\n}\n.CodeMirror-fullscreen {\n  z-index: 1031 !important;\n}\n.CodeMirror {\n  z-index: 0;\n  height: 500px;\n}\n.editor-preview-side {\n  z-index: 1032 !important;\n}\n.CodeMirror {\n  z-index: 0;\n  height: 500px;\n}\n@media screen and (min-width: 992px) {\n.no-left-padding {\n    padding-left: 0;\n}\n.no-right-padding {\n    padding-right: 0;\n}\n}\n", ""]);

/***/ }),

/***/ 475:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(31)();
exports.push([module.i, "\n.newComment .CodeMirror, .CodeMirror-scroll {\n    min-height: 80px;\n}\n.newComment .CodeMirror {\n    height: 150px;\n}\n.newComment .editor-toolbar{\n    height: 35px;\n}\n.newComment .editor-toolbar:before {\n    margin-bottom: 0;\n}\n\n\n", ""]);

/***/ }),

/***/ 477:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(31)();
exports.push([module.i, "\nimg[data-v-504c97e8]{\n\n    width: 150px;\n    border-radius: 50%;\n}\n\n\n\n", ""]);

/***/ }),

/***/ 479:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(31)();
exports.push([module.i, "\n.alert-flash{\n    position: fixed;\n    right: 25px;\n    bottom: 25px;\n}\n\n", ""]);

/***/ }),

/***/ 481:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_marked@0.3.6@marked/lib/marked.js'");

/***/ }),

/***/ 485:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_vue-image-crop-upload@1.3.11@vue-image-crop-upload/upload-2.vue'");

/***/ }),

/***/ 486:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(518)

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(273),
  /* template */
  __webpack_require__(503),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/ArticleMdEditor.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] ArticleMdEditor.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0adfadf8", Component.options)
  } else {
    hotAPI.reload("data-v-0adfadf8", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 488:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(275),
  /* template */
  __webpack_require__(508),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/Comment.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Comment.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6439742e", Component.options)
  } else {
    hotAPI.reload("data-v-6439742e", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 489:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(276),
  /* template */
  __webpack_require__(505),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/Comments.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Comments.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1b9dcf4c", Component.options)
  } else {
    hotAPI.reload("data-v-1b9dcf4c", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 491:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(523)

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(278),
  /* template */
  __webpack_require__(512),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/Flash.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Flash.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-af16e90c", Component.options)
  } else {
    hotAPI.reload("data-v-af16e90c", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 495:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(519)

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(282),
  /* template */
  __webpack_require__(504),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/NewComment.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] NewComment.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-14f57a05", Component.options)
  } else {
    hotAPI.reload("data-v-14f57a05", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 496:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(517)

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(283),
  /* template */
  __webpack_require__(502),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/PageMdEditor.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] PageMdEditor.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-02e85d0e", Component.options)
  } else {
    hotAPI.reload("data-v-02e85d0e", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 497:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(284),
  /* template */
  __webpack_require__(513),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/Paginator.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Paginator.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b9b9e3ca", Component.options)
  } else {
    hotAPI.reload("data-v-b9b9e3ca", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 498:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(285),
  /* template */
  __webpack_require__(510),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/Parse.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Parse.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7f939cbd", Component.options)
  } else {
    hotAPI.reload("data-v-7f939cbd", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 499:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(521)

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(286),
  /* template */
  __webpack_require__(507),
  /* scopeId */
  "data-v-504c97e8",
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/UpdateAvatar.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] UpdateAvatar.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-504c97e8", Component.options)
  } else {
    hotAPI.reload("data-v-504c97e8", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 500:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(287),
  /* template */
  null,
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/pages/Article.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5d7351b8", Component.options)
  } else {
    hotAPI.reload("data-v-5d7351b8", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 502:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('div', {
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: "col-md-3 no-right-padding"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.route),
      expression: "route"
    }],
    staticClass: "form-control",
    attrs: {
      "name": "name",
      "type": "text",
      "placeholder": "请输入页面路由"
    },
    domProps: {
      "value": (_vm.route)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.route = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "col-md-9 no-left-padding"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.title),
      expression: "title"
    }],
    staticClass: "form-control",
    attrs: {
      "name": "name",
      "type": "text",
      "placeholder": "请输入页面标题"
    },
    domProps: {
      "value": (_vm.title)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.title = $event.target.value
      }
    }
  })])]), _vm._v(" "), _vm._m(0), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.isUpdate),
      expression: "!isUpdate"
    }],
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: " col-sm-12"
  }, [_vm._v("\n            导航条显示   "), _c('vue-switch', {
    attrs: {
      "value": _vm.isShowNav
    },
    on: {
      "input": _vm.changeShowNavState
    }
  }), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary pull-right",
    on: {
      "click": function($event) {
        _vm.create()
      }
    }
  }, [_vm._v("添加")])], 1)]), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.isUpdate),
      expression: "isUpdate"
    }],
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: " col-sm-12"
  }, [_vm._v("\n            导航条显示  "), _c('vue-switch', {
    attrs: {
      "value": _vm.isShowNav
    },
    on: {
      "input": _vm.changeShowNavState
    }
  }), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary pull-right",
    on: {
      "click": function($event) {
        _vm.update()
      }
    }
  }, [_vm._v("更新")])], 1)]), _vm._v(" "), _c('input', {
    staticStyle: {
      "display": "none"
    },
    attrs: {
      "type": "file",
      "id": "btn_file"
    }
  })])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('textarea', {
    attrs: {
      "id": "editor"
    }
  })])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-02e85d0e", module.exports)
  }
}

/***/ }),

/***/ 503:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('div', {
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: "col-md-3 no-right-padding"
  }, [_c('multiselect', {
    attrs: {
      "options": _vm.categories,
      "placeholder": "选择文章分类",
      "limit": 5,
      "label": "name",
      "track-by": "name"
    },
    model: {
      value: (_vm.category),
      callback: function($$v) {
        _vm.category = $$v
      },
      expression: "category"
    }
  }, [_vm._v("\n            >\n            ")])], 1), _vm._v(" "), _c('div', {
    staticClass: "col-md-9 no-left-padding"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.title),
      expression: "title"
    }],
    staticClass: "form-control",
    attrs: {
      "name": "name",
      "type": "text",
      "placeholder": "请输入文章标题"
    },
    domProps: {
      "value": (_vm.title)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.title = $event.target.value
      }
    }
  })])]), _vm._v(" "), _vm._m(0), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.isUpdate),
      expression: "!isUpdate"
    }],
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: " col-sm-12"
  }, [_vm._v("\n            原创文章   "), _c('vue-switch', {
    attrs: {
      "value": _vm.isOriginal
    },
    on: {
      "input": _vm.changeOrignalState
    }
  }), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary pull-right",
    on: {
      "click": function($event) {
        _vm.create()
      }
    }
  }, [_vm._v("添加")])], 1)]), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.isUpdate),
      expression: "isUpdate"
    }],
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: " col-sm-12"
  }, [_vm._v("\n            原创文章  "), _c('vue-switch', {
    attrs: {
      "value": _vm.isOriginal
    },
    on: {
      "input": _vm.changeOrignalState
    }
  }), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary pull-right",
    on: {
      "click": function($event) {
        _vm.update()
      }
    }
  }, [_vm._v("更新")])], 1)]), _vm._v(" "), _c('input', {
    staticStyle: {
      "display": "none"
    },
    attrs: {
      "type": "file",
      "id": "btn_file"
    }
  })])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "form-group"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('textarea', {
    attrs: {
      "id": "editor"
    }
  })])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-0adfadf8", module.exports)
  }
}

/***/ }),

/***/ 504:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(_vm.signedIn) ? _c('div', {
    staticClass: "newComment"
  }, [_vm._m(0), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('button', {
    staticClass: "btn btn-primary pull-right",
    on: {
      "click": _vm.newComment
    }
  }, [_vm._v("提交")])]), _vm._v(" "), _c('input', {
    staticStyle: {
      "display": "none"
    },
    attrs: {
      "type": "file",
      "id": "btn_file"
    }
  })]) : _c('p', {
    staticClass: "text-center empty-block white-bg"
  }, [_vm._v("\n            请 "), _c('a', {
    attrs: {
      "href": "/login"
    }
  }, [_vm._v("登录")]), _vm._v(" 后再进行评论\n    ")])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "form-group"
  }, [_c('textarea', {
    attrs: {
      "id": "editor"
    }
  })])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-14f57a05", module.exports)
  }
}

/***/ }),

/***/ 505:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "comment"
  }, [_c('div', {
    staticClass: "panel panel-default"
  }, [_c('div', {
    staticClass: "panel-heading"
  }, [_vm._v("\n            评论\n        ")]), _vm._v(" "), _c('div', {
    staticClass: "panel-body comment-contents"
  }, [(_vm.items.length == 0) ? _c('div', {
    staticClass: "empty-block"
  }, [_vm._v("评论区空空如也,赶快来评论吧")]) : _vm._l((_vm.items), function(comment, index) {
    return _c('div', {
      staticClass: "comment-content",
      attrs: {
        "id": index
      }
    }, [_c('comment', {
      attrs: {
        "index": index,
        "comment": comment
      },
      on: {
        "commentDelete": _vm.removeComment
      }
    })], 1)
  }), _vm._v(" "), _c('div', {
    staticClass: "text-center"
  }, [_c('paginator', {
    attrs: {
      "dataSet": _vm.dataSet
    },
    on: {
      "changed": _vm.fetch
    }
  })], 1)], 2)]), _vm._v(" "), _c('new-comment', {
    on: {
      "created": _vm.add
    }
  })], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-1b9dcf4c", module.exports)
  }
}

/***/ }),

/***/ 507:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('my-upload', {
    attrs: {
      "field": "img",
      "width": 300,
      "height": 300,
      "url": "/api/v1/uploadAvatar",
      "params": _vm.params,
      "headers": _vm.headers,
      "img-format": "png"
    },
    on: {
      "crop-success": _vm.cropSuccess,
      "crop-upload-success": _vm.cropUploadSuccess,
      "crop-upload-fail": _vm.cropUploadFail
    },
    model: {
      value: (_vm.show),
      callback: function($$v) {
        _vm.show = $$v
      },
      expression: "show"
    }
  }), _vm._v(" "), _c('img', {
    attrs: {
      "src": _vm.imgDataUrl
    }
  }), _vm._v(" "), _c('p', [_c('a', {
    staticClass: "btn btn-primary",
    on: {
      "click": _vm.toggleShow
    }
  }, [_vm._v("设置头像")])])], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-504c97e8", module.exports)
  }
}

/***/ }),

/***/ 508:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-left"
  }, [_c('a', {
    attrs: {
      "href": _vm.profile
    }
  }, [_c('img', {
    staticClass: "media-object avatar img-thumbnail",
    attrs: {
      "src": _vm.comment.user.avatar,
      "alt": "..."
    }
  })])]), _vm._v(" "), _c('div', {
    staticClass: "media-body"
  }, [_c('div', {
    staticClass: "media-heading"
  }, [_c('div', [_c('a', {
    attrs: {
      "href": _vm.profile
    }
  }, [_vm._v(_vm._s(_vm.comment.user.name))]), _vm._v(" "), _c('span', {
    staticClass: "pull-right operation"
  }, [(_vm.canDelete) ? _c('a', {
    attrs: {
      "href": "javascript:;"
    },
    on: {
      "click": _vm.deleteComment
    }
  }, [_c('i', {
    staticClass: "ion-trash-b"
  })]) : _vm._e(), _vm._v(" "), (_vm.canReplyUser) ? _c('a', {
    attrs: {
      "href": "javascript:;"
    },
    on: {
      "click": _vm.replyUser
    }
  }, [_c('i', {
    staticClass: "ion-reply"
  })]) : _vm._e()])]), _vm._v(" "), _c('div', {
    staticClass: "time"
  }, [_vm._v("发表于 "), _c('span', {
    attrs: {
      "data-toggle": "tooltip",
      "data-placement": "top",
      "title": this.comment.created_at
    }
  }, [_vm._v(_vm._s(_vm.ago))])])]), _vm._v(" "), _c('div', {
    staticClass: "comment-body"
  }, [_c('div', {
    staticClass: "markdown",
    domProps: {
      "innerHTML": _vm._s(_vm.body)
    }
  })])])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-6439742e", module.exports)
  }
}

/***/ }),

/***/ 510:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "markdown",
    domProps: {
      "innerHTML": _vm._s(_vm.rawHtml)
    }
  })
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-7f939cbd", module.exports)
  }
}

/***/ }),

/***/ 512:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.show),
      expression: "show"
    }],
    staticClass: "alert alert-dismissible alert-flash",
    class: _vm.levelClass,
    attrs: {
      "role": "alert"
    }
  }, [_vm._m(0), _vm._v(" "), _c('strong', [_vm._v(_vm._s(_vm.level) + "! ")]), _vm._v(" " + _vm._s(_vm.body) + "\n")])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('button', {
    staticClass: "close",
    attrs: {
      "type": "button",
      "data-dismiss": "alert",
      "aria-label": "Close"
    }
  }, [_c('span', {
    attrs: {
      "aria-hidden": "true"
    }
  }, [_vm._v("×")])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-af16e90c", module.exports)
  }
}

/***/ }),

/***/ 513:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return (_vm.shouldPaginate) ? _c('ul', {
    staticClass: "pagination"
  }, [_c('li', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.prevUrl),
      expression: "prevUrl"
    }]
  }, [_c('a', {
    attrs: {
      "href": "#",
      "aria-label": "Previous",
      "rel": "prev"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        _vm.page--
      }
    }
  }, [_c('span', {
    attrs: {
      "aria-hidden": "true"
    }
  }, [_vm._v("«")])])]), _vm._v(" "), _c('li', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.nextUrl),
      expression: "nextUrl"
    }]
  }, [_c('a', {
    attrs: {
      "href": "#",
      "aria-label": "Next",
      "rel": "next"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        _vm.page++
      }
    }
  }, [_c('span', {
    attrs: {
      "aria-hidden": "true"
    }
  }, [_vm._v("»")])])])]) : _vm._e()
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-b9b9e3ca", module.exports)
  }
}

/***/ }),

/***/ 517:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(473);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(32)("6a2e035f", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-02e85d0e\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./PageMdEditor.vue", function() {
     var newContent = require("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-02e85d0e\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./PageMdEditor.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 518:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(474);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(32)("52fe790e", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-0adfadf8\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./ArticleMdEditor.vue", function() {
     var newContent = require("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-0adfadf8\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./ArticleMdEditor.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 519:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(475);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(32)("078ff76e", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-14f57a05\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./NewComment.vue", function() {
     var newContent = require("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-14f57a05\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./NewComment.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 521:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(477);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(32)("c8a5ad6c", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-504c97e8\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./UpdateAvatar.vue", function() {
     var newContent = require("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-504c97e8\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./UpdateAvatar.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 523:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(479);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(32)("2a0e7867", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-af16e90c\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./Flash.vue", function() {
     var newContent = require("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-af16e90c\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./Flash.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 526:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(268);
__webpack_require__(270);
module.exports = __webpack_require__(271);


/***/ }),

/***/ 542:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_style-loader@0.13.2@style-loader/addStyles.js'");

/***/ }),

/***/ 543:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(554);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(542)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!../../_css-loader@0.14.5@css-loader/index.js!./vue-multiselect.min.css", function() {
			var newContent = require("!!../../_css-loader@0.14.5@css-loader/index.js!./vue-multiselect.min.css");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 544:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(547),
  /* template */
  __webpack_require__(563),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/Switch.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Switch.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-c97f25cc", Component.options)
  } else {
    hotAPI.reload("data-v-c97f25cc", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 545:
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

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            name: 'base-example',
            content: '孙菲菲',
            editorOption: {
                //                    theme: 'bubble',
                placeholder: "输入任何内容，支持html",
                modules: {},
                imageHandler: function imageHandler() {
                    alert(1);
                }

            }

        };
    },

    methods: {
        onEditorBlur: function onEditorBlur(editor) {
            console.log('editor blur!', editor);
        },
        onEditorFocus: function onEditorFocus(editor) {
            console.log('editor focus!', editor);
        },
        onEditorReady: function onEditorReady(editor) {

            //                editor.getModule("toolbar").addHandler("image", this.imageHander);
            console.log('editor ready!', editor);
        },
        imageHander: function imageHander(image, callback) {
            alert(1);
        }
    },
    computed: {
        editor: function editor() {
            return this.$refs.myTextEditor.quillEditor;
        }
    },
    mounted: function mounted() {
        //            console.log('this is my editor', this.editor)
        //            setTimeout(() => {
        //                this.content = '<h1>Example 1 changed!</h1>'
        //            }, 1800)
    }
});

/***/ }),

/***/ 546:
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
        info: {
            type: Object,
            default: function _default() {
                return null;
            }
        }
    },
    data: function data() {
        return {
            articleInfo: ''
        };
    },
    created: function created() {

        this.articleInfo = this.info.html.replace(/<[^>]+>/g, "").substr(0, 120) + '...';
    }
});

/***/ }),

/***/ 547:
/***/ (function(module, exports, __webpack_require__) {

//
//
//
//

__webpack_require__(551);
__webpack_require__(555);

module.exports = {
    props: {
        value: {
            type: Boolean,
            default: false
        }
    },
    mounted: function mounted() {

        $.fn.bootstrapSwitch.defaults.size = 'mini';

        this.$nextTick(function () {
            var _this = this;

            $(this.$el).bootstrapSwitch('state', this.value, this.value);

            $(this.$el).on('switchChange.bootstrapSwitch', function (event, state) {
                _this.$emit('input', state);
            });
        });
    },

    watch: {
        value: function value(val) {
            $(this.$el).bootstrapSwitch('state', val, val);
        }
    },
    beforeDestroy: function beforeDestroy() {
        $(this.$el).bootstrapSwitch('destroy');
    }
};

/***/ }),

/***/ 550:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_bootstrap-sass@3.3.7@bootstrap-sass/assets/javascripts/bootstrap.js'");

/***/ }),

/***/ 551:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_bootstrap-switch@3.3.4@bootstrap-switch/dist/js/bootstrap-switch.js'");

/***/ }),

/***/ 552:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_bootstrap-switch@3.3.4@bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css'");

/***/ }),

/***/ 553:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(31)();
exports.push([module.i, "\n.ql-container .ql-editor {\n  min-height: 30em;\n  padding-bottom: 1em;\n  max-height: 45em;\n}\n.html {\n  height: 20em;\n  overflow-y: auto;\n  border: 1px solid #ccc;\n  border-top: none;\n  resize: vertical;\n}\n#toolbar .custom {\n  float: left;\n  height: 100%;\n}\n", ""]);

/***/ }),

/***/ 554:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_vue-multiselect@2.0.0-beta.15@vue-multiselect/dist/vue-multiselect.min.css'");

/***/ }),

/***/ 555:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(552);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(542)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!../../../../_css-loader@0.14.5@css-loader/index.js!./bootstrap-switch.css", function() {
			var newContent = require("!!../../../../_css-loader@0.14.5@css-loader/index.js!./bootstrap-switch.css");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 556:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(565)

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(545),
  /* template */
  __webpack_require__(564),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/ArticleEditor.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] ArticleEditor.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-ca7bdbe6", Component.options)
  } else {
    hotAPI.reload("data-v-ca7bdbe6", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 557:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(546),
  /* template */
  __webpack_require__(562),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/wangju/Desktop/Code/PHP/Note/resources/assets/js/components/ArticleInfo.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] ArticleInfo.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6f116264", Component.options)
  } else {
    hotAPI.reload("data-v-6f116264", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 562:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "info"
  }, [_c('div', [_vm._v("\n        " + _vm._s(_vm.articleInfo) + "\n    ")])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-6f116264", module.exports)
  }
}

/***/ }),

/***/ 563:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('input', {
    staticClass: "form-control",
    attrs: {
      "type": "checkbox"
    }
  })
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-c97f25cc", module.exports)
  }
}

/***/ }),

/***/ 564:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('quill-editor', {
    ref: "myTextEditor",
    attrs: {
      "options": _vm.editorOption
    },
    on: {
      "blur": function($event) {
        _vm.onEditorBlur($event)
      },
      "focus": function($event) {
        _vm.onEditorFocus($event)
      },
      "ready": function($event) {
        _vm.onEditorReady($event)
      }
    },
    model: {
      value: (_vm.content),
      callback: function($$v) {
        _vm.content = $$v
      },
      expression: "content"
    }
  }), _vm._v(" "), _c('input', {
    attrs: {
      "type": "hidden",
      "name": "body"
    },
    domProps: {
      "value": _vm.content
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "html ql-editor",
    domProps: {
      "innerHTML": _vm._s(_vm.content)
    }
  })], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-ca7bdbe6", module.exports)
  }
}

/***/ }),

/***/ 565:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(553);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(32)("47aa4740", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-ca7bdbe6\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./ArticleEditor.vue", function() {
     var newContent = require("!!../../../../node_modules/_css-loader@0.14.5@css-loader/index.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-ca7bdbe6\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/_sass-loader@6.0.5@sass-loader/lib/loader.js!../../../../node_modules/_vue-loader@11.3.4@vue-loader/lib/selector.js?type=styles&index=0!./ArticleEditor.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 71:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_jquery@3.2.1@jquery/dist/jquery.js'");

/***/ }),

/***/ 72:
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/wangju/Desktop/Code/PHP/Note/node_modules/_simplemde@1.11.2@simplemde/dist/simplemde.min.js'");

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

},[526]);