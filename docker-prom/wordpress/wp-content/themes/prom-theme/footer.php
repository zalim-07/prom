</main>
 <!-- Footer -->
 <footer class="footer">
   <div class="container">
     <div class="footer__content">
       <!-- Logo Column -->
       <div class="footer__column">
        <div class="footer__logo">
          <?php prom_svg( 'logo-footer.svg', [ 'aria-label' => get_bloginfo( 'name' ) ] ); ?>
        </div>
       </div>

       <div class="footer__columns">
         <!-- Menu Column -->
         <div class="footer__column">
           <h3 class="footer__title">МЕНЮ</h3>
          <ul class="footer__menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">О нас</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Услуги</a></li>
            <li><a href="<?php echo esc_url( home_url( '/prices' ) ); ?>">Цены</a></li>
            <li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Блог</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>">Контакты</a></li>
          </ul>
         </div>

         <!-- Catalog Column -->
         <div class="footer__column">
           <h3 class="footer__title">КАТАЛОГ</h3>
          <ul class="footer__menu">
            <li><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">Каталог ТСР</a></li>
            <li><a href="<?php echo esc_url( home_url( '/prosthetics/upper' ) ); ?>">Протезы верхних конечностей</a></li>
            <li><a href="<?php echo esc_url( home_url( '/prosthetics/lower' ) ); ?>">Протезы нижних конечностей</a></li>
            <li><a href="<?php echo esc_url( home_url( '/prosthetics/children' ) ); ?>">Детские протезы</a></li>
          </ul>
         </div>

         <!-- Info Column -->
         <div class="footer__column">
           <h3 class="footer__title">ИНФОРМАЦИЯ</h3>
           <ul class="footer__menu">
             <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Политика конфиденциальности</a></li>
             <li><a href="<?php echo esc_url( home_url( '/user-agreement' ) ); ?>">Пользовательское соглашение</a></li>
             <li><a href="<?php echo esc_url( home_url( '/public-offer' ) ); ?>">Публичная оферта</a></li>
           </ul>
         </div>

         <!-- Contacts Column -->
         <div class="footer__column">
           <h3 class="footer__title">КОНТАКТЫ</h3>
           <p class="footer__address">
             Адрес: г. Тула, улица Каракозова, 71/2
           </p>
           <a href="tel:+79534431220" class="footer__phone">+7 (953) 443-12-20</a>
          <div class="footer__socials">
            <a href="#" class="footer__social footer__social--whatsapp">
              <?php prom_svg( 'wa.svg', [ 'aria-label' => 'WhatsApp' ] ); ?>
            </a>
            <a href="#" class="footer__social footer__social--telegram">
              <?php prom_svg( 'tg.svg', [ 'aria-label' => 'Telegram' ] ); ?>
            </a>
            <a href="#" class="footer__social footer__social--vk">
              <?php prom_svg( 'vk.svg', [ 'aria-label' => 'VKontakte' ] ); ?>
            </a>
          </div>
         </div>
       </div>
     </div>
  </div>
</footer>
<?php wp_footer(); ?>
<?php get_template_part( 'template/modal' ); ?>
</body>

</html>