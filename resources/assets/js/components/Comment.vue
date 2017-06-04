<template>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="level">
                <span class="flex">
                    <a href="#">{{ comment.user.name }}</a>
                    发表于 {{ ago }}
                </span>
                <a href="#">回复</a>
            </div>

        </div>

        <div class="panel-body">
            <div class="comment">
                <div class="markdown" v-html="body"></div>
            </div>

        </div>
    </div>

</template>

<script>

    import moment from 'moment'
    moment.locale('zh-cn'); 

    export default{
        props: ['comment'],
        computed: {
            body : function(){
                var comment = JSON.parse(this.comment.body)

                return comment.html

            },
            ago : function(){

                return moment(this.comment.created_at).fromNow()+'...';
            }

        }

    }

</script>