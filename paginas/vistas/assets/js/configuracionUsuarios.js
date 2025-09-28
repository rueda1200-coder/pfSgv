/* ==============================
   CONFIGURACIÓN DE USUARIOS
   Manejo de edición, eliminación, etc.
============================== */

// Esperar que cargue todo el DOM
document.addEventListener("DOMContentLoaded", () => {
    
    /* ======= BOTÓN EDITAR ======= */
    document.querySelectorAll(".btnEditarUsuario").forEach((btn) => {
        btn.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const nombre = this.getAttribute("data-nombre");
            const usuario = this.getAttribute("data-usuario");
            const rol = this.getAttribute("data-rol");

            // Rellenar campos del modal de edición
            document.querySelector("#editarId").value = id;
            document.querySelector("#editarNombre").value = nombre;
            document.querySelector("#editarUsuario").value = usuario;
            document.querySelector("#editarRol").value = rol;
        });
    });

    /* ======= BOTÓN ELIMINAR ======= */
    document.querySelectorAll(".btnEliminarUsuario").forEach((btn) => {
        btn.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const nombre = this.getAttribute("data-nombre");

            // Mostrar en el modal de confirmación
            document.querySelector("#eliminarId").value = id;
            document.querySelector("#nombreUsuarioEliminar").textContent = nombre;
        });
    });

    /* ======= FORM EDITAR (AJAX) ======= */
    const formEditar = document.querySelector("#formEditarUsuario");
    if (formEditar) {
        formEditar.addEventListener("submit", function (e) {
            e.preventDefault();

            const datos = new FormData(this);

            fetch("index.php?route=configuracionUsuario&action=editar", {
                method: "POST",
                body: datos,
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert("Usuario actualizado correctamente");
                    location.reload(); // refresca para ver cambios
                } else {
                    alert("Error al actualizar: " + data.message);
                }
            })
            .catch(err => console.error("Error:", err));
        });
    }

    /* ======= FORM ELIMINAR (AJAX) ======= */
    const formEliminar = document.querySelector("#formEliminarUsuario");
    if (formEliminar) {
        formEliminar.addEventListener("submit", function (e) {
            e.preventDefault();

            const datos = new FormData(this);

            fetch("index.php?route=configuracionUsuario&action=eliminar", {
                method: "POST",
                body: datos,
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert("Usuario eliminado correctamente");
                    location.reload();
                } else {
                    alert("Error al eliminar: " + data.message);
                }
            })
            .catch(err => console.error("Error:", err));
        });
    }
});
