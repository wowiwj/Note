<template>

    <div id="sim-mde">
        <div class="field">
            <div class="control">
                <textarea id="editor"></textarea>
            </div>
        </div>
        <div class="bottom-toolbar fullscreen">

        </div>

        <div class="top-toolbar fullscreen">

            <input type="text" class="title-input" placeholder="请输入文章标题">
            
        </div>

    </div>



</template>


<script>
    import {default as SimpleMDE} from 'simplemde/dist/simplemde.min.js'
    import MdeOption from './modules/MdeConfig.js'
    export default {
        props: ['articleId'],
        data() {
            return {
                simplemde: '',

            }
        },
        mounted() {

            this.simplemde = new SimpleMDE({
                toolbar: MdeOption.getToolBarConfig(),
                element: document.getElementById("editor"),
                placeholder: '请输入文章内容.',
                autoDownloadFontAwesome: true,
                spellChecker: false
            })


            this.simplemde.toggleFullScreen()
            this.simplemde.toggleSideBySide()
        },
        created() {

            console.log('created');
        }
    }



</script>

<style lang="scss">
    $editor-bottom-height: 50px;
    $editor-top-height: 60px;

    #sim-mde {

        .title-input{
            margin: 0;
            padding: 20px;
            font-size: 2rem;
            font-weight: 700;
            color: #000;
            border: none;
            outline: none;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            height: 100%;
        }

        .CodeMirror-fullscreen {
            bottom: $editor-bottom-height;
            top: $editor-top-height;
        }
        .CodeMirror{
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .editor-preview-side{
            bottom: $editor-bottom-height;
            top: $editor-top-height;
        }
        .editor-toolbar.fullscreen{
            display: none;
        }

        .bottom-toolbar.fullscreen{

            width: 100%;
            height: 50px;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            padding-top: 10px;
            padding-bottom: 10px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #fff;
            border: 0;
            position: fixed;
            bottom: 0;
            left: 0;
            opacity: 1;
            z-index: 9;

        }

        .top-toolbar.fullscreen{

            width: 100%;
            height: $editor-top-height;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            padding-top: 10px;
            padding-bottom: 10px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #fff;
            border: 0;
            position: fixed;
            top:0;
            bottom: 0;
            left: 0;
            opacity: 1;
            z-index: 9;
            display: flex;

        }
    }






</style>