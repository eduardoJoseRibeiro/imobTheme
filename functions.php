<?php

add_theme_support('post-thumbnails');

function cadastrando_post_type_imoveis(){
    $nome = "Imóvel";
    $nomePlural = "Imóveis";
    $description = "Imóveis da Imobiliária";

    $labels = array(
        "name"          => $nomePlural,
        "name_singular" => $nome,
        "add_new_item"  => "Adicionar Novo " . $nome,
        "edit_item"     => "Editar " . $nome,
        "new_item"      => "Novo " . $nome,
        "view_item"     => "Ver " . $nome,
        "view_items"    => "Ver Novos " . $nomePlural,
        "search_items"  => "Procurar por " . $nome,
        "not_found"     => "Nenhum ".$nome." Encontrado",
        "not_found_in_trash" => "Nenhum ".$nome." na Lixeira",
        "all_items"     => "Todos os " . $nomePlural,
        "archives"      => $nomePlural." Arquivados",
        "attributes"    => "Atributos do " . $nome,
        "insert_into_item" => "Inserir " . $nome,
        "uploaded_to_this_item" => "Subir para esse " . $nome,
        "featured_image" => "./wp-content/uploads/2017/12/apartamento1.jpg"
    );

    $supports = array(
        "title",
        "editor",
        "thumbnail"
    );

    $args = array(
        "labels" => $labels,
        "public" => true,
        "description" => $description,
        "menu_icon" => "dashicons-admin-multisite",
        "supports" => $supports
    );

    register_post_type('imovel', $args);

}

function registrar_menu(){
    register_nav_menu('header-menu', 'Menu do Cabeçalho');
}

$funcoes = array(
    'cadastrando_post_type_imoveis',
    'registrar_menu'
);

function iniciarWordpress(){
    $i = 0;
    global $funcoes;
    $tamanhoArray = count($funcoes);
    while($i < $tamanhoArray){
        add_action('init', $funcoes[$i]);
        $i++;
    }
    return 'Hello';
}

function geraTitle(){
    bloginfo('name');
    if(!is_home()){
        echo " | ";
    }
    the_title();
}

function registrar_taxonomia_localizacao(){
    $nome = 'Localizações';
    $singular_nome = 'Localização';

    $labels = array(
        'name'          => $nome,
        'singular_name' => $singular_nome,
        'edit_item'     => 'Editar '.$singular_nome,
        'add_new_item'  => 'Adicionar Nova Cidade/Bairro'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'hierarchical'  => true
    );

    register_taxonomy('localizacao', 'imovel', $args);
}

add_action('init', 'registrar_menu');
add_action('init', 'registrar_taxonomia_localizacao');
add_action('init', 'cadastrando_post_type_imoveis');

