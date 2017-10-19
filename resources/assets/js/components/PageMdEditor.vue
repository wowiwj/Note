<template>

    <div>

        <div class="field">

            <div class="columns">

                <div class="column is-3">

                    <p class="control">
                        <input v-model="route" class="input" name="name" type="text" placeholder="请输入页面路由">
                    </p>

                </div>

                <div class="column">

                    <p class="control">
                        <input v-model="title" class="input" name="name" type="text" placeholder="请输入页面标题">
                    </p>

                </div>

            </div>

        </div>

        <div class="field">
            <div class="control">
                <textarea id="editor"></textarea>
            </div>
        </div>



        <div class="field" v-show="!isUpdate">
            <div class="control">
                <div class="columns">

                    <div class="column is-12">
                        导航条显示&nbsp;&nbsp;
                        <vue-switch :value="isShowNav" @input="changeShowNavState"></vue-switch>
                        <button class="button is-primary is-pulled-right" @click="create()">添加</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="field" v-show="isUpdate">
            <div class="control">
                <div class="columns">

                    <div class="column is-12">
                        导航条显示&nbsp;&nbsp;
                        <vue-switch :value="isShowNav" @input="changeShowNavState"></vue-switch>
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
    import { default as SimpleMDE } from 'simplemde/dist/simplemde.min.js'

    import MdeOption from './modules/MdeConfig.js'
    require('vue-multiselect/dist/vue-multiselect.min.css')


    export default {
        components: { Multiselect,VueSwitch},
        props:['pageId'],
        data() {
            return {
                route:'',
                title:'',
                article:{},
                simplemde: '',
                pageImage: '',
                isShowNav: true,
                mdeConfig:null
            }
        },
        computed:{
            isUpdate:function(){
                return this.pageId != null
            }
            

        },
        mounted() {

            this.simplemde = new SimpleMDE({
                toolbar: MdeOption.getToolBarConfig(),
                element: document.getElementById("editor"),
                placeholder: '请输入页面内容.',
                autoDownloadFontAwesome: true,
                spellChecker: false
            })
        },
        methods: {
            create(){

                if (!this.route) {
                    flash('Route name can not empty.','danger')
                    return;
                }
                var value = this.simplemde.value();
                console.log(value);

                var formData = new FormData(event.target);
                formData.append('body', this.simplemde.value())
                formData.append('title', this.title)
                formData.append('route',this.route)
                formData.append('isShowNav',this.isShowNav ? 1 : 0)

                console.log(formData)


                axios.post('/api/v1/special_pages',formData).then((response)=>{

                    flash('添加成功','success');

                    var page = response.data.data;

                    var path = page.route;


                    window.location.href = '/' + path;

                },(error)=>{
                    console.log(error);
                });
            },
            update(){

                if (!this.route) {
                    flash('Route name can not empty.','danger')
                    return;
                }
                var value = this.simplemde.value();
                console.log(value);

                var formData = new FormData(event.target);
                formData.append('body', this.simplemde.value())
                formData.append('title', this.title)
                formData.append('route',this.route)
                formData.append('isShowNav',this.isShowNav ? 1 : 0)



                axios.post('/api/v1/special_pages/'+this.pageId+'?_method=put',formData).then((response)=>{

                    flash('修改成功','success');
                    var page = response.data.data;

                    var path = page.route;


                    window.location.href = '/' + path;
                    console.log(path);

                },(error)=>{
                    console.log(error);
                });


            },
            fetchPage(){
                axios.get('/api/v1/special_pages/'+this.pageId).then((response)=>{
                    console.log(response.data);
                    var data = response.data.data;
                    this.route = data.route;
                    this.title = data.title;
                    this.simplemde.value(data.body);

                    this.isShowNav = data.isShowNav;
                },(error)=>{
                    console.log(error);
                });

            },
            changeShowNavState(state){

                this.isShowNav = state

            }
        },
        created(){

            if(!this.isUpdate){
                return;
            }
            this.fetchPage();
            
            console.log('created');




        }
    }
</script>

<style lang="scss">


    .form-control{
        height: 38px;
    }

    .editor-toolbar.fullscreen {
        z-index: 1031 !important;
    }
    .CodeMirror-fullscreen {
        z-index: 1031 !important;
    }
    .CodeMirror{
        z-index: 0;
        height:500px;
    }

    .editor-preview-side{
        z-index: 1032 !important;
    }


    .CodeMirror{
        z-index: 0;
        height:500px;
    }

    

    @media screen and (min-width: 992px) {

        .no-left-padding{
            padding-left: 0;
        }

        .no-right-padding{
            padding-right: 0;
        }

    }

</style>





