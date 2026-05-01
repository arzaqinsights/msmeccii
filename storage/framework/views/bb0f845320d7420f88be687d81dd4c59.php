<?php $__env->startSection('title', 'Corporate Registration'); ?>
<?php $__env->startSection('auth_image', 'register_bg.png'); ?>
<?php $__env->startSection('hero_title', 'Scale Globally.'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-2 tracking-tight">Apply for Membership</h2>
        <p class="text-slate-600 font-medium">Provide your enterprise details to join.</p>
    </div>

    <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-4">
        <?php echo csrf_field(); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Full Name -->
            <div>
                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Full Name</label>
                <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Business Email</label>
                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Company -->
            <div>
                <label for="company_name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Company Name</label>
                <input id="company_name" type="text" name="company_name" value="<?php echo e(old('company_name')); ?>" required 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Designation -->
            <div>
                <label for="designation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Designation</label>
                <input id="designation" type="text" name="designation" value="<?php echo e(old('designation')); ?>" required placeholder="e.g. CEO" 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Phone -->
            <div>
                <label for="phone_number" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Phone Number</label>
                <input id="phone_number" type="text" name="phone_number" value="<?php echo e(old('phone_number')); ?>" required 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Industry selector -->
            <div>
                <label for="industry_sector" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Industry Sector</label>
                <select id="industry_sector" name="industry_sector" required 
                    class="form-select w-full p-3 border <?php $__errorArgs = ['industry_sector'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                    <option value="" disabled selected>Select Industry</option>
                    <option value="Packaging" <?php echo e(old('industry_sector') == 'Packaging' ? 'selected' : ''); ?>>Packaging</option>
                    <option value="Plastics" <?php echo e(old('industry_sector') == 'Plastics' ? 'selected' : ''); ?>>Plastics</option>
                    <option value="Environment & Waste" <?php echo e(old('industry_sector') == 'Environment & Waste' ? 'selected' : ''); ?>>Environment & Waste Mgmt</option>
                    <option value="Agriculture" <?php echo e(old('industry_sector') == 'Agriculture' ? 'selected' : ''); ?>>Agriculture</option>
                    <option value="Handicrafts" <?php echo e(old('industry_sector') == 'Handicrafts' ? 'selected' : ''); ?>>Handicrafts & Textiles</option>
                    <option value="Technology & IT" <?php echo e(old('industry_sector') == 'Technology & IT' ? 'selected' : ''); ?>>Technology & IT</option>
                    <option value="Other" <?php echo e(old('industry_sector') == 'Other' ? 'selected' : ''); ?>>Other</option>
                </select>
                <?php $__errorArgs = ['industry_sector'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 mt-4">
            <!-- Password -->
            <div>
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Secure Password</label>
                <input id="password" type="password" name="password" required 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php else: ?>  focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-xs font-bold text-red-600"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required 
                    class="form-input w-full p-3 border  focus:border-brand-primary rounded-sm text-slate-900 transition-all outline-none focus:ring-4 focus:ring-brand-primary/20 font-medium ">
            </div>
        </div>

        <button type="submit" class="w-full bg-brand-primary hover:bg-brand-primary-dark text-white font-black py-4 px-4 rounded-sm transition-all mt-8 tracking-wide uppercase">
            Submit Application
        </button>

        <div class="text-center mt-6">
            <p class="text-sm text-slate-600 font-medium">
                Already registered? 
                <a href="<?php echo e(route('login')); ?>" class="font-black text-slate-900 hover:text-brand-primary transition-colors ml-1 uppercase">Sign In</a>
            </p>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/auth/register.blade.php ENDPATH**/ ?>