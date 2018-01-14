<template>

    <div class="is-pulled-right m-l-20">

        <b-tooltip label="订阅">
            <a @click="toggleSubscribe" :class="[isSubscribe ? 'subscribed' : 'un-subscribe','popover-with-html']">
                <i class="fa fa-eye"></i> <span></span>
            </a>
        </b-tooltip>
    </div>

</template>

<script>

    export default {
        props:['initialSubscribed','articleId'],
        data(){
            return {
                isSubscribe:this.initialSubscribed
            }
        },
        methods:{
            toggleSubscribe(){

                if (! this.isSubscribe){
                    this.$dialog.confirm({
                        message: '确定要订阅这篇文章么?',
                        confirmText: '订阅',
                        cancelText: '取消',
                        onConfirm: () => this.subscribe()
                    })
                    return

                }

                this.$dialog.confirm({
                    message: '确定要取消订阅这篇文章么?',
                    confirmText: '订阅',
                    cancelText: '取消',
                    onConfirm: () => this.unSubscribe()
                })
            },
            subscribe(){

                axios.post('/api/v1/subscribes',{
                    'type':'article',
                    'type_id':this.articleId
                }).then((res)=>{
                    console.log(res.data)
                    this.isSubscribe = true
                    this.$toast.open({
                        duration: 5000,
                        message: `订阅成功`,
                        position: 'is-top',
                        type: 'is-success'
                    })
                }).catch((err)=>{
                    console.log(err.response.data);

                });


            },
            unSubscribe(){

                axios.post('/api/v1/subscribes?_method=delete',{
                    'type':'article',
                    'type_id':this.articleId
                }).then((res)=>{
                    console.log(res.data)
                    this.isSubscribe = false
                    this.$toast.open({
                        duration: 5000,
                        message: `取消订阅成功`,
                        position: 'is-top',
                        type: 'is-success'
                    })
                }).catch((err)=>{
                });

            }


        }
    }


</script>

<style lang="scss">
    .un-subscribe{
        color: #999;
    }

    .subscribed{
        color:#00d1b2;
    }
</style>