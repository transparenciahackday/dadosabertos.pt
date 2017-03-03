<?php
  include 'layout/_functions.php';
?>

<?php
  $page_title = "Glossário - Dados Abertos ";
  $current_page = 'glossário';
?>

<?php
  include 'layout/_head.php';
?>
  <body>

    <?php
      include 'layout/_header.php';
    ?>

    <main>
      <section id="glossario">
        <div class="container">
          <!-- Glossário -->
          <div class="row">
            <div class="col-sm-12 col-md-12" >
              <?php echo html_from_markdown('glossario.md'); ?>
            </div>
        </div>
      </section>
    </main>

<?php
  include 'layout/_footer.php';
?>
