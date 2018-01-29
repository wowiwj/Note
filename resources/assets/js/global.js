// 全局消息
window.events = new Vue();

window.flash = function(text,level='success'){

    var message = {'text':text,'level':level};
    window.events.$emit('flash',message);
};

window.showLogin = function(){

    window.events.$emit('login');
}

window.showLoginConfirm = function () {

    this.$dialog.confirm({
        message: '请登录后再执行操作',
        onConfirm: () => window.showLogin()
    })

}

// axios 钩子
axios.interceptors.response.use(function(response){
    return response;
},function(error){

    if (error.response.status === 401){

        window.showLogin()
    }
    return Promise.reject(error);
});




