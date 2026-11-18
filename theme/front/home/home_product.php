 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>
<?php if ($grid == '1'): ?>
<?php include "wrapper/collections.php" ?>
<?php elseif ($grid == '2'): ?>
<?php include "wrapper/features.php" ?>
<?php elseif ($grid == '3'): ?>
<section class="collection-section">
    <div class="container-global ">
        <!-- ==================================================
             SECTION HEADER
        ================================================== -->
        <div class="collection-header">
            <span class="collection-eyebrow">
                Our Collections
            </span>
            <h2 class="collection-title">
                Handcrafted Collections, Made in Mahata
            </h2>
            <p class="collection-description">
                Explore our range of handmade products crafted from natural
                and carefully selected materials.
            </p>
        </div>
        <!-- ==================================================
             COLLECTION GRID
        ================================================== -->
        <div class="row collection-row justify-content-between">
            <?php $i = 1; foreach ($data->category as $cate): ?>
	
            <?php if ($cate->id == 8304 || $cate->id == 8307 || $cate->id == 8310) : ?>
			
		    <?php
		    // ==================================================
		    // GET IMAGE URLS FROM <p> IN CATEGORY CONTENT
		    // ==================================================
		    $galleryImages = [];
		
		    if (!empty($cate->content)) {
		
		        preg_match_all(
		            '/<p[^>]*>\s*(https?:\/\/[^<\s]+)\s*<\/p>/i',
		            $cate->content,
		            $matches
		        );
		
		        if (!empty($matches[1])) {
		            $galleryImages = $matches[1];
		        }
		    }
		    ?>
		
		    <!-- ==================================================
		         COLLECTION ITEM
		    ================================================== -->
		    <div class="col-lg-4 col-md-6 collection-col">
			<a class="" href="<?= $func->link(ROUTE_PRODUCT, $cate->slug) ?>">
		        <div class="collection-card">
		
		            <!-- ==================================================
		                 IMAGE SLIDER
		            ================================================== -->
		            <div
		                class="collection-image"
		                data-collection="<?= $i ?>"
		            >
		
		                <!-- COVER IMAGE -->
		                <img
		                    src="<?= $cate->image ?>"
		                    class="collection-slide active"
		                    alt="<?= $cate->name ?>"
		                >
		
		                <!-- GALLERY IMAGES -->
		                <?php foreach ($galleryImages as $galleryImage): ?>
		
		                    <img
		                        src="<?= $galleryImage ?>"
		                        class="collection-slide"
		                        alt="<?= $cate->name ?>"
		                    >
		
		                <?php endforeach; ?>
		
		            </div>
		
		            <!-- ==================================================
		                 CONTENT
		            ================================================== -->
		            <div class="collection-content">
		
		                <h3 class="collection-name">
		                    <?= $cate->name ?>
		                </h3>
		
		                <p class="collection-materials">
		                    <?= $cate->custom_field_1 ?>
		                </p>
		
		            </div>
		
		        </div>
		
		    </div>
			</a>
		
		<?php endif; ?>
		<?php $i++; endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($grid == '4'): ?>
<?php elseif ($grid == '5'): ?>
<?php endif ?>