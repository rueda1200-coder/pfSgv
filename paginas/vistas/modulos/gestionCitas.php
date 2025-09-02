<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Módulo | Gestión de Citas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body{ background:#f8f9fa; }
    .card-kpi .icon-wrap{
      width: 52px; height: 52px; display:grid; place-items:center;
      border-radius:14px; background:rgba(13,110,253,.08);
    }
    .card-kpi .icon-wrap.success{ background:rgba(25,135,84,.10); }
    .card-kpi .icon-wrap.warning{ background:rgba(255,193,7,.15); }
    .shadow-soft{ box-shadow: 0 8px 24px rgba(16,24,40,.06); }
  </style>
</head>
<body>
<div class="container py-4">

  <!-- Encabezado -->
  <div class="d-flex align-items-center justify-content-between mb-3">
    <div>
      <h2 class="mb-1">Gestión de Citas</h2>
      <p class="text-secondary mb-0">Registra, organiza y controla las citas de tus pacientes.</p>
    </div>
    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#filtro">
      <i class="bi bi-funnel me-1"></i> Filtros
    </button>
  </div>

  <!-- KPIs -->
  <div class="row g-3">
    <div class="col-12 col-md-4">
      <div class="card card-kpi shadow-soft">
        <div class="card-body d-flex gap-3 align-items-center">
          <div class="icon-wrap"><i class="bi bi-calendar-event fs-4 text-primary"></i></div>
          <div>
            <div class="text-secondary small">Citas de hoy</div>
            <div class="h4 mb-0" id="kpi-hoy">12</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card card-kpi shadow-soft">
        <div class="card-body d-flex gap-3 align-items-center">
          <div class="icon-wrap warning"><i class="bi bi-hourglass-split fs-4 text-warning"></i></div>
          <div>
            <div class="text-secondary small">Pendientes</div>
            <div class="h4 mb-0" id="kpi-pend">5</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card card-kpi shadow-soft">
        <div class="card-body d-flex gap-3 align-items-center">
          <div class="icon-wrap success"><i class="bi bi-check2-square fs-4 text-success"></i></div>
          <div>
            <div class="text-secondary small">Atendidas</div>
            <div class="h4 mb-0" id="kpi-atend">7</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ocupación de agenda -->
  <div class="card mt-3 shadow-soft">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="fw-semibold">Ocupación de agenda (hoy)</span>
        <span class="text-secondary" id="lbl-ocupacion">70%</span>
      </div>
      <div class="progress" role="progressbar" aria-label="Ocupación de agenda">
        <div class="progress-bar" id="bar-ocupacion" style="width:70%"></div>
      </div>
    </div>
  </div>

  <!-- Contenido principal -->
  <div class="row g-3 mt-1">
    <!-- Próximas citas -->
    <div class="col-12 col-lg-7">
      <div class="card shadow-soft">
        <div class="card-header bg-white">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Próximas citas</h5>
            <div class="input-group input-group-sm" style="max-width:240px">
              <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
              <input type="search" id="search" class="form-control" placeholder="Buscar paciente/mascota">
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Hora</th>
                <th>Paciente</th>
                <th>Mascota</th>
                <th>Servicio</th>
                <th>Estado</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tbl-citas">
              <!-- Ejemplos -->
              <tr>
                <td>09:00</td>
                <td>Laura Pérez</td>
                <td>Max (Canino)</td>
                <td>Consulta</td>
                <td><span class="badge text-bg-warning">Pendiente</span></td>
                <td class="text-end">
                  <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                </td>
              </tr>
              <tr>
                <td>10:30</td>
                <td>Carlos Ruiz</td>
                <td>Mishi (Felino)</td>
                <td>Vacunación</td>
                <td><span class="badge text-bg-success">Confirmada</span></td>
                <td class="text-end">
                  <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                </td>
              </tr>
              <tr>
                <td>11:15</td>
                <td>Andrea Gil</td>
                <td>Toby (Canino)</td>
                <td>Desparasitación</td>
                <td><span class="badge text-bg-secondary">Reprogramada</span></td>
                <td class="text-end">
                  <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer bg-white small text-secondary">
          <i class="bi bi-info-circle me-1"></i> Usa el buscador para filtrar por paciente o mascota.
        </div>
      </div>
    </div>

    <!-- Formulario nueva cita -->
    <div class="col-12 col-lg-5">
      <div class="card shadow-soft">
        <div class="card-header bg-white"><h5 class="mb-0">Registrar nueva cita</h5></div>
        <div class="card-body">
          <form id="frm-cita" novalidate>
            <div class="mb-3">
              <label class="form-label">Paciente (propietario)</label>
              <input type="text" class="form-control" required placeholder="Ej: Laura Pérez">
              <div class="invalid-feedback">Ingresa el nombre del paciente.</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Mascota</label>
              <input type="text" class="form-control" required placeholder="Ej: Max">
              <div class="invalid-feedback">Ingresa el nombre de la mascota.</div>
            </div>
            <div class="row g-2">
              <div class="col-6">
                <label class="form-label">Fecha</label>
                <input type="date" class="form-control" required>
              </div>
              <div class="col-6">
                <label class="form-label">Hora</label>
                <input type="time" class="form-control" required>
              </div>
            </div>
            <div class="mt-3">
              <label class="form-label">Servicio</label>
              <select class="form-select" required>
                <option value="">Selecciona…</option>
                <option>Consulta</option>
                <option>Vacunación</option>
                <option>Desparasitación</option>
                <option>Baño y estética</option>
              </select>
              <div class="invalid-feedback">Selecciona un servicio.</div>
            </div>
            <div class="mt-3">
              <label class="form-label">Notas</label>
              <textarea class="form-control" rows="2" placeholder="Observaciones (opcional)"></textarea>
            </div>
            <div class="d-grid gap-2 mt-3">
              <button class="btn btn-success" type="submit">
                <i class="bi bi-plus-circle me-1"></i> Guardar cita
              </button>
              <button class="btn btn-outline-secondary" type="reset">Limpiar</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Mini leyenda de estados -->
      <div class="card mt-3 shadow-soft">
        <div class="card-body small">
          <span class="me-3"><span class="badge text-bg-warning me-1">&nbsp;</span>Pendiente</span>
          <span class="me-3"><span class="badge text-bg-success me-1">&nbsp;</span>Confirmada</span>
          <span class="me-3"><span class="badge text-bg-secondary me-1">&nbsp;</span>Reprogramada</span>
          <span class="me-3"><span class="badge text-bg-danger me-1">&nbsp;</span>Cancelada</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Offcanvas filtros -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="filtro">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Filtros</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <div class="mb-3">
      <label class="form-label">Rango de fechas</label>
      <input type="date" class="form-control mb-2">
      <input type="date" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Estado</label>
      <select class="form-select">
        <option value="">Todos</option>
        <option>Pendiente</option>
        <option>Confirmada</option>
        <option>Reprogramada</option>
        <option>Cancelada</option>
      </select>
    </div>
    <button class="btn btn-primary w-100"><i class="bi bi-funnel me-1"></i> Aplicar filtros</button>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Búsqueda simple en tabla (cliente-side demo)
document.getElementById('search').addEventListener('input', function(){
  const q = this.value.toLowerCase();
  document.querySelectorAll('#tbl-citas tr').forEach(tr=>{
    tr.style.display = tr.innerText.toLowerCase().includes(q) ? '' : 'none';
  });
});

// Validación Bootstrap
(() => {
  const form = document.getElementById('frm-cita');
  form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
    } else {
      // Aquí disparas tu POST al controlador MVC
      // fetch('index.php?route=citas&action=guardar', { method:'POST', body: new FormData(form) })
      //   .then(r=>r.json()).then(...);
      e.preventDefault();
      alert('Cita guardada (demo). Integra con tu controlador.');
    }
    form.classList.add('was-validated');
  }, false);
})();
</script>
</body>
</html>
