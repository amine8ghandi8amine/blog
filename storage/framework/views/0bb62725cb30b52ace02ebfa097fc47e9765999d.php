
<?php if( Session::has('success')): ?>

    <div class="alert alert-success" role="success">
        
            
        <strong>Great ! </strong><?php echo e(Session::get('success')); ?>

        
    </div>

<?php endif; ?>

<?php if(count( $errors ) > 0 ): ?>

    <div class="alert alert-success" role="success">
        <strong>
            Something went wrong
        </strong>
        <ul>
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            
                <li>
                    <?php echo e($error); ?>

                </li>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    </div>

<?php endif; ?>