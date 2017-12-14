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
        "featured_image" => "http://localhost:8080/wp-content/uploads/2017/12/apartamento2.jpg"
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

add_action('init', 'cadastrando_post_type_imoveis');