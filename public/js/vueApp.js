Vue.component('app-tabla', {
    template: '#app-tabla'
});
Vue.component('app-tablaD', {
    template: '#app-tablaD'
});
Vue.component('modal', {
    template: '#Mostrar_Incidencia'
});
  
new Vue({
    el: '#appV',
    // render:h=>h(appV),
    
    // Llamamos ala funcion de la base de datos 
    
    created:function(){
        this.getDepartament();
        this.getEmpleados();
        this.getEmpleadosAll();
        this.getIncidencias();
        this.MostramosIncidenciTecnica();
        this.mostrartodoslosTecnico();
    },
    data: {
    //Departamento:Departamento,7
        PRUEBASAS:'media/ImagenesDeIncidencia/CapturaI.JPG',
        operacion:false,
        nombreD:'',
        plantaD:'',
        EdificioD:'',
        DepartamentosT:[],
        //Mostrar los rol de empleado
        RolEmpleado:[],
        // -----------------------
        seBorro:false,
        empleados:[],
        //Crear Empleado
        nombreT:'',
        dniT:'',
        emailT:'',
        telefonoT:'',
        id:'',
        selected:'A',
        idRol:'B',
        //Login usuario de base de datos
        usuarioLogin:'',
        paswordLogin:'',
        //-------------
        //Iventario 
        Nempleado:'C',
        empleadosNA:[],
        //DAVID
        FechaI:'',
        idDeparta:'D',
        Imagen:'',
        Prioridad:'E',
        Descripcion:'',
        idEmple:'',
        idEmpre:'',
        //
        
        errors:[],
        aceptadoE:false,
        
        //Asignamos un tecnico de su departamento para que pueda resolver la incidencia
        ITecnico:'F',
        IDepartamento:'',
        IIncidencia:'',
        iD_empleado:'',
        //Mostrar array 
        IncidenciaTecni:[],
        //---------------------------------------------------------------------
        //INVENTARIO
        
        nombreI:'',
        tipoI:'',
        DescripcionI:'',
        //-------------------
        nombre:'',
        cif:'',
        direccion:'',
        ciudad:'',
        pais:'',
        codigoP:'',
        email:'',
        telefono:'',
        respuestaEmpresa:false,
        offset:3,
        //Tecnico Incidencia
        IncidenciaT:[],
        //Mostramos los datos del incidente que tenemos 
        //Con esto puedes ver todas los datos 
        MostrarInci:{
            'id':'',
            'Descripcion':'',
            'Imagenes':'',
            'nombre':'',
            'FechaEntrada':'',
            'email':'',
            'telefono':'',
            'estado':'',
            'prioridad':'',
            'IdDepartamento':'',
            'Idempleado':'',
            
        },
        //Mostrar Tecnico ç
        mostrarTecnicoIm:[],
        //Array para mostrar todas las informacion para el tecnico
        DatosPerTecnico:{
            'datos':'',
            //datos del empleado
            'nombreCreador':'',
            'nombreDepartamento':'',
            'dni':'',
            'telefono':'',
            //Datos de la incidencia
            'Descripcion':'',
            'FechaEntrada':'',
            'Prioridad':'',
            pagination: {
                'total' :0,
                'current_page':0,
                'per_page' :0,
                'last_page':0,
                'from' :0,
                'to':0,
            },
            

        },
    },
    computed:{
        isActived: function(){
            return this.pagination.current_page;
        },
        
        pagesNumber: function(){
            if(!this.pagination.to){
                return[];
            }
            var from = this.pagination.current_page - this.offset;
            if(from < 1 ){
                from = 1;
            }
            var to = from + (this.offset * 2); 
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}
            var pagesArray = [];
			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
        }
    },
    methods:{
        //crear una incidencia
        CreateInciencia: function(){
            var urlIncidencia = 'http://127.0.0.1:8000/newIncidencia';
            axios.post(urlIncidencia,{
                FechaI:$('#FechaI').val(),
                idDeparta:$('#DepartamentoE').val(),
                Imagen:'asdas',
                idEmple:this.idEmple,
                idEmpre:this.idEmpre,
                Descripcion:this.Descripcion,
                Prioridad:$('#Prioridad').val(),
            }).then(response=>{
                this.FechaI='';
                this.Descripcion='';
                this.Prioridad='E';
                this.idDeparta='D';
                $('#crearincidencia').modal('hide');
            }).catch(error=>{
                this.errors = error.response.data.errors
            })
            
          },
        // Departamentos crear un departamento
        CreateDepartament: function(){
            var urlDepartament='http://127.0.0.1:8000/CreateDepar';
            axios.post(urlDepartament,{
                Nombre:this.nombreD,
                Planta:this.plantaD,
                Edificio:this.EdificioD,
                IdEmpresa:this.id
            }).then(response=>{
                $('#añadirdepartamento').modal('hide');
                location.reload();
                
            }).catch(error => {
                this.errors = error.response.data.errors
            })
        },
        // Mostrar Departamentos 
        getDepartament: function(){
            var urldepartamento='http://127.0.0.1:8000/DepartamentosGET';
            axios.get(urldepartamento).then(response =>{
                this.DepartamentosT=response.data
            }) 
        },
        //Añadimos los datos enpresariales
        NuevaContratacion: function(){
            var urlNEWEmpresa='http://127.0.0.1:8000/NEWEmpresa';
            axios.post(urlNEWEmpresa,{
                nombre:this.nombre,
                cif:this.cif,
                direccion:this.direccion,
                ciudad:this.ciudad,
                pais:this.pais,
                codigoP:this.codigoP,
                telefono:this.telefono,
                email:this.email,       
                // nombre de la empresa - codigo postal;
                // password:$('#nombre').val()+$('#codigoP').val()
                password:'12345'
            }).then(response=>{
                console.log("funciono");
                this.nombre='';
                this.direccion='';
                this.cif='';
                this.ciudad='';
                this.pais='';
                this.codigoP='';
                this.telefono='';
                this.email='';
                this.respuestaEmpresa=true;
                setTimeout(() => {
                    this.respuestaEmpresa=false;
                }, 4000);
            }).catch(error => {
                // // Errores
                // console.log("efecto shake");
                // $('#añadirusuario').effect('shake');
                this.errors = error.response.data.errors
                // if (error.response.status == 422){
                //     this.errors = error.response.data.errors
                // }
            })   
        },
        //Mostramos los empleados pero eso si sin paginacion 
        getEmpleadosAll:function(){
            var urlgeempleadosAll="http://127.0.0.1:8000/empleadosAll";
            axios.get(urlgeempleadosAll).then(response=>{
                this.empleadosNA=response.data
            })
        },
        // Mostramos todos los empleados que tenemos en la base de datos e



        getEmpleados: function(page){
            var urleditorial='http://127.0.0.1:8000/empleados?page='+page;
            axios.get(urleditorial).then(response =>{
                this.empleados=response.data.empleados.data,
                this.pagination = response.data.pagination
            }) 
        },
        // Eliminar un empreado con el ID
        deleteempleado: function(EmpreadoID){
            var UrlEliminar='http://127.0.0.1:8000/empreadoE/'+EmpreadoID.id;
            axios.get(UrlEliminar).then(response =>{
                this.getEmpleados();
                this.seBorro=true;
                setTimeout(() => {
                    this.seBorro=false;
                }, 4000);
                
            }) 
        },
        // Creamos un nuevo empreado que tenemos en la base de datos 
        nuevoEmpreados: function(){
            var urlNEWempleados='http://127.0.0.1:8000/NEWempleados';
            axios.post(urlNEWempleados,{
                nombre:this.nombreT,
                dni:this.dniT,
                email:this.emailT,
                telefono:this.telefonoT,
                IdEmpresa:this.id,
                IdDepartamento:$('#TDepartamento').val(),
                Idrol:$('#TipoEmpleado').val(),
            }).then(response=>{
                this.errors=[];
                this.getEmpleados();
                $('#añadirusuario').modal('hide');
                this.nombreT='';
                this.dniT='';
                this.emailT='';
                this.telefonoT='';
                this.selected='A';
                this.idRol='B';
            }).catch(error => {
                // Errores
                // console.log("efecto shake");
                // $('#añadirusuario').effect('shake');
                this.errors = error.response.data.errors;
            })           
            // console.log($('#TDepartamento').val());
            // console.log($('#TipoEmpleado').val());
            
        },
        cambiodePagina: function(page){
            this.pagination.current_page = page;
            this.getEmpleados(page);
        },

        NuevoInvenatario: function(){
            var urlNEWInventario='http://127.0.0.1:8000/CreateInventario';
            axios.post(urlNEWInventario,{
                nombre:this.nombreI,
                tipo:this.tipoI,
                descripcion:this.DescripcionI,
                idEmpresa:this.id,
                idEmpleado:$('#Nempleado').val()
            }).then(response=>{
                this.errors=[];
                $('#añadirinventario').modal('hide');
                this.nombreI='';
                this.tipoI='';
                this.DescripcionI='';
                this.Nempleado='C';
            }).catch(error => {
                this.errors = error.response.data.errors;
            })           
        },
        //Mostrar todos las incidencias
        getIncidencias: function(){
            var urlIncidenciat='http://127.0.0.1:8000/incidenciasT';
            axios.get(urlIncidenciat).then(response =>{
                this.IncidenciaT=response.data
            }) 
        },
        
        
        
        //Funcion de contador aleatorio
        funcionContadir(value){
            for(i=0;i<value.length;i++){
                for(x=0; x<value[i].length;x++){
                    return i;
                }
            }
        },
        MostrarDI(valor){
            this.MostrarInci.id=valor.id;
            this.MostrarInci.Descripcion=valor.Descripcion;
            this.MostrarInci.Imagenes=valor.Imagenes;
            this.MostrarInci.nombre=valor.nombres_empleado.nombre;
            this.MostrarInci.telefono=valor.nombres_empleado.telefono;
            this.MostrarInci.estado=valor.Estado;
            this.MostrarInci.prioridad=valor.Prioridad;
            this.MostrarInci.email=valor.nombres_empleado.email;
            this.MostrarInci.FechaEntrada=valor.FechaEntrada;
            $('#Mostrar_Incidencia').modal('show');
        },
        //Esto es para que te concatane el texto con el nombre de la imagen que se guardo en la base de datos 
        cargarunaImagen(valorI){
            return 'media/ImagenesDeIncidencia/'+valorI
        },
        //---------------------------------------------------------------------------------------------------
        datosIncidenccia(ValorI){
            this.MostrarInci.id=ValorI.id;
            this.MostrarInci.IdDepartamento=ValorI.IdDepartamento;
            this.MostrarInci.Idempleado=ValorI.Id_Empleado_usuario;
            $('#AñadirUnaIncidencia').modal('show');
        },
        //Asignar a un tecnico la incedincia deseada
        incidenciaTecnica: function(){
            var valor=$('#Tincidencia').val();
            var soltexto = valor.split("(");
            var solo=soltexto[0]
            var urlAsignarIncidencia='http://127.0.0.1:8000/AsignarIncidencia';
            axios.post(urlAsignarIncidencia,{
                
               //Pasamos la variable que queremos pasar para rellenar en formulario
                ITecnico:solo,
                iD_empleado:this.iD_empleado,
                IDepartamento:this.IDepartamento,
                IIncidencia:this.IIncidencia,
                
            }).then(response=>{
                this.ITecnico='F',
                $('#AñadirUnaIncidencia').modal('hide');
                location.reload();
            }).catch(error => {
                this.errors = error.response.data.errors;
            })
            
            
        //    No tocar 
        // SELECT c.id, c.nombre,c.Rol,c.IdDepartamento, COUNT(r.Id) as Contador
        //     FROM empleados c
        //     LEFT JOIN tecnico_incidencia r 
        //     ON c.id = r.id_Tecnico
        //     where c.Rol='Tecnico'
        //     GROUP BY c.id  
        //-----------------------------------------------------------------------------
        },
        mostrartodoslosTecnico: function(){
            var urlTecnicaContador='http://127.0.0.1:8000/MostrarContadorTec';
            axios.get(urlTecnicaContador).then(response=>{
                this.mostrarTecnicoIm=response.data
            })
        },
        MostramosIncidenciTecnica: function(){
            var urlMostrarTecnicaIn='http://127.0.0.1:8000/MostraIncidenciaTec';
            axios.get(urlMostrarTecnicaIn).then(response =>{
                this.IncidenciaTecni=response.data
            }) 
        },
        // select * from incidencia WHERE id not in (
        //     SELECT Id_Incidencia FROM `tecnico_incidencia`
        //         )

        
        //Descrifrar constraseña
        decifrar: function(){
            this.operacion=true;
            $('#password').removeAttr('type')
        },
        Volver: function(){
            this.operacion=false;
            $('#password').attr('type','password')
        },
        MostrarDetallesTecnico: function(valores){
            //Datos de quien lo creo
            this.DatosPerTecnico.nombreCreador=valores.mostrar_empleado.nombre;
            this.DatosPerTecnico.dni=valores.mostrar_empleado.dni;
            this.DatosPerTecnico.telefono=valores.mostrar_empleado.telefono;
            this.DatosPerTecnico.nombreDepartamento=valores.mostrar_departamento.Nombre;
            //Datos de que incidencia 
            this.DatosPerTecnico.Descripcion=valores.mostrar_datos_incidencia.Descripcion;
            this.DatosPerTecnico.FechaEntrada=valores.mostrar_datos_incidencia.FechaEntrada;
            this.DatosPerTecnico.Prioridad=valores.mostrar_datos_incidencia.Prioridad;
            $('#MostrarDetallesIncidencia').modal('show');
        }
    },
    mounted() {
        window.addEventListener('mouseup', this.Volver);
    }
  })