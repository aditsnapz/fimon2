<!DOCTYPE html>
<html>
@include('templates.head')
@include('templates.script')

<body class="fixed-navigation"> 
    <div id="wrapper">
    @include('templates.sidebar')
        <div id="page-wrapper" class="gray-bg sidebar-content">
            @include('templates.header')
            <?php /* $this->load->view('templates/sidepanel.php'); */ ?>
            <!-- <div class="wrapper wrapper-content"> -->
            <div class="wrapper-content">
                @yield('content')      
            </div>
            @include('templates.footer')      
        </div>
    </div>
    
    
</body>
</html>
