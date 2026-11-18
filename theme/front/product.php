
<?php if ($data->category_name == 'all'): ?>
<section class="page-hero">
	<div class="container-global">
	    <h1 class="page-hero-title">Our Collections</h1>
	    <div class="page-hero-breadcrumb">
	      <a href="<?= base_url() ?>">Home</a>
	      <span class="separator">&rarr;</span>
	      <span>Our Collections</span>
	    </div>
	</div>
</section>
<?php else: ?>
<section class="page-hero">
	<div class="container-global">
	    <h1 class="page-hero-title"><?= $data->category_name ?></h1>
	    <div class="page-hero-breadcrumb">
	      <a href="<?= base_url() ?>">Home</a>
	      <span class="separator">&rarr;</span>
	      <span><?= $data->category_name ?></span>
	    </div>
	</div>
</section>
<?php endif; ?>

<?php if ($data->category_name == 'all'): ?>
<style>
    /* =========================================
       CATALOGUE CARD
    ========================================= */
    .catalogue-section {
		background: #fff;
	}
    .catalogue-section .card {
        background: transparent;
        border: none;
    }

    .catalogue-section .card img {
        aspect-ratio: 5/6;
        object-fit: contain;
    }

    .catalogue-section .card h3 {
        font-family: var(--primtext);
        font-size: 20px;
        font-weight: 500;
        color: #111;
    }

    .catalogue-section .card p {
        font-family: var(--subtext);
        font-size: 13px;
        font-weight: 300;
        color: #111;
    }

    .catalogue-section .card .btn2 {
        background: var(--colors);
        color: #fff;
        line-height: 1;
        font-size: 14px;
        text-align: center;
        display: inline-block;
        width: 100%;
        padding: 10px 12px;
        transition: all ease 300ms;
    }

    .catalogue-section .card .btn2:hover {
        background: #111;
        color: #fff;
    }

    /* =========================================
       FILTER BAR
    ========================================= */
    .catalogue-filter-bar {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 25px;
        position: relative;
        z-index: 20;
    }

    .catalogue-filter-btn,
    .catalogue-category-btn,
    .catalogue-sort-select {
        height: 42px;
        border: 1px solid #dedede;
        background: #fff;
        color: #111;
        padding: 0 15px;
        font-family: var(--subtext);
        font-size: 13px;
        cursor: pointer;
    }

    .catalogue-filter-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--colors);
        color: #fff;
        border-color: var(--colors);
    }

    .catalogue-filter-count {
        min-width: 22px;
        height: 22px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #fff;
        color: var(--colors);
        font-size: 12px;
    }

    .catalogue-category-btn {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
        min-width: 170px;
    }

    .catalogue-search {
        height: 42px;
        flex: 1;
        min-width: 150px;
        border: 1px solid #dedede;
        background: #fff;
        color: #111;
        padding: 0 15px;
        font-family: var(--subtext);
        font-size: 13px;
        outline: none;
    }

    .catalogue-search:focus {
        border-color: var(--colors);
    }

    .catalogue-sort-wrapper {
        margin-left: auto;
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: var(--subtext);
        font-size: 13px;
        color: #555;
    }

    .catalogue-sort-select {
        min-width: 145px;
    }

    /* =========================================
       FILTER DROPDOWN
    ========================================= */
    .catalogue-filter-wrapper {
        position: relative;
    }

    .catalogue-filter-dropdown {
        display: none;
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        width: 290px;
        padding: 22px;
        background: #fff;
        border: 1px solid #e5e5e5;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.12);
        z-index: 100;
    }

    .catalogue-filter-dropdown.active {
        display: block;
    }

    .catalogue-filter-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .catalogue-filter-heading h4 {
        margin: 0;
        font-family: var(--primtext);
        font-size: 21px;
        font-weight: 500;
        color: #111;
    }

    .catalogue-clear-filter {
        border: none;
        background: transparent;
        color: var(--colors);
        font-family: var(--subtext);
        font-size: 12px;
        cursor: pointer;
        padding: 0;
    }

    .catalogue-filter-title {
        display: block;
        margin-bottom: 12px;
        font-family: var(--primtext);
        font-size: 15px;
        font-weight: 500;
        color: #111;
    }

    .catalogue-category-list {
        max-height: 230px;
        overflow-y: auto;
        padding-right: 5px;
    }

    .catalogue-category-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 12px;
        font-family: var(--subtext);
        font-size: 13px;
        color: #333;
        cursor: pointer;
    }

    .catalogue-category-item input {
        accent-color: var(--colors);
        cursor: pointer;
    }

    .catalogue-sort-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .catalogue-sort-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--subtext);
        font-size: 13px;
        color: #333;
        cursor: pointer;
    }

    .catalogue-sort-item input {
        accent-color: var(--colors);
    }

    .catalogue-filter-divider {
        height: 1px;
        background: #ededed;
        margin: 20px 0;
    }

    /* =========================================
       ACTIVE FILTER TAGS
    ========================================= */
    .catalogue-active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
        margin-bottom: 20px;
    }

    .catalogue-active-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 10px;
        background: #f1f7f4;
        color: #333;
        font-family: var(--subtext);
        font-size: 12px;
    }

    .catalogue-active-tag button {
        border: none;
        background: transparent;
        color: #555;
        padding: 0;
        cursor: pointer;
        line-height: 1;
    }

    .catalogue-result-count {
        margin-bottom: 20px;
        font-family: var(--subtext);
        font-size: 13px;
        color: #777;
    }

    .catalogue-no-result {
        display: none;
        width: 100%;
        padding: 50px 15px;
        text-align: center;
        font-family: var(--subtext);
        font-size: 14px;
        color: #777;
    }

    /* =========================================
       PAGINATION
    ========================================= */
    .catalogue-pagination-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-top: 35px;
        padding-top: 20px;
        border-top: 1px solid #ededed;
    }

    .catalogue-pagination-info {
        font-family: var(--subtext);
        font-size: 13px;
        color: #777;
    }

    .catalogue-pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .catalogue-page-btn {
        min-width: 36px;
        height: 36px;
        padding: 0 10px;
        border: 1px solid #dedede;
        background: #fff;
        color: #111;
        font-family: var(--subtext);
        font-size: 13px;
        cursor: pointer;
        transition: all ease 250ms;
    }

    .catalogue-page-btn:hover,
    .catalogue-page-btn.active {
        background: var(--colors);
        border-color: var(--colors);
        color: #fff;
    }

    .catalogue-page-btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    .catalogue-page-dots {
        min-width: 25px;
        text-align: center;
        font-size: 13px;
        color: #777;
    }

    /* =========================================
       PER PAGE
    ========================================= */
    .catalogue-per-page {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: var(--subtext);
        font-size: 13px;
        color: #777;
    }

    .catalogue-per-page select {
        height: 36px;
        padding: 0 10px;
        border: 1px solid #dedede;
        background: #fff;
        color: #111;
        font-family: var(--subtext);
        font-size: 13px;
        outline: none;
        cursor: pointer;
    }

    @media (max-width: 767px) {

        .catalogue-filter-bar {
            flex-wrap: wrap;
        }

        .catalogue-category-btn,
        .catalogue-filter-btn {
            flex: 1;
            justify-content: center;
        }

        .catalogue-search {
            flex: 100%;
            order: 3;
        }

        .catalogue-sort-wrapper {
            width: 100%;
            margin-left: 0;
        }

        .catalogue-sort-select {
            flex: 1;
        }

        .catalogue-filter-dropdown {
            width: 280px;
            max-width: calc(100vw - 30px);
        }

        .catalogue-pagination-wrapper {
            flex-direction: column;
            align-items: stretch;
        }

        .catalogue-pagination {
            order: 2;
        }

        .catalogue-pagination-info {
            text-align: center;
        }

        .catalogue-per-page {
            justify-content: center;
            order: 3;
        }
    }
</style>


<section class="catalogue-section">
    <div class="container-global">

        <?php
        // =========================================
        // EXCLUDED PRODUCT IDS
        // =========================================
        $excludedProductIds = ['80475', '80476', '80474'];

        // =========================================
        // GET AVAILABLE CATEGORIES
        // =========================================
        $availableCategories = [];

        foreach ($data->result as $categoryItem) {

            if (in_array((string) $categoryItem->id, $excludedProductIds, true)) {
                continue;
            }

            $categorySlug = !empty($categoryItem->category_slug)
                ? $categoryItem->category_slug
                : strtolower(trim($categoryItem->category_name));

            $categoryName = !empty($categoryItem->category_name)
                ? $categoryItem->category_name
                : 'Uncategorized';

            $availableCategories[$categorySlug] = $categoryName;
        }

        asort($availableCategories);
        ?>


        <!-- =========================================
             FILTER BAR
        ========================================= -->
        <div class="catalogue-filter-bar">

            <button type="button"
                    class="catalogue-category-btn"
                    id="catalogueCategoryButton">

                <span>All Categories</span>
                <span>⌄</span>

            </button>


            <div class="catalogue-filter-wrapper">

                <button type="button"
                        class="catalogue-filter-btn"
                        id="catalogueFilterButton">

                    <span>☷ &nbsp; Filters</span>

                    <span class="catalogue-filter-count"
                          id="catalogueFilterCount">
                        0
                    </span>

                </button>


                <div class="catalogue-filter-dropdown"
                     id="catalogueFilterDropdown">

                    <div class="catalogue-filter-heading">

                        <h4>Filters</h4>

                        <button type="button"
                                class="catalogue-clear-filter"
                                id="catalogueClearFilter">
                            Clear all
                        </button>

                    </div>


                    <!-- CATEGORY -->
                    <div>

                        <span class="catalogue-filter-title">
                            Categories
                        </span>

                        <div class="catalogue-category-list">

                            <?php foreach ($availableCategories as $categorySlug => $categoryName): ?>

                                <label class="catalogue-category-item">

                                    <input type="checkbox"
                                           class="catalogue-category-checkbox"
                                           value="<?= htmlspecialchars($categorySlug, ENT_QUOTES, 'UTF-8') ?>">

                                    <span>
                                        <?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8') ?>
                                    </span>

                                </label>

                            <?php endforeach; ?>

                        </div>

                    </div>


                    <div class="catalogue-filter-divider"></div>


                    <!-- SORT -->
                    <div>

                        <span class="catalogue-filter-title">
                            Sort by
                        </span>

                        <div class="catalogue-sort-list">

                            <label class="catalogue-sort-item">

                                <input type="radio"
                                       name="catalogueSort"
                                       value="newest"
                                       checked>

                                <span>Newest</span>

                            </label>


                            <label class="catalogue-sort-item">

                                <input type="radio"
                                       name="catalogueSort"
                                       value="popular">

                                <span>Most Popular</span>

                            </label>


                            <label class="catalogue-sort-item">

                                <input type="radio"
                                       name="catalogueSort"
                                       value="oldest">

                                <span>Oldest</span>

                            </label>

                        </div>

                    </div>

                </div>

            </div>


            <!-- SEARCH -->
            <input type="search"
                   class="catalogue-search"
                   id="catalogueSearch"
                   placeholder="Search in catalogue...">


            <!-- SORT -->
            <div class="catalogue-sort-wrapper">

                <label for="catalogueSortSelect">
                    Sort by:
                </label>

                <select id="catalogueSortSelect"
                        class="catalogue-sort-select">

                    <option value="newest">
                        Newest
                    </option>

                    <option value="popular">
                        Most Popular
                    </option>

                    <option value="oldest">
                        Oldest
                    </option>

                </select>

            </div>

        </div>


        <!-- ACTIVE FILTERS -->
        <div class="catalogue-active-filters"
             id="catalogueActiveFilters">
        </div>


        <!-- RESULT COUNT -->
        <div class="catalogue-result-count"
             id="catalogueResultCount">
        </div>


        <!-- =========================================
             PRODUCT GRID
        ========================================= -->
        <div class="row catalogue-grid"
             id="catalogueGrid">

            <?php foreach ($data->result as $items): ?>

                <?php

                if (in_array((string) $items->id, $excludedProductIds, true)) {
                    continue;
                }

                $itemCategorySlug = !empty($items->category_slug)
                    ? $items->category_slug
                    : strtolower(trim($items->category_name));

                $itemCategoryName = !empty($items->category_name)
                    ? $items->category_name
                    : 'Uncategorized';

                $itemTitle = (string) $items->title;

                $itemTags = (string) $items->tags;

                $itemSearchText = strtolower(
                    $itemTitle . ' ' .
                    $itemTags . ' ' .
                    $itemCategoryName
                );

                ?>

                <div class="col-md-2 col-6 px-1 pb-2 catalogue-item"

                     data-category="<?= htmlspecialchars($itemCategorySlug, ENT_QUOTES, 'UTF-8') ?>"

                     data-category-name="<?= htmlspecialchars($itemCategoryName, ENT_QUOTES, 'UTF-8') ?>"

                     data-title="<?= htmlspecialchars(strtolower($itemTitle), ENT_QUOTES, 'UTF-8') ?>"

                     data-search="<?= htmlspecialchars($itemSearchText, ENT_QUOTES, 'UTF-8') ?>"

                     data-created="<?= htmlspecialchars((string) $items->created_at, ENT_QUOTES, 'UTF-8') ?>"

                     data-visit="<?= (int) $items->visit ?>">


                    <div class="card">

                        <img src="<?= htmlspecialchars($items->img_cover_url, ENT_QUOTES, 'UTF-8') ?>"
                             alt="<?= htmlspecialchars($items->title, ENT_QUOTES, 'UTF-8') ?>">


                        <div class="card-body">

                            <h3 class="catalogue-name">
                                <?= htmlspecialchars($items->title, ENT_QUOTES, 'UTF-8') ?>
                            </h3>


                            <p class="catalogue-name">
                                <?= $func->trailer($items, 40) ?>...
                            </p>


                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW . $items->slug) ?>"
                               class="btn2">
                                See Detail
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>


            <div class="catalogue-no-result"
                 id="catalogueNoResult">

                No products found.

            </div>

        </div>


        <!-- =========================================
             PAGINATION
        ========================================= -->
        <div class="catalogue-pagination-wrapper"
             id="cataloguePaginationWrapper">

            <!-- INFO -->
            <div class="catalogue-pagination-info"
                 id="cataloguePaginationInfo">
            </div>


            <!-- PAGINATION -->
            <div class="catalogue-pagination"
                 id="cataloguePagination">
            </div>


            <!-- PER PAGE -->
            <div class="catalogue-per-page">

                <span>
                    Show
                </span>

                <select id="cataloguePerPage">

                    <option value="25">
                        25
                    </option>

                    <option value="50">
                        50
                    </option>

                    <option value="100">
                        100
                    </option>

                </select>

                <span>
                    products
                </span>

            </div>

        </div>

    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const grid = document.getElementById('catalogueGrid');

    const items = Array.from(
        grid.querySelectorAll('.catalogue-item')
    );


    const filterButton =
        document.getElementById('catalogueFilterButton');

    const filterDropdown =
        document.getElementById('catalogueFilterDropdown');

    const categoryButton =
        document.getElementById('catalogueCategoryButton');

    const searchInput =
        document.getElementById('catalogueSearch');

    const sortSelect =
        document.getElementById('catalogueSortSelect');

    const filterCount =
        document.getElementById('catalogueFilterCount');

    const clearFilterButton =
        document.getElementById('catalogueClearFilter');

    const activeFilters =
        document.getElementById('catalogueActiveFilters');

    const resultCount =
        document.getElementById('catalogueResultCount');

    const noResult =
        document.getElementById('catalogueNoResult');

    const pagination =
        document.getElementById('cataloguePagination');

    const paginationInfo =
        document.getElementById('cataloguePaginationInfo');

    const paginationWrapper =
        document.getElementById('cataloguePaginationWrapper');

    const perPageSelect =
        document.getElementById('cataloguePerPage');


    const categoryCheckboxes = Array.from(
        document.querySelectorAll(
            '.catalogue-category-checkbox'
        )
    );


    const sortRadios = Array.from(
        document.querySelectorAll(
            'input[name="catalogueSort"]'
        )
    );


    /* =========================================
       VARIABLES
    ========================================= */

    let selectedCategories = [];

    let selectedSort = 'newest';

    let searchValue = '';

    let currentPage = 1;

    let perPage = 25;


    /* =========================================
       FILTER DROPDOWN
    ========================================= */

    filterButton.addEventListener('click', function (event) {

        event.stopPropagation();

        filterDropdown.classList.toggle('active');

    });


    filterDropdown.addEventListener('click', function (event) {

        event.stopPropagation();

    });


    document.addEventListener('click', function () {

        filterDropdown.classList.remove('active');

    });


    categoryButton.addEventListener('click', function () {

        filterDropdown.classList.add('active');

    });


    /* =========================================
       CATEGORY
    ========================================= */

    categoryCheckboxes.forEach(function (checkbox) {

        checkbox.addEventListener('change', function () {

            selectedCategories =
                categoryCheckboxes
                    .filter(function (item) {
                        return item.checked;
                    })
                    .map(function (item) {
                        return item.value;
                    });

            currentPage = 1;

            updateCatalogue();

        });

    });


    /* =========================================
       SORT RADIO
    ========================================= */

    sortRadios.forEach(function (radio) {

        radio.addEventListener('change', function () {

            selectedSort = this.value;

            sortSelect.value = selectedSort;

            currentPage = 1;

            updateCatalogue();

        });

    });


    /* =========================================
       SORT SELECT
    ========================================= */

    sortSelect.addEventListener('change', function () {

        selectedSort = this.value;

        sortRadios.forEach(function (radio) {

            radio.checked =
                radio.value === selectedSort;

        });

        currentPage = 1;

        updateCatalogue();

    });


    /* =========================================
       SEARCH
    ========================================= */

    searchInput.addEventListener('input', function () {

        searchValue =
            this.value.toLowerCase().trim();

        currentPage = 1;

        updateCatalogue();

    });


    /* =========================================
       PER PAGE
    ========================================= */

    perPageSelect.addEventListener('change', function () {

        perPage = parseInt(this.value);

        currentPage = 1;

        updateCatalogue();

    });


    /* =========================================
       CLEAR FILTER
    ========================================= */

    clearFilterButton.addEventListener('click', function () {

        selectedCategories = [];

        selectedSort = 'newest';

        searchValue = '';

        currentPage = 1;


        categoryCheckboxes.forEach(function (checkbox) {

            checkbox.checked = false;

        });


        sortRadios.forEach(function (radio) {

            radio.checked =
                radio.value === 'newest';

        });


        sortSelect.value = 'newest';

        searchInput.value = '';


        updateCatalogue();

    });


    /* =========================================
       MAIN UPDATE
    ========================================= */

    function updateCatalogue() {

        let filteredItems =
            items.filter(function (item) {

                const itemCategory =
                    item.dataset.category;

                const itemSearch =
                    item.dataset.search || '';


                const categoryMatch =
                    selectedCategories.length === 0 ||
                    selectedCategories.includes(itemCategory);


                const searchMatch =
                    searchValue === '' ||
                    itemSearch.includes(searchValue);


                return categoryMatch && searchMatch;

            });


        /* =====================================
           SORT
        ===================================== */

        filteredItems.sort(function (a, b) {

            if (selectedSort === 'popular') {

                return Number(b.dataset.visit || 0) -
                       Number(a.dataset.visit || 0);

            }


            if (selectedSort === 'oldest') {

                return new Date(
                    a.dataset.created
                ).getTime() -

                new Date(
                    b.dataset.created
                ).getTime();

            }


            return new Date(
                b.dataset.created
            ).getTime() -

            new Date(
                a.dataset.created
            ).getTime();

        });


        /* =====================================
           PAGINATION CALCULATION
        ===================================== */

        const totalItems =
            filteredItems.length;


        const totalPages =
            Math.ceil(totalItems / perPage);


        /* Jika halaman lebih besar dari jumlah halaman */
        if (totalPages > 0 && currentPage > totalPages) {

            currentPage = totalPages;

        }


        if (totalPages === 0) {

            currentPage = 1;

        }


        const startIndex =
            (currentPage - 1) * perPage;


        const endIndex =
            startIndex + perPage;


        const paginatedItems =
            filteredItems.slice(
                startIndex,
                endIndex
            );


        /* =====================================
           HIDE SEMUA PRODUCT
        ===================================== */

        items.forEach(function (item) {

            item.style.display = 'none';

        });


        /* =====================================
           SHOW PRODUCT CURRENT PAGE
        ===================================== */

        paginatedItems.forEach(function (item) {

            item.style.display = '';

            grid.appendChild(item);

        });


        /* =====================================
           RESULT COUNT
        ===================================== */

        if (totalItems === 0) {

            resultCount.textContent =
                '0 products found';

        } else {

            const from =
                startIndex + 1;

            const to =
                Math.min(
                    endIndex,
                    totalItems
                );

            resultCount.textContent =
                from +
                '–' +
                to +
                ' of ' +
                totalItems +
                ' products';

        }


        /* =====================================
           NO RESULT
        ===================================== */

        noResult.style.display =
            totalItems === 0
                ? 'block'
                : 'none';


        /* =====================================
           CATEGORY BUTTON TEXT
        ===================================== */

        if (selectedCategories.length === 0) {

            categoryButton.querySelector(
                'span'
            ).textContent =
                'All Categories';

        } else if (selectedCategories.length === 1) {

            const selectedCheckbox =
                categoryCheckboxes.find(
                    function (checkbox) {

                        return checkbox.value ===
                               selectedCategories[0];

                    }
                );


            categoryButton.querySelector(
                'span'
            ).textContent =
                selectedCheckbox
                    ? selectedCheckbox
                        .parentElement
                        .querySelector('span')
                        .textContent
                    : 'Category';

        } else {

            categoryButton.querySelector(
                'span'
            ).textContent =
                selectedCategories.length +
                ' Categories';

        }


        /* =====================================
           FILTER COUNT
        ===================================== */

        let activeFilterCount =
            selectedCategories.length;


        if (selectedSort !== 'newest') {

            activeFilterCount++;

        }


        filterCount.textContent =
            activeFilterCount;


        /* =====================================
           ACTIVE FILTER TAGS
        ===================================== */

        activeFilters.innerHTML = '';


        selectedCategories.forEach(
            function (category) {

                const checkbox =
                    categoryCheckboxes.find(
                        function (item) {

                            return item.value ===
                                   category;

                        }
                    );


                if (!checkbox) {
                    return;
                }


                const categoryName =
                    checkbox
                        .parentElement
                        .querySelector('span')
                        .textContent
                        .trim();


                const tag =
                    document.createElement('span');


                tag.className =
                    'catalogue-active-tag';


                tag.innerHTML =
                    categoryName +
                    ' <button type="button">×</button>';


                tag.querySelector('button')
                    .addEventListener(
                        'click',
                        function () {

                            checkbox.checked = false;


                            selectedCategories =
                                categoryCheckboxes
                                    .filter(
                                        function (item) {
                                            return item.checked;
                                        }
                                    )
                                    .map(
                                        function (item) {
                                            return item.value;
                                        }
                                    );


                            currentPage = 1;

                            updateCatalogue();

                        }
                    );


                activeFilters.appendChild(tag);

            }
        );


        /* =====================================
           SORT TAG
        ===================================== */

        if (selectedSort !== 'newest') {

            const sortTag =
                document.createElement('span');


            sortTag.className =
                'catalogue-active-tag';


            sortTag.innerHTML =
                (
                    selectedSort === 'popular'
                        ? 'Most Popular'
                        : 'Oldest'
                ) +
                ' <button type="button">×</button>';


            sortTag.querySelector('button')
                .addEventListener(
                    'click',
                    function () {

                        selectedSort =
                            'newest';


                        sortSelect.value =
                            'newest';


                        sortRadios.forEach(
                            function (radio) {

                                radio.checked =
                                    radio.value ===
                                    'newest';

                            }
                        );


                        currentPage = 1;

                        updateCatalogue();

                    }
                );


            activeFilters.appendChild(sortTag);

        }


        /* =====================================
           BUILD PAGINATION
        ===================================== */

        buildPagination(
            totalPages,
            totalItems
        );

    }


    /* =========================================
       BUILD PAGINATION
    ========================================= */

    function buildPagination(
        totalPages,
        totalItems
    ) {

        pagination.innerHTML = '';


        if (totalItems <= perPage) {

            paginationWrapper.style.display =
                'flex';

            paginationInfo.textContent =
                totalItems +
                (totalItems === 1
                    ? ' product'
                    : ' products');

            return;

        }


        paginationWrapper.style.display =
            'flex';


        /* =====================================
           PREVIOUS
        ===================================== */

        const previousButton =
            document.createElement('button');


        previousButton.type =
            'button';


        previousButton.className =
            'catalogue-page-btn';


        previousButton.innerHTML =
            '‹';


        previousButton.disabled =
            currentPage === 1;


        previousButton.addEventListener(
            'click',
            function () {

                if (currentPage > 1) {

                    currentPage--;

                    updateCatalogue();

                    scrollToCatalogue();

                }

            }
        );


        pagination.appendChild(
            previousButton
        );


        /* =====================================
           PAGE NUMBERS
        ===================================== */

        const pages =
            getPaginationPages(
                currentPage,
                totalPages
            );


        pages.forEach(function (page) {

            if (page === '...') {

                const dots =
                    document.createElement('span');

                dots.className =
                    'catalogue-page-dots';

                dots.textContent =
                    '...';

                pagination.appendChild(dots);

                return;

            }


            const pageButton =
                document.createElement('button');


            pageButton.type =
                'button';


            pageButton.className =
                'catalogue-page-btn';


            pageButton.textContent =
                page;


            if (page === currentPage) {

                pageButton.classList.add(
                    'active'
                );

            }


            pageButton.addEventListener(
                'click',
                function () {

                    currentPage =
                        page;

                    updateCatalogue();

                    scrollToCatalogue();

                }
            );


            pagination.appendChild(
                pageButton
            );

        });


        /* =====================================
           NEXT
        ===================================== */

        const nextButton =
            document.createElement('button');


        nextButton.type =
            'button';


        nextButton.className =
            'catalogue-page-btn';


        nextButton.innerHTML =
            '›';


        nextButton.disabled =
            currentPage === totalPages;


        nextButton.addEventListener(
            'click',
            function () {

                if (currentPage < totalPages) {

                    currentPage++;

                    updateCatalogue();

                    scrollToCatalogue();

                }

            }
        );


        pagination.appendChild(
            nextButton
        );

    }


    /* =========================================
       PAGINATION PAGE GENERATOR
    ========================================= */

    function getPaginationPages(
        current,
        total
    ) {

        const pages = [];


        if (total <= 7) {

            for (
                let i = 1;
                i <= total;
                i++
            ) {

                pages.push(i);

            }

            return pages;

        }


        pages.push(1);


        if (current > 4) {

            pages.push('...');

        }


        const start =
            Math.max(2, current - 1);


        const end =
            Math.min(
                total - 1,
                current + 1
            );


        for (
            let i = start;
            i <= end;
            i++
        ) {

            pages.push(i);

        }


        if (current < total - 3) {

            pages.push('...');

        }


        pages.push(total);


        return pages;

    }


    /* =========================================
       SCROLL BACK TO CATALOGUE
    ========================================= */

    function scrollToCatalogue() {

        const section =
            document.querySelector(
                '.catalogue-section'
            );


        if (!section) {
            return;
        }


        const position =
            section.getBoundingClientRect().top +
            window.pageYOffset -
            30;


        window.scrollTo({

            top: position,

            behavior: 'smooth'

        });

    }


    /* =========================================
       INITIAL LOAD
    ========================================= */

    updateCatalogue();

});
</script>
<?php elseif ($data->category_name == 'Vase Collection' || $data->category_name == 'Wall Decor' || $data->category_name == 'Decorative') : ?>
<section class="collection-section" >
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
        <div class="row collection-row justify-content-center">
		    <?php
		    // ==================================================
		    // PACKAGE ID → ALLOWED CATEGORY IDs
		    // ==================================================
		    $categoryMap = [
		        '8304' => [8306, 8305],                         // Vase Collection
		        '8307' => [8308, 8309],                         // Wall Decor
		        '8310' => [8311, 8312, 8313, 8314, 8315, 8316] // Decorative
		    ];
		
		    $allowedCategories = $categoryMap[$data->cat_data->id] ?? [];
		
		    $i = 1;
		    ?>
				    <?php foreach ($data->category as $cate): ?>
				        <?php if (!in_array($cate->id, $allowedCategories)): ?>
		            <?php continue; ?>
		        <?php endif; ?>
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
				            <a href="<?= $func->link(ROUTE_PRODUCT, $cate->slug) ?>">
				                <div class="collection-card">
				                    <!-- ==================================================
		                         IMAGE SLIDER
		                    ================================================== -->
		                    <div class="collection-image" data-collection="<?= $i ?>">
				                <!-- COVER IMAGE -->
		                        <img src="<?= $cate->image ?>" class="collection-slide active" alt="<?= $cate->name ?>" >
				                        <!-- GALLERY IMAGES -->
		                        <?php foreach ($galleryImages as $galleryImage): ?>
				                    <img src="<?= $galleryImage ?>" class="collection-slide" alt="<?= $cate->name ?>" >
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
				            </a>
				        </div>
				        <?php $i++; ?>
				    <?php endforeach; ?>
				</div>
	</div>
</section>

<?php else: ?>
<style>
	.catalogue-section {
		background: #fff;
	}

	.catalogue-section .card {
		background: transparent;
		border: none;
		height: 100%;
		display: flex;
		flex-direction: column;
	}

	.catalogue-section .card img {
		aspect-ratio: 5/6;
		object-fit: contain;
		width: 100%;
	}

	.catalogue-section .card .card-body {
		position: relative;
		display: flex;
		flex-direction: column;
		flex: 1;
	}

	.catalogue-section .card h3 {
		font-family: var(--primtext);
		font-size: 20px;
		font-weight: 500;
		color: #111;
	}

	.catalogue-section .card p {
		font-family: var(--subtext);
		font-size: 13px;
		font-weight: 300;
		color: #111;
		margin-bottom: 15px;
	}

	.catalogue-section .card .btn2 {
		background: var(--colors);
		color: #fff;
		line-height: 1;
		font-size: 14px;
		text-align: center;
		display: inline-block;
		width: 100%;
		padding: 10px 12px;
		transition: all ease 300ms;
		margin-top: auto;
	}

	.catalogue-section .card .btn2:hover {
		background: #111;
		color: #fff;
	}
</style>

<section class="catalogue-section">
	<div class="container-global">

		<div class="row">

			<?php $i = 1; foreach ($data->result as $items): ?>

				<div class="col-md-2 col-6 px-1 pb-2 d-flex">

					<div class="card w-100">

						<img
							src="<?= $items->img_cover_url ?>"
							alt="<?= $items->title ?>"
						>

						<div class="card-body">

							<h3 class="catalogue-name">
								<?= $items->title ?>
							</h3>

							<p class="catalogue-name">
								<?= $func->trailer($items, 40) ?>...
							</p>

							<a
								href="<?= $func->link(ROUTE_PRODUCT_VIEW . $items->slug) ?>"
								class="btn2"
							>
								See Detail
							</a>

						</div>

					</div>

				</div>

			<?php $i++; endforeach ?>

		</div>

	</div>
</section>
<?php endif; ?>
