<template>

<div>
    <div class="newComment" v-if="signedIn" id="newComment">
        <div class="field" >
            <textarea id="editor"></textarea>
        </div>

        <div class="field">
            <button class="button is-primary is-pulled-right" @click="newComment">提交</button>
        </div>

        <input type="file" id="btn_file" style="display:none">

    </div>

    <p class="text-center empty-block white-bg" v-else>
            请 <a href="javascript:showLogin()">登录</a> 后再进行评论
    </p>

</div>

  
</template>

<script>

import { default as SimpleMDE } from 'simplemde/dist/simplemde.min.js'

export default {

    data(){
        return {
            body :'',
            simplemde:null
        }
    },
    methods:{
        newComment:function(){
            var value = this.simplemde.value();
            if(!value)
            {
                flash('评论内容不能为空','danger');
                return;
            }
            var formData = new FormData(event.target);
            formData.append('body', value)

            axios.post('/api/v1'+location.pathname + '/comments',formData).then(({data})=>{
                console.log(data);
                this.simplemde.value('');
                flash('添加评论成功');
                this.$emit('created',data.data);
            });
        },
        initmde(){
            this.simplemde = new SimpleMDE({
                toolbar: [{
                    name: "select image",
                    action: function customFunction(editor){
                        var fileBtn = document.getElementById("btn_file");
                        fileBtn.click();

                        fileBtn.onchange = function () {
                            var formData = new FormData();
                            formData.append("file", fileBtn.files[0]);


                            axios.post('/api/v1/image/upload',formData).then(({data})=>{

                                editor.value(editor.value()+'![]('+data.data.image+')');
                                console.log(data);

                            },({error})=>{

                                flash('添加失败,请确认上传的为jpg,png,gif格式','danger');
                                fileBtn.value = '';
                                return;
                            });

                            console.log(fileBtn);

                            console.log(1);
                        }
                    },
                    className: "fa fa-image",
                    title: "select image",
                }],
                element: document.getElementById("editor"),
                placeholder: '请输入评论内容.',
                autoDownloadFontAwesome: true,
                spellChecker: false
            })

        }

    },
    mounted() {
        this.initmde()

        window.events.$on('reply',(user)=>{
            this.simplemde.value('@'+user.name+' ');
            this.simplemde.codemirror.focus()
        });


    },
    computed: {
        signedIn() {
            return window.App.signedIn;
        }
    },
  
}
</script>

<style>
.newComment .CodeMirror, .CodeMirror-scroll {
    min-height: 80px;
}

.newComment .CodeMirror {
    height: 150px;
}

.newComment .editor-toolbar{
    height: 35px;
}
.newComment .editor-toolbar:before {
    margin-bottom: 0;
}


</style>


