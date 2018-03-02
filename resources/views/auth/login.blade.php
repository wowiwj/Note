@extends('layouts.app')

@section('styles')
    <style>
        /* ---- reset ---- */

        body,
        html {
            margin: 0;
            font: normal 100% Arial, Helvetica, sans-serif;
            background-color: #f4f5f5;
        }

        svg {
            position: absolute;
            top: 0;
            left: 0px;
            width: 40px;
            height: 600px;
        }



        .bg-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .bg-bubbles li {
            position: absolute;
            list-style: none;
            display: block;
            width: 40px;
            height: 40px;
            background-color: rgba(0, 0, 0, 0.2);
            bottom: -90px;
            border-radius: 50%;
            -webkit-animation: square 25s infinite;
            animation: square 25s infinite;
            -webkit-transition-timing-function: linear;
            transition-timing-function: linear;
            -webkit-animation-direction: alternate;
            /* Chrome, Safari, Opera */

            animation-direction: alternate;
        }

        .bg-bubbles li:nth-child(1) {
            left: 10%;
        }

        .bg-bubbles li:nth-child(2) {
            left: 20%;
            width: 80px;
            height: 80px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 17s;
            animation-duration: 17s;
        }

        .bg-bubbles li:nth-child(3) {
            left: 25%;
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
        }

        .bg-bubbles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            -webkit-animation-duration: 22s;
            animation-duration: 22s;
            background-color: rgba(255, 255, 255, 0.25);
        }

        .bg-bubbles li:nth-child(5) {
            left: 70%;
        }

        .bg-bubbles li:nth-child(6) {
            left: 80%;
            width: 70px;
            height: 70px;
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .bg-bubbles li:nth-child(7) {
            left: 32%;
            width: 90px;
            height: 90px;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
        }

        .bg-bubbles li:nth-child(8) {
            left: 55%;
            width: 20px;
            height: 20px;
            -webkit-animation-delay: 15s;
            animation-delay: 15s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
        }

        .bg-bubbles li:nth-child(9) {
            left: 25%;
            width: 10px;
            height: 10px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .bg-bubbles li:nth-child(10) {
            left: 90%;
            width: 60px;
            height: 60px;
            -webkit-animation-delay: 11s;
            animation-delay: 11s;
        }

        .bg-bubbles li:nth-child(11) {
            left: 65%;
            -webkit-animation-duration: 13s;
            animation-duration: 13s;
        }

        .bg-bubbles li:nth-child(12) {
            left: 75%;
            width: 30px;
            height: 30px;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
            -webkit-animation-duration: 13s;
            animation-duration: 13s;
        }

        .bg-bubbles li:nth-child(13) {
            left: 55%;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
        }

        .bg-bubbles li:nth-child(14) {
            left: 90%;
            width: 44px;
            height: 44px;
            -webkit-animation-duration: 12s;
            animation-duration: 12s;
            background-color: rgba(255, 255, 255, 0.25);
        }

        .bg-bubbles li:nth-child(15) {
            left: 4%;
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 8s;
            animation-duration: 8s;
        }

        .bg-bubbles li:nth-child(16) {
            left: 66%;
            width: 50px;
            height: 50px;
            -webkit-animation-delay: 13s;
            animation-delay: 13s;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .bg-bubbles li:nth-child(17) {
            left: 32%;
            width: 90px;
            height: 90px;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
        }

        .bg-bubbles li:nth-child(18) {
            left: 55%;
            width: 20px;
            height: 20px;
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 20s;
            animation-duration: 20s;
        }

        .bg-bubbles li:nth-child(19) {
            left: 88%;
            width: 10px;
            height: 10px;
            -webkit-animation-delay: 12s;
            animation-delay: 12s;
            -webkit-animation-duration: 10s;
            animation-duration: 10s;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .bg-bubbles li:nth-child(20) {
            left: 58%;
            width: 60px;
            height: 60px;
            -webkit-animation-delay: 14s;
            animation-delay: 14s;
        }

        @-webkit-keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-900px) rotate(600deg);
                transform: translateY(-900px) rotate(600deg);
            }
        }

        @keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-900px) rotate(600deg);
                transform: translateY(-900px) rotate(600deg);
            }
        }

        @-webkit-keyframes wheel-rotate {
            from {
                -webkit-transform: rotate(0deg) translate(-50%, -50%);
                -moz-transform: rotate(0deg) translate(-50%, -50%);
                -o-transform: rotate(0deg) translate(-50%, -50%);
                -ms-transform: rotate(0deg) translate(-50%, -50%);
                transform: rotate(0deg) translate(-50%, -50%);
            }
            to {
                -webkit-transform: rotate(360deg) translate(-50%, -50%);
                -moz-transform: rotate(360deg) translate(-50%, -50%);
                -o-transform: rotate(360deg) translate(-50%, -50%);
                -ms-transform: rotate(360deg) translate(-50%, -50%);
                transform: rotate(360deg) translate(-50%, -50%);
            }
        }

        @-moz-keyframes wheel-rotate {
            from {
                -webkit-transform: rotate(0deg) translate(-50%, -50%);
                -moz-transform: rotate(0deg) translate(-50%, -50%);
                -o-transform: rotate(0deg) translate(-50%, -50%);
                -ms-transform: rotate(0deg) translate(-50%, -50%);
                transform: rotate(0deg) translate(-50%, -50%);
            }
            to {
                -webkit-transform: rotate(360deg) translate(-50%, -50%);
                -moz-transform: rotate(360deg) translate(-50%, -50%);
                -o-transform: rotate(360deg) translate(-50%, -50%);
                -ms-transform: rotate(360deg) translate(-50%, -50%);
                transform: rotate(360deg) translate(-50%, -50%);
            }
        }

        @-o-keyframes wheel-rotate {
            from {
                -webkit-transform: rotate(0deg) translate(-50%, -50%);
                -moz-transform: rotate(0deg) translate(-50%, -50%);
                -o-transform: rotate(0deg) translate(-50%, -50%);
                -ms-transform: rotate(0deg) translate(-50%, -50%);
                transform: rotate(0deg) translate(-50%, -50%);
            }
            to {
                -webkit-transform: rotate(360deg) translate(-50%, -50%);
                -moz-transform: rotate(360deg) translate(-50%, -50%);
                -o-transform: rotate(360deg) translate(-50%, -50%);
                -ms-transform: rotate(360deg) translate(-50%, -50%);
                transform: rotate(360deg) translate(-50%, -50%);
            }
        }

        @keyframes wheel-rotate {
            from {
                -webkit-transform: rotate(0deg) translate(-50%, -50%);
                -moz-transform: rotate(0deg) translate(-50%, -50%);
                -o-transform: rotate(0deg) translate(-50%, -50%);
                -ms-transform: rotate(0deg) translate(-50%, -50%);
                transform: rotate(0deg) translate(-50%, -50%);
            }
            to {
                -webkit-transform: rotate(360deg) translate(-50%, -50%);
                -moz-transform: rotate(360deg) translate(-50%, -50%);
                -o-transform: rotate(360deg) translate(-50%, -50%);
                -ms-transform: rotate(360deg) translate(-50%, -50%);
                transform: rotate(360deg) translate(-50%, -50%);
            }
        }

        @-webkit-keyframes icon-rotate {
            from {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            to {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @-moz-keyframes icon-rotate {
            from {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            to {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @-o-keyframes icon-rotate {
            from {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            to {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes icon-rotate {
            from {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            to {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }
    </style>

@endsection



@section('content')


    <div id="particles-js" class="container">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <div class="columns" style="padding-top: 100px">
            <div class="column is-5 is-offset-4">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title" style="text-align: center">
                            登录
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <div>
                                <form role="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="field">
                                        <label class="label">用户名</label>
                                        <div class="control has-icons-left has-icons-right">
                                            <input name="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" placeholder="请输入用户名"
                                                   value="{{ old('email') }}">
                                            <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                            <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                        @if($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>

                                    <div class="field">
                                        <label class="label">密码</label>
                                        <div class="control has-icons-left has-icons-right">
                                            <input name="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="请输入密码" value="{{ old('password') }}">
                                            <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                        </div>
                                        @if($errors->has('password'))
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <label class="checkbox">
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                记住我
                                            </label>
                                        </div>
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
                                            <a href="/register">没有账号?注册</a>
                                            <a class="is-pulled-right" href="{{ route('password.request') }}">忘记密码?</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <div class="third-login" style="display: flex;align-items: center;">
                            <div style="margin: 20px">
                                第三方登录:
                                <a href="{{ route('oauth.redirect','github') }}"><i class="fab fa-github"></i></a>
                                <a href="{{ route('oauth.redirect','qq') }}"><i class="fab fa-qq"></i></a></div>
                            </div>

                    </footer>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('scripts')

    <script>

        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 88,
                    "density": {
                        "enable": true,
                        "value_area": 700
                    }
                },
                "color": {
                    "value": ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"]
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 15
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1.5,
                        "opacity_min": 0.15,
                        "sync": false
                    }
                },
                "size": {
                    "value": 2.5,
                    "random": false,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0.15,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 110,
                    "color": "#33b1f8",
                    "opacity": 0.25,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1.6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "bounce",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

    </script>

@endsection
