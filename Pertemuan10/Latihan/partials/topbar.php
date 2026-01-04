<?php
// partials/topbar.php
?>
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h4 class="mb-0"><?= e($heading ?? '') ?></h4>
    <?php if (!empty($subheading)): ?>
      <div class="text-secondary small"><?= e($subheading) ?></div>
    <?php endif; ?>
  </div>
</div>
