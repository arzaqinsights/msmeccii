<?php $__env->startSection('title', 'Manage Team Pages'); ?>

<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Team & Person Pages</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Create dynamic pages like "Our Team", "Core Leadership", etc.</p>
    </div>
    <a href="<?php echo e(route('admin.team-pages.create')); ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-indigo-500/40 transition-all flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Create New Page
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Page Title</th>
                    <th class="px-6 py-4">Slug</th>
                    <th class="px-6 py-4">Members Count</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-slate-900 text-base"><?php echo e($page->title); ?></p>
                        </td>
                        <td class="px-6 py-4">
                            <code class="text-xs bg-slate-100 px-2 py-1 rounded text-slate-600">/about/<?php echo e($page->slug); ?></code>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-slate-900"><?php echo e($page->members->count()); ?> Members</span>
                        </td>
                        <td class="px-6 py-4">
                            <?php if($page->status): ?>
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded font-bold uppercase inline-block">Active</span>
                            <?php else: ?>
                                <span class="text-[10px] bg-red-100 text-red-700 px-2 py-0.5 rounded font-bold uppercase inline-block">Inactive</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="<?php echo e(route('admin.team-pages.members.index', $page)); ?>" class="text-indigo-600 hover:text-indigo-700 font-bold bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-solid fa-users mr-1"></i> Manage Members
                                </a>
                                <a href="<?php echo e(route('admin.team-pages.edit', $page)); ?>" class="text-slate-600 hover:text-slate-700 font-bold bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="<?php echo e(route('admin.team-pages.destroy', $page)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this page and all its members?');">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-bold bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition-colors">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-500 font-medium">
                            <p>No team pages created yet.</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/admin/team-pages/index.blade.php ENDPATH**/ ?>