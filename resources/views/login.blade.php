<!DOCTYPE html>
<html>
@include('templates.head')
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">FM</h1>
            </div>
            <h3>FIMON - Financial Monitoring</h3>
            <form class="no-margin" action="{{ route('login.attempt') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="" autocomplete="hilab-admin-password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Doscom UDINUS &copy; 2019</small> </p>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="{{ asset('assets/templates/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/templates/js/bootstrap.min.js') }}"></script>
</body>
</html>