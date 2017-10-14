<!--<template>-->



    <!--<b-notification>-->
        <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit-->
    <!--</b-notification>-->


    <!--&lt;!&ndash;<div :class="levelClass" class="alert alert-dismissible alert-flash" role="alert" v-show="show">&ndash;&gt;-->
        <!--&lt;!&ndash;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>&ndash;&gt;-->
        <!--&lt;!&ndash;<strong>{{ level }}! </strong> {{ body }}&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--</template>-->

<script>
    export default {
        props:['message','level'],
        data(){
            return {
                body:'',
                showLevel:'success',
                show:false
            }
        },
        created(){

            console.log(this.message+this.level);
            if (this.message){

                this.flash(this.message,this.level)
            }

            window.events.$on('flash',(message)=>{
                this.flash(message.text,message.level)
            });

            this.hide()


        },
        methods:{
            flash(message,level='success'){

                console.log('111')

                this.body = message;
                this.showLevel = level;
                this.show = true;
                this.hide();
            },
            hide(){

                setTimeout(() => {
                    this.show = false;
                },3000)
            }

        },
        computed:{
            levelClass:function(){
                return 'alert-'+this.showLevel;
            }
        },
    }
</script>

<style>

    .alert-flash{
        position: fixed;
        right: 25px;
        bottom: 25px;
    }

</style>