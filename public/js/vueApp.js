var app = new Vue({
    el: '#appV',
    // Llamamos ala funcion de la base de datos 
    created:function(){
        this.getEmpleados();
    },
    data: {
      empleados:[],
      nombreT:'',
      dniT:'',
      emailT:'',
      telefonoT:'',
      TipoEmpleado:'',

    },
    methods:{
        // Mostramos todos los empleados que tenemos en la base de datos e
        getEmpleados: function(){
            var urleditorial='http://127.0.0.1:8000/empleados';
            axios.get(urleditorial).then(response =>{
                this.empleados=response.data
            }) 
        },
        // Creamos un nuevo empreado que tenemos en la base de datos 
        nuevoEmpresados: function(){
            var urlNEWempleados='http://127.0.0.1:8000/NEWempleados';
            axios.post(url,{
                nombre:this.nombreT,
                dni:this.dniT,
                email:this.emailT,
                telefono:this.telefonoT,
                tipo_usuario:this.TipoEmpleado
            }).then(response=>{
                
            }).catch(error => {
                this.errors=error.response.data;
            })
        }
    }

  })