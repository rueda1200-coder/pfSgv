async function agregarPaciente() {   
    if(!confirm("Desea registrar el paciente")){
      return true
    }

  let datos = {};
  datos.nombre = document.getElementById("nombreMascotaTxt").value;
  datos.raza = document.getElementById("razaMascotaTxt").value;
  datos.sexo = document.getElementById("sexoMascotaTxt").value;
  datos.fechaNacimiento = document.getElementById("fechaNacimientoMascotaTxt").value;
  datos.peso = document.getElementById("pesoMascotaTxt").value;
  datos.estado = document.getElementById("EstadoMascotaTxt").value;

  const request = await fetch('api/crear-paciente', {
      method: 'POST',
      headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(datos)
  });

    location.reload(); 
}