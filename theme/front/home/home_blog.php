<?php 
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_BLOG_VIEW; ?>

<style type="text/css">
    .product-default1 .owl-dots {
        display: none !important;
    }

</style>

<?php if ($grid == '1'): ?>

<?php include "wrapper/blogs.php" ?>

<?php elseif ($grid == '2'): ?>

<section class="pad6rem animate-items" style="background: #f8f8f8; background-size: cover;">
    <div class="container wow fadeIn" data-wow-duration="2s" style="position: relative; z-index: 4; max-width: 1240px;">
    
        <div class="title-global text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="row mx-0 px-0 mt-5">

            <?php foreach ($item->data as $items): ?>

            <div class="col-md-4 px-2 pb-3">
                    <div class="blog h-100" style="background: #f8f8f8">

                        <div style="position: relative;">
                            <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">

                            <div class="catcat text-center">
                                <!-- <?php foreach ($data->blog_category as $cate): ?>
                                    <?php if ($items->category_id == $cate->id): ?>
                                        <?= $cate->name ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <i class="fa-solid fa-circle mx-3"></i> -->
                                <?= date('d M Y', strtotime($items->created_at)) ?>
                            </div>
                        </div>

                        <div class="blog2">
                            <h3><?= $items->title ?></h3>
                            <!-- <p>
                                <?php foreach ($data->blog_category as $cate): ?>
                                    <?php if ($items->category_id == $cate->id): ?>
                                        <?= $cate->name ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <i class="fa-solid fa-circle mx-3"></i>
                                <?= date('d M Y', strtotime($items->created_at)) ?>
                            </p> -->
                            <hr class="my-2">
							<p><?= $func->trailer($items, 80) ?>...</p>
                            <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                        </div>

                    </div>
                </div>

            <?php endforeach ?>

        </div>

    </div>
</section>
<?php endif ?>