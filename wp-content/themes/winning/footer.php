</main>

<footer class="footer" id="footer">

  <div class="container">
    <div class="footer__inner">
      <div class="footer__inner__contacts">
        <?php 
        if( $contacts = carbon_get_theme_option('footer_contacts' ) ) {
          ?>
          <ul class="footer__social social">
            <?php
            foreach( $contacts as $contact ) {
              ?>
              <li class="social__item">
                <a href="<?php echo $contact[ 'footer_contact_link']; ?>" class="social__link">
                  <?php
                  $thumb_contact = wp_get_attachment_image_url( $contact['footer_contact_image'], 'full' );
                  ?>
                  <img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact[ 'footer_contact_name']; ?>">
                </a>
              </li>
              <?php
            }
            ?>
          </ul>
          <?php
        }
        ?>

        <?php if( $contacts_pays = carbon_get_theme_option('footer_contacts_pays' ) ) {
          ?>
        <ul class="footer__inner__contacts__paymethods">
        <?php
            foreach( $contacts_pays as $contacts_pay ) {
              ?>
          <li class="footer__inner__contacts__paymethods__item">
          <?php
                  $pay_url = wp_get_attachment_image_url($contacts_pay['footer_contacts_pays_img'], 'full' );
                  ?>
                  <?php //echo $pay_url; ?>
                  <img src="<?php echo $pay_url; ?>" alt="pay method" />
          </li>
        <?php } ?>
        </ul>
          <?php } ?>
        <div class="footer__inner__contacts__about">
          <p class="footer__inner__contacts__about__name">
            <?php echo carbon_get_theme_option('footer_contacts_name')?>
          </p>
          <p class="footer__inner__contacts__about__address">
            <?php echo carbon_get_theme_option('footer_contacts_address')?>
          </p>
        </div>
      </div>

      <div class="footer__menu-inner">
        <?php 
        if( has_nav_menu( 'foot_menu' )) {
          wp_nav_menu( array(
            'theme_location' => 'foot_menu',
            'container' => 'nav',
            'container_class' => 'footer__menu',
            'items_wrap' => '<ul class="footer__menu-list">%3$s</ul>',
                        //'depth' => 2,
                        //'walker' => new Site_Nav()
          ));
        }
        ?>   
      </div>

      <div class="footer__logo">
      
        <?php
          $footer_logo = get_theme_mod('footer_logo');
          $img = wp_get_attachment_image_src($footer_logo, 'full');
          if ($img) :
        ?>
        <img src="<?php echo $img[0]; ?>" alt="">
        <?php endif; ?>
        <div class="footer__logo__sign">
          <p>Winning Moscow</p>
          <p>г.Москва, ул.Восточная 5</p>
        </div>
      </div>
      
      <div class="footer__form">
        <?php echo do_shortcode('[contact-form-7 id="136" title="footer-form"]'); ?>
        <?php if ($tels = carbon_get_theme_option('footer_contacts_tel')){
          
          foreach ($tels as $tel){
            ?>

            <a class="footer__tel" href="<?php echo $tel[('footer_tel_contact_link')]; ?>">
            <?php echo $tel[('footer_tel_contact')]; ?></a>
            <?php
            
          }

        } 
    ?>
      </div>
   </div>

   <div class="footer__copyright">
    <?php bloginfo( 'name' ); ?> — <?php the_date('Y'); ?>© Все права защищены
  </div>
  <!-- <a class="footer__politics footer__copyright popup--link" href="#politics">
    Политика конфиденциальности
  </a> -->

</div>

</footer>

<div id="popup" class="popup ">
  <div class="popup__body">
    <div class="popup__content feedback__content">
      <div class="pop-up__inner">
        <div class="pop-up__title">
          Для оформления заказа укажите свои данные и мы Вам перезвоним
        </div>
        <form class="pop-up__form" action="#">
          <div class="pop-up__input-inner">
            <div class="pop-up__input-line">
              <div class="pop-up__input">
                <input class="pop-up__input-input" type="text" placeholder="ФИО" id="name">
                <label class="pop-up__label" for="name">ФИО</label>
              </div>
            </div>
            <div class="pop-up__input-line">
              <div class="pop-up__input">
                <input class="pop-up__input-input" type="tel" placeholder="+8 (999) 999-99-99" id="phone">
                <label class="pop-up__label" for="tel">+8 (999) 999-99-99</label>
              </div>
            </div>
            <div class="pop-up__input-line">
              <div class="pop-up__input">
                <input class="pop-up__input-input" type="email" placeholder="E-mail" id="email">
                <label class="pop-up__label" for="tel">E-mail</label>
              </div>
            </div>
          </div>
          <div class="pop-up__check">
            <div class="pop-up__input">
              <input class="pop-up__input-check" type="checkbox" placeholder="check" id="check">
              <label class="pop-up__label-check" for="check"> <span>Заполняя форму, вы даете согласие на <a class="popup--link" href="#politics"> обработку
              персональных данных</a></span> </label>
            </div>
          </div>
          <button class="pop-up__btn btn" type="submit">
            Отправить
          </button>
        </form>
      </div>
      <a href="#" class="popup__close popup--close">
        <svg class="popup__close-img" width="12" height="12" viewBox="0 0 12 12" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M11 1L1 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M11 11L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>


  </div>
</div>
</div>

 <?php
        if ($politics = carbon_get_theme_option('personal_data_text')){
          ?>
<div id="politics" class="popup politics">
  <div class="popup__body">
    <div class="popup__content ">

      <div class="politics__inner">
     
          <?php echo $politics; ?>
       
      </div>

      <a href="#" class="popup__close popup--close">
        <svg class="popup__close-img" width="12" height="12" viewBox="0 0 12 12" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M11 1L1 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M11 11L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>


  </div>
</div>
</div>
<?php }
      ?> 
<?php wp_footer(); ?>


<!-- <div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Некоторый текст в модальном..</p>
  </div>

</div> -->

<script type="text/javascript">

  jQuery(function ($) {
        // Получить модальный
    // var modal = document.getElementById("myModal");

// Получить кнопку, которая открывает модальный
    // var btn = document.getElementById("myBtn");

// Получить элемент <span>, который закрывает модальный
    // var span = document.getElementsByClassName("close")[0];

// Когда пользователь нажимает на кнопку, откройте модальный
    // btn.onclick = function() {
    //   modal.style.display = "block";
    // }

// Когда пользователь нажимает на <span> (x), закройте модальное окно
    // span.onclick = function() {
    //   modal.style.display = "none";
    // }

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
    // window.onclick = function(event) {
    //   if (event.target == modal) {
    //     modal.style.display = "none";
    //   }
    // }


    // $( ".products__link.btn.popup--link" ).click(function() {
    //   alert( "Handler for .click() called." );
    //   modal.style.display = "block";

    // });


    // #popup
    $( ".pop-up__btn.btn" ).click(function() {
      // alert( "Handler for .click() called." );
      // modal.style.display = "block";
      // console.log('aaa24');



    });


    $( ".pop-up__form" ).submit(function(e) {
      e.preventDefault();
      console.log('aaa25');

      // pop-up__input-check
      var fio = $('input#name').val();
      var phone = $('input#phone').val();
      var email = $('input#email').val();
      console.log( $('input.pop-up__input-check').is(':checked') );

      console.log( fio );
      console.log( phone );
      console.log( email );

      if (phone.length == 0) {
          $('#phone').after('<p class="mail_error">Заполните телефон</p>');
          return false;
      }


      var hour = $('#time-hour').text();
      var minute = $('#time-minute').text();
      var seconds = $('#time-seconds').text();




      var products_name = $('.slick-track .slick-active .products__name').text();
      var color = $('.slick-track .slick-active .products__colors input:checked').val();
      var color_code = $('.slick-track .slick-active .products__colors input:checked').next().css("backgroundColor");
      
      console.log('color');
      console.log(color);
      console.log('color_code');
      console.log(color_code);

      var size = $('.slick-track .slick-active .products__sizes input:checked').next().text();
      size = size.trim(); 
      console.log('size');
      console.log(size);


      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

      $.ajax({
        url: ajaxurl,
        type: 'POST',
        data: {
          'action': 'my_user_vote2',
          'fio': fio,
          'phone': phone,
          'email': email,
          'products_name': products_name,
          'hour': hour,
          'minute': minute,
          'seconds': seconds,
          'color_code': color_code,
          'size': size,

        },
        dataType : 'json',
        success: function( response ) {
          console.log('aaa77');
          console.log(response);
        },
        compelete: function( response ) {
          console.log('aaa9');
          console.log(response);
        },
        error: function(xhr, statusText, err) {
          console.log('aaa10');
                // console.log(errMsg);
          console.log(xhr.status);

          $('.pop-up__btn.btn').after('<p class="mail_success">Заявка успешно отправлена!</p>');
          $('.mail_error').hide();
          
          
        },
        done: function(response) {
          console.log('aaa11');
          console.log(response);
        }

      });




    });

    


  });

</script>





</body>

</html>