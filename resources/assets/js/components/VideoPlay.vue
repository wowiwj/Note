<template>
    <div v-show="videoUrl">
        <video
            id="my-player"
            class="video-js vjs-big-play-centered vjs-fluid vjs-paused vjs-controls-enabled vjs-workinghover vjs-v6 vjs-user-inactive"
            controls
            preload="auto"
            poster="//vjs.zencdn.net/v/oceans.png"
            data-setup='{}'
        >
            <source :src="videoUrl" type="video/mp4"></source>

            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">
                    supports HTML5 video
                </a>
            </p>
        </video>
    </div>

</template>

<script>
    import videojs from 'video.js';
    import 'video.js/dist/video-js.css';
    export default {
        props:['videoUrl'],
        data(){
            return {


            }
        }
    }

</script>