 

<?php $__env->startSection('content'); ?>

    <h1>Daftar Berita</h1>
    
    <?php $__empty_1 = true; $__currentLoopData = $news_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
            <h2>
                
                <a href="<?php echo e(route('news.show', $news->id)); ?>" style="text-decoration: none; color: #007bff;">
                    <?php echo e($news->judul); ?>

                </a>
            </h2>
            
            <p style="font-size: 0.9em; color: #555;">
                Oleh: **<?php echo e($news->wartawan->nama); ?>** | 
                Dipublikasikan pada: <?php echo e($news->created_at->format('d M Y')); ?> 
                
                
                <?php if($news->category): ?>
                    | Kategori: 
                    <a href="<?php echo e(route('category.show', $news->category->slug)); ?>" style="color: #28a745;">
                        **<?php echo e($news->category->nama); ?>**
                    </a>
                <?php endif; ?>
            </p>

            <p><?php echo e($news->ringkasan); ?>...</p>

            <a href="<?php echo e(route('news.show', $news->id)); ?>" class="btn-readmore">
                Baca Selengkapnya
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Belum ada berita yang tersedia saat ini.</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\news-app\resources\views/news/index.blade.php ENDPATH**/ ?>