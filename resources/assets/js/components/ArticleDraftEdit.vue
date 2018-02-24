<template>

    <div>

        <markdown-editor
                @edit-change="editorChange"
                place-holder-title="请输入文章标题"
                place-holder-body="请输入文章内容"
                :title-text="draft.title"
                :body-text="draft.body"

        >
            <div slot="bottom-right">

                <a href="/" class="button is-warning m-r-20">返回</a>
            </div>

            <a class="button is-white">{{ updateStatusLabel }}</a>

            <button @click="isModalPublishActive = !isModalPublishActive" class="button is-primary m-r-20">发表</button>
            <a style="align-items: center;justify-content: center;display: inline-flex;"
               class="image is-45x45 is-white m-r-30">
                <img :src="currentUser.avatar" :alt="currentUser" class="avatar img-thumbnail">
            </a>

        </markdown-editor>

        <b-modal :active.sync="isModalPublishActive" has-modal-card>
            <div class="modal-card" style="width: 800px">
                <header class="modal-card-head">
                    <p class="modal-card-title">发表文章</p>
                </header>


                <section class="modal-card-body">

                    <div class="article-categories">
                        <p>选择文章分类(*)</p>

                        <a @click="selectCategory(item)" v-for="item in categories" :class="categoryStyles(item)">{{ item.name }}</a>

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

                    <b-checkbox v-model="isOriginal">原创文章(*)</b-checkbox>
                </section>
                <footer class="modal-card-foot">
                    <button class="button" type="button" @click="isModalPublishActive = !isModalPublishActive">取消
                    </button>
                    <button v-if="isUpdate" @click="updateArticle" class="button is-primary">更新</button>
                    <button v-else="isUpdate" @click="createArticle" class="button is-primary">发表</button>

                </footer>
            </div>

        </b-modal>

        <input type="file" id="btn_file" style="display:none">


    </div>

</template>


<script>

    import Multiselect from 'vue-multiselect'
    import MarkdownEditor from './MarkdownEditor.vue'
    import {default as SimpleMDE} from 'simplemde/dist/simplemde.min.js'
    import MdeOption from './modules/MdeConfig.js'


    export default {
        components: {Multiselect, MarkdownEditor},
        props: ['draftRef'],
        data() {
            return {
                updateStatusLabel: '',
                categories: [],
                category: null,
                draft: {},
                user: {},
                simplemde: '',
                pageImage: '',
                isOriginal: true,
                tags: [],
                selectedTags: [],
                isModalPublishActive: false,
                filteredTags: [],
                isSelectOnly: false,
                allowNew: false,
                firstFetch: true,
                article:{}
            }
        },
        methods: {

            editorChange(articleEditor) {
                if (this.firstFetch){
                    this.firstFetch = false
                    return
                }
                this.updateStatusLabel = '文章已更新';
                this.updateDraft(articleEditor)
            },
            updateDraft: _.debounce(function (articleEditor) {
                let formData = new FormData();
                console.log(articleEditor);
                let mde = articleEditor.mde;
                console.log(mde)
                formData.append('body', mde.value())
                formData.append('title', articleEditor.title)
                axios.post('/api/v1/drafts/' + this.draftRef + '?_method=put', formData).then((response) => {
                    console.log(response.data);
                    let draft = response.data.data;
                    console.log(draft);
                    this.updateStatusLabel = '文章已保存';
                }, (error) => {
                    console.log(error);
                });


            }, 3000),
            fetchCategories() {
                axios.get('/api/v1/categories/all').then((response) => {
                    console.log(response.data);
                    this.categories = response.data.data;
                }, (error) => {
                    console.log(error);
                });
            },
            selectCategory(item){
                this.category = item
            },
            categoryStyles(item){

                let selected = this.category ? this.category.id === item.id : false;
                return {
                    'button':true,
                    'is-success': selected,
                    'is-outlined': selected,
                    'is-light' : !selected
                }
            },
            fetchDraft() {
                axios.get('/api/v1/drafts/' + this.draftRef).then((response) => {
                    console.log(response.data);
                    let draft = response.data.data;
                    this.draft = draft;
                    this.user = draft.user;
                    this.firstFetch = false
                    this.article = draft.relation
                }, (error) => {
                    console.log(error);
                });

            },
            changeOrignalState(state) {

                this.isOriginal = state

            },
            addTag(newTag) {
                const tag = {
                    name: newTag,
                    id: 0
                }
                this.tags.push(tag)
                this.selectedTags.push(tag)
            },
            queryTag(qw) {

                axios.get('/api/v1/tags', {
                    params: {
                        q: qw
                    }
                }).then((response) => {
                    this.tags = response.data.data

                    console.log(response.data);

                });
                console.log(qw);


            },
            createArticle(){

                if (!this.category) {
                    this.$toast.open({
                        duration: 5000,
                        message: `必须要选择一个分类`,
                        position: 'is-bottom',
                        type: 'is-danger'
                    })
                    return;
                }

                var formData = new FormData(event.target);
                formData.append('draft_ref', this.draftRef)
                formData.append('category_id', this.category.id)
                formData.append('is_original', this.isOriginal ? 1 : 0)
                formData.append('tags', JSON.stringify(this.selectedTags));

                console.log(formData)


                axios.post('/api/v1/articles', formData).then((response) => {

                    flash('添加成功', 'success');

                    var article = response.data.data;
                    console.log(article)

                    var path = 'articles' + '/' + article.category.name + '/' + article.id;


                    window.location.href = '/' + path;
                    console.log(path);

                }, (error) => {
                    console.log(error);
                });

            },
            updateArticle(){

                if (!this.category) {
                    this.$toast.open({
                        duration: 5000,
                        message: `必须要选择一个分类`,
                        position: 'is-bottom',
                        type: 'is-danger'
                    })
                    return;
                }

                var formData = new FormData(event.target);
                formData.append('draft_ref', this.draftRef)
                formData.append('category_id', this.category.id)
                formData.append('is_original', this.isOriginal ? 1 : 0)
                formData.append('tags', JSON.stringify(this.selectedTags));

                console.log(formData)


                axios.post('/api/v1/articles/' + this.article.id + '?_method=put', formData).then((response) => {

                    this.$toast.open({
                        duration: 5000,
                        message: `更新成功`,
                        position: 'is-top',
                        type: 'is-success'
                    })

                    var article = response.data.data;
                    console.log(article)

                    var path = 'articles' + '/' + article.category.name + '/' + article.id;


                    window.location.href = '/' + path;
                    console.log(path);

                }, (error) => {
                    console.log(error);
                });

            }

        },
        created() {

            this.fetchDraft();
            this.fetchCategories();
            this.queryTag();
        },
        computed:{
            isUpdate:function () {
                return this.article !== null;
            },
            currentUser:function () {
                return window.App.user
            }

        },
        watch:{
            article:function (value) {
                if (value === null){
                    return
                }
                this.category = value.category
                this.selectedTags = value.tags
                this.isOriginal = !!value.is_original
            }

        }
    }
</script>

<style lang="scss">


    .form-control {
        height: 38px;
    }

    .article-categories {
        .button {
            margin: 5px;
            padding: 5px;

        }

    }

    .article-tags {
        .button {
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





