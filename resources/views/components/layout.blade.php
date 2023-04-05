<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra&family=Noto+Sans&family=Open+Sans&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Movie quotes</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient flex flex-col items-center w-full justify-center box-border">
    <div class="fixed left-0 top-1/2 transform -translate-y-1/2 p-8 flex flex-col justify-center gap-3">
        <div class="flex items-center justify-center w-9 h-9 text-white rounded-[50%] border border-white">
            <div class="text-center pb-1">en</div>
        </div>
        <div class="flex items-center justify-center w-9 h-9 text-white rounded-[50%] border border-white">
            <div class="text-cente pb-1">ka</div>
        </div>
    </div>
    

    {{ $content }}
    

</body>

</html>