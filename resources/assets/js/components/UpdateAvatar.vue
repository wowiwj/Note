<template>
    <div>


        <my-upload field="img"
                   @crop-success="cropSuccess"
                   @crop-upload-success="cropUploadSuccess"
                   @crop-upload-fail="cropUploadFail"
                   v-model="show"
                   :width="300"
                   :height="300"
                   url="/api/v1/uploadAvatar"
                   :params="params"
                   :headers="headers"
                   img-format="png"></my-upload>

        <img :src="imgDataUrl">
        <p class="m-t-50">
            <a class="button is-primary" @click="toggleShow">设置头像</a>
        </p>

    </div>

</template>

<script>
    import 'babel-polyfill'; // es6 shim
    import myUpload from 'vue-image-crop-upload/upload-2.vue';

    export default{
        props:['avatar'],
        data(){
            return{
                show: false,
                params: {
                    _token: window.App.csrfTtoken,
                    name: 'avatar'
                },
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": window.App.csrfTtoken,
                    smail: '*_~'
                },
                imgDataUrl: this.avatar
            }

        },
        components: {
            'my-upload': myUpload
        },
        methods: {
            toggleShow() {
                this.show = !this.show;
            },
            /**
             * crop success
             *
             * [param] imgDataUrl
             * [param] field
             */
            cropSuccess(imgDataUrl, field){
                console.log('-------- crop success --------');
                this.imgDataUrl = imgDataUrl;
            },
            /**
             * upload success
             *
             * [param] jsonData  server api return data, already json encode
             * [param] field
             */
            cropUploadSuccess(jsonData, field){
                console.log('-------- upload success --------');
                console.log(jsonData);
                console.log('field: ' + field);
                this.show = false
            },
            /**
             * upload fail
             *
             * [param] status    server api return error status, like 500
             * [param] field
             */
            cropUploadFail(status, field){
                console.log('-------- upload fail --------');
                console.log(status);
                console.log('field: ' + field);
            }
        }


    }
</script>

<style scoped>

    img{

        width: 150px;
        border-radius: 50%;
    }



</style>