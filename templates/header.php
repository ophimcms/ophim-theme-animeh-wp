<style>
    #result{
        margin-top: 30px;
        background-color: #333333;
        list-style-type: none;
        width: 100%;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
</style>
<div id="navbar">
    <div class="flex flex-hozi-center padding-10">
        <div class="logo">
            <a href="/" title="" rel="home">
                <?php op_the_logo('max-width:50px') ?>
            </a>
        </div>
        <div id="drop-down-4" class="search-bar flex flex-1 margin-0-10 flex-ver-center">
            <form class="flex" id="form-search" action="/" method="GET">
                <input type="text" placeholder="Nhập từ khoá..." value="<?php echo "$s"; ?>" class="padding-10 bg-black color-gray" id="search" onkeyup="fetch()"
                       name="s">
                <button type="submit" class="flex flex-hozi-center bg-black color-gray">
                    <span class="material-icons-round"> search </span>
                </button>
            </form>
            <div class="" id="result"></div>
        </div>
        <div class="nav-items flex-wrap flex">
            <a href="#" onclick="clickEventDropDown(this,'search')" class="toggle-search toggle-dropdown"
               bind="drop-down-4">
                <span class="material-icons-round"> search </span>
            </a>
            <a href="#" onclick="clickEventDropDown(this,'reorder')" class="toggle-dropdown" bind="drop-down-1">
                <span class="material-icons-round"> reorder </span>
            </a>
        </div>
    </div>
    <div id="drop-down-1" class="dropdown-menu bg-black w-100-percent flex-column">
        <div class="tab-links flex-1">
            <?php
            $menu_items = wp_get_menu_array('primary-menu');
            foreach ($menu_items as $key => $item) : ?>
            <?php if (count($item['children'])) { ?>
            <a href="#" class="item-tab-link parent-menu" bind="tab-<?= $key?>"> <span
                        class="material-icons-round margin-0-5"> menu </span><?= $item['title'] ?> </a>
            <?php } else { ?>
            <a href="<?= $item['url'] ?>" class="item-tab-link"> <span class="material-icons-round margin-0-5">
                            auto_awesome </span><?= $item['title'] ?> </a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
        <div class="tab-content">
            <?php
            $menu_items = wp_get_menu_array('primary-menu');
            foreach ($menu_items as $key => $item) : ?>
            <?php if (count($item['children'])) { ?>
            <div id="tab-<?= $key?>" class="item-tab-content sub-menu-content">
                <div class="flex flex-wrap">
                    <?php foreach ($item['children'] as $k => $child): ?>
                    <a href="<?= $child['url'] ?>" title="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>

</div>
