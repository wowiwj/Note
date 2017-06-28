

import { default as SimpleMDE } from 'simplemde/dist/simplemde.min.js'

class MdeImageHelper{

    static selectImage(editor){
                
        var fileBtn = document.getElementById("btn_file");


        console.log(this);
       

        fileBtn.onchange = function(){

            MdeImageHelper.uploadImage(editor);

        }.bind(editor);

        fileBtn.click();
            
    }

    static uploadImage(editor){

        console.log(editor);

        var fileBtn = document.getElementById("btn_file");
        var formData = new FormData();
        formData.append("file", fileBtn.files[0]);
        axios.post('/api/v1/image/upload',formData).then(({data})=>{

            var pos = editor.codemirror.getCursor();
            editor.codemirror.setSelection(pos, pos);
            editor.codemirror.replaceSelection('![]('+data.data.image+')');

            console.log(data);

        });
        console.log(fileBtn.files[0]);
        console.log(1);
            
    }


}



export default{

    getToolBarConfig() {
		return [{
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
                        action: MdeImageHelper.selectImage,
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
                ]
	
    }

    



}