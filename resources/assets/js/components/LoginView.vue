<template>
    <div>

        <b-modal :active.sync="isLoginFormActive" has-modal-card :can-cancel='true'>
            <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">
                    登录
                </p>
                <button @click="isLoginFormActive = false" class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <div>
                    <form role="form" id="login-form" method="post" action="/login">
                        <input type="hidden" name="_token" :value="token">
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input  v-model="email" name="email" class="input" type="email" placeholder="请输入邮箱">
                                <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fa fa-check"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input  v-model="password" name="password" class="input" type="password" placeholder="请输入密码">
                                <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control is-full-width">
                                <button @click.prevent="login"  :class="['button is-success is-submit',{'is-loading':islogin}]">
                                登录
                                </button>
                            </p>
                        </div>
                        <div class="control" v-if="errorMessage">
                            <span class="help is-danger">
                            {{ errorMessage }}
                            </span>
                        </div>

                        <div class="field level">
                            <p class="control flex">
                                <a href="/register">没有账号?注册</a>
                            </p>
                            <a>
                                忘记密码?
                            </a>
                            
                        </div>


                
                    </form>
                </div>
            </section>
            <footer class="modal-card-foot">
                <div class="third-login">
                    第三方登录:
                    <a :href="githubAuthUrl">
                        <i class="fa fa-github"></i>
                    </a>
                    <a :href="qqAuthUrl">
                        <i class="fa fa-qq"></i>
                    </a>
                </div> 
            </footer>
        </div>
        </b-modal>

    </div>
  
</template>

<script>
export default {
    props:['githubAuthUrl','qqAuthUrl'],
    data(){
        return{
            isLoginFormActive:false,
            email:null,
            password:null,
            islogin:false,
            errorMessage:null
        }


    },
    created(){
        window.events.$on('login',(message)=>{
             this.isLoginFormActive = true;
        });
    },
    methods:{
        login:function(){
            this.islogin = true;
            axios.post('/api/v1/auth/login',{
                'email':this.email,
                'password':this.password
            }).then((response)=>{
                this.isLoginFormActive = false;
                this.$toast.open({
                    message: '欢迎回来!',
                    type: 'is-success'
                })
                document.getElementById('login-form').submit();

                console.log(response.data);
            }).catch((error)=>{
                this.islogin = false;
                this.errorMessage = error.response.data.message

                console.log(error);
            })

            console.log('login');


        }
    },
    computed: {
        token : function(){
            return App.csrfTtoken;

        }
    }


}

</script>

<style>

    
    .modal-background{
        background-color: rgba(10, 10, 10, 0.6);

    }

    .field.is-grouped .field + .field {
        margin-left: 0;
    }

    .button.is-submit{
        width: 100%;
        height: auto;
        display: block;
    }

    .is-full-width{
        width:100%;
    }

</style>
