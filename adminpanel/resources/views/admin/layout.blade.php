
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.head')
    </head>
    
    <body class="no-skin rtl">
        
        @include('admin.header')
        
        <div class="main-container ace-save-state" id="main-container">
            
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            
            
            @include('admin.sidebare')
            
            @yield("content")
            
            @include('admin.footer')
        </div><!-- /.main-container -->
        <!-- basic scripts -->
        @include('admin.basicScripts')
        
        @yield("script")
    </body>
</html>
