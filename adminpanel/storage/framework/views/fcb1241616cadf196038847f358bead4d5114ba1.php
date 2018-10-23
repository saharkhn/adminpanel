<div id="modalshow-form" class="modal" tabindex="-1" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="blue bigger">Please fill the following form fields</h4>
            </div>
            
            <div class="modal-body">
                <?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
       </div>
    </div>
</div>


