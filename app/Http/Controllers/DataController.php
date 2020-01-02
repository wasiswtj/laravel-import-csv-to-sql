<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;


class DataController extends Controller
{
    public function index()
    {
        // Get data dari model Data
        $datas = Data::all();

        // Send data to view data pada folder data dengan variable yang dipassing 'datas'
        return view('data.data', ['datas' => $datas]);
    }

    public function store(Request $request)
    {
        // membuat object dari model Data dan diassign ke variable $data
        $data = new Data();
        
        // set object variable dengan array $arrfields yang telah dipisahkan dengan '|'
        $data->ktp = $request->ktp;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->kota = $request->kota;

        // menjalankan method save() pada objek, model memanggil database untuk menginsert data ke db
        $data->save();

        return redirect('/');
    }

    public function create()
    {
        // Mengembalikkan view create pada folder data
        return view('data.create');
    }

    public function delete($id)
    {
        //find object
        $data = Data::find($id);

        //delete
        $data->delete();

        //pindah ke index
        return redirect('/');
    }

    public function import()
    {
        try {
            //membuka koneksi stream file.csv pada folder public
            $handle = fopen("file.csv", "r");

            // membaca line per line pada variable $handle, apabila true/ada line yang dibaca maka akan masuk while
            while (($line = fgets($handle)) == true) {
                // membaca value separated by '|'
                $arrfields = explode('|', $line);

                // membuat object dari model Data dan diassign ke variable $data
                $data = new Data();

                // set object variable dengan array $arrfields yang telah dipisahkan dengan '|'
                $data->ktp = $arrfields[1];
                $data->nama = $arrfields[2];
                $data->jenis_kelamin = $arrfields[3];
                $data->kota = $arrfields[4];

                // menjalankan method save() pada objek, model memanggil database untuk menginsert data ke db
                $data->save();
            } 
            
            //menutup koneksi stream file.csv
            fclose($handle);
        } catch (Exception $e) {
            report($e);
        }

        return redirect('/');
    }
}
