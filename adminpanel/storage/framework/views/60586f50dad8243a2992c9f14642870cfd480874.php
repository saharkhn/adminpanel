
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    
    <body class="no-skin rtl">
        
        <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="main-container ace-save-state" id="main-container">
            
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            
            
            <?php echo $__env->make('admin.sidebare', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <?php echo $__env->yieldContent("content"); ?>
            
            <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div><!-- /.main-container -->
        <!-- basic scripts -->
        <?php echo $__env->make('admin.basicScripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo $__env->yieldContent("script"); ?>
    </body>
</html>
