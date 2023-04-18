<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки сайта')
        ->set_page_menu_position( 2 )
        ->set_icon ('dashicons-admin-generic')
        
->add_tab(__('Header'), array(
   
    Field::make('text', 'header_tel_contact_link', 'Ссылка на телефон')
        ->set_width(50)
        ->help_text('ссылка на телефон вида tel:+700000000'),
    Field::make('text', 'header_tel_contact', 'Номер телефона')
        ->set_width(50)
        ->help_text('Номер телефона, отображающийся на сайте')
            
    // Field::make('complex', 'header_contacts', 'Ссылки на мессенджеры/соцсети в шапке сайта')
    //     ->add_fields( array(
    //         Field::make('text', 'header_contact_name', 'Мессенджер/соцсеть')
    //             ->set_width(33),
    //         Field::make('image', 'header_contact_image', 'Иконка контакта')
    //             ->set_width(33),    
    //         Field::make('text', 'header_contact_link', 'Ссылка на контакт')
    //             ->set_width(33),
    //     ))
    
))

->add_tab(__('Footer'), array(
    Field::make('complex', 'footer_contacts', 'Ссылки')
        ->add_fields( array(
            Field::make('text', 'footer_contact_name', 'Название')
                ->set_width(20),
            Field::make('text', 'footer_contact_link', 'Ссылка на контакт')
                ->set_width(40),
            Field::make('image', 'footer_contact_image', 'Иконка контакта')
                ->set_width(40),
        )),
    Field::make('complex', 'footer_contacts_tel', 'Телефоны')
        ->add_fields( array (
            Field::make('text', 'footer_tel_contact_link', 'Ссылка на телефон')
                ->set_width(50)
                ->help_text('ссылка на телефон вида tel:+700000000'),
            Field::make('text', 'footer_tel_contact', 'Номер телефона')
                ->set_width(50)
                ->help_text('Номер телефона, отображающийся на сайте'),
        )),
        Field::make('complex', 'footer_contacts_pays', 'Методы оплаты')
        ->add_fields( array (
            Field::make('image', 'footer_contacts_pays_img', 'Иконка метода оплаты')
        )),
    Field::make('text', 'footer_contacts_name', 'Название'),
    Field::make('text', 'footer_contacts_address', 'Адрес')
   
))

->add_tab(__('Текст Политики конфиденциальности'), array(
            // Field::make('text', 'contactform_head', 'Contact forms heading'),
            // Field::make('text', 'contactform_shortcode', 'Contact forms shortcode'),
            Field::make('rich_text', 'personal_data_text', 'Политика конфиденциальности')
));

