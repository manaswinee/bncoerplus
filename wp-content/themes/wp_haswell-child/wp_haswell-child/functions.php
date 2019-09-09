<?php

/**
 * add child styles.
 * 
 * @author CMS
 * @since 1.0.0
 */
function theme_enqueue_styles()
{
    $parent_style = 'cmssuperheroes-style';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(
        $parent_style
    ));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/**
 * load vc template dir.
 * 
 * @author CMS
 * @since 1.0.0
 */
if (function_exists("vc_set_template_dir")) {
    vc_set_template_dir(get_stylesheet_directory() . "/vc_templates/");
}

function get_bned_testimonials(){
  global $post;
  $html = '<div class="carousel slide cwr_testimonials" data-ride="carousel" data-interval="7000" id="quote-carousel">';
  $tnav = '<ol class="carousel-indicators">';
  $innerhtml = '<div class="carousel-inner text-center">';
  $my_query = new WP_Query( array(
       'post_type' => 'testimonial',
       'posts_per_page' => -1
  ));
  $i = 0;

  if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        $testimonials_meta = haswell_post_meta_data();
        if(has_post_thumbnail()){
            $userimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'post')[0];
        }else{
            $userimg = esc_url(CMS_IMAGES).'no-image.jpg';
        }
        if($i==0){
            $tnav .= '<li data-target="#quote-carousel" data-slide-to="'.$i.'" class="active"><img class="img-responsive " src="'.$userimg.'" alt="User Image"><h2>'.get_the_title().'</h2><p>'.esc_attr($testimonials_meta->_cms_page_testimonial_position).'</p></li>';
            $innerhtml .= '<div class="item active"><blockquote><div class="row"><div class="col-sm-8 col-sm-offset-2">';
        }
        else{
            $tnav .= '<li data-target="#quote-carousel" data-slide-to="'.$i.'"><img class="img-responsive " src="'.$userimg.'" alt="User Image"><h2>'.get_the_title().'</h2><p>'.esc_attr($testimonials_meta->_cms_page_testimonial_position).'</p></li>';
            $innerhtml .= '<div class="item"><blockquote><div class="row"><div class="col-sm-8 col-sm-offset-2">';
        }
        $innerhtml .= '<p>'.get_the_content().'</p>';
        $innerhtml .= '</div></div></blockquote><div class="testimonial_author"><h2>'.get_the_title().'</h2><p>'.esc_attr($testimonials_meta->_cms_page_testimonial_position).'</p></div></div>';
        //$html .= "<h2>" . get_the_title() . " </h2>";
        //$html .= "<p>" . get_the_excerpt() . "</p>";
        //$html .= "<a href=\"" . get_permalink() . "\" class=\"button\">Read more</a>";
        $i++;
  endwhile; endif;
  $innerhtml .= '<a class="carousel-control left tp-leftarrow tparrows gyges" href="#quote-carousel" data-slide="prev"></a><a class="carousel-control right tp-rightarrow tparrows gyges" href="#quote-carousel" data-slide="next"></a></div>';
  $tnav .= '</ol>';
  $html .= $innerhtml;
  //$html .= '<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-angle-left"></i></a><a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-angle-right"></i></a></div>';
  $html .= '</div>';
  wp_reset_postdata();
  return $html;
  //http://bootsnipp.com/snippets/k2VZB
}

add_shortcode('bned_testimonials', 'get_bned_testimonials' );

add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
if ($args->theme_location == 'primary') {
        //$items .= '<li>'.ciusan_register().' | '.ciusan_login().'</li>';
        $items .= '<li>'.ciusan_register().'</li>';
    }
    return $items;
}

/**
 * Add additional custom field
 */

add_action ( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action ( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields ( $user )
{
?>
    <h3>Extra profile information</h3>
    <table class="form-table">
        <tr>
            <th><label for="twitter">Salutation</label></th>
            <td>
                <input type="text" name="salutation" id="salutation" value="<?php echo esc_attr( get_the_author_meta( 'salutation', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Salutation.</span>
            </td>
        </tr>
        <tr>
            <th><label for="twitter">School/Organisation</label></th>
            <td>
                <input type="text" name="school" id="school" value="<?php echo esc_attr( get_the_author_meta( 'school', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your School Name.</span>
            </td>
        </tr>
    </table>
<?php
}

add_action ( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action ( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id )
{
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    /* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
    update_usermeta( $user_id, 'salutation', $_POST['salutation'] );
    update_usermeta( $user_id, 'school', $_POST['school'] );
}

/**
 * Add cutom field to registration form
 */

add_action('register_form','show_first_name_field');
add_action('register_post','check_fields',10,3);
add_action('user_register', 'register_extra_fields');

function show_first_name_field()
{
?>
    <p>
    <label>Salutation<br/>
    <input id="salutation" type="text" tabindex="30" size="25" value="<?php echo $_POST['salutation']; ?>" name="salutation" />
    </label>
    </p>
    <p>
    <label>School<br/>
    <input id="school" type="text" tabindex="30" size="25" value="<?php echo $_POST['school']; ?>" name="school" />
    </label>
    </p>    
<?php
}

function check_fields ( $login, $email, $errors )
{
    global $salutation;
    if ( $_POST['salutation'] == '' )
    {
        $errors->add( 'empty_realname', "<strong>ERROR</strong>: Please Enter your salutation" );
    }
    else
    {
        $salutation = $_POST['salutation'];
    }
    if ( $_POST['school'] == '' )
    {
        $errors->add( 'empty_realname', "<strong>ERROR</strong>: Please Enter your school" );
    }
    else
    {
        $school = $_POST['school'];
    }    
}

function register_extra_fields ( $user_id, $password = "", $meta = array() )
{
    update_user_meta( $user_id, 'salutation', $_POST['salutation'] );
    update_user_meta( $user_id, 'school', $_POST['school'] );
}

function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 ); 