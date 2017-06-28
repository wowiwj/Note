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

                this.rawHtml = marked(this.markdown)
                return
            }


            this.rawHtml = marked(this.content.raw)
        }
    }
</script>