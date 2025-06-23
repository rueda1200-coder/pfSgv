  
mostrarPacientes()

async function mostrarPacientes(){
    
    
  const requestPacientes = await fetch('api/pacientes', {
    method: 'GET',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
  });
  const pacientes = await requestPacientes.json();
  
  
  
  let listadoPacientes = '';
  for(let paciente of pacientes){
      
      let botonesHtml = `<td>
                        <button onclick=eliminarPaciente(${paciente.idMascota})>
                            <img src="images/delete.png"></button>
                        <button onclick=actualizarPaciente(${paciente.idMascota})><img src="images/update.png"></button>  
                        </td>`

      
      let pacienteHtml = `<tr>
                    <td>${paciente.idMascota}</td>
                    <td>${paciente.nombre}</td>
                    <td>${paciente.raza}</td>
                    <td>${paciente.sexo}</td>
                    <td>${paciente.fechaNacimiento}</td>
                    <td>${paciente.peso}</td>
                    <td>${paciente.estado}</td>
        
                    <td><a href="historiales/max.pdf" target="_blank" class="historial-link">
                        Ver Historial</a></td>
                    ${botonesHtml}
        
                </tr>`;
              
              
        listadoPacientes += pacienteHtml;
  }
  
  document.querySelector("#tablaPacientes tbody").outerHTML =listadoPacientes ;
}


//Boton de eliminar
async function eliminarPaciente(idMascota) {
    
    if (!confirm("Desea eliminar el paciente "+ idMascota)) {
    return true;
    } 
    
    const requestPacientes = await fetch('api/pacientes/'+idMascota, {
        method: 'DELETE',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
      });
      location.reload();
}

//Boton de actualizar un paciente
function actualizarPaciente(id){

  
}