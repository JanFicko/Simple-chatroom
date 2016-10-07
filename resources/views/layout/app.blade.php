<!DOCTYPE html>
<html ng-app="chatApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple chatroom</title>

    <!-- Styles -->
    <link href="<% asset('css/bootstrap.min.css') %>" rel="stylesheet"/>
    @yield('style')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    @yield('content')
</div>

<!-- Scripts -->
<script src="<% asset('js/libs/angular.min.js') %>"></script>
<script src="<% asset('js/libs/angular-route.min.js') %>"></script>
<script src="<% asset('js/libs/jquery.min.js') %>"></script>
<script src="<% asset('js/libs/bootstrap.min.js') %>"></script>

<!-- App -->
<script src="<% asset('app/app.js') %>"></script>
<script src="<% asset('app/controller/chatController.js') %>"></script>
<script src="<% asset('app/service/chatService.js') %>"></script>

@yield('script')

</body>

</html>