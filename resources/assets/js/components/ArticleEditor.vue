<template>
    <div>
        <!-- quill-editor -->
        <quill-editor ref="myTextEditor"
                      v-model="content"
                      :options="editorOption"
                      @blur="onEditorBlur($event)"
                      @focus="onEditorFocus($event)"
                      @ready="onEditorReady($event)">
        </quill-editor>

        <input type="hidden" :value="content" name="body">


        <div class="html ql-editor" v-html="content"></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: 'base-example',
                content: '孙菲菲',
                editorOption: {
//                    theme: 'bubble',
                    placeholder: "输入任何内容，支持html",
                    modules: {
                    },
                    imageHandler: function () {
                        alert(1);
                    }

                },

            }
        },
        methods: {
            onEditorBlur(editor) {
                console.log('editor blur!', editor)
            },
            onEditorFocus(editor) {
                console.log('editor focus!', editor)
            },
            onEditorReady(editor) {

//                editor.getModule("toolbar").addHandler("image", this.imageHander);
                console.log('editor ready!', editor)
            },
            imageHander(image, callback)
            {
                alert(1);


            }

        },
        computed: {
            editor() {
                return this.$refs.myTextEditor.quillEditor
            }
        },
        mounted() {
//            console.log('this is my editor', this.editor)
//            setTimeout(() => {
//                this.content = '<h1>Example 1 changed!</h1>'
//            }, 1800)
        }
    }
</script>

<style lang="scss">
    .ql-container .ql-editor {
        min-height: 30em;
        padding-bottom: 1em;
        max-height: 45em;
    }
    .html {
        height: 20em;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-top: none;
        resize: vertical;
    }
    #toolbar{
        .custom{
            float: left;
            height: 100%;
        }
    }
</style>