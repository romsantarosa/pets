<?php 

remove_action('wp_head', 'wp_generator');

//funcao carregamento dos scripts
function carrega_scripts(){
wp_enqueue_script('google_js','https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyCugBaIbuHW9eGn2-mHCOvAESoTAkTx2Rk', '', '' );

wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true);

wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
wp_enqueue_script( 'template', get_template_directory_uri() . 'js/template.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');

//funcao para os menus

register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal', 
		'meu_rodape' => 'Menu Rodapé', 
	)
);


//modelos de suporte ao WP
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image','lojas'));
add_theme_support('html5', array('search-form','custom-search-form'));
add_theme_support('custom-logo', array(
	'height'		=> 200,
	'width'			=> 350
));

//customizando o login admin

function personalizando_login() { ?>
<style type="text/css">
body.login {}

body.login div#login {}

body.login div#login h1 {}

body.login div#login h1 a {}

body.login div#login form#loginform {}

body.login div#login form#loginform p {}

body.login div#login form#loginform p label {}

body.login div#login form#loginform input {}

body.login div#login form#loginform input#user_login {}

body.login div#login form#loginform input#user_pass {}

body.login div#login form#loginform p.forgetmenot {}

body.login div#login form#loginform p.forgetmenot input#rememberme {}

body.login div#login form#loginform p.submit {}

body.login div#login form#loginform p.submit input#wp-submit {}

body.login div#login p#nav {}

body.login div#login p#nav a {}

body.login div#login p#backtoblog {}

body.login div#login p#backtoblog a {}

<style type="text/css">#login h1 a,
.login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri();
    ?>/mundodospets/images/logo_mundo-dos-pets.png);
    height: 65px;
    width: 320px;
    background-size: 320px 65px;
    background-repeat: no-repeat;
    padding-bottom: 30px;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'personalizando_login' );

//Barras laterais
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name' 			=> 'Vídeos',
			'id'			=> 'sidebar-1',
			'description'	=> 'Barra lateral esquerda da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h6 class="widget-titulo">',
			'after_title'	=> '</h6>',

		)
	);

		register_sidebar(
		array(
			'name' 			=> 'Vídeo2',
			'id'			=> 'sidebar-video2',
			'description'	=> 'Barra lateral esquerda da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h6 class="widget-titulo">',
			'after_title'	=> '</h6>',

		)
	);




		register_sidebar(
		array(
			'name' 			=> 'Slider',
			'id'			=> 'slide-sidebar',
			'description'	=> 'Slide da barra lateral esquerda',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',
		)
	);

		register_sidebar(
		array(
			'name' 			=> 'Espaço das ONG´s',
			'id'			=> 'sidebar-2',
			'description'	=> 'Barra lateral direita da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',
		)
	);


				register_sidebar(
		array(
			'name' 			=> 'Redes Sociais',
			'id'			=> 'redes-sociais',
			'description'	=> 'Widgets para redes sociais',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',
		)
	);


								register_sidebar(
		array(
			'name' 			=> 'Horizontal Scrolling',
			'id'			=> 'horizontal-scrolling',
			'description'	=> 'Widgets para Texto horizontalizado',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',
		)
	);

								register_sidebar(
		array(
			'name' 			=> 'Achados e Perdidos',
			'id'			=> 'sidebar-3',
			'description'	=> 'Widgets para animais achados e perdidos',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',
		)
	);



								register_sidebar(
		array(
			'name' 			=> 'Mapa',
			'id'			=> 'sidebar-4',
			'description'	=> 'Widgets para Google Mapas',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',
		)
	);


}

add_action('init','posts_types_pets');

function posts_types_pets(){
	register_post_type('lojas',
		array(
			'labels'		=> array(
				'name' 			=>__('Petshops'),
				'singular_name' => __('Petshop')),


		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),


		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),


		'public'				=>	true,
		'has_archive'			=>	true,
		'hierarchical'      	=> false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'        => array( 'category', 'post_tag'),
		'menu_icon'			=>	'dashicons-store',
		'supports'			=>	array('title','editor','thumbnail' ,'excerpt'),
		)
	);
}



add_action('init', 'cidades_init');

function cidades_init(){
	register_taxonomy('cidades',array('lojas'),
	array(
	'label'		=>__('Cidades'),
	'labels'	=> array(
		'name'			=>__('Cidades', 'taxonomy general name'),
		'singular_name'	=>__('Cidade', 'taxonomy singular name'),
		'menu_name'		=>__('Cidades'),
		'all_itens'		=>__('Todas as cidades'),
		'edit_item'		=>__('Editar cidade'),
		'view_item'		=>__('Visualizar cidade'),
		'update_item'	=>__('Alterar cidade'),
		'add_new_item'	=>__('Adicionar cidade'),
		'new_item_name'=>__('Adicionar novo item'),
		'search_itens'	=>__('Procurar cidade'),
		'not_found'		=>__('Nenhuma cidade encontrada'),

		),
		'hierarchical' 		=> true
	)
);

}

add_action('init','servicos');

function servicos(){
	register_post_type('servicos',
		array(
			'labels'		=> array(
				'name' 			=>__('Serviços'),
				'singular_name' => __('Serviço')),


		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),


		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),


		'public'				=>	true,
		'has_archive'			=>	true,
		'hierarchical'      	=> false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',

		'menu_icon'			=>	'dashicons-admin-tools',
		'supports'			=>	array('title','thumbnail'),
		)
	);
}

add_action('init','posts_types_curiosidades');

function posts_types_curiosidades(){
	register_post_type('curiosidades',
		array(
			'labels'		=> array(
				'name' 			=>__('Curiosidades'),
				'singular_name' => __('Curiosidade')),


		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),


		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),


		'public'				=>	true,
		'has_archive'			=>	true,
		'hierarchical'      	=> false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'        => array( 'category', 'post_tag'),
		'menu_icon'			=>	'dashicons-store',
		'supports'			=>	array('title','editor','thumbnail' ,'excerpt'),
		)
	);
}

//Alterar numero de intens por paginas

function num_itens( $query){
	if( is_admin() || ! $query->is_main_query())
		return;
	if( is_home()) {
		$query->set('posts_per_page', 5);
		return;
	}
}
add_action('pre_get_posts', 'num_itens',1);





/*add_action('init','posts_types_coluna');

function posts_types_coluna(){
	register_post_type('coluna',
		array(
			'labels'		=> array(
				'name' 			=>__('Colunistas'),
				'singular_name' => __('Colunista')),


		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),


		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),


		'public'				=>	true,
		'has_archive'			=>	true,
		'hierarchical'      	=> false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'        => array( 'category', 'post_tag'),
		'menu_icon'			=>	'dashicons-store',
		'supports'			=>	array('title','editor','thumbnail' ,'author', 'excerpt'),
		)
	);
}*/


add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat )
  {
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
    }
  }
  return $t;
}

/* adiciona o filtragem de posts por autor */
add_action('restrict_manage_posts', 'wpmidia_restrict_manage_authors');
function wpmidia_restrict_manage_authors() {
        global $current_screen;
        $post_type = $current_screen->post_type;
        if( in_array($post_type , array('post', 'produto')) ){ // dentro do array vão os tipos de post que você deseja adicionar o filtro
                wp_dropdown_users(array(
                        'show_option_all'       => __('Todos os autores', 'wpmidia'),
                        'show_option_none'      => false,
                        'name'                  => 'author',
                        'selected'              => !empty($_GET['author']) ? $_GET['author'] : 0,
                        'include_selected'      => false
                ));
        }
}

function my_theme_add_scripts() {
 wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCugBaIbuHW9eGn2-mHCOvAESoTAkTx2Rk', array(), '3', true );
 wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
}
 
add_action( 'wp_enqueue_scripts', 'my_theme_add_scripts' );
 
function my_acf_google_map_api( $api ){
 
 $api['key'] = 'AIzaSyCugBaIbuHW9eGn2-mHCOvAESoTAkTx2Rk';
 
 return $api;
 
}
 
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/* add_filter( 'pre_get_posts', 'custom_get_posts' );
function custom_get_posts( $lojas ) {
	if( $lojas ) { 
		$lojas->query_vars['orderby'] = 'name';
		$lojas->query_vars['order'] = 'DESC';
	}
return $lojas;
}*/


function wordpress_pagination() {
		global $wp_query;
 
		$big = 999999999;
 
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
	?>