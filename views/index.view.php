<?php require 'views/header.php' ?>
<div class="row contenedor">
  <div class="col-12 col-md-10">
    <?php foreach ($posts as $post): ?>
      <div class="post">
        <article>
          <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
          <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
          <div class="thumb">
            <a href="#">
              <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>" alt="">
            </a>
          </div>
          <p class="extracto"><?php echo $post['extracto']; ?></p>
          <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Seguir leyendo</a>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
  <?php require 'views/columna-derecha.php' ?>
</div>
<?php require 'views/paginacion.php' ?>
<?php require 'views/footer.php' ?>
