<?php
include 'layout/_functions.php';
?>

<?php
$page_title = "Licenças - Dados Abertos";
$current_page = "licenças";
?>

<?php
include 'layout/_head.php';
?>
  <body>

<?php
include 'layout/_header.php';
?>

    <main>
      <section id="licencas">
        <div class="container">
          <!-- Licenças -->
          <div class="row">
            <div class="col-sm-12 col-md-12" >
              <?php echo html_from_markdown('licencas.md'); ?>
            </div>
          </div>
        </div>
      </section>
    </main>


<?php
include 'layout/_footer.php';
?>
