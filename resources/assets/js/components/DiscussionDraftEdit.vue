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

            <button @click="isModalPublishActive = !isModalPublishActive" class="button is-primary m-r-20">提问</button>
            <a style="align-items: center;justify-content: center;display: inline-flex;"
               class="image is-45x45 is-white m-r-30">
                <img :src="currentUser.avatar" :alt="currentUser" class="avatar img-thumbnail">
            </a>

        </markdown-editor>

        <b-modal :active.sync="isModalPublishActive" has-modal-card>
            <div class="modal-card" style="width: 800px">
                <header class="modal-card-head">
                    <p class="modal-card-title">发表问题</p>
                </header>


                <section class="modal-card-body">


                    <div class="article-tags">
                        <p>选择或搜索文章标签</p>
                    </div>
                    <section class="tag-select">

                        <b-field label="Limited to 10 characters and 5 tags">
                            <b-taginput
                                    v-model="selectedTags"
                                    :data="tags"
                                    autocomplete
                                    :allowNew="allowNew"
                                    field="name"
                                    placeholder="添加标签"
                                    @typing="queryTag"
                                    maxlength="10"
                                    maxtags="3"
                                    >
                            </b-taginput>
                        </b-field>

                    </section>
                    <div class="discussion-tags">
                    <a @click="selectTag(item)" v-for="item in hotTags" :class="tagStyles(item)">{{ item.name }}</a>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button class="button" type="button" @click="isModalPublishActive = !isModalPublishActive">取消
                    </button>
                    <button v-if="isUpdate" @click="updateDiscussion" class="button is-primary">更新</button>
                    <button v-else="isUpdate" @click="createDiscussion" class="button is-primary">发表</button>

                </footer>
            </div>

        </b-modal>
    </div>

</template>

<script>
    import Multiselect from 'vue-multiselect'
    import MarkdownEditor from './MarkdownEditor.vue'

    export default {
        components: {Multiselect, MarkdownEditor},
        props: ['draftRef'],
        data() {
            return {
                draft: {},
                updateStatusLabel: '',
                isModalPublishActive: false,
                tags: [],
                selectedTags: [],
                allowNew:true,
                hotTags:[],
                discussion:null,
                firstFetch: true,
            }
        },
        methods: {

            editorChange(markdownEditor) {
                if (this.firstFetch){
                    this.firstFetch = false
                    return
                }
                this.updateStatusLabel = '提问已更新';
                this.updateDraft(markdownEditor)
            },
            updateDraft: _.debounce(function (markdownEditor) {

                let formData = new FormData();
                console.log(markdownEditor);
                let mde = markdownEditor.mde;
                console.log(mde)
                formData.append('body', mde.value())
                formData.append('title', markdownEditor.title)
                axios.post('/api/v1/drafts/' + this.draftRef + '?_method=put', formData).then((response) => {
                    this.updateStatusLabel = '提问已保存';
                }, (error) => {
                    console.log(error);
                });

            }, 3000),
            fetchDraft() {
                axios.get('/api/v1/drafts/' + this.draftRef).then((response) => {
                    console.log(response.data);
                    let draft = response.data.data;
                    this.draft = draft;
                    this.user = draft.user;
                    this.firstFetch = false
                    if (! draft.relation) return;
                    this.discussion = draft.relation
                    this.selectedTags = this.discussion.tags
                }, (error) => {
                    console.log(error);
                });

            },
            addTag(newTag) {
                const tag = {
                    name: newTag,
                    id: 0
                }
                this.tags.push(tag)
                this.selectedTags.push(tag)
            },
            queryTag(qw,limit=30,init=false) {

                axios.get('/api/v1/tags', {
                    params: {
                        q: qw,
                        limit:limit
                    }
                }).then((response) => {
                    this.tags = response.data.data
                    if (init){
                        this.hotTags = this.tags
                    }

                    console.log(response.data);

                });
                console.log(qw);


            },
            updateDiscussion(){

                let formData = new FormData();
                formData.append('draft_ref', this.draftRef)
                formData.append('tags', JSON.stringify(this.selectedTags));

                console.log(formData)
                axios.post('/api/v1/discussions/' + this.discussion.id + '?_method=put', formData).then((response) => {

                    this.$toast.open({
                        duration: 5000,
                        message: `更新成功`,
                        position: 'is-top',
                        type: 'is-success'
                    })
                    let discussion = response.data.data;
                    console.log(discussion)

                    let path = 'discussions' + '/' + discussion.id;

                    window.location.href = '/' + path;
                    console.log(path);
                    console.log(path);

                }, (error) => {
                    console.log(error);
                });



            },
            createDiscussion(){

                let formData = new FormData();
                formData.append('draft_ref', this.draftRef)
                formData.append('tags', JSON.stringify(this.selectedTags));

                console.log(formData)
                axios.post('/api/v1/discussions', formData).then((response) => {

                    flash('添加成功', 'success');

                    let discussion = response.data.data;
                    console.log(discussion)

                    let path = 'discussions' + '/' + discussion.id;

                    window.location.href = '/' + path;
                    console.log(path);

                }, (error) => {
                    console.log(error);
                });
            },
            selectTag(item){

                if (this.selectedTags.length >= 3){
                    return
                }

                let tag = this.selectedTags.filter((tag)=>{
                    return tag.id === item.id
                }).pop()

                if (tag){
                    this.selectedTags = this.selectedTags.filter((tag)=>{
                        return tag.id !== item.id
                    })
                    return
                }
                this.selectedTags.push(item)

            },
            tagStyles(item){

                let tag = this.selectedTags.filter((tag)=>{
                    return tag.id === item.id
                }).pop()
                let selected = !!tag;
                return {
                    'button':true,
                    'is-success': selected,
                    'is-outlined': selected,
                    'is-light' : !selected
                }
            }
        },
        created() {

            this.fetchDraft();
            this.queryTag('',30,true);

        },
        computed:{
            isUpdate:function () {
                return this.discussion !== null;
            },
            currentUser:function () {
                return window.App.user
            }

        }
    }


</script>

<style lang="scss">
    .tag-select{
        .control:not(:last-child) {
             margin-bottom: 0;
        }
    }

    .discussion-tags {
        padding-top: 10px;
        min-height: 200px;
        .button {
            margin: 5px;
            padding: 5px;
            font-size: 0.8rem;

        }

    }

</style>