<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>会議室予約</title>

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Datepicker for Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css">

        <!-- Styles -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bs-button-style.css')}}" rel="stylesheet" type="text/css">

        <!-- FullCalender CSS -->
        <link rel="stylesheet" href="{{asset('fullcalendar-3.9.0/fullcalendar.css')}}">
        <link rel="stylesheet" href="{{asset('fullcalendar-3.9.0/fullcalendar.print.css')}}" media='print'>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    </head>
    <body>

      @include('layouts.header')
      @yield('content')
         <!-- FullCalender JS -->
         <script src="{{asset('fullcalendar-3.9.0/lib/moment.min.js')}}"></script>
         <script src="{{asset('fullcalendar-3.9.0/lib/jquery.min.js')}}"></script>
         <script src="{{asset('fullcalendar-3.9.0/fullcalendar.min.js')}}"></script>
         <script src="{{asset('fullcalendar-3.9.0/local/ja.js')}}"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


         <script src="{{asset('js/common.js')}}"></script>

         <input type="hidden" id="Realtime">
    </body>
</html>
