<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <title>oŽI Upgrade ONLINE</title>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "b61f2527-d7e8-4d0e-825f-19649718ea40",
                safari_web_id: "web.onesignal.auto.516349e1-446e-4cea-8b68-2396bd3ac49a",
                notifyButton: {
                    enable: true,
                },
            });
        });
    </script>
</head>
<body>
@inertia
</body>
</html>
