<?php
$videos     = BoldThemesFrameworkTemplate::$tour_rwmb_featured_video;
$extra_class	= BoldThemesFrameworkTemplate::$extra_class;
?>
<section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline btTourHeadline btTourVideo <?php echo esc_attr( $extra_class );?>">
    <?php
    foreach ( $videos as $video ) {
        echo  do_shortcode( '[bt_header_video el_id="tour_carousel_header" video="' . esc_attr( $video ) . '" show_excerpt=' . esc_attr( BoldThemesFrameworkTemplate::$tour_headline_show_excerpt ) . ']' );
    }
    ?>
</section>
