<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ asset('css/iview.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>Laravel</title>
        <style type="text/css">
            .layout{
                border: 1px solid #d7dde4;
                background: #f5f7f9;
                position: relative;
            }
            .layout-breadcrumb{
                padding: 10px 15px 0;
            }
            .layout-content{
                min-height: 200px;
                margin: 15px;
                overflow: hidden;
                background: #fff;
                border-radius: 4px;
            }
            .layout-content-main{
                padding: 10px;
            }
            .layout-copy{
                text-align: center;
                padding: 10px 0 20px;
                color: #9ea7b4;
            }
            .layout-menu-left{
                background: #464c5b;
            }
            .layout-header{
                height: 60px;
                background: #fff;
                box-shadow: 0 1px 1px rgba(0,0,0,.1);
            }
            .layout-logo-left{
                width: 90%;
                height: 30px;
                background: #5b6270;
                border-radius: 3px;
                margin: 15px auto;
            }
            .ivu-menu-item a {
                display: block;
                color: rgba(255,255,255,.7);
            }
        </style>
    </head>
    <body>
    <div id="app">
        <div class="layout">
            <row type="flex">
                <i-col span="5" class="layout-menu-left">
                    <i-menu active-name="" theme="dark" width="auto" :open-names="[]">
                        <div class="layout-logo-left"></div>
                        <submenu name="1">
                            <template slot="title">
                                <icon type="ios-navigate"></icon>
                                Item 1
                            </template>
                            <menu-item name="1-1"><a href="/">index</a></menu-item>
                            <menu-item name="1-2"><a href="/login">login</a></menu-item>
                            <menu-item name="1-3"><a href="/welcome">welcome</a></menu-item>
                        </submenu>
                        <submenu name="2">
                            <template slot="title">
                                <icon type="ios-keypad"></icon>
                                Item 2
                            </template>
                            <menu-item name="2-1">Option 1</menu-item>
                            <menu-item name="2-2">Option 2</menu-item>
                        </submenu>
                        <submenu name="3">
                            <template slot="title">
                                <icon type="ios-analytics"></icon>
                                Item 3
                            </template>
                            <menu-item name="3-1">Option 1</menu-item>
                            <menu-item name="3-2">Option 2</menu-item>
                        </submenu>
                    </i-menu>
                </i-col>
                <i-col span="19">
                    <div class="layout-header"></div>
                    <div class="layout-breadcrumb">
                        <breadcrumb>
                            <breadcrumb-item href="#">Home</breadcrumb-item>
                            <breadcrumb-item href="#">Projects</breadcrumb-item>
                            <breadcrumb-item>iView</breadcrumb-item>
                        </breadcrumb>
                    </div>
                    <div class="layout-content">
                        <div class="layout-content-main">
                            <div id="content">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <div class="layout-copy">
                        iview layouts
                    </div>
                </i-col>
            </row>
        </div>
    </div>
    </body>
    <script type="text/javascript">
        var Main = {
            data () {
                return {
                    spanLeft: 5,
                    spanRight: 19
                }
            },
            computed: {
                iconSize () {
                    return this.spanLeft === 5 ? 14 : 24;
                }
            },
            methods: {
                toggleClick () {
                    if (this.spanLeft === 5) {
                        this.spanLeft = 2;
                        this.spanRight = 22;
                    } else {
                        this.spanLeft = 5;
                        this.spanRight = 19;
                    }
                }
            }
        }

        var Component = Vue.extend(Main);
        new Component().$mount('#app')
    </script>
</html>
