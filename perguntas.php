<?php
include 'layout/_functions.php'
?>

<?php
$page_title = "Perguntas Frequentes | Dados Abertos";
$current_page = "perguntas";
?>

<?php
include 'layout/_head.php';
?>
  <body>

  <?php
  include 'layout/_header.php';
  ?>
    <main>
      <section id="perguntas">
        <div class="container">
          <!-- Perguntas Frequentes -->
          <div class="row">
            <div class="col-sm-12 col-md-12" >
              <?php echo html_from_markdown('perguntas.md'); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include 'layout/_footer.php';
?>
