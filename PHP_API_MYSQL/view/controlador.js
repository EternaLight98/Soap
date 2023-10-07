var categoria = [];

 
function obtenerdatos(){
    axios({
        method:'GET',
        url: '../controller/categoria.php?op=GetAll',
        Responsetype: 'json'
    }).then(res=>{
        console.log(res.data);
        this.categoria = res.data;
        llenarTabla();
    }).catch(error=>{
        console.log(error);
    });
}

obtenerdatos();

function llenarTabla(){
    document.querySelector('#tabla-categoria tbody').innerHTML = '';
    for(let i=0; i<categoria.length; i++){
         document.querySelector('#tabla-categoria tbody').innerHTML +=
     `<tr>
        <td>${categoria[i].cat_id }</td>
        <td>${categoria[i].cat_nom }</td>
        <td>${categoria[i].cat_obs }</td>
        <td>${categoria[i].est }</td>
        <td>
            <button type="button" class="btn btn-danger" onclick="eliminar(${categoria[i].cat_id })">Eliminar</button>
            <button type="button" class="btn btn-primary" onclick="seleccionar(${i})">Editar</button>
        </td>
    </tr>`;
    }
}

function eliminar(indice) {
    console.log('Elminar el elemento' + indice);
    axios({
        method:'DELETE',
        url:'../controller/categoria.php?op=delete' + `&cat_id=${indice}&`,
        Responsetype: 'json'
    }).then(res=>{
        console.log(res.data);
        obtenerdatos();
    }).catch(error=>{
        console.error(error);
    });
}

function guardar(){
    let categoria = {
        cat_id: document.getElementById('cat_id').value,
        cat_nom: document.getElementById('cat_nom').value,
        cat_obs: document.getElementById('cat_obs').value,
        est: document.getElementById('est').value,
    };
    console.log('Usuario a guardar', categoria);
    axios({
        method:'POST',
        url:'../controller/categoria.php?op=insert',
        Responsetype: 'json',
        data:categoria
    }).then(res=>{
        console.log(res);
        limpiar();
        obtenerdatos();       
    }).catch(error=>{
        console.error(error);
    });
}

function limpiar(){
    document.getElementById('cat_id').value=null;
    document.getElementById('cat_nom').value=null;
    document.getElementById('cat_obs').value=null;
    document.getElementById('est').value=null;
    document.getElementById('btn-guardar').style.display = 'inline';
    document.getElementById('btn-actualizar').style.display = 'none';
}

function actualizar(){
    document.querySelector('#tabla-categoria tbody').innerHTML = '';
    let categoria = {
        cat_id: document.getElementById('cat_id').value,
        cat_nom: document.getElementById('cat_nom').value,
        cat_obs: document.getElementById('cat_obs').value,
        est: document.getElementById('est').value,
    };
    axios({
        method:'POST',
        url:'../controller/categoria.php?op=update',
        Responsetype: 'json',
        data:categoria
    }).then(res=>{
        console.log(res);
        obtenerdatos();
    }).catch(error=>{
        console.error(error);
    });
}

function seleccionar(indice){
    document.getElementById('cat_id').value=categoria[indice].cat_id;
    document.getElementById('cat_nom').value=categoria[indice].cat_nom;
    document.getElementById('cat_obs').value=categoria[indice].cat_obs;
    document.getElementById('est').value=categoria[indice].est;
    document.getElementById('btn-guardar').style.display = 'none';
    document.getElementById('btn-actualizar').style.display = 'inline';
}

