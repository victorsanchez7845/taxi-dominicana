<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caribbean Taxi</title>

    <script>
        (function () {
            let seconds = 1;
            setTimeout(() => window.location.href = `{!! $payment !!}`, seconds * 1000);
        })();
    </script>


    <!-- Event snippet for Compra conversion page -->


      <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-17756767833/60EaCMSmkMYbENmMi5NC',
            'value': `{!! $data['sales']['total'] !!}`,
            'currency': `{!! $data['config']['currency'] !!}`,
            'transaction_id': `{!! $data['config']['id'] !!}`,
        });
        (function () {
            let seconds = 1;
            setTimeout(() => window.location.href = `{!! $payment !!}`, seconds * 1000);
        })();
    </script>
    

    <style>
        body, html {
            width: 100%;
            height: 100%;
        }
        h2 {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
        }
        div {
            display: grid;
            place-content: center;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div>
        <h2>Processing information...</h2>
    </div>
</body>
</html>
