<template>
    <div class="info">
        <div>
            {{ articleInfo }}
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            info: {
                type: Object,
                default() {
                    return null
                }
            }
        },
        data() {
            return {
                articleInfo: ''
            }
        },
        created() {

            this.articleInfo = this.info.html.replace(/<[^>]+>/g,"");
        }
    }
</script>