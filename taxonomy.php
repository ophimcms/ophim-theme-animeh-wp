<?php
get_header();
?>
<div class="margin-10-0 bg-gray-2">
    <div class="fs-17 fw-700 padding-0-20 color-gray inline-flex height-40 flex-hozi-center bg-black border-l-t">
        <?= single_tag_title(); ?> </div>
</div>
<div class="div_filter">
    <form id="form-search" class="form-inline" method="GET" action="/">
        <div class="div_filter-main">
            <div class="">
                <select class="form-control" id="type" name="filter[categories]" form="form-search">
                    <option value="">Mọi định dạng</option>
                    <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                    <?php foreach($categories as $category) { ?>
                        <option value='<?php echo $category->name; ?>' ><?php echo $category->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="">
                <select class="form-control" id="category" name="filter[genres]" form="form-search">
                    <option value="">Tất cả thể loại</option>
                    <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                    <?php foreach($genres as $genre) { ?>
                        <option value='<?php echo $genre->name; ?>' ><?php echo $genre->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="">
                <select class="form-control" name="filter[regions]" form="form-search">
                    <option value="">Tất cả quốc gia</option>
                    <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                    <?php foreach($regions as $region) { ?>
                        <option value='<?php echo $region->name; ?>' ><?php echo $region->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="">
                <select class="form-control" name="filter[years]" form="form-search">
                    <option value="">Tất cả năm</option>
                    <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                    <?php foreach($years as $year) { ?>
                        <option value='<?php echo $year->name; ?>'><?php echo $year->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="">
                <button class="button-filter bg-red" form="form-search" type="submit"> <span class="material-icons-round">filter_alt</span> Lọc Phim</button>
            </div>
            <div class="clearfix"></div>
        </div>
    </form>
</div>

<div class="movies-list">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            include THEMETEMPLADE.'/section/section_thumb_item.php';
        } wp_reset_postdata();  }
    else { ?>
        <p>Rất tiếc, không có nội dung nào trùng khớp yêu cầu</p>
    <?php } ?>
</div>
<?php ophim_pagination(); ?>
<?php
get_footer();
?>
