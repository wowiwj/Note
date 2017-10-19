<template>

    <div>

        <div class="field">

            <div class="columns">

                <div class="column is-3">

                    <p class="control">
                        <multiselect
                                v-model="category"
                                :options="categories"
                                placeholder="选择文章分类"
                                :limit="5"
                                label="name"
                                track-by="name">
                            >
                        </multiselect>
                    </p>

                </div>

                <div class="column">

                    <p class="control">
                        <input class="input edit-article-title" v-model="title"  name="name" type="text" placeholder="请输入文章标题">
                    </p>

                </div>

            </div>

        </div>

        <div class="field">
            <div class="control">
                <textarea id="editor"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <multiselect
                        v-model="selectedTags"
                        tag-placeholder="添加标签"
                        placeholder="搜索或添加标签"
                        label="name"
                        track-by="name"
                        :options="tags"
                        :multiple="true"
                        :taggable="true"
                        @tag="addTag"
                        @search-change="queryTag"
                        >
                </multiselect>
            </div>
        </div>

        <div class="field" v-show="!isUpdate">
            <div class="control">
                <div class="columns">

                    <div class="column is-12">
                        原创文章&nbsp;&nbsp;
                        <vue-switch :value="isOriginal" @input="changeOrignalState"></vue-switch>
                        <button class="button is-primary is-pulled-right" @click="create()">添加</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="field" v-show="isUpdate">
            <div class="control">
                <div class="columns">

                    <div class="column is-12">
                        原创文章&nbsp;&nbsp;
                        <vue-switch :value="isOriginal" @input="changeOrignalState"></vue-switch>
                        <button class="button is-primary is-pulled-right" @click="update()">更新</button>
                    </div>

                </div>
            </div>
        </div>

        <input type="file" id="btn_file" style="display:none">


    </div>

</template>


<script>

    import Multiselect from 'vue-multiselect'
    import VueSwitch from './Switch.vue'
    import {default as SimpleMDE} from 'simplemde/dist/simplemde.min.js'

    require('vue-multiselect/dist/vue-multiselect.min.css')

    export default {
        components: {Multiselect, VueSwitch},
        props: ['articleId'],
        data() {
            return {
                categories: [],
                category: null,
                title: '',
                article: {},
                simplemde: '',
                pageImage: '',
                isOriginal: true,
                tags:[],
                selectedTags:[]
            }
        },
        computed: {
            isUpdate: function () {
                return this.articleId != null
            }


        },
        mounted() {


            this.simplemde = new SimpleMDE({
                toolbar: [{
                    name: "bold",
                    action: SimpleMDE.toggleBold,
                    className: "fa fa-bold",
                    title: "Bold",
                },
                    {
                        name: "italic",
                        action: SimpleMDE.toggleItalic,
                        className: "fa fa-italic",
                        title: "Italic",
                    },
                    {
                        name: "strikethrough",
                        action: SimpleMDE.toggleStrikethrough,
                        className: "fa fa-strikethrough",
                        title: "Strikethrough",
                    },
                    {
                        name: "header",
                        action: SimpleMDE.toggleHeadingSmaller,
                        className: "fa fa-header",
                        title: "Heading",
                    },
                    "|",
                    {
                        name: "code",
                        action: SimpleMDE.toggleCodeBlock,
                        className: "fa fa-code",
                        title: "Code",
                    },
                    {
                        name: "quote",
                        action: SimpleMDE.toggleBlockquote,
                        className: "fa fa-quote-left",
                        title: "Quote",
                    },
                    {
                        name: "unordered-list",
                        action: SimpleMDE.toggleUnorderedList,
                        className: "fa fa-list-ul",
                        title: "Generic List",
                    },
                    {
                        name: "ordered-list",
                        action: SimpleMDE.toggleOrderedList,
                        className: "fa fa-list-ol",
                        title: "Numbered List",
                    },
                    "|"
                    ,
                    {
                        name: "link",
                        action: SimpleMDE.drawLink,
                        className: "fa fa-link",
                        title: "Create Link",
                    },
                    {
                        name: "image",
                        action: this.selectImage,
                        className: "fa fa-picture-o",
                        title: "Insert Image",
                    },
                    {
                        name: "table",
                        action: SimpleMDE.drawTable,
                        className: "fa fa-table",
                        title: "Insert Table",
                    },
                    {
                        name: "horizontal-rule",
                        action: SimpleMDE.drawHorizontalRule,
                        className: "fa fa-minus",
                        title: "Insert Horizontal Line",
                    },
                    "|",

                    {
                        name: "preview",
                        action: SimpleMDE.togglePreview,
                        className: "fa fa-eye no-disable",
                        title: "Toggle Preview",
                    },
                    {
                        name: "side-by-side",
                        action: SimpleMDE.toggleSideBySide,
                        className: "fa fa-columns no-disable no-mobile",
                        title: "Toggle Side by Side",
                    },
                    {
                        name: "fullscreen",
                        action: SimpleMDE.toggleFullScreen,
                        className: "fa fa-arrows-alt no-disable no-mobile",
                        title: "Toggle Fullscreen",
                    },
                    {
                        name: "guide",
                        action: function openGuide(editor) {
                            window.open("https://simplemde.com/markdown-guide");
                        },
                        className: "fa fa-question-circle",
                        title: "Markdown Guide",
                    }
                ],
                element: document.getElementById("editor"),
                placeholder: '请输入文章内容.',
                autoDownloadFontAwesome: true,
                spellChecker: false
            })
        },
        methods: {
            create() {

                if (!this.category) {
                    flash('Category must select one or more.', 'danger')
                    return;
                }
                var value = this.simplemde.value();
                console.log(value);

                var formData = new FormData(event.target);
                formData.append('body', this.simplemde.value())
                formData.append('title', this.title)
                formData.append('category_id', this.category.id)
                formData.append('is_original', this.isOriginal ? 1 : 0)
                formData.append('tags', JSON.stringify(this.selectedTags));

                console.log(formData)


                axios.post('/api/v1/articles', formData).then((response) => {

                    flash('添加成功', 'success');

                    var article = response.data;
                    console.log(article)

                    var path = 'articles' + '/' + article.category.name + '/' + article.id;


                    window.location.href = '/' + path;
                    console.log(path);

                }, (error) => {
                    console.log(error);
                });
            },
            update() {

                if (!this.category) {
                    flash('Category must select one or more.', 'danger')
                    return;
                }
                var value = this.simplemde.value();
                console.log(value);

                var formData = new FormData(event.target);
                formData.append('content', value)
                formData.append('title', this.title)
                formData.append('category_id', this.category.id)
                formData.append('is_original', this.isOriginal ? 1 : 0)


                console.log(value)
                console.log(this.title)
                console.log(this.category.id)
                console.log(formData)


                axios.post('/api/v1/articles/' + this.articleId + '?_method=put', formData).then((response) => {

                    flash('修改成功', 'success');

                    var article = response.data;
                    console.log(response.data)

                    var path = 'articles' + '/' + article.category.slug + '/' + article.id;


                    window.location.href = '/' + path;
                    console.log(path);

                }, (error) => {
                    console.log(error);
                });


            },
            selectImage(editor) {
                var fileBtn = document.getElementById("btn_file");
                fileBtn.onchange = this.uploadImage;
                fileBtn.click();
            },
            uploadImage() {
                var fileBtn = document.getElementById("btn_file");
                var formData = new FormData();
                formData.append("file", fileBtn.files[0]);
                axios.post('/api/v1/image/upload', formData).then(({data}) => {

                    var pos = this.simplemde.codemirror.getCursor();
                    this.simplemde.codemirror.setSelection(pos, pos);
                    this.simplemde.codemirror.replaceSelection('![](' + data.data.image + ')');

                    console.log(data);

                });
                console.log(fileBtn.files[0]);
                console.log(1);
            },
            fetchCategories() {
                axios.get('/api/v1/categories/all').then((response) => {
                    console.log(response.data);
                    this.categories = response.data.data;
                }, (error) => {
                    console.log(error);
                });
            },
            fetchArticle() {
                axios.get('/api/v1/articles/' + this.articleId).then((response) => {
                    console.log(response.data);
                    this.category = response.data.category;
                    this.article = response.data;
                    this.title = this.article.title;
                    this.simplemde.value(JSON.parse(this.article.body).raw);
                    this.isOriginal = this.article.is_original == 1;
                }, (error) => {
                    console.log(error);
                });

            },
            changeOrignalState(state) {

                this.isOriginal = state

            },
            addTag (newTag) {
                const tag = {
                    name: newTag,
                    id: 0
                }
                this.tags.push(tag)
                this.selectedTags.push(tag)
            },
            queryTag(qw){

                axios.get('/api/v1/tags',{
                    params: {
                        q: qw
                    }
                }).then((response)=>{
                    this.tags = response.data.data

                    console.log(response.data);

                });
                console.log(qw);


            }

        },
        created() {


            this.fetchCategories();
            if (!this.isUpdate) {
                return;
            }
            this.fetchArticle();

            console.log('created');


        }
    }
</script>

<style lang="scss">


    .form-control {
        height: 38px;
    }

    .editor-toolbar.fullscreen {
        z-index: 1031 !important;
    }

    .CodeMirror-fullscreen {
        z-index: 1031 !important;
    }

    .CodeMirror {
        z-index: 0;
        height: 500px;
    }

    .editor-preview-side {
        z-index: 1032 !important;
    }

    .CodeMirror {
        z-index: 0;
        height: 500px;
    }

    @media screen and (min-width: 992px) {

        .no-left-padding {
            padding-left: 0;
        }

        .no-right-padding {
            padding-right: 0;
        }

    }

    .multiselect__tags {

        display: block;
        padding: 8px 40px 0 8px;
        border-radius: 3px;

        font-size: 1rem;
        height: 2.25em;
        background-color: white;
        border-color: #dbdbdb;
        color: #363638;
        box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);
        padding-bottom: calc(0.375em - 1px);
        padding-left: calc(0.625em - 1px);
        padding-right: calc(0.625em - 1px);
        padding-top: calc(0.375em - 1px);
    }

    /*.input, .textarea {*/
        /*-moz-appearance: none;*/
        /*-webkit-appearance: none;*/
        /*-webkit-box-align: center;*/
        /*-ms-flex-align: center;*/
        /*align-items: center;*/
        /*border: 1px solid transparent;*/
        /*border-radius: 3px;*/
        /*box-shadow: none;*/
        /*display: -webkit-inline-box;*/
        /*display: -ms-inline-flexbox;*/
        /*display: inline-flex;*/
        /*font-size: 1rem;*/
        /*height: 2.25em;*/
        /*-webkit-box-pack: start;*/
        /*-ms-flex-pack: start;*/
        /*justify-content: flex-start;*/
        /*line-height: 1.5;*/
        /*padding-bottom: calc(0.375em - 1px);*/
        /*padding-left: calc(0.625em - 1px);*/
        /*padding-right: calc(0.625em - 1px);*/
        /*padding-top: calc(0.375em - 1px);*/
        /*position: relative;*/
        /*vertical-align: top;*/
        /*background-color: white;*/
        /*border-color: #dbdbdb;*/
        /*color: #363638;*/
        /*box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);*/
        /*max-width: 100%;*/
        /*width: 100%;*/

</style>





