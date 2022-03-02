<form class="form-inline woocommerce-product-search" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>" style="width: 100%;" >
  <div class="form-group has-feedback" style="width: 100%;">
    <label class="control-label"></label>
    <input type="search" class="form-control search-field rounded-0" style="border:1px solid #cbcbcb; width: 100%;" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>">
    <span class="glyphicon glyphicon-search form-control-feedback" style="height: 100%; font-size: 18px!important; color: #cbcbcb;"></span>
    <input type="hidden" name="post_type" value="product" />
  </div>
</form>