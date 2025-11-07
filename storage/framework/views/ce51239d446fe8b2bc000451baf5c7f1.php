 <!DOCTYPE html>
 <html lang="id">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Portal Berita Sederhana</title>
     <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
 </head>

 <body class="bg-gray-100 text-gray-800">
     <nav class="bg-white shadow-md p-4 mb-6">
         <div class="container mx-auto">
             <a href="<?php echo e(route('news.index')); ?>" class="text-2xl font-bold text-blue-600">
                Portal Berita
             </a>
         </div>
     </nav>
     <main class="container mx-auto px-4">
         <?php echo $__env->yieldContent('container'); ?>
     </main>
 </body>

 </html><?php /**PATH C:\laragon\www\news-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>