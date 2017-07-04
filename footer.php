<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column">
        <h2 class="title is-5">Menu</h2>
        <?= wp_list_pages(array('depth' => 1, 'title_li' => '')); ?>
      </div>
      <div class="column">
        <h2 class="title is-5">Localização</h2>
        <address>
          Avenida Tivoli, 279 <br>
          Jd. Bethania <br>
          São José dos Campos
        </address>
        <p>
          12 3946.7888 <br>
          contato@ivisaosjc.com.br
        </p>
        <p>
          <a href="#">
            <span class="icon">
              <i class="fa fa-facebook fa-fw"></i> ivisaosjc
            </span>
          </a>
        </p>
      </div>
      <div class="column">
        <img src="http://placehold.it/200x200" alt="">
      </div>
      <div class="column">
        <img src="http://placehold.it/200x200" alt="">
      </div>
    </div>
  </div>
</footer>
<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery.2.1.0.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>
