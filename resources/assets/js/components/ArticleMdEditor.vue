<template>

    <div>

        <article-editor
        @edit-change="editorChange"
        >
            <div slot="bottom-right">
                <button class="button m-r-20">保存</button>
                <button class="button is-warning m-r-20">返回</button>
            </div>

            <a class="button is-white">{{ updateStatusLabel }}</a>

            <button @click="isModalPublishActive = !isModalPublishActive" class="button is-primary m-r-20">发表</button>
            <a style="align-items: center;justify-content: center;display: inline-flex;" class="image is-45x45 is-white m-r-30">
                <img src="https://lorempixel.com/200/200/?72701" alt="Jermaine Terry" class="avatar img-thumbnail">
            </a>

        </article-editor>

        <b-modal :active.sync="isModalPublishActive" has-modal-card>
            <div class="modal-card" style="width: 800px">
                <header class="modal-card-head">
                    <p class="modal-card-title">发表文章</p>
                </header>


                <section class="modal-card-body">

                    <div class="article-categories">
                        <p>选择文章分类(*)</p>

                        <a v-for="item in categories" class="button is-light">{{ item.name }}</a>

                    </div>

                    <div class="article-tags">
                        <p>选择或搜索文章标签</p>
                    </div>
                    <section>
                        <div class="field" style="margin: 2px;padding: 5px;padding-bottom: 10px">
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
                    </section>

                    <b-checkbox>原创文章(*)</b-checkbox>
                </section>
                <footer class="modal-card-foot">
                    <button class="button" type="button" @click="isModalPublishActive = !isModalPublishActive">取消</button>
                    <button class="button is-primary">发表</button>
                </footer>
            </div>

        </b-modal>


        <!--<div class="field">-->

            <!--<div class="columns">-->

                <!--<div class="column is-3">-->

                    <!--<p class="control">-->
                        <!--<multiselect-->
                                <!--v-model="category"-->
                                <!--:options="categories"-->
                                <!--placeholder="选择文章分类"-->
                                <!--:limit="5"-->
                                <!--label="name"-->
                                <!--track-by="name">-->
                            <!--&gt;-->
                        <!--</multiselect>-->
                    <!--</p>-->

                <!--</div>-->

                <!--<div class="column">-->

                    <!--<p class="control">-->
                        <!--<input class="input edit-article-title" v-model="title"  name="name" type="text" placeholder="请输入文章标题">-->
                    <!--</p>-->

                <!--</div>-->

            <!--</div>-->

        <!--</div>-->

        <!--<div class="field">-->
            <!--<div class="control">-->
                <!--<textarea id="editor"></textarea>-->
            <!--</div>-->
        <!--</div>-->



        <!--<div class="field" v-show="!isUpdate">-->
            <!--<div class="control">-->
                <!--<div class="columns">-->

                    <!--<div class="column is-12">-->
                        <!--原创文章&nbsp;&nbsp;-->
                        <!--<b-switch size="is-small" v-model="isOriginal"></b-switch>-->
                        <!--<button class="button is-primary is-pulled-right" @click="create()">添加</button>-->
                    <!--</div>-->

                <!--</div>-->
            <!--</div>-->
        <!--</div>-->

        <!--<div class="field" v-show="isUpdate">-->
            <!--<div class="control">-->
                <!--<div class="columns">-->

                    <!--<div class="column is-12">-->
                        <!--原创文章&nbsp;&nbsp;-->
                        <!--<b-switch size="is-small" v-model="isOriginal"></b-switch>-->

                        <!--<button class="button is-primary is-pulled-right" @click="update()">更新</button>-->
                    <!--</div>-->

                <!--</div>-->
            <!--</div>-->
        <!--</div>-->

        <input type="file" id="btn_file" style="display:none">



    </div>

</template>


<script>

    import Multiselect from 'vue-multiselect'
    import ArticleEditor from './ArticleEditor.vue'
    import {default as SimpleMDE} from 'simplemde/dist/simplemde.min.js'
    import MdeOption from './modules/MdeConfig.js'


    export default {
        components: {Multiselect,ArticleEditor},
        props: ['articleId'],
        data() {
            return {
                updateStatusLabel:'',
                categories: [],
                category: null,
                title: '',
                article: {},
                simplemde: '',
                pageImage: '',
                isOriginal: true,
                tags:[],
                selectedTags:[],
                isModalPublishActive:false,
                filteredTags: [],
                isSelectOnly: false,
                allowNew: false
            }
        },
        computed: {
            isUpdate: function () {
                return this.articleId != null
            }


        },
        methods: {

            editorChange(mde){
                this.updateStatusLabel = '文章已更新';
                this.updateArticle(mde)
            },
            updateArticle:_.debounce(function (mde) {
                this.updateStatusLabel = '文章已保存';
            },3000),
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
                formData.append('tags', JSON.stringify(this.selectedTags));


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
                    let article = response.data.data;
                    this.category = article.category;
                    this.article = article;
                    this.title = this.article.title;
                    this.simplemde.value(JSON.parse(this.article.body).raw);
                    this.isOriginal = this.article.is_original == 1;
                    this.selectedTags = this.article.tags;
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

    .article-categories{
        .button{
            margin: 5px;
            padding: 5px;

        }

    }

    .article-tags{
        .button{
            margin: 5px;
            padding: 5px;

        }

    }

    @media screen and (min-width: 992px) {

        .no-left-padding {
            padding-left: 0;
        }

        .no-right-padding {
            padding-right: 0;
        }

    }

</style>





