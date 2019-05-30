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
    
    
    created:function(){
        this.getDepartament();
        this.getEmpleados();
        this.getEmpleadosAll();
        this.getIncidencias();
        this.MostramosIncidenciTecnica();
        this.mostrartodoslosTecnico();
        this.MostrarDescripcionTecnico();
        this.getInventario();
    },
    data: {
    //Departamento:Departamento,7
        PRUEBASAS:'media/ImagenesDeIncidencia/CapturaI.JPG',
        operacion:false,
        nombreD:'',
        plantaD:'',
        EdificioD:'',
        DepartamentosT:[],
        mostrar:false,
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
        ITecnicos:'',
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
        //array inventario
        GetInventario:[],
        //-------------------
        nombre:'',
        cif:'',
        direccion:'',
        ciudad:'',
        pais:'',
        codigoP:'',
        email:'',
        telefono:'',
        AceptarCoockies:false,
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
        //Para modificar el perfil de un usuario lo que necesitamos es coger el ID del login y pasarlo a una variable
        nuemeroDeusuario:'',
        //Datos para perfil
        passwordNew:'',
        fotoPerfil:'',
        idempleado:'',
        //Mostrar Tecnico 
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
        },
        orderBy: {
            field: 'id',
            order: 'desc'
        },
        data:'',
        data2:'',
        //paginacion
        pagination: {
                'total' :0,
                'current_page':0,
                'per_page' :0,
                'last_page':0,
                'from' :0,
                'to':0,
            },
        //Csv No tocar Probando Prueba1
        parse_header: [],
        parse_csv: [],
        SeleccionarTabla:false,
        BottonEnviar:false,
        //Para que lo filtre los indices guardar por si acaso
        // filters: {
        //     capitalize: function (str) {
        //       return str.charAt(0).toUpperCase() + str.slice(1)
        //     }
        // },
        //Tecnico funciones 
        //Para los botonces de cancelacion
        DescripcionRespuesta:'',
        HoraFinal:'',
        Id_incidencia:'',
        Respuesta:'G',
        IdTecnico:'',
        mensajeRealizado:false,
        aceptarIncidencia:false,
        //mostrar descripcion tecnico
        mostrarDescTec: [],
        //Propiedades de notificar error a nosotros
        //Nos enviara un correo cuando este error se produsca
        emailError:'',
        mensaje:'',
        consultaNosotros:false,
        ///------------------------------------------------
    },
    //PAginacion 
    
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
        //No tocar CSV ariel
        //funcion de ordenar CSV
        // ordenarCSV: function (key) {
        //     var vm = this
        //     vm.sortKey = key
        //     vm.sortOrders[key] = vm.sortOrders[key] * -1
        // },
        // Esto mostrara el CSV en una array
        csvJSON(csv){
            var vm = this
            var lines = csv.split("\n")
            var result = []
            var headers = lines[0].split(",")
            //Guardamos en esta array
            vm.parse_header = lines[0].split(",") 
            
            lines.map(function(line, indexLine){
              if (indexLine < 1) return 
              
              var obj = {}
              var currentline = line.split(",")
              
              headers.map(function(header, indexHeader){
                obj[header] = currentline[indexHeader]
              })
              
              result.push(obj)
            })
            result.pop() // remove the last item because undefined values
            this.SeleccionarTabla=true;
            this.BottonEnviar=true;
            return result // JavaScript object
        },
        //Cargar CSV una vez seleccionada se cargara el CSV
        loadCSV(e) {
            var vm = this
            if (window.FileReader) {
              var reader = new FileReader();
              reader.readAsText(e.target.files[0]);
              // Handle errors load
              reader.onload = function(event) {
                var csv = event.target.result;
                vm.parse_csv = vm.csvJSON(csv)
              };
            }
        },

        //Tablas datatable
        
        //---------------------CSV-----------------------------------------
        //Funcion para ablir otro menu 
        VerDatos: function(){
            $('#Nav').dropdown();
            
        },
        //crear una incidencia
        fotodeIncidencia(e){
            //console.log(e.target.files[0]);
            var valor = new FileReader()
            valor.readAsDataURL(e.target.files[0]);
            valor.onload=(e) =>{
                this.Imagen=e.target.result
            }
            
        },
        CreateInciencia: function(){
            var urlIncidencia = 'http://127.0.0.1:8000/newIncidencia';
            axios.post(urlIncidencia,{
                FechaI:$('#FechaI').val(),
                idDeparta:$('#DepartamentoE').val(),
                Imagen:this.Imagen,
                idEmple:this.idEmple,
                idEmpre:this.idEmpre,
                Descripcion:this.Descripcion,
                Prioridad:$('#Prioridad').val(),
            }).then(response=>{
                this.FechaI='';
                this.Descripcion='';
                this.Prioridad='E';
                this.idDeparta='D';
                this.getIncidencias();
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
                this.nombreD='';
                this.plantaD='';
                this.EdificioD='';

                this.getDepartament();
                $('#añadirdepartamento').modal('hide');
               
                
            }).catch(error => {
                if (error.response.status == 422){
                    this.errors = error.response.data.errors
                    setTimeout(() => {
                        this.errors=[];
                    }, 2000);
                }
            })
        },
        // Mostrar Departamentos 
        getDepartament: function(){
            let formData = new FormData();
            formData.set('action', 'basicFilter');
            let url = `http://127.0.0.1:8000/DepartamentosPOST`;
            axios({
                url,
                method: 'post',
                data: formData
            }).then( response => {
                this.DepartamentosT=response.data
            });
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
                AceptarCoockies:$('#botonAceptarCo').prop('checked'),       
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
                this.AceptarCoockies=false,
                setTimeout(() => {
                    this.respuestaEmpresa=false;
                }, 4000);
            }).catch(error => {
                if (error.response.status == 422){
                    this.errors = error.response.data.errors
                    setTimeout(() => {
                        this.errors=[];
                    }, 2000);
                }
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
                if (error.response.status == 422){
                    this.errors = error.response.data.errors
                    setTimeout(() => {
                        this.errors=[];
                    }, 2000);
                }
                
            })           
         
        },
        cambiodePagina: function(page){
            this.pagination.current_page = page;
            this.getEmpleados(page);
        },
        //Agregar nuevo inventario
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
        //Mostrar todos los inventarios
        getInventario: function(){
            var urlGetInventario='http://127.0.0.1:8000/InventarioE';
            axios.get(urlGetInventario).then(response =>{
                this.GetInventario=response.data
            })
        },

        deleteinventario: function(InventarioID){
            var UrlEliminarInventario='http://127.0.0.1:8000/InventarioE/'+InventarioID.id;
            axios.get(UrlEliminarInventario).then(response =>{
                this.getInventario();
                this.seBorro=true;
                setTimeout(() => {
                    this.seBorro=false;
                }, 4000);
                
            }) 
        },
        //Mostrar todos las incidencias
        getIncidencias: function(){
            var urlIncidenciat='http://127.0.0.1:8000/incidenciasT';
            axios.get(urlIncidenciat).then(response =>{
                this.IncidenciaT=response.data
            }) 
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
                ITecnicos:solo,
                iD_empleado:this.iD_empleado,
                IDepartamento:this.IDepartamento,
                IIncidencia:this.IIncidencia,
            }).then(response=>{
                this.errors=[];
                this.getIncidencias();
                this.MostramosIncidenciTecnica();
                this.ITecnico='F',
                $('#AñadirUnaIncidencia').modal('hide');
                this.mostrartodoslosTecnico();
                
            }).catch(error => {
                // if (error.response.status == 422){
                //     this.errors = error.response.data.errors
                //     setTimeout(() => {
                //         this.errors=[];
                //     }, 2000);
                // }
                this.errors=error.response.data;
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
            let formData = new FormData();
            formData.set('action', 'basicoFiltro');
            let url = `http://127.0.0.1:8000/MostraIncidenciaTec`;
            axios({
                url,
                method: 'post',
                data: formData
            }).then( response => {
                this.IncidenciaTecni=response.data;
            });
            // var urlTecnicaContador='http://127.0.0.1:8000/MostraIncidenciaTec';
            // axios.get(urlTecnicaContador).then(response=>{
            //     this.IncidenciaTecni=response.data;
            // })
        },
        //Boton para ordenar segun lo que precciones en que tabla 
        orderByIncidenciaTecnico(key){
            if(this.orderBy.order == 'desc'){
                this.orderBy.order = 'asc';
            }else{
                this.orderBy.order = 'desc';
            }
            const data = new FormData();
            data.set('action', 'orderbyIncidencia');
            data.set('field', this.orderBy.field);
            data.set('orientation', this.orderBy.order);
            axios({
                url: `http://127.0.0.1:8000/MostraIncidenciaTec`,
                method: 'post',
                data
            }).then(({data}) => {
                this.IncidenciaTecni = data;
            })

        },
        MostrarDescripcionTecnico:function(){
            var urlMostrarDescTec='http://127.0.0.1:8000/mostrarDescTecnico';
            axios.get(urlMostrarDescTec).then(response =>{
                this.mostrarDescTec=response.data
            })
        },
        // select * from incidencia WHERE id not in (
        //     SELECT Id_Incidencia FROM `tecnico_incidencia`
        //         )

        //-----------------------
        //OrdenartablaDepartamento
        orderByDepartamento(key){
            if(this.orderBy.order == 'desc'){
                this.orderBy.order = 'asc';
            }else{
                this.orderBy.order = 'desc';
            }
            const data = new FormData();
            data.set('action', 'orderbyb');
            data.set('field', this.orderBy.field);
            data.set('orientation', this.orderBy.order);
            axios({
                url: `http://127.0.0.1:8000/DepartamentosPOST`,
                method: 'post',
                data
            }).then(({data}) => {
                this.DepartamentosT = data;
            })

        },
        //Descrifrar constraseña
        decifrar: function(){
            this.operacion=true;
            $('#password').removeAttr('type')
        },
        Volver: function(){
            this.operacion=false;
            $('#password').attr('type','password')
        },
        //Funciones del tecnico 
        //Mostrar los detalles al tecnico los detalles de incidencia 
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
        },
        //Resolver incidencia llamada
        Resultado: function(valores){
            //Datos de quien lo creo
            this.DatosPerTecnico.IdTecnico=valores.id_Tecnico;
            this.DatosPerTecnico.idIncidencia=valores.Id_Incidencia;
            $('#DarResultadoT').modal('show');
        },
        //Formulario de cancelacion de base de datos 
        DarResultadoIncidencia :function(){
            var hoy= new Date();
            var AnyoFecha = hoy.getFullYear();
            var MesFecha = hoy.getMonth();
            var DiaFecha = hoy.getDate();
            var resultafchahoy=DiaFecha+"-"+(MesFecha+1)+"-"+AnyoFecha;
            var DatosIncidencia='http://127.0.0.1:8000/DarResut';
            axios.post(DatosIncidencia,{
                Respuesta:$('#TipoEstado').val(),
                DescripcionRespuesta:this.DescripcionRespuesta,
                Id_incidencia:this.Id_incidencia,
                IdTecnico:this.IdTecnico,
                HoraFinal:resultafchahoy,
                aceptarIncidencia:$('#aceptarIn').prop('checked'),
                // Ntabla:$('#Ntabla').val()
            }).then(response=>{
                this.errors=[];
                this.Id_incidencia='G';
                this.DescripcionRespuesta='';
                this.aceptarIncidencia=false;
                this.MostramosIncidenciTecnica();
                $('#DarResultadoT').modal('hide');
                this.mensajeRealizado=true;
                setTimeout(() => {
                    this.mensajeRealizado=false;
                }, 3000);
            }).catch(error => {
                if (error.response.status == 422){
                    this.errors = error.response.data.errors
                    setTimeout(() => {
                        this.errors=[];
                    }, 2000);
                }
                
            })
        },
        modificarPerfil(valor){
            this.nuemeroDeusuario=$("#datosId").text();
            $('#ModificarPerfil').modal('show');
            // document.getElementById('passwordPerfil').onkeypress=function() {
            //     if ($(this).val() == '') {
            //         //Check to see if there is any text entered
            //         // If there is no text within the input ten disable the button
            //         $('#GuardarPerfil').prop('disabled', true);
            //     } else {
            //         //If there is text in the input, then enable the button
            //         $('#GuardarPerfil').prop('disabled', false);
            //     }
            // };
        },
        datosFicheroPerfil(e){
            var output = document.getElementById('imagePerfil');
            output.src = URL.createObjectURL(e.target.files[0]);
            //console.log(e.target.files[0]);
            var valor = new FileReader()
            valor.readAsDataURL(e.target.files[0]);
            valor.onload=(e) =>{
                this.fotoPerfil=e.target.result
            }
            $('#GuardarPerfil').prop('disabled', false);
            // if ($('#passwordPerfil'.val()>0)) {
            //     $('#GuardarPerfil').prop('disabled', false);
            // }else{
            //     $('#GuardarPerfil').prop('disabled', true);
            // }
        },
        escribir: function(){
           if(this.passwordNew.length > 4){
                $('#GuardarPerfil').prop('disabled', false);
           }else{
                $('#GuardarPerfil').prop('disabled', true);
           }
        },
        ActualizarPerfil : function(){
            var UrlActualizarDatos='http://127.0.0.1:8000/actualizarPerfil';
            axios.post(UrlActualizarDatos,{
                idempleado:this.idempleado,
                fotoPerfil:this.fotoPerfil,
                passwordNew:this.passwordNew,
            }).then(response=>{
                this.errors=[];
                $('#ModificarPerfil').modal('hide');
                this.passwordNew='';
            }).catch(error => {
                this.errors = error.response.data.errors;
            }) 
        },

        //Notificar errores a la empresa
        NotificarErrores: function(){
            var urlNotificarErrores='http://127.0.0.1:8000/NotificarErrores';
            axios.post(urlNotificarErrores,{
                //Enviamos los datos del a laravel
                emailError:$('#emailE').attr('value'),
                mensaje:this.mensaje,
            }).then(response=>{
                this.errors=[];
                $('#Formulario').toggle();
                this.consultaNosotros=true;
                setTimeout(() => {
                    this.consultaNosotros=false;
                }, 6000);
            }).catch(error=>{
                if (error.response.status == 422){
                    this.errors = error.response.data.errors
    
                }
            })
            
            
        },
        select: function(event) {
            alert(event);
        $('.abrir').attr('id',event);
         var pos = $(this).attr("id");
            // targetId = event.currentTarget.id;
            console.log(pos); // returns 'foo'


            if ($('.abrir').attr('id')== event) {
                $('.abrir').addClass('.abrir2');
                
            }
        }
        // verDatosDescripcion: function(id){
        //     alert(id);
        // //    $('.clasePreba').attr('id',id);
        // //    $('.abrir').prev('div').prop('id',id);
        //     // if ($('.clasePreba').attr('id')==id) {
        //     //     $('.abrir').toggle();
        //     // }
        //     $('.abrir').attr('id',id)
        //     // alert($(this).attr('id'));

        //     // $(".abrir").click(function(evt){
        //     //     alert($(this).attr("id"));
        //     //     $('.abrir').toggle();
                
        //     // });

        //     // if ($(this).attr('id') ==  id) {
        //     //     $('.abrir').toggle();
        //     // }else{
        //     //     alert("no");
        //     // }
        //     //$('.mostrar1').addClass('mostrar');
            
        // },
        
    },
    mounted() {
        window.addEventListener('mouseup', this.Volver);
    }
    
    

  })


  