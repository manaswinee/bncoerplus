<?php 
/* Loads Stroke 7 Icon Font. */
add_filter( 'vc_iconpicker-type-elegant', 'vc_iconpicker_type_elegant' );

/**
 * Elegant from http://www.elegantthemes.com/blog/resources/elegant-icon-font
 *
 * @param $icons - taken from filter - vc_map param field settings['source'] provided icons (default empty array).
 * If array categorized it will auto-enable category dropdown
 *
 * @since 1.0
 * @return array - of icons for iconpicker, can be categorized, or not.
 */
function vc_iconpicker_type_elegant( $icons ) {
	$elegant_icons = array(
		array( "arrow_up" => __( "Arrow_up", "js_composer" ) ),
		array( "arrow_down" => __( "Arrow_down", "js_composer" ) ),
		array( "arrow_left" => __( "Arrow_left", "js_composer" ) ),
		array( "arrow_right" => __( "Arrow_right", "js_composer" ) ),
		array( "arrow_left-up" => __( "Arrow_left-up", "js_composer" ) ),
		array( "arrow_right-up" => __( "Arrow_right-up", "js_composer" ) ),
		array( "arrow_right-down" => __( "Arrow_right-down", "js_composer" ) ),
		array( "arrow_left-down" => __( "Arrow_left-down", "js_composer" ) ),
		array( "arrow-up-down" => __( "Arrow-up-down", "js_composer" ) ),
		array( "arrow_up-down_alt" => __( "Arrow_up-down_alt", "js_composer" ) ),
		array( "arrow_left-right_alt" => __( "Arrow_left-right_alt", "js_composer" ) ),
		array( "arrow_left-right" => __( "Arrow_left-right", "js_composer" ) ),
		array( "arrow_expand_alt2" => __( "Arrow_expand_alt2", "js_composer" ) ),
		array( "arrow_expand_alt" => __( "Arrow_expand_alt", "js_composer" ) ),
		array( "arrow_condense" => __( "Arrow_condense", "js_composer" ) ),
		array( "arrow_expand" => __( "Arrow_expand", "js_composer" ) ),
		array( "arrow_move" => __( "Arrow_move", "js_composer" ) ),
		array( "arrow_carrot-up" => __( "Arrow_carrot-up", "js_composer" ) ),
		array( "arrow_carrot-down" => __( "Arrow_carrot-down", "js_composer" ) ),
		array( "arrow_carrot-left" => __( "Arrow_carrot-left", "js_composer" ) ),
		array( "arrow_carrot-right" => __( "Arrow_carrot-right", "js_composer" ) ),
		array( "arrow_carrot-2up" => __( "Arrow_carrot-2up", "js_composer" ) ),
		array( "arrow_carrot-2down" => __( "Arrow_carrot-2down", "js_composer" ) ),
		array( "arrow_carrot-2left" => __( "Arrow_carrot-2left", "js_composer" ) ),
		array( "arrow_carrot-2right" => __( "Arrow_carrot-2right", "js_composer" ) ),
		array( "arrow_carrot-up_alt2" => __( "Arrow_carrot-up_alt2", "js_composer" ) ),
		array( "arrow_carrot-down_alt2" => __( "Arrow_carrot-down_alt2", "js_composer" ) ),
		array( "arrow_carrot-left_alt2" => __( "Arrow_carrot-left_alt2", "js_composer" ) ),
		array( "arrow_carrot-right_alt2" => __( "Arrow_carrot-right_alt2", "js_composer" ) ),
		array( "arrow_carrot-2up_alt2" => __( "Arrow_carrot-2up_alt2", "js_composer" ) ),
		array( "arrow_carrot-2down_alt2" => __( "Arrow_carrot-2down_alt2", "js_composer" ) ),
		array( "arrow_carrot-2left_alt2" => __( "Arrow_carrot-2left_alt2", "js_composer" ) ),
		array( "arrow_carrot-2right_alt2" => __( "Arrow_carrot-2right_alt2", "js_composer" ) ),
		array( "arrow_triangle-up" => __( "Arrow_triangle-up", "js_composer" ) ),
		array( "arrow_triangle-down" => __( "Arrow_triangle-down", "js_composer" ) ),
		array( "arrow_triangle-left" => __( "Arrow_triangle-left", "js_composer" ) ),
		array( "arrow_triangle-right" => __( "Arrow_triangle-right", "js_composer" ) ),
		array( "arrow_triangle-up_alt2" => __( "Arrow_triangle-up_alt2", "js_composer" ) ),
		array( "arrow_triangle-down_alt2" => __( "Arrow_triangle-down_alt2", "js_composer" ) ),
		array( "arrow_triangle-left_alt2" => __( "Arrow_triangle-left_alt2", "js_composer" ) ),
		array( "arrow_triangle-right_alt2" => __( "Arrow_triangle-right_alt2", "js_composer" ) ),
		array( "arrow_back" => __( "Arrow_back", "js_composer" ) ),
		array( "icon_minus-06" => __( "Icon_minus-06", "js_composer" ) ),
		array( "icon_plus" => __( "Icon_plus", "js_composer" ) ),
		array( "icon_close" => __( "Icon_close", "js_composer" ) ),
		array( "icon_check" => __( "Icon_check", "js_composer" ) ),
		array( "icon_minus_alt2" => __( "Icon_minus_alt2", "js_composer" ) ),
		array( "icon_plus_alt2" => __( "Icon_plus_alt2", "js_composer" ) ),
		array( "icon_close_alt2" => __( "Icon_close_alt2", "js_composer" ) ),
		array( "icon_check_alt2" => __( "Icon_check_alt2", "js_composer" ) ),
		array( "icon_zoom-out_alt" => __( "Icon_zoom-out_alt", "js_composer" ) ),
		array( "icon_zoom-in_alt" => __( "Icon_zoom-in_alt", "js_composer" ) ),
		array( "icon_search" => __( "Icon_search", "js_composer" ) ),
		array( "icon_box-empty" => __( "Icon_box-empty", "js_composer" ) ),
		array( "icon_box-selected" => __( "Icon_box-selected", "js_composer" ) ),
		array( "icon_minus-box" => __( "Icon_minus-box", "js_composer" ) ),
		array( "icon_plus-box" => __( "Icon_plus-box", "js_composer" ) ),
		array( "icon_box-checked" => __( "Icon_box-checked", "js_composer" ) ),
		array( "icon_circle-empty" => __( "Icon_circle-empty", "js_composer" ) ),
		array( "icon_circle-slelected" => __( "Icon_circle-slelected", "js_composer" ) ),
		array( "icon_stop_alt2" => __( "Icon_stop_alt2", "js_composer" ) ),
		array( "icon_stop" => __( "Icon_stop", "js_composer" ) ),
		array( "icon_pause_alt2" => __( "Icon_pause_alt2", "js_composer" ) ),
		array( "icon_pause" => __( "Icon_pause", "js_composer" ) ),
		array( "icon_menu" => __( "Icon_menu", "js_composer" ) ),
		array( "icon_menu-square_alt2" => __( "Icon_menu-square_alt2", "js_composer" ) ),
		array( "icon_menu-circle_alt2" => __( "Icon_menu-circle_alt2", "js_composer" ) ),
		array( "icon_ul" => __( "Icon_ul", "js_composer" ) ),
		array( "icon_ol" => __( "Icon_ol", "js_composer" ) ),
		array( "icon_adjust-horiz" => __( "Icon_adjust-hori", "js_composer" ) ),
		array( "icon_adjust-vert" => __( "Icon_adjust-vert", "js_composer" ) ),
		array( "icon_document_alt" => __( "Icon_document_alt", "js_composer" ) ),
		array( "icon_documents_alt" => __( "Icon_documents_alt", "js_composer" ) ),
		array( "icon_pencil" => __( "Icon_pencil", "js_composer" ) ),
		array( "icon_pencil-edit_alt" => __( "Icon_pencil-edit_alt", "js_composer" ) ),
		array( "icon_pencil-edit" => __( "Icon_pencil-edit", "js_composer" ) ),
		array( "icon_folder-alt" => __( "Icon_folder-alt", "js_composer" ) ),
		array( "icon_folder-open_alt" => __( "Icon_folder-open_alt", "js_composer" ) ),
		array( "icon_folder-add_alt" => __( "Icon_folder-add_alt", "js_composer" ) ),
		array( "icon_info_alt" => __( "Icon_info_alt", "js_composer" ) ),
		array( "icon_error-oct_alt" => __( "Icon_error-oct_alt", "js_composer" ) ),
		array( "icon_error-circle_alt" => __( "Icon_error-circle_alt", "js_composer" ) ),
		array( "icon_error-triangle_alt" => __( "Icon_error-triangle_alt", "js_composer" ) ),
		array( "icon_question_alt2" => __( "Icon_question_alt2", "js_composer" ) ),
		array( "icon_question" => __( "Icon_question", "js_composer" ) ),
		array( "icon_comment_alt" => __( "Icon_comment_alt", "js_composer" ) ),
		array( "icon_chat_alt" => __( "Icon_chat_alt", "js_composer" ) ),
		array( "icon_vol-mute_alt" => __( "Icon_vol-mute_alt", "js_composer" ) ),
		array( "icon_volume-low_alt" => __( "Icon_volume-low_alt", "js_composer" ) ),
		array( "icon_volume-high_alt" => __( "Icon_volume-high_alt", "js_composer" ) ),
		array( "icon_quotations" => __( "Icon_quotations", "js_composer" ) ),
		array( "icon_quotations_alt2" => __( "Icon_quotations_alt2", "js_composer" ) ),
		array( "icon_clock_alt" => __( "Icon_clock_alt", "js_composer" ) ),
		array( "icon_lock_alt" => __( "Icon_lock_alt", "js_composer" ) ),
		array( "icon_lock-open_alt" => __( "Icon_lock-open_alt", "js_composer" ) ),
		array( "icon_key_alt" => __( "Icon_key_alt", "js_composer" ) ),
		array( "icon_cloud_alt" => __( "Icon_cloud_alt", "js_composer" ) ),
		array( "icon_cloud-upload_alt" => __( "Icon_cloud-upload_alt", "js_composer" ) ),
		array( "icon_cloud-download_alt" => __( "Icon_cloud-download_alt", "js_composer" ) ),
		array( "icon_image" => __( "Icon_image", "js_composer" ) ),
		array( "icon_images" => __( "Icon_images", "js_composer" ) ),
		array( "icon_lightbulb_alt" => __( "Icon_lightbulb_alt", "js_composer" ) ),
		array( "icon_gift_alt" => __( "Icon_gift_alt", "js_composer" ) ),
		array( "icon_house_alt" => __( "Icon_house_alt", "js_composer" ) ),
		array( "icon_genius" => __( "Icon_genius", "js_composer" ) ),
		array( "icon_mobile" => __( "Icon_mobile", "js_composer" ) ),
		array( "icon_tablet" => __( "Icon_tablet", "js_composer" ) ),
		array( "icon_laptop" => __( "Icon_laptop", "js_composer" ) ),
		array( "icon_desktop" => __( "Icon_desktop", "js_composer" ) ),
		array( "icon_camera_alt" => __( "Icon_camera_alt", "js_composer" ) ),
		array( "icon_mail_alt" => __( "Icon_mail_alt", "js_composer" ) ),
		array( "icon_cone_alt" => __( "Icon_cone_alt", "js_composer" ) ),
		array( "icon_ribbon_alt" => __( "Icon_ribbon_alt", "js_composer" ) ),
		array( "icon_bag_alt" => __( "Icon_bag_alt", "js_composer" ) ),
		array( "icon_creditcard" => __( "Icon_creditcard", "js_composer" ) ),
		array( "icon_cart_alt" => __( "Icon_cart_alt", "js_composer" ) ),
		array( "icon_paperclip" => __( "Icon_paperclip", "js_composer" ) ),
		array( "icon_tag_alt" => __( "Icon_tag_alt", "js_composer" ) ),
		array( "icon_tags_alt" => __( "Icon_tags_alt", "js_composer" ) ),
		array( "icon_trash_alt" => __( "Icon_trash_alt", "js_composer" ) ),
		array( "icon_cursor_alt" => __( "Icon_cursor_alt", "js_composer" ) ),
		array( "icon_mic_alt" => __( "Icon_mic_alt", "js_composer" ) ),
		array( "icon_compass_alt" => __( "Icon_compass_alt", "js_composer" ) ),
		array( "icon_pin_alt" => __( "Icon_pin_alt", "js_composer" ) ),
		array( "icon_pushpin_alt" => __( "Icon_pushpin_alt", "js_composer" ) ),
		array( "icon_map_alt" => __( "Icon_map_alt", "js_composer" ) ),
		array( "icon_drawer_alt" => __( "Icon_drawer_alt", "js_composer" ) ),
		array( "icon_toolbox_alt" => __( "Icon_toolbox_alt", "js_composer" ) ),
		array( "icon_book_alt" => __( "Icon_book_alt", "js_composer" ) ),
		array( "icon_calendar" => __( "Icon_calendar", "js_composer" ) ),
		array( "icon_film" => __( "Icon_film", "js_composer" ) ),
		array( "icon_table" => __( "Icon_table", "js_composer" ) ),
		array( "icon_contacts_alt" => __( "Icon_contacts_alt", "js_composer" ) ),
		array( "icon_headphones" => __( "Icon_headphones", "js_composer" ) ),
		array( "icon_lifesaver" => __( "Icon_lifesaver", "js_composer" ) ),
		array( "icon_piechart" => __( "Icon_piechart", "js_composer" ) ),
		array( "icon_refresh" => __( "Icon_refresh", "js_composer" ) ),
		array( "icon_link_alt" => __( "Icon_link_alt", "js_composer" ) ),
		array( "icon_link" => __( "Icon_link", "js_composer" ) ),
		array( "icon_loading" => __( "Icon_loading", "js_composer" ) ),
		array( "icon_blocked" => __( "Icon_blocked", "js_composer" ) ),
		array( "icon_archive_alt" => __( "Icon_archive_alt", "js_composer" ) ),
		array( "icon_heart_alt" => __( "Icon_heart_alt", "js_composer" ) ),
		array( "icon_printer" => __( "Icon_printer", "js_composer" ) ),
		array( "icon_calulator" => __( "Icon_calulator", "js_composer" ) ),
		array( "icon_building" => __( "Icon_building", "js_composer" ) ),
		array( "icon_floppy" => __( "Icon_floppy", "js_composer" ) ),
		array( "icon_drive" => __( "Icon_drive", "js_composer" ) ),
		array( "icon_search-2" => __( "Icon_search-2", "js_composer" ) ),
		array( "icon_id" => __( "Icon_id", "js_composer" ) ),
		array( "icon_id-2" => __( "Icon_id-2", "js_composer" ) ),
		array( "icon_puzzle" => __( "Icon_puzzle", "js_composer" ) ),
		array( "icon_like" => __( "Icon_like", "js_composer" ) ),
		array( "icon_dislike" => __( "Icon_like", "js_composer" ) ),
		array( "icon_mug" => __( "Icon_mug", "js_composer" ) ),
		array( "icon_currency" => __( "Icon_currency", "js_composer" ) ),
		array( "icon_wallet" => __( "Icon_wallet", "js_composer" ) ),
		array( "icon_pens" => __( "Icon_pens", "js_composer" ) ),
		array( "icon_easel" => __( "Icon_easel", "js_composer" ) ),
		array( "icon_flowchart" => __( "Icon_flowchart", "js_composer" ) ),
		array( "icon_datareport" => __( "Icon_datareport", "js_composer" ) ),
		array( "icon_briefcase" => __( "Icon_briefcase", "js_composer" ) ),
		array( "icon_shield" => __( "Icon_shield", "js_composer" ) ),
		array( "icon_percent" => __( "Icon_percent", "js_composer" ) ),
		array( "icon_globe" => __( "Icon_globe", "js_composer" ) ),
		array( "icon_globe-2" => __( "Icon_globe-2", "js_composer" ) ),
		array( "icon_target" => __( "Icon_target", "js_composer" ) ),
		array( "icon_hourglass" => __( "Icon_hourglass", "js_composer" ) ),
		array( "icon_balance" => __( "Icon_balance", "js_composer" ) ),
		array( "icon_star_alt" => __( "Icon_star_alt", "js_composer" ) ),
		array( "icon_star-half_alt" => __( "Icon_star-half_alt", "js_composer" ) ),
		array( "icon_star" => __( "Icon_star", "js_composer" ) ),
		array( "icon_star-half" => __( "Icon_star-half", "js_composer" ) ),
		array( "icon_tools" => __( "Icon_tools", "js_composer" ) ),
		array( "icon_tool" => __( "Icon_tool", "js_composer" ) ),
		array( "icon_cog" => __( "Icon_cog", "js_composer" ) ),
		array( "icon_cogs" => __( "Icon_cogs", "js_composer" ) ),
		array( "arrow_up_alt" => __( "Arrow_up_alt", "js_composer" ) ),
		array( "arrow_down_alt" => __( "Arrow_down_alt", "js_composer" ) ),
		array( "arrow_left_alt" => __( "Arrow_left_alt", "js_composer" ) ),
		array( "arrow_right_alt" => __( "Arrow_right_alt", "js_composer" ) ),
		array( "arrow_left-up_alt" => __( "Arrow_left-up_alt", "js_composer" ) ),
		array( "arrow_right-up_alt" => __( "Arrow_right-up_alt", "js_composer" ) ),
		array( "arrow_right-down_alt" => __( "Arrow_right-down_alt", "js_composer" ) ),
		array( "arrow_left-down_alt" => __( "Arrow_left-down_alt", "js_composer" ) ),
		array( "arrow_condense_alt" => __( "Arrow_condense_alt", "js_composer" ) ),
		array( "arrow_expand_alt3" => __( "Arrow_expand_alt3", "js_composer" ) ),
		array( "arrow_carrot_up_alt" => __( "Arrow_carrot_up_alt", "js_composer" ) ),
		array( "arrow_carrot-down_alt" => __( "Arrow_carrot-down_alt", "js_composer" ) ),
		array( "arrow_carrot-left_alt" => __( "Arrow_carrot-left_alt", "js_composer" ) ),
		array( "arrow_carrot-right_alt" => __( "Arrow_carrot-right_alt", "js_composer" ) ),
		array( "arrow_carrot-2up_alt" => __( "Arrow_carrot-2up_alt", "js_composer" ) ),
		array( "arrow_carrot-2dwnn_alt" => __( "Arrow_carrot-2dwnn_alt", "js_composer" ) ),
		array( "arrow_carrot-2left_alt" => __( "Arrow_carrot-2left_alt", "js_composer" ) ),
		array( "arrow_carrot-2right_alt" => __( "Arrow_carrot-2right_alt", "js_composer" ) ),
		array( "arrow_triangle-up_alt" => __( "Arrow_triangle-up_alt", "js_composer" ) ),
		array( "arrow_triangle-down_alt" => __( "Arrow_triangle-down_alt", "js_composer" ) ),
		array( "arrow_triangle-left_alt" => __( "Arrow_triangle-left_alt", "js_composer" ) ),
		array( "arrow_triangle-right_alt" => __( "Arrow_triangle-right_alt", "js_composer" ) ),
		array( "icon_minus_alt" => __( "Icon_minus_alt", "js_composer" ) ),
		array( "icon_plus_alt" => __( "Icon_plus_alt", "js_composer" ) ),
		array( "icon_close_alt" => __( "Icon_close_alt", "js_composer" ) ),
		array( "icon_check_alt" => __( "Icon_check_alt", "js_composer" ) ),
		array( "icon_zoom-out" => __( "Icon_zoom-out", "js_composer" ) ),
		array( "icon_zoom-in" => __( "Icon_zoom-in", "js_composer" ) ),
		array( "icon_stop_alt" => __( "Icon_stop_alt", "js_composer" ) ),
		array( "icon_menu-square_alt" => __( "Icon_menu-square_alt", "js_composer" ) ),
		array( "icon_menu-circle_alt" => __( "Icon_menu-circle_alt", "js_composer" ) ),
		array( "icon_document" => __( "Icon_document", "js_composer" ) ),
		array( "icon_documents" => __( "Icon_documents", "js_composer" ) ),
		array( "icon_pencil_alt" => __( "Icon_pencil_alt", "js_composer" ) ),
		array( "icon_folder" => __( "Icon_folder", "js_composer" ) ),
		array( "icon_folder-open" => __( "Icon_folder-open", "js_composer" ) ),
		array( "icon_folder-add" => __( "Icon_folder-add", "js_composer" ) ),
		array( "icon_folder_upload" => __( "Icon_folder_upload", "js_composer" ) ),
		array( "icon_folder_download" => __( "Icon_folder_download", "js_composer" ) ),
		array( "icon_info" => __( "Icon_info", "js_composer" ) ),
		array( "icon_error-circle" => __( "Icon_error-circle", "js_composer" ) ),
		array( "icon_error-oct" => __( "Icon_error-oct", "js_composer" ) ),
		array( "icon_error-triangle" => __( "Icon_error-triangle", "js_composer" ) ),
		array( "icon_question_alt" => __( "Icon_question_alt", "js_composer" ) ),
		array( "icon_comment" => __( "Icon_comment", "js_composer" ) ),
		array( "icon_chat" => __( "Icon_chat", "js_composer" ) ),
		array( "icon_vol-mute" => __( "Icon_vol-mute", "js_composer" ) ),
		array( "icon_volume-low" => __( "Icon_volume-low", "js_composer" ) ),
		array( "icon_volume-high" => __( "Icon_volume-high", "js_composer" ) ),
		array( "icon_quotations_alt" => __( "Icon_quotations_alt", "js_composer" ) ),
		array( "icon_clock" => __( "Icon_clock", "js_composer" ) ),
		array( "icon_lock" => __( "Icon_lock", "js_composer" ) ),
		array( "icon_lock-open" => __( "Icon_lock-open", "js_composer" ) ),
		array( "icon_key" => __( "Icon_key", "js_composer" ) ),
		array( "icon_cloud" => __( "Icon_cloud", "js_composer" ) ),
		array( "icon_cloud-upload" => __( "Icon_cloud-upload", "js_composer" ) ),
		array( "icon_cloud-download" => __( "Icon_cloud-download", "js_composer" ) ),
		array( "icon_lightbulb" => __( "Icon_lightbulb", "js_composer" ) ),
		array( "icon_gift" => __( "Icon_gift", "js_composer" ) ),
		array( "icon_house" => __( "Icon_house", "js_composer" ) ),
		array( "icon_camera" => __( "Icon_camera", "js_composer" ) ),
		array( "icon_mail" => __( "Icon_mail", "js_composer" ) ),
		array( "icon_cone" => __( "Icon_cone", "js_composer" ) ),
		array( "icon_ribbon" => __( "Icon_ribbon", "js_composer" ) ),
		array( "icon_bag" => __( "Icon_bag", "js_composer" ) ),
		array( "icon_cart" => __( "Icon_cart", "js_composer" ) ),
		array( "icon_tag" => __( "Icon_tag", "js_composer" ) ),
		array( "icon_tags" => __( "Icon_tags", "js_composer" ) ),
		array( "icon_trash" => __( "Icon_trash", "js_composer" ) ),
		array( "icon_cursor" => __( "Icon_cursor", "js_composer" ) ),
		array( "icon_mic" => __( "Icon_mic", "js_composer" ) ),
		array( "icon_compass" => __( "Icon_compass", "js_composer" ) ),
		array( "icon_pin" => __( "Icon_pin", "js_composer" ) ),
		array( "icon_pushpin" => __( "Icon_pushpin", "js_composer" ) ),
		array( "icon_map" => __( "Icon_map", "js_composer" ) ),
		array( "icon_drawer" => __( "Icon_drawer", "js_composer" ) ),
		array( "icon_toolbox" => __( "Icon_toolbox", "js_composer" ) ),
		array( "icon_book" => __( "Icon_book", "js_composer" ) ),
		array( "icon_contacts" => __( "Icon_contacts", "js_composer" ) ),
		array( "icon_archive" => __( "Icon_archive", "js_composer" ) ),
		array( "icon_heart" => __( "Icon_heart", "js_composer" ) ),
		array( "icon_profile" => __( "Icon_profile", "js_composer" ) ),
		array( "icon_group" => __( "Icon_group", "js_composer" ) ),
		array( "icon_grid-2x2" => __( "Icon_grid-2x2", "js_composer" ) ),
		array( "icon_grid-3x3" => __( "Icon_grid-3x3", "js_composer" ) ),
		array( "icon_music" => __( "Icon_music", "js_composer" ) ),
		array( "icon_pause_alt" => __( "Icon_pause_alt", "js_composer" ) ),
		array( "icon_phone" => __( "Icon_phone", "js_composer" ) ),
		array( "icon_upload" => __( "Icon_upload", "js_composer" ) ),
		array( "icon_download" => __( "Icon_download", "js_composer" ) ),
		array( "icon_rook" => __( "Icon_rook", "js_composer" ) ),
		array( "icon_printer-alt" => __( "Icon_printer-alt", "js_composer" ) ),
		array( "icon_calculator_alt" => __( "Icon_calculator_alt", "js_composer" ) ),
		array( "icon_building_alt" => __( "Icon_building_alt", "js_composer" ) ),
		array( "icon_floppy_alt" => __( "Icon_floppy_alt", "js_composer" ) ),
		array( "icon_drive_alt" => __( "Icon_drive_alt", "js_composer" ) ),
		array( "icon_search_alt" => __( "Icon_search_alt", "js_composer" ) ),
		array( "icon_id_alt" => __( "Icon_id_alt", "js_composer" ) ),
		array( "icon_id-2_alt" => __( "Icon_id-2_alt", "js_composer" ) ),
		array( "icon_puzzle_alt" => __( "Icon_puzzle_alt", "js_composer" ) ),
		array( "icon_like_alt" => __( "Icon_like_alt", "js_composer" ) ),
		array( "icon_dislike_alt" => __( "Icon_dislike_alt", "js_composer" ) ),
		array( "icon_mug_alt" => __( "Icon_mug_alt", "js_composer" ) ),
		array( "icon_currency_alt" => __( "Icon_currency_alt", "js_composer" ) ),
		array( "icon_wallet_alt" => __( "Icon_wallet_alt", "js_composer" ) ),
		array( "icon_pens_alt" => __( "Icon_pens_alt", "js_composer" ) ),
		array( "icon_easel_alt" => __( "Icon_easel_alt", "js_composer" ) ),
		array( "icon_flowchart_alt" => __( "Icon_flowchart_alt", "js_composer" ) ),
		array( "icon_datareport_alt" => __( "Icon_datareport_alt", "js_composer" ) ),
		array( "icon_briefcase_alt" => __( "Icon_briefcase_alt", "js_composer" ) ),
		array( "icon_shield_alt" => __( "Icon_shield_alt", "js_composer" ) ),
		array( "icon_percent_alt" => __( "Icon_percent_alt", "js_composer" ) ),
		array( "icon_globe_alt" => __( "Icon_globe_alt", "js_composer" ) ),
		array( "icon_clipboard" => __( "Icon_clipboard", "js_composer" ) ),
		array( "social_facebook" => __( "Social_facebook", "js_composer" ) ),
		array( "social_twitter" => __( "Social_twitter", "js_composer" ) ),
		array( "social_pinterest" => __( "Social_pinterest", "js_composer" ) ),
		array( "social_googleplus" => __( "Social_googleplus", "js_composer" ) ),
		array( "social_tumblr" => __( "Social_tumblr", "js_composer" ) ),
		array( "social_tumbleupon" => __( "Social_tumbleupon", "js_composer" ) ),
		array( "social_wordpress" => __( "Social_wordpress", "js_composer" ) ),
		array( "social_instagram" => __( "Social_instagram", "js_composer" ) ),
		array( "social_dribbble" => __( "Social_dribbble", "js_composer" ) ),
		array( "social_vimeo" => __( "Social_vimeo", "js_composer" ) ),
		array( "social_linkedin" => __( "Social_linkedin", "js_composer" ) ),
		array( "social_rss" => __( "Social_rss", "js_composer" ) ),
		array( "social_deviantart" => __( "Social_deviantart", "js_composer" ) ),
		array( "social_share" => __( "Social_share", "js_composer" ) ),
		array( "social_myspace" => __( "Social_myspace", "js_composer" ) ),
		array( "social_skype" => __( "Social_skype", "js_composer" ) ),
		array( "social_youtube" => __( "Social_youtube", "js_composer" ) ),
		array( "social_picassa" => __( "Social_picassa", "js_composer" ) ),
		array( "social_googledrive" => __( "Social_googledrive", "js_composer" ) ),
		array( "social_flickr" => __( "Social_flickr", "js_composer" ) ),
		array( "social_blogger" => __( "Social_blogger", "js_composer" ) ),
		array( "social_spotify" => __( "Social_spotify", "js_composer" ) ),
		array( "social_delicious" => __( "Social_delicious", "js_composer" ) ),
		array( "social_facebook_circle" => __( "Social_facebook_circle", "js_composer" ) ),
		array( "social_twitter_circle" => __( "Social_twitter_circle", "js_composer" ) ),
		array( "social_pinterest_circle" => __( "Social_pinterest_circle", "js_composer" ) ),
		array( "social_googleplus_circle" => __( "Social_googleplus_circle", "js_composer" ) ),
		array( "social_tumblr_circle" => __( "Social_tumblr_circle", "js_composer" ) ),
		array( "social_stumbleupon_circle" => __( "Social_stumbleupon_circle", "js_composer" ) ),
		array( "social_wordpress_circle" => __( "Social_wordpress_circle", "js_composer" ) ),
		array( "social_instagram_circle" => __( "Social_instagram_circle", "js_composer" ) ),
		array( "social_dribbble_circle" => __( "Social_dribbble_circle", "js_composer" ) ),
		array( "social_vimeo_circle" => __( "Social_vimeo_circle", "js_composer" ) ),
		array( "social_linkedin_circle" => __( "Social_linkedin_circle", "js_composer" ) ),
		array( "social_rss_circle" => __( "Social_rss_circle", "js_composer" ) ),
		array( "social_deviantart_circle" => __( "Social_deviantart_circle", "js_composer" ) ),
		array( "social_share_circle" => __( "Social_share_circle", "js_composer" ) ),
		array( "social_myspace_circle" => __( "Social_myspace_circle", "js_composer" ) ),
		array( "social_skype_circle" => __( "Social_skype_circle", "js_composer" ) ),
		array( "social_youtube_circle" => __( "Social_youtube_circle", "js_composer" ) ),
		array( "social_picassa_circle" => __( "Social_picassa_circle", "js_composer" ) ),
		array( "social_googledrive_alt2" => __( "Social_googledrive_alt2", "js_composer" ) ),
		array( "social_flickr_circle" => __( "Social_flickr_circle", "js_composer" ) ),
		array( "social_blogger_circle" => __( "Social_blogger_circle", "js_composer" ) ),
		array( "social_spotify_circle" => __( "Social_spotify_circle", "js_composer" ) ),
		array( "social_delicious_circle" => __( "Social_delicious_circle", "js_composer" ) ),
		array( "social_facebook_square" => __( "Social_facebook_square", "js_composer" ) ),
		array( "social_twitter_square" => __( "Social_twitter_square", "js_composer" ) ),
		array( "social_pinterest_square" => __( "Social_pinterest_square", "js_composer" ) ),
		array( "social_googleplus_square" => __( "Social_googleplus_square", "js_composer" ) ),
		array( "social_tumblr_square" => __( "Social_tumblr_square", "js_composer" ) ),
		array( "social_stumbleupon_square" => __( "Social_stumbleupon_square", "js_composer" ) ),
		array( "social_wordpress_square" => __( "Social_wordpress_square", "js_composer" ) ),
		array( "social_instagram_square" => __( "Social_instagram_square", "js_composer" ) ),
		array( "social_dribbble_square" => __( "Social_dribbble_square", "js_composer" ) ),
		array( "social_vimeo_square" => __( "Social_vimeo_square", "js_composer" ) ),
		array( "social_linkedin_square" => __( "Social_linkedin_square", "js_composer" ) ),
		array( "social_rss_square" => __( "Social_rss_square", "js_composer" ) ),
		array( "social_deviantart_square" => __( "Social_deviantart_square", "js_composer" ) ),
		array( "social_share_square" => __( "Social_share_square", "js_composer" ) ),
		array( "social_myspace_square" => __( "Social_myspace_square", "js_composer" ) ),
		array( "social_skype_square" => __( "Social_skype_square", "js_composer" ) ),
		array( "social_youtube_square" => __( "Social_youtube_square", "js_composer" ) ),
		array( "social_picassa_square" => __( "Social_picassa_square", "js_composer" ) ),
		array( "social_googledrive_square" => __( "Social_googledrive_square", "js_composer" ) ),
		array( "social_flickr_square" => __( "Social_flickr_square", "js_composer" ) ),
		array( "social_blogger_square" => __( "Social_blogger_square", "js_composer" ) ),
		array( "social_spotify_square" => __( "Social_spotify_square", "js_composer" ) ),
		array( "social_delicious_square" => __( "Social_delicious_square", "js_composer" ) ),
	);

	return array_merge( $icons, $elegant_icons );
}
 ?>