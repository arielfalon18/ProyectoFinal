<?php






namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Empleados;
use App\login;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class controladorPerfil extends Controller
{
    //
    public function actualizarPerfil (Request $resquest){
        $empleado=Empleados::find($resquest['idempleado']);
        if (request('fotoPerfil')==true) {
            $exploded=explode(',',$resquest['fotoPerfil']);
            $decode=base64_decode($exploded[1]);
            if(str_contains($exploded[0],'jpeg')){
                $extension='jpg';
            }
            else{
                $extension='png';
            }
            $name=str_random().'.'.$extension;
            $path=public_path().'/media/imagenesPerfil/'.$name;
            file_put_contents($path,$decode);
            $empleado->Foto = $name;
            $empleado->save();
            
        }else{
            $loginPassword=login::where('Id_empleado',$resquest['idempleado'])->get();
            foreach ($loginPassword as $loginP) {
                $login=login::find($loginP->id);
                $login->password=Hash::make($resquest['passwordNew']);
                $login->save();
            }
            // if ($empleado && $login) {
            //     $empleado->save();
            //     $login->save();
            // }
        }
        
    }
}

