<template>

      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img class="avatar img-thumbnail" :src="comment.user.avatar" alt="Image">
          </figure>
          <favorite-comment :comment="comment" :best-answer="bestAnswer"></favorite-comment>
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

              <a v-if="canCheckAnswer" class="comment-option" @click="confirmCheck">
                <span class="icon is-small"><i class="fas fa-check"></i></span>
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
        props: ['comment','index','discussionUser','bestAnswer'],
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
                return window.App.signedIn && this.comment.user.id === window.App.user.id;
            },
            canCheckAnswer(){
                if (! this.discussionUser){
                    return false
                }
                console.log(window.App.user.is_admin)
                let isAdmin = window.App.signedIn && window.App.user.is_admin && this.discussionUser !== null;

                let isQuestioner = window.App.signedIn && this.discussionUser !== null && window.App.user.id === this.discussionUser.id;
                return isAdmin || isQuestioner;
            }
        },
        methods: {
            confirmCheck(){
                this.$dialog.confirm({
                    message: '该答案解决了我的问题?',
                    cancelText: '取消',
                    confirmText: '确定',
                    onConfirm: () => this.checkAnswer()
                })
            },
            checkAnswer(){

                window.events.$emit('answer-select',this.comment);
            },
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

                    if (this.comment.id === this.bestAnswer.id){
                        window.events.$emit('change-best-answer',null)
                    }

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

<style lang="scss">

  .best-answer-style{
    background: rgba(132,221,75,0.1);
  }

</style>