<?php get_header(); ?>
<div class="hero is-fullheight" id="page-contato">
  <div class="hero-nav">
    <?php get_template_part('components/nav', 'nav'); ?>
  </div>

  <div class="hero-body">
		<div class="container">
      <div class="columns">
        <div class="column is-6 is-offset-1 content">
          <h1 class="title is-spaced">Contato</h1>
          <p class="is-spaced">
            Entre em contato com o Instituto da Visão para tirar dúvidas, dar sugestões ou solicitar informações.
          </p>
          <h2 class="title">Será um prazer falar com você.</h2>

          <form action="" method="post">
            <div class="field">
              <p class="control is-expanded">
                <input name="nome" type="text" class="input" placeholder="Nome" required>
              </p>
            </div>
            <div class="field is-horizontal">
              <div class="field-body">
                <div class="field is-grouped">
                  <p class="control is-expanded">
                    <input name="telefone" type="text" class="input" placeholder="Telefone" required>
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded">
                    <input name="email" type="email" class="input" placeholder="Email" required>
                  </p>
                </div>
              </div>
            </div>
            <div class="field">
              <p class="control">
                <textarea name="mensagem" cols="10" rows="5" class="textarea" placeholder="Mensagem" required></textarea>
              </p>
            </div>
            <div class="field">
              <p>
                <span>Funcionamento:</span> Segunda a sexta | 07h00 às 19h00
              </p>
              <button class="button" type="submit">Enviar</button>
            </div>
          </form>
        </div>
        <div class="column is-6 is-offset-1 color-group">
          <div class="color-1"></div>
          <div class="color-2"></div>
          <div class="color-3"></div>
          <div class="color-4"></div>
        </div>
      </div>
    </div>
	</div>

  <?php get_template_part('components/hero', 'footer'); ?>
</div>
