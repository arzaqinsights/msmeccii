<?php $__env->startSection('title', 'Sign In'); ?>
<?php $__env->startSection('auth_image', 'login_bg.png'); ?>
<?php $__env->startSection('hero_title', 'Secure Business Portal'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-10 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-2 tracking-tight">Welcome Back</h2>
        <p class="text-slate-600 font-medium">Please enter your enterprise credentials.</p>
    </div>

    <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-4">
        <?php echo csrf_field(); ?>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-bold text-slate-800 mb-2">Business Email</label>
            <div class="relative">
                <!-- Glassy translucent input -->
                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 ring-red-100 focus:border-red-500 <?php else: ?> focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none ring-4 ring-transparent placeholder-slate-400 font-medium shadow-sm" 
                    placeholder="director@company.com">
            </div>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> <?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mb-2">
                <label for="password" class="block text-sm font-bold text-slate-800">Password</label>
                <a href="<?php echo e(route('password.request')); ?>" class="text-xs font-bold text-brand-primary hover:text-brand-primary-dark transition-colors">Forgot Password?</a>
            </div>
            <div class="relative">
                <input id="password" type="password" name="password" required 
                    class="form-input w-full p-3 border <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 ring-red-100 focus:border-red-500 <?php else: ?> focus:border-brand-primary focus:ring-brand-primary/20 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-sm text-slate-900 transition-all outline-none ring-4 ring-transparent placeholder-slate-400 font-medium shadow-sm" 
                    placeholder="••••••••">
            </div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> <?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Remember Me -->
        <div class="flex items-center pt-2">
            <input id="remember" type="checkbox" name="remember" class="w-4 h-4 text-brand-primary bg-white/80 border-slate-300 rounded focus:ring-brand-primary focus:ring-2 cursor-pointer transition-colors shadow-sm">
            <label for="remember" class="ml-2 text-sm font-bold text-slate-700 cursor-pointer">Keep me securely logged in</label>
        </div>

        <button type="submit" class="w-full bg-slate-900 hover:bg-brand-primary text-white font-bold py-4 px-4 rounded-xl transition-all shadow-xl hover:shadow-brand-primary/40 flex items-center justify-center gap-2 group mt-8">
            Access Dashboard
            <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
        </button>

        <div class="mt-8 pt-6 border-t border-slate-200/50 text-center">
            <p class="text-sm text-slate-600 font-medium">
                Don't have a membership yet? 
                <a href="<?php echo e(route('register')); ?>" class="font-black text-brand-primary hover:text-brand-primary-dark transition-colors tracking-wide ml-1">REGISTER COMPANY</a>
            </p>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/auth/login.blade.php ENDPATH**/ ?>