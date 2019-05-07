Vue.component('ejemplo1', {
    template: '<p>asdasdasd</p>',
});
var app = new Vue({
    el: '#appV',
    // Llamamos ala funcion de la base de datos 
    created:function(){
        this.getDepartament();
        this.getEmpleados();
    },
    data: {
    //Departamento:Departamento,
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

        //DAVID
        id:'',
        fechaInc:'',
        fechaFin:'',
        categoria:'',
        estado:'',
        imagen:'',
        prioridad:'',
        descripcion:'',
        //
        
        errors:[],
        aceptadoE:false,
        pagination: {
            'total' :0,
            'current_page':0,
            'per_page' :0,
            'last_page':0,
            'from' :0,
            'to':0,
        },

        //INVENTARIO
        
        nombreI:'',
        tipoI:'',
        DescripcionI:'',

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
            if(from <1 ){
                from =1;
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
            var urlIncidencia = 'http://127.0.0.1:8000/CrearInci';
            axios.post(urlIncidencia,{

                NombreCategoria:this.Categoria,
                Imagenes:this.Imagen,
                Descripcion:this.Descripcion,
                Prioridad:this.Prioridad,
            }).then(response=>{
                $('#crearincidencia').modal('hide');
                
                this.Categoria='';
                this.Imagen='';
                this.Prioridad='';
                this.Descripcion='';
            }).catch(error=>{
                this.errors = error.response.data
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
            var urlCreateInventario='http://127.0.0.1:8000/CreateInventario';
            axios.post(urlCreateInventario,{
                nombre:this.nombreI,
                tipo:this.tipoI,
                Descripcion:this.DescripcionI
                }
            ).then(response=>{
                this.nombreI='';
                this.tipoI='';
                this.DescripcionI='';
            })
        }
    }
  })