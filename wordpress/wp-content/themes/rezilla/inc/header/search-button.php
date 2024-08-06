<div class="button search-open">
    <i class="fas fa-search"></i></a>
</div>
<div class="header-search-popup">
    <div class="header-search-overlay search-open"></div>
    <div class="header-search-popup-content">
        <form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span class="screen-reader-text"><?php esc_html_e( 'Search here...', 'rezilla' ) ?></span>
            <input type="search" value="<?php echo esc_attr(get_search_query()) ?>" name="s" placeholder="<?php esc_attr_e( 'Search here... ', 'rezilla' ) ?>" title="<?php esc_attr_e( 'Search for:', 'rezilla' ) ?>">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>		
    </div>
</div> 