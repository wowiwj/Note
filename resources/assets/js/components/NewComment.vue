<template>

<div>
    <div class="newComment" v-if="signedIn">
        <div class="form-group" >
            <!--<textarea v-model="body" placeholder="添加留言" class="form-control" name="body" rows="5" >-->
            <!--</textarea>-->
            <textarea id="editor"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" @click="newComment">提交</button>
        </div>

        <input type="file" id="btn_file" style="display:none">

    </div>

    <p class="text-center" v-else>
            Please <a href="/login">sign in</a> to participate in this
            discussion.
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
        }

    },
    mounted() {
            this.simplemde = new SimpleMDE({
                toolbar: [{
                    name: "custom",
                    action: function customFunction(editor){
                        var fileBtn = document.getElementById("btn_file");
                        fileBtn.click();
                        
                        fileBtn.onchange = function () {
                            var formData = new FormData();
                            formData.append("file", fileBtn.files[0]);


                            axios.post('/api/v1/image/upload',formData).then(({data})=>{

                                editor.value(editor.value()+'![]('+data.data.image+')');
                                console.log(data);

                            });

                            console.log(fileBtn.files[0]);

                            console.log(1);
                        }

                        // Add your own code
                    },
                    className: "fa fa-star",
                    title: "Custom Button",
                }],
                element: document.getElementById("editor"),
                placeholder: '请输入评论内容.',
                autoDownloadFontAwesome: true
            })
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
    min-height: 100px;
}

.newComment .CodeMirror {
    height: 200px;
}
</style>


