<template>
    <div>
        <p class="control login">
        <a class="button is-primary" @click="isLoginFormActive = true">
            <span class="icon">
                <i class="fa fa-sign-in"></i>
            </span>

            <span>登录</span>
        </a>
        </p>
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
                    <form role="form" method="post" action="/login">
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="请输入邮箱">
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
                                <input class="input" type="password" placeholder="请输入密码">
                                <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control is-full-width">
                                <button class="button is-success is-submit">
                                登录
                                </button>
                            </p>
                        </div>

                        <div class="field level">
                            <p class="control flex">
                                <a href="#">没有账号?注册</a>
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
                    <i class="fa fa-github"></i>
                    <i class="fa fa-qq"></i>
                </div> 
            </footer>
        </div>
        </b-modal>

    </div>
  
</template>

<script>
export default {
    data(){
        return{
            isLoginFormActive:false
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
