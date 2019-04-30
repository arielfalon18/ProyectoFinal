var app = new Vue({
    el: '#appV',
    // Llamamos ala funcion de la base de datos 
    created:function(){
        this.getEmpleados();
    },
    data: {
      seBorro:false,
      empleados:[],
      nombreT:'',
      dniT:'',
      emailT:'',
      telefonoT:'',
      id:'',
      errors:[],
      aceptadoE:false,
      nombre:'',
      cif:'',
      direccion:'',
      ciudad:'',
      pais:'',
      codigoP:'',
      email:'',
      telefono:'',
      respuestaEmpresa:false,
    },
    methods:{
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
        getEmpleados: function(){
            var urleditorial='http://127.0.0.1:8000/empleados';
            axios.get(urleditorial).then(response =>{
                this.empleados=response.data
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
                id:2,
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
            }).catch(error => {
                // Errores
                console.log("efecto shake");
                $('#añadirusuario').effect('shake');
            })           
            // console.log($('#datosIdEmpreado').val);
            
        },
        
    }

  })