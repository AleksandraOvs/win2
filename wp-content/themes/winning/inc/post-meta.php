<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
        
Container::make('post_meta', 'Контент для страницы')
    ->show_on_page('main-page')
    
    ->add_tab( 'Основная информация', array(
        Field::make('text', 'crb_main_header', 'Основной заголовок')
        ->set_width(10),
        Field::make('text', 'crb_main_header_description', 'Подзаголовок')
        ->set_width(10),
        Field::make('text', 'crb_button_text', 'Button text' )
        ->set_width(10),
        Field::make('text', 'crb_button_link', 'Button link' )
        ->set_width(10),
        Field::make( 'image', 'crb_hero_picture', 'Изображение для первого экрана' )
        ->set_value_type('url')
        ->help_text( 'Отображается на экранах меньше 768px' )
        ->set_width(60),
        Field::make( 'text', 'crb_video_link', 'Ссылка на видео' ),
        Field::make('rich_text', 'crb_about', 'Информация о Winning'),
        // Field::make('text', 'crb_delivery_text1', 'Текст о доставке часть 1')
        // ->set_width(50),
        // Field::make('text', 'crb_delivery_text2', 'Текст о доставке часть 2')
        // ->set_width(50),
        Field::make('complex', 'crb_delivery_info')
        ->set_classes('del_items')
        ->add_fields( array (
            Field::make('image', 'crb_delivery_img', 'Иконка'),
            Field::make('text', 'crb_delivery_text', 'Текст о доставке')
        )),
        Field::make( 'media_gallery', 'crb_hero_video', 'Видео для первого экрана' )
         ->set_type( 'video' )
    ))

    ->add_tab( 'Отзывы', array(
        Field::make('complex', 'feedbacks')
        ->set_classes('fdb_items')
        ->add_fields(array (
            Field::make( 'image', 'crb_fdb_photo', 'Аватар для отзыва' ),
            Field::make( 'text', 'crb_fdb_name', 'Имя для отзыва' ),
            Field::make( 'text', 'crb_fdb_text', 'Текст отзыва' ),
            Field::make( 'text', 'crb_fdb_date', 'Дата' )
        ))
    ))

    ->add_tab( 'Преимущества', array(
        Field::make( 'text', 'crb_block_name', 'Название блока' ),
        Field::make('complex', 'advantages')
        ->set_classes('adv2_items')
        ->add_fields(array (    
            Field::make( 'text', 'crb_adv_text', 'Преимущество' )
        )),
        Field::make('complex', 'advantages2')
        ->set_classes('adv2_items')
        ->add_fields(array (    
            Field::make( 'image', 'crb_adv2_img', 'Иконка преимущества' ),
            Field::make( 'text', 'crb_adv2_text', 'Преимущество' )
        ))
    ));
    


    Container::make('post_meta', 'Контент для страницы')
    ->show_on_post_type('products')
    ->add_fields( array(
        Field::make( 'text', 'crb_products_description', 'Описание товара' )
    ));

