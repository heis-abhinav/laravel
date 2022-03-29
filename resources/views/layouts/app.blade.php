@include('layouts.nav')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            @yield('navigation')
        <main class="py-4">
            @yield('content')
            
            
        </main>
    </div>
</body>
<script type="text/javascript">
   /* $('#image').change(function(){
           
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#preview-image').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
  
   });*/

//     function readURL(input) {
//     if (input.target.files[0]) {
//         var reader = new FileReader();
        
//         reader.onload = function (e) {
//             $('#preview').attr('src', e.target.result);
//         }
        
//         reader.readAsDataURL(input.target.files[0]);
//     }
// }

// $("#image").change(function(){
//     readURL(this);
// });

// image.onchange = evt => {
//   const [file] = image.files
//   if (file) {
//     preview.src = URL.createObjectURL(file)
//   }
// }

// imgInp.onchange = evt => {
//   const [file] = imgInp.files
//   if (file) {
//     blah.src = URL.createObjectURL(file)
//   }
// }

  </script>
</html>
