
var app = new Vue({
    el: '#appV',
    // Llamamos ala funcion de la base de datos 
    created:function(){
        this.getEmpleados();
    },
    data: {
    //   Departamento:Departamento,
      nombreD:'',
      plantaD:'',
      EdificioD:'',
      seBorro:false,
      empleados:[],
      nombreT:'',
      dniT:'',
      emailT:'',
      telefonoT:'',
      id:'',
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
        // Departamentos crear un departamento
        CreateDepartament: function(){
            var urlDepartament='http://127.0.0.1:8000/CreateDepar';
            axios.post(urlDepartament,{
                Nombre:this.nombreD,
                Planta:this.plantaD,
                Edificio:this.EdificioD,
                IdEmpresa:this.id
            }).then(response=>{
                
            }).catch(error => {
                this.errors = error.response.data
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
                this.errors = error.response.data
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
                tipo_usuario:$('#TipoEmpleado').val(),
                IdEmpresa:this.id
            }).then(response=>{
                this.errors=[];
                this.getEmpleados();
                $('#añadirusuario').modal('hide');
                this.nombreT='';
                this.dniT='';
                this.emailT='';
                this.telefonoT='';
            }).catch(error => {
                // Errores
                console.log("efecto shake");
                $('#añadirusuario').effect('shake');
            })           
            // console.log($('#datosIdEmpreado').val);
            
        },
        cambiodePagina: function(page){
            this.pagination.current_page = page;
            this.getEmpleados(page);
        }
    }
  })