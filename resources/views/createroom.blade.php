{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard for instructor') }}
        </h2>
    </x-slot>
</x-app-layout> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fontawesome CDN Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    <title>Document</title>
        <script src='https://meet.jit.si/external_api.js'></script>

        <script type="text/javascript">
            function codeAddresse(){
                const domain = 'meet.jit.si';
                const options = {
                    roomName: '{{ Auth::user()->name }}',
                    width: 700,
                    height: 700,
                    parentNode: document.querySelector('#meet'),
                    userInfo: {
                        email: '{{ Auth::user()->email }}',
                        displayName: '{{ Auth::user()->name }}'
                    },
                    lang: 'en'
                };
                const api = new JitsiMeetExternalAPI(domain, options);
            }
            window.onload =  codeAddresse
        </script>
</head>
<body>
    <div id="meet" />
    <div class="users">
        <div class="container">
            <div class="select-btn">
                <span class="btn-text">Select Language</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items">
            <?php
                for ($i=0; $i < count($student); $i++){ ?>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">{{ $student[$i]->name }}</span>
                </li>
            <?php } ?>
            </ul>

            <a href="joinroom/{{ Auth::user()->name }}">Send Link</a>
        </div>

    </div>

    <script src="{{ asset('script/script2.js') }}"></script>
</body>
</html>

