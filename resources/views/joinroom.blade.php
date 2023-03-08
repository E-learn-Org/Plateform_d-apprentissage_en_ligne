<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='https://meet.jit.si/external_api.js'></script>
        <script type="text/javascript">
            function codeAddresse(){
                const domain = 'meet.jit.si';
                const options = {
                    roomName: '{{ $id }}',
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
</body>
</html>
