<template>

      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img class="avatar img-thumbnail" :src="comment.user.avatar" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>{{ comment.user.name }}</strong> <small>@{{ comment.user.name }}</small> <small>{{ ago }}</small>
              <br>
              <div class="comment-body">
                <div class="markdown" v-html="body"></div>
              </div>
            </p>
          </div>
          <nav class="level">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
      </article>


        <!-- <div class="media">
            <div class="media-left">
                <a :href="profile">
                    <img class="media-object avatar img-thumbnail" :src="comment.user.avatar" alt="...">
                </a>
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <div>
                        <a :href="profile">{{ comment.user.name }}</a>
                        <span class="pull-right operation">

                            <a v-if="canDelete" href="javascript:;" @click="deleteComment">
                                <i class="ion-trash-b"></i>
                            </a>
                            <a v-if="canReplyUser" href="javascript:;" @click="replyUser"><i class="ion-reply"></i></a>
                        </span>

                    </div>
                    <div class="time">发表于 <span data-toggle="tooltip" data-placement="top" :title="this.comment.created_at">{{ ago }}</span></div>


                </div>



                <div class="comment-body">
                    <div class="markdown" v-html="body"></div>
                </div>
            </div>
        </div> -->


</template>

<script>

    import moment from 'moment'
    moment.locale('zh-cn'); 

    export default{
        props: ['comment','index'],
        computed: {
            body : function(){
                var comment = JSON.parse(this.comment.body)

                return marked(comment.raw)

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
            deleteComment(){


                axios.delete('/api/v1/comments/'+this.comment.id).then(({data})=>{

                    flash('删除成功','success');

                    this.$emit('commentDelete',this.index);

                },({error})=>{
                    flash('删除失败','danger');

                    console.log(error);
                });


            }

        }

    }

</script>
