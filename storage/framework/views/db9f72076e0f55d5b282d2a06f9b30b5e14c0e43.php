<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leaderboard</title>

        <link rel="icon" type="image/x-icon" href="<?php echo e(url('images/snake.ico')); ?>">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
    </head>
    <body>

        <div class="scrolling">
            <h1 class="title">
                <span class="icon">🐍</span>Top Agent Snakes<span class="icon">🐍</span>
            </h1>

            <div class="leaderboard-table">
                <header>
                    <h1 class="table-title">LEADERBOARD</h1>
                    <div class="blur"></div>
                </header>
                <table class="leaderboard">
                    <thead>
                        <th class="rank"></th>
                        <th class="username">USERNAME</th>
                        <th class="score">SCORE</th>
                        <th class="date">Date</th>
                    </thead>

                    <?php 
                      $rank = 1;
                    ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <td class="rank"><?php echo e($rank); ?></td>
                                <td class="username"><?php echo e($user->name); ?></td>
                                <td class="score"><?php echo e($user->score); ?></td>
                                <td class="date"><?php echo e(date_format($user->created_at, "d/m/Y")); ?></td>
                            </tr>
                        </tbody>

                        <?php 
                        $rank += 1; 
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>

            <div class="failed-message"></div>
            <div class="go-back">
                <button class="go-back-btn">GO BACK</button>
            </div>
        </div>

        <script type="text/javascript">
            // Go Back Button
            let goBackBtn = document.querySelector('.go-back-btn');

            goBackBtn.addEventListener('click', () => {
                window.location.href = '/';
            })
        </script>
    </body>
</html><?php /**PATH C:\Users\onurb\code_batcave\snake_laravel_backend\resources\views/leaderboard.blade.php ENDPATH**/ ?>