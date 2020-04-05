<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.14.30/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <title>SMS SYSTEM REMINDER -by Milos('title', 'reminders')</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Next Appointments</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('appointment.index') }}">Home</a></li>
                    <li><a href="{{ route('appointment.create') }}">New appointment</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @Milos('content')
        </div>
        <footer class="container">
            Milos Milenkovic
            <a href="http://www.milosmilenkovic.ml.com">@Milos</a>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.14.30/js/bootstrap-datetimepicker.min.js"></script>
        @milos('scripts')
    </body>
</html>
