<?php  
    $pages = $MODEL;

    $current = 0;

    if (isset($_GET["page"]))
        $current = $_GET["page"];
?>


<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <?php if ($current > 0): ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?= $current - 1 ?>" tabindex="-1" aria-disabled="false">Previous</a>
    </li>
    <?php else: ?>
        <li class="page-item disabled">
        <a class="page-link" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
    <?php endif; ?>
    <?php for ($i = 0; $i < $pages; $i++): ?>
        <?php if ($i == $current): ?>
            <li class="page-item active" aria-current="page">
                <a class="page-link"><?= $i + 1 ?> <span class="sr-only">(current)</span></a>
            </li>
        <?php else: ?>
            <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"> <?= $i + 1 ?></a></li>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($current < $pages - 1): ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?= $current + 1 ?>">Next</a>
    </li>
    <?php else: ?>
    <li class="page-item disabled">
      <a class="page-link" aria-disabled="true">Next</a>
    </li>
    <?php endif; ?>
    
  </ul>
</nav>
