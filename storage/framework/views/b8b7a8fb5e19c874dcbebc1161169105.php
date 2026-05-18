<?php $__env->startSection('title', 'Manage Forms'); ?>

<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Dynamic Forms</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Construct nomination and application forms visually.</p>
    </div>
    <div class="flex items-center gap-3">
        <button type="button" onclick="document.getElementById('import-modal').classList.remove('hidden')" class="bg-slate-800 hover:bg-slate-900 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-slate-800/40 transition-all flex items-center gap-2">
            <i class="fa-solid fa-file-import"></i>
            Import Form (SQL)
        </button>
        <a href="<?php echo e(route('admin.forms.create')); ?>" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-emerald-500/40 transition-all flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Create New Form
        </a>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Form Document Name</th>
                    <th class="px-6 py-4">Total Fields</th>
                    <th class="px-6 py-4">Creation Date</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-slate-900 text-base"><?php echo e($form->name); ?></p>
                        </td>
                        <td class="px-6 py-4 font-black text-slate-800">
                            <?php echo e($form->fields_count); ?> Input Fields
                        </td>
                        <td class="px-6 py-4 font-medium text-slate-500">
                            <?php echo e($form->created_at->format('M d, Y')); ?>

                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="<?php echo e(route('admin.forms.submissions', $form)); ?>" class="text-blue-600 hover:text-blue-700 font-bold bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-solid fa-users-viewfinder mr-1"></i> View Leads
                                </a>
                                <a href="<?php echo e(route('admin.forms.edit', $form)); ?>" class="text-emerald-600 hover:text-emerald-700 font-bold bg-emerald-50 hover:bg-emerald-100 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square mr-1"></i> Edit Blueprint
                                </a>
                                <a href="<?php echo e(route('admin.forms.export', $form)); ?>" class="text-slate-700 hover:text-slate-800 font-bold bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg transition-colors" title="Export Form to SQL">
                                    <i class="fa-solid fa-file-export mr-1"></i> Export
                                </a>
                                <div x-data="{
                                    copied: false,
                                    copy() {
                                        const url = '<?php echo e(route('join.forms.show', $form->slug)); ?>';
                                        if (navigator.clipboard && window.isSecureContext) {
                                            navigator.clipboard.writeText(url);
                                        } else {
                                            let textArea = document.createElement('textarea');
                                            textArea.value = url;
                                            textArea.style.position = 'fixed';
                                            textArea.style.opacity = '0';
                                            document.body.appendChild(textArea);
                                            textArea.focus();
                                            textArea.select();
                                            try { document.execCommand('copy'); } catch (err) { }
                                            textArea.remove();
                                        }
                                        this.copied = true;
                                        setTimeout(() => this.copied = false, 2000);
                                    }
                                }">
                                    <button type="button" @click="copy" class="text-purple-600 hover:text-purple-700 font-bold bg-purple-50 hover:bg-purple-100 w-8 h-8 flex items-center justify-center rounded-lg transition-colors relative" title="Copy Form Link">
                                        <i class="fa-solid fa-link" x-show="!copied"></i>
                                        <i class="fa-solid fa-check text-green-600" x-show="copied" style="display: none;"></i>
                                        <span x-show="copied" x-transition style="display: none;" class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded shadow-lg whitespace-nowrap z-10 pointer-events-none">Copied!</span>
                                    </button>
                                </div>
                                <form action="<?php echo e(route('admin.forms.destroy', $form)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to completely delete this form?');">
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
                        <td colspan="4" class="px-6 py-12 text-center text-slate-500 font-medium">
                            <div class="inline-flex w-16 h-16 bg-slate-100 rounded-full items-center justify-center mb-4">
                                <i class="fa-solid fa-list-check text-slate-400 text-2xl"></i>
                            </div>
                            <p>No dynamic forms exist yet.</p>
                            <a href="<?php echo e(route('admin.forms.create')); ?>" class="text-emerald-500 font-bold hover:underline mt-2 inline-block">Build your first form here</a>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <?php if($forms->hasPages()): ?>
        <div class="border-t border-slate-100 px-6 py-4">
            <?php echo e($forms->links()); ?>

        </div>
    <?php endif; ?>
</div>

<!-- Import Modal -->
<div id="import-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden" onclick="if(event.target === this) this.classList.add('hidden')">
    <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4 shadow-xl border border-slate-200" onclick="event.stopPropagation()">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-file-import text-slate-800"></i> Import Form from SQL
            </h3>
            <button onclick="document.getElementById('import-modal').classList.add('hidden')" class="text-slate-400 hover:text-slate-600">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>
        <form action="<?php echo e(route('admin.forms.import')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-2">Upload Exported SQL File</label>
                <div class="border-2 border-dashed border-slate-200 hover:border-slate-300 rounded-xl p-6 text-center cursor-pointer transition-colors relative" onclick="document.getElementById('sql_file').click()">
                    <i class="fa-solid fa-cloud-arrow-up text-slate-400 text-3xl mb-2"></i>
                    <p class="text-sm font-bold text-slate-700" id="file-name-label">Click to select SQL file</p>
                    <p class="text-xs text-slate-400 mt-1">Accepts .sql files exported from this form builder</p>
                    <input type="file" name="sql_file" id="sql_file" accept=".sql" class="hidden" required onchange="document.getElementById('file-name-label').innerText = this.files[0] ? this.files[0].name : 'Click to select SQL file'">
                </div>
            </div>
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="document.getElementById('import-modal').classList.add('hidden')" class="bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-2 px-4 rounded-xl transition-colors">
                    Cancel
                </button>
                <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-xl shadow-md transition-colors">
                    Upload & Build Form
                </button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/admin/forms/index.blade.php ENDPATH**/ ?>