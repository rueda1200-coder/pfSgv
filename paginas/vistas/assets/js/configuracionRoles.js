document.addEventListener("DOMContentLoaded", () => {

    // === AGREGAR ROL ===
    const formAgregar = document.getElementById("formAgregarRol");
    if (formAgregar) {
        formAgregar.addEventListener("submit", async (e) => {
            e.preventDefault();
            const datos = new FormData(formAgregar);

            try {
                const resp = await fetch("index.php?route=roles&accion=agregar", {
                    method: "POST",
                    body: datos
                });
                const json = await resp.json();

                if (json.ok) {
                    Swal.fire("Éxito", json.mensaje, "success");
                    formAgregar.reset();
                    actualizarListadoRoles();
                    bootstrap.Modal.getInstance(document.getElementById("modalAgregarRol")).hide();
                } else {
                    Swal.fire("Error", json.mensaje, "error");
                }
            } catch (err) {
                console.error(err);
                Swal.fire("Error", "No se pudo agregar el rol", "error");
            }
        });
    }

    // === EDITAR ROL ===
    document.querySelectorAll(".btnEditarRol").forEach(btn => {
        btn.addEventListener("click", function() {
            const id = this.dataset.id;
            const nombre = this.dataset.nombre;

            const modal = document.getElementById("modalEditarRol");
            modal.querySelector("input[name='idRol']").value = id;
            modal.querySelector("input[name='editarRol']").value = nombre;
        });
    });

    const formEditar = document.getElementById("formEditarRol");
    if (formEditar) {
        formEditar.addEventListener("submit", async (e) => {
            e.preventDefault();
            const datos = new FormData(formEditar);

            try {
                const resp = await fetch("index.php?route=roles&accion=editar", {
                    method: "POST",
                    body: datos
                });
                const json = await resp.json();

                if (json.ok) {
                    Swal.fire("Éxito", json.mensaje, "success");
                    actualizarListadoRoles();
                    bootstrap.Modal.getInstance(document.getElementById("modalEditarRol")).hide();
                } else {
                    Swal.fire("Error", json.mensaje, "error");
                }
            } catch (err) {
                console.error(err);
                Swal.fire("Error", "No se pudo editar el rol", "error");
            }
        });
    }

    // === ELIMINAR ROL ===
    document.querySelectorAll(".btnEliminarRol").forEach(btn => {
        btn.addEventListener("click", function() {
            const id = this.dataset.id;
            const modal = document.getElementById("modalEliminarRol");
            modal.querySelector("input[name='idRolEliminar']").value = id;
            modal.querySelector(".rol-nombre").textContent = this.dataset.nombre;
        });
    });

    const formEliminar = document.getElementById("formEliminarRol");
    if (formEliminar) {
        formEliminar.addEventListener("submit", async (e) => {
            e.preventDefault();
            const datos = new FormData(formEliminar);

            try {
                const resp = await fetch("index.php?route=roles&accion=eliminar", {
                    method: "POST",
                    body: datos
                });
                const json = await resp.json();

                if (json.ok) {
                    Swal.fire("Eliminado", json.mensaje, "success");
                    actualizarListadoRoles();
                    bootstrap.Modal.getInstance(document.getElementById("modalEliminarRol")).hide();
                } else {
                    Swal.fire("Error", json.mensaje, "error");
                }
            } catch (err) {
                console.error(err);
                Swal.fire("Error", "No se pudo eliminar el rol", "error");
            }
        });
    }

    // === ACTUALIZAR LISTADO ===
    async function actualizarListadoRoles() {
        try {
            const resp = await fetch("index.php?route=roles&accion=listar");
            const html = await resp.text();
            document.getElementById("listadoRoles").innerHTML = html;

            // volver a enlazar eventos a los botones recién cargados
            document.querySelectorAll(".btnEditarRol").forEach(btn => {
                btn.addEventListener("click", function() {
                    const id = this.dataset.id;
                    const nombre = this.dataset.nombre;
                    const modal = document.getElementById("modalEditarRol");
                    modal.querySelector("input[name='idRol']").value = id;
                    modal.querySelector("input[name='editarRol']").value = nombre;
                });
            });

            document.querySelectorAll(".btnEliminarRol").forEach(btn => {
                btn.addEventListener("click", function() {
                    const id = this.dataset.id;
                    const modal = document.getElementById("modalEliminarRol");
                    modal.querySelector("input[name='idRolEliminar']").value = id;
                    modal.querySelector(".rol-nombre").textContent = this.dataset.nombre;
                });
            });
        } catch (err) {
            console.error("Error al refrescar listado:", err);
        }
    }

});
