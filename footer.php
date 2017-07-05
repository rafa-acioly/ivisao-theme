<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column is-2">
        <h2 class="title is-5">Menu</h2>
        <?= wp_list_pages(array('depth' => 1, 'title_li' => '')); ?>
      </div>
      <div class="column location-info">
        <h2 class="title is-5">Localização</h2>
        <address>
          <span>Avenida Tivoli, 279</span> <br>
          Jd. Bethania <br>
          São José dos Campos
        </address>
        <p>
          <h3 class="title is-4"><span>12</span> 3946.7888</h3>
          <h4 class="subtitle">contato@ivisaosjc.com.br</h4>
        </p>
        <p>
          <a href="#">
            <span class="icon">
              <i class="fa fa-facebook fa-fw"></i>
            </span>
            <span>ivisaosjc</span>
          </a>
        </p>
      </div>
      <div class="column">
        <img src="http://dummyimage.com/450x300/4d494d/686a82.gif&text=Placeholder+Map" alt="Placeholder+Map">
      </div>
      <div class="column">
        <img src="http://dummyimage.com/450x300/4d494d/686a82.gif&text=Placeholder+Facebook" alt="Placeholder+Facebook">
      </div>
    </div>
  </div>
</footer>
<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery/jquery.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>
