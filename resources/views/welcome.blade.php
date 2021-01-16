<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <h2>Resultat connexion</h2>
        @if($error==null)
        {{ $employees }}
        @endif
        @if($error!=null)
        <div class="alert alert-info alert-dismissible fade show">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span>{{ $error }}</span>
        </div>
        @endif
    </div>
</body>

</html>