<template>

    <div id="sim-mde">
        <div class="field">
            <div class="control">
                <textarea id="editor"></textarea>
            </div>
        </div>
        <div class="bottom-toolbar fullscreen">

            <div class="bottom-tool">

                <a @click="trigger('toggleBold')" title="Bold (Cmd-B)" tabindex="-1" class="fa fa-bold"></a>
                <a @click="trigger('toggleItalic')" title="Italic (Cmd-I)" tabindex="-1" class="fa fa-italic"></a>
                <a @click="trigger('toggleStrikethrough')" title="Strikethrough" tabindex="-1" class="fa fa-strikethrough"></a>
                <a @click="trigger('toggleHeadingSmaller')" title="Heading (Cmd-H)" tabindex="-1" class="fa fa-header"></a>
                <a @click="trigger('toggleCodeBlock')" title="Code (Cmd-⌥-C)" tabindex="-1" class="fa fa-code"></a>
                <a @click="trigger('toggleBlockquote')" title="Quote (Cmd-')" tabindex="-1" class="fa fa-quote-left"></a>
                <a @click="trigger('toggleUnorderedList')" title="Generic List (Cmd-L)" tabindex="-1" class="fa fa-list-ul"></a>
                <a @click="trigger('toggleOrderedList')" title="Numbered List (Cmd-⌥-L)" tabindex="-1" class="fa fa-list-ol"></a>
                <a @click="trigger('drawLink')" title="Create Link (Cmd-K)" tabindex="-1" class="fa fa-link"></a>
                <a @click="trigger('drawImage')" title="Insert Image" tabindex="-1" class="fa fa-picture-o"></a>
                <a @click="trigger('drawTable')" title="Insert Table" tabindex="-1" class="fa fa-table"></a>
                <a @click="trigger('drawHorizontalRule')" title="Insert Horizontal Line" tabindex="-1" class="fa fa-minus"></a>
                <a @click="trigger('togglePreview')" title="Toggle Preview (Cmd-P)" tabindex="-1" class="fa fa-eye no-disable"></a>
                <a @click="trigger('toggleSideBySide')" title="Toggle Side by Side (F9)" tabindex="-1" class="fa fa-columns no-disable no-mobile"></a>
                <a href="https://simplemde.com/markdown-guide" target="_blank" title="Markdown Guide" tabindex="-1" class="fa fa-question-circle"></a>

            </div>

            <div class="right-box p-r-10">

                <button class="button m-r-20">保存</button>
                <button class="button is-warning m-r-20">返回</button>

            </div>

        </div>

        <div class="top-toolbar fullscreen">

            <input type="text" class="title-input" placeholder="请输入文章标题">
            <div class="right-box p-r-20">

                <a class="button is-white">文章已保存</a>

                <button class="button is-primary m-r-20">发表</button>
                <a style="align-items: center;justify-content: center;display: inline-flex;" class="image is-45x45 is-white m-r-30">
                    <img src="https://lorempixel.com/200/200/?72701" alt="Jermaine Terry" class="avatar img-thumbnail">
                </a>
            </div>
            
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
            window.onresize = this.adjustPreviewWidth
        },
        methods:{
            trigger(action){

                let functionName = 'this.simplemde.'+action+'()';

                eval(functionName)

                if (action === 'togglePreview' || action === 'toggleSideBySide'){
                    console.log(action)
                    setTimeout(this.adjustPreviewWidth,100)
                }
            },
            adjustPreviewWidth(){

                let simMde = document.getElementById('sim-mde');

                let cmCode = simMde.getElementsByClassName('CodeMirror-code')[0];
                let leftDistance = (window.innerWidth - cmCode.offsetWidth) * 0.5;

                let isSideBySide = this.simplemde.isSideBySideActive();

                this.setInputPosition(isSideBySide,leftDistance)

                this.setPreviewPosition(cmCode.offsetWidth,leftDistance)

            },
            setInputPosition(isSideActive,leftDistance){
                let simMde = document.getElementById('sim-mde');
                let inputField = simMde.getElementsByClassName('title-input')[0]

                if (isSideActive){

                    inputField.style.paddingLeft = 20 + 'px';
                    inputField.style.marginLeft = 0;
                    return;
                }
                inputField.style.paddingLeft = 0;

                inputField.style.marginLeft = leftDistance + 'px';
            },
            setPreviewPosition(width,paddingLeft){

                let simMde = document.getElementById('sim-mde');
                let previewDom = simMde.getElementsByClassName('editor-preview-active')[0]
                if (!previewDom){
                    return
                }
                console.log(previewDom)
                previewDom.style.width = (width + 20) + 'px';
                previewDom.style.marginLeft = (paddingLeft - 10) + 'px';
            }

        }
    }



</script>

<style lang="scss">
    $editor-bottom-height: 50px;
    $editor-top-height: 60px;

    #sim-mde {

        .is-45x45{
            width: 45px;
            height: 45px;

        }

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
            .CodeMirror-lines{
                /*padding-left: 20px;*/
                /*padding-right: 20px;*/
            }

        }



        @media screen and (min-width: 992px) {
            .editor-preview.editor-preview-active{
                /*margin-left: 10%;*/
                /*width: 80%;*/
            }
            .CodeMirror-lines{
                margin: 0 auto;
                max-width: 1000px;

            }



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
            display: flex;

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

        .bottom-tool{
            flex: 1;
            padding: 0 20px;
            font-size: 20px;
            a{

                color: #555;
                padding: 0 5px;
            }

        }

        .right-box{

            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            align-items: center;
        }

        .left-box{

            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
    }






</style>