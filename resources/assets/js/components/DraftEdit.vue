<template>

    <div>

        <article-editor
                @edit-change="editorChange"
                place-holder-title="请输入文章标题"
                place-holder-body="请输入文章内容"
                :title-text="draft.title"
                :body-text="draft.body"

        >
            <div slot="bottom-right">
                <button @click="updateDraft" class="button m-r-20">保存</button>
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
        props: ['draftRef'],
        data() {
            return {
                updateStatusLabel:'',
                categories: [],
                category: null,
                draft: {},
                user:{},
                simplemde: '',
                pageImage: '',
                isOriginal: true,
                tags:[],
                selectedTags:[],
                isModalPublishActive:false,
                filteredTags: [],
                isSelectOnly: false,
                allowNew: false,
                firstFetch:true
            }
        },
        methods: {

            editorChange(articleEditor){
                this.updateStatusLabel = '文章已更新';
                this.updateDraft(articleEditor)
            },
            updateDraft:_.debounce(function (articleEditor) {
                let formData = new FormData();
                console.log(articleEditor);
                let mde = articleEditor.mde;
                console.log(mde)
                formData.append('body', mde.value())
                formData.append('title', articleEditor.title)
                axios.post('/api/v1/drafts/' + this.draftRef+ '?_method=put',formData).then((response) => {
                    console.log(response.data);
                    let draft = response.data.data;
                    console.log(draft);
                    this.updateStatusLabel = '文章已保存';
//                    this.draft = draft;
//                    this.user = draft.user;
                }, (error) => {
                    console.log(error);
                });


            },3000),
            update() {

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
            fetchDraft() {
                axios.get('/api/v1/drafts/' + this.draftRef).then((response) => {
                    console.log(response.data);
                    let draft = response.data.data;
                    this.draft = draft;
                    this.user = draft.user;
                    this.firstFetch = false
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

            this.fetchDraft();

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





