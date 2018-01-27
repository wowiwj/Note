<template>

      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img class="avatar img-thumbnail" :src="comment.user.avatar" alt="Image">
          </figure>
          <favorite-comment :comment="comment"></favorite-comment>  
        </div>
        <div class="media-content">
          <div class="content">
            <p class="level">
              <span class="flex">
                <strong>{{ comment.user.name }}</strong> <small>{{ ago }}</small>
              </span>

              <a v-if="canDelete" class="comment-option" @click="confirmDeleteComment">
                <span class="icon is-small"><i class="fa fa-trash"></i></span>
              </a>

              <a v-if="canReplyUser" class="comment-option" @click="replyUser" href="#newComment">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>

            </p>
            <div class="comment-body">
              <div class="markdown" v-html="body"></div>
            </div>

          </div>
        </div>
      </article>

</template>

<script>

    import moment from 'moment'
    import FavoriteComment from './FavoriteComment'
    moment.locale('zh-cn'); 

    export default{
        components:{FavoriteComment},
        props: ['comment','index'],
        computed: {
            body : function(){
                var comment = JSON.parse(this.comment.body)

                return marked(comment.raw).replace(/<pre><code>/g, '<pre><code class=" language-php">')
            },
            ago : function(){
                

                return moment(this.comment.created_at).fromNow();
            },
            profile : function () {
                return '/users/'+ this.comment.user.id;

            },
            canReplyUser(){

                

                return window.App.signedIn;


            },
            canDelete(){
                return window.App.signedIn && this.comment.user.id == window.App.user.id;

            }
        },
        methods: {
            replyUser(){

                window.events.$emit('reply',this.comment.user);

            },
            confirmDeleteComment() {
                this.$dialog.confirm({
                    message: '确定删除这条评论么?',
                    confirmText:'删除',
                    cancelText:'取消',
                    onConfirm: () => this.deleteComment()
                })
            },
            deleteComment(){


                axios.delete('/api/v1/comments/'+this.comment.id).then(({data})=>{

                    this.$toast.open({
                        duration: 5000,
                        message: `评论删除成功`,
                        position: 'is-bottom',
                        type: 'is-success'
                    })

                    this.$emit('commentDelete',this.index);

                },({error})=>{
                    this.$toast.open({
                        duration: 5000,
                        message: `评论删除失败`,
                        position: 'is-bottom',
                        type: 'is-danger'
                    })

                    console.log(error);
                });


            }

        }

    }

</script>