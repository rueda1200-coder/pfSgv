<footer id="footer" class="footer bg-light py-3">
  <div class="container text-center small text-muted">
    <p class="mb-1">
      📍 Dirección: Calle Principal, Ciudad &nbsp;|&nbsp; 
      📞 Teléfono: +57 123 456 789 &nbsp;|&nbsp; 
      📧 Email: <a href="mailto:contacto@veterinaria.com">contacto@veterinaria.com</a>
      <?php if(isset($_SESSION['usuario'])): ?>
        &nbsp;|&nbsp; 👤 Usuario: <strong><?= htmlspecialchars($_SESSION['usuario']); ?></strong>
      <?php endif; ?>
    </p>
    <div class="copyright">
      &copy; <?= date('Y'); ?> <strong><span>Sistema Administrativo Veterinario</span></strong>. Todos los derechos reservados.
    </div>
  </div>
</footer>
