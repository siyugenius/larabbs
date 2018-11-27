<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Topic / Show #<?php echo e($topic->id); ?></h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="<?php echo e(route('topics.index')); ?>"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="<?php echo e(route('topics.edit', $topic->id)); ?>">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Title</label>
<p>
	<?php echo e($topic->title); ?>

</p> <label>Body</label>
<p>
	<?php echo e($topic->body); ?>

</p> <label>User_id</label>
<p>
	<?php echo e($topic->user_id); ?>

</p> <label>Category_id</label>
<p>
	<?php echo e($topic->category_id); ?>

</p> <label>Reply_count</label>
<p>
	<?php echo e($topic->reply_count); ?>

</p> <label>View_count</label>
<p>
	<?php echo e($topic->view_count); ?>

</p> <label>Last_reply_user_id</label>
<p>
	<?php echo e($topic->last_reply_user_id); ?>

</p> <label>Order</label>
<p>
	<?php echo e($topic->order); ?>

</p> <label>Excerpt</label>
<p>
	<?php echo e($topic->excerpt); ?>

</p> <label>Slug</label>
<p>
	<?php echo e($topic->slug); ?>

</p>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>