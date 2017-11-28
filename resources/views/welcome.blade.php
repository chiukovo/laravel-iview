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
    </head>
    <body>
        <div>
            <div id="content">
                <div class="title">
                    <info-msg ref="info"></info-msg>
                </div>
                <button @click="same">同樣效果</button>
            </div>
        </div>
    </body>

    <script type="text/javascript">
        new Vue({
            el: '#content',
            methods: {
                same () {
                    this.$refs.info.open(false);
                }
            }
        });
    </script>
</html>
