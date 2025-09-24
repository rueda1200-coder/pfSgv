document.addEventListener("DOMContentLoaded", function() {

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

    // === ELIMINAR ROL ===
    document.querySelectorAll(".btnEliminarRol").forEach(btn => {
        btn.addEventListener("click", function() {
            const id = this.dataset.id;
            const modal = document.getElementById("modalEliminarRol");
            modal.querySelector("input[name='idRolEliminar']").value = id;
        });
    });

});
