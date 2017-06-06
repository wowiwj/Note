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

        <input type="file" id="btn_file" style="display:none">
       

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
                    {
                        name: "link",
                        action: SimpleMDE.drawLink,
                        className: "fa fa-link",
                        title: "Create Link",
                    },
                    {
                        name: "image",
                        action: function customFunction(editor){
                            var fileBtn = document.getElementById("btn_file");
                            fileBtn.click();

                            fileBtn.onchange = function () {
                                var formData = new FormData();
                                formData.append("file", fileBtn.files[0]);


                                axios.post('/api/v1/image/upload',formData).then(({data})=>{

                                    var pos = editor.codemirror.getCursor();
                                    editor.codemirror.setSelection(pos, pos);
                                    editor.codemirror.replaceSelection('![]('+data.data.image+')');

//                        
                                    console.log(data);

                                });

                                console.log(fileBtn.files[0]);

                                console.log(1);
                            }

                            // Add your own code
                        },
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
                        action: function openGuide(editor){
                            window.open("https://simplemde.com/markdown-guide");
                        },
                        className: "fa fa-question-circle",
                        title: "Markdown Guide",
                    }
                ],
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
                formData.append('title', this.title)
                formData.append('category_id',this.category.id)

                console.log(formData)


                axios.post('/api/v1/articles',formData).then((response)=>{

                    flash('添加成功','success');

                    var article = response.data;
                    console.log(article)

                    var path = 'articles'+'/'+article.category.name+'/'+article.id;


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





