<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;

class RegistController extends Controller
{
    public function index()
    {
        return view('reg', [
            "title" => "Registration"
        ]);
    }

    public function store(Request $request)
    {

        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        //validate all
           $validator = $request->validate([
                'username' => 'required|min:8|max:255',
                'email' => 'required|unique:users|max:100|',
                'password' => ['required', 'min:3', 'max:16'],
                'password2' =>'required|min:3|max:16'
        ]);

        //password validator
        if($pass != $pass2)
        {
            echo "
                <script>
                    alert('Password Tidak Sesuai!');
                    document.location.href = '/regist';
                </script>
                ";
                return false;
        }

        User::create($validator);
        $request->session()->flash('success', 'Registrasi Berhasil! silahkan login');
        echo "
            <script>
            alert('Registrasi Berhasil');
            document.location.href = '/signin';
            </script>";
    }
}
