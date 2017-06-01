<template>

    <div>

        <div class="form-group">
            <div class="col-md-3 no-right-padding">
                <multiselect
                    v-model="category"
                    :options="categories"
                    placeholder="选择文章分类"
                    :limit="5"
                    label="name"
                    track-by="name">
                >
                </multiselect>
            </div>
            <div class="col-md-9 no-left-padding">
                <input v-model="title" class="form-control" name="name" type="text" placeholder="请输入文章标题">
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-12">
                <textarea id="editor"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <input class="btn btn-primary pull-right" id="user-edit-submit" @click="create()" value="添加">
            </div>
        </div>
       

    </div>

</template>


<script>

    import Multiselect from 'vue-multiselect'
    import { default as SimpleMDE } from 'simplemde/dist/simplemde.min.js'

    require('vue-multiselect/dist/vue-multiselect.min.css')

    export default {
        components: { Multiselect },
        data() {
            return {
                categories:[],
                category:null,
                title:'',
                simplemde: '',
                pageImage: ''
            }
        },
        mounted() {
            this.simplemde = new SimpleMDE({
                element: document.getElementById("editor"),
                placeholder: '请输入文章内容.',
                autoDownloadFontAwesome: true
            })
        },
        methods: {
            create(){

                if (!this.category) {
                    flash('Category must select one or more.','danger')
                    return;
                }
                var value = this.simplemde.value();
                console.log(value);

                var formData = new FormData(event.target);
                formData.append('body', this.simplemde.value())
                formData.append('title', this.title);

                console.log(formData)


                axios.post('/api/v1/categories/'+this.category.id+'/articles',formData).then((response)=>{

                    flash('添加成功','success');

                    var article = response.data;
                    console.log(article)

                    var path = 'categories'+'/'+article.category.name+'/articles/'+article.id;


                    window.location.href = '/' + path;
                    console.log(path);

                },(error)=>{
                    console.log(error);
                });
            }


        },
        created(){

            axios.get('/api/v1/categories/all').then((response)=>{
                console.log(response.data);
                this.categories = response.data.data;
            },(error)=>{
                console.log(error);
            });



            console.log('created');


        }
    }
</script>

<style lang="scss">


    .form-control{
        height: 38px;
    }

     .editor-toolbar.fullscreen {
         z-index: 1000 !important;
     }
     .CodeMirror-scroll{
         z-index: 1000 !important;
     }

    .CodeMirror-fullscreen {
        z-index: 1000 !important;
    }

    .CodeMirror{
        z-index: 0;
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





