<template>
    <div class="markdown" v-html="rawHtml"></div>
</template>

<script>
    export default {
        props: {
            markdown:String,
            content: {
                type: Object,
                default() {
                    return null
                }
            }
        },
        data() {
            return {
                rawHtml: ''
            }
        },
        created() {

            if (this.markdown){

                this.rawHtml = marked(this.markdown).replace(/<pre><code>/g, '<pre><code class=" language-php">')
                return
            }


            this.rawHtml = marked(this.content.raw).replace(/<pre><code>/g, '<pre><code class=" language-php">')
            
        }
    }
</script>