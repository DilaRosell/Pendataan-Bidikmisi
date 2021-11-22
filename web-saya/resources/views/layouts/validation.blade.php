Request()->validate([
            'nama_mhs' => 'required',
            'nim' => 'required|unique:tbl_daftar,nim|max:11',
            'file_ktp' => 'required|mimes:jpg,jpeg,png|max:1024',
            'file_kk' => 'required|mimes:jpg,jpeg,png|max:1024',
            'file_ktm' => 'required|mimes:jpg,jpeg,png|max:1024',
            'file_skd' => 'required|mimes:jpg,jpeg,png|max:1024',
        ]);
        


        if($request->hasFile('file_ktp')){
            $request->file('file_ktp')->move('foto_ktp/', $request->file('file_ktp')->getClientOriginalName());
            $data->file_ktp = $request->file('file_ktp')->getClientOriginalName();
            $data->save();
        }
        
        if($request->hasFile('file_kk')){
            $request->file('file_kk')->move('foto_kk/', $request->file('file_kk')->getClientOriginalName());
            $data->file_kk = $request->file('file_kk')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('file_ktm')){
            $request->file('file_ktm')->move('foto_ktm/', $request->file('file_ktm')->getClientOriginalName());
            $data->file_ktp = $request->file('file_ktm')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('file_skd')){
            $request->file('file_skd')->move('foto_skd/', $request->file('file_skd')->getClientOriginalName());
            $data->file_ktp = $request->file('file_skd')->getClientOriginalName();
            $data->save();
        }