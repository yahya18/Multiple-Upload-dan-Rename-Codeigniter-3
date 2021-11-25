<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manual_Upload extends CI_Controller {

    function __construct(){
            parent :: __construct();
            $this->load->helper(array('form', 'url'));
            session_start();
        }

    	public function index()
	{
        //$date = date('Y-m-d');
        //$uid = $_SESSION['index'];
        $this->load->view('Manual_upload.php');
    }
    
    //hanya upload dan rename file original jpeg dsm
    function resize_image_dsm(){
        // $description ='Upload Manual';
        $kodeLokasi =  $this->input->post('kodeLokasi');
        $kategori = $this->input->post('kategori');
        $dateMod = $this->input->post('dateMod');
        $datein = date_create($dateMod);
        $date = date_format($datein,"Y-m-d H:i:s");
        $jumlahFile = count($_FILES['filefoto']['name']);
        $config['upload_path'] = './assets/upload/gis_pict_original/'; //path folder
    
        for ($i=0; $i < $jumlahFile; $i++) { 
            //file gambar
            $namaFile = $_FILES['filefoto']['name'][$i];
            $lokasiTmp = $_FILES['filefoto']['tmp_name'][$i];
            $path = $_FILES ['filefoto']['name'][$i];
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $folderFoto = "./assets/upload/gis_pict_original/";
            $foke = $_FILES['filefoto']['name'];
            
            // //file pdf
            // $namaPDF = $_FILES['filepdf']['name'][$i];
            // $lokasiTmpPDF = $_FILES['filepdf']['tmp_name'][$i];
            // $pathPDF = $_FILES ['filepdf']['name'][$i];
            // $ext = pathinfo($pathPDF, PATHINFO_EXTENSION);
            // $folderPDF = "./assets/images/upload_manual/pdf";
            // $poke = $_FILES['filepdf']['name']
            // if($jumlahFile == 6){
             $foke[$i]= pathinfo($foke[$i])['filename']."@original.".$extension;
            // $foke[1]='DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[2]='DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[3]='DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[4]='DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[5]='DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            
            // $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[1]='DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[2]='DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[3]='DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[4]='DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[5]='DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;

            // }else if ($jumlahFile == 7){
            // $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[1]='DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[2]='DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[3]='DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[4]='DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[5]='DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            // $foke[6]='DSM_Design_Location_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
            
            // $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[1]='DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[2]='DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[3]='DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[4]='DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[5]='DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            // $poke[6]='DSM_Design_Location_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
            
            // }

            // if($jumlahFile == 6){
            //     $jenis=['RGB','DSM','Water Direction','Water Flow','Water Logging','Design Deal'];
            // }else if($jumlahFile == 7){
            //     $jenis=['RGB','DSM','Water Direction','Water Flow','Water Logging','Design Deal','Design Location'];
            
            // }
            // $lokasiBaruPDF = "{$folderPDF}/{$poke[$i]}";
            // $prosesUploadpdf = move_uploaded_file($lokasiTmpPDF, $lokasiBaruPDF);
           // $lokasiBaruFoto = "{$folderFoto}/{$foke[$i]}";
            //$prosesUploadfoto = move_uploaded_file($lokasiTmp, $lokasiBaruFoto);


            $config = array();
            $config['upload_path']		= './assets/upload/gis_pict_original/';
            $config['allowed_types']	= 'gif|jpg|png';
            
          
            $this->load->library('upload', $config);

            $files = $_FILES;
            $_FILES['files']['name']= $files['filefoto']['name'][$i];
            $_FILES['files']['type']= $files['filefoto']['type'][$i];
            $_FILES['files']['tmp_name']= $files['filefoto']['tmp_name'][$i];
            $_FILES['files']['error']= $files['filefoto']['error'][$i];
            $_FILES['files']['size']= $files['filefoto']['size'][$i];    
            $renameFoto = "{$foke[$i]}";
            $config['file_name'] = $renameFoto;
            
            $this->upload->initialize($config);
            $this->upload->do_upload('files');
            $this->load->library('image_lib'); 

            $tmp = $this->upload->data(); 

            //Resize Configs 
            // $config_r['image_library']='gd2';
            // $config_r['source_image']   = './assets/upload/gis_pict_original/' . $tmp['file_name'];
            // $config_r['maintain_ratio'] = TRUE;
            // $config_t['create_thumb'] = FALSE;            
            // $config_r['quality'] = '80%';
            //  if($kategori== 'NDVI'){
            //     $config_r['width']= 1240;
            //     $config_r['height']= 1754;
            // }else{
            //     $config_r['width']= 1870;
	        //     $config_r['height']= 1323;
            // }
            // $config_r['new_image']= './assets/upload/gis_pict_original/'.'ori'. $tmp['file_name'];
            //end of configs

            // $this->load->library('image_lib', $config_r); 
            // $this->image_lib->initialize($config_r);
            // $this->image_lib->resize();
            

            # jika proses berhasil
            if ($tmp) {
                echo "Upload file <a  target='_blank'>{$foke[$i]}</a> berhasil. <br>";
               
            } else {
                echo "<span style='color: red'>Upload file {$foke[$i]} gagal</span> <br>";
                 }

       
        
        // $data[$i] = array(
        //     'location' => $kodeLokasi,
        //     'jenis' => $jenis[$i],
        //     'image' => $foke[$i], 
        //     'pdf' => $poke[$i],
        //     'description' => $description,
        //     'kategori' => $kategori,
        //     'date' => $date,
        // );  

         }
         //$result = $this->db->insert_batch('gis_photo',$data);
        
         //$this->load->view('Manual_Upload.php');

    }

    //hanya upload dan rename file original jpeg ndvi
    function resize_image_ndvi(){
        // $description ='Upload Manual';
        // $kodeLokasi =  $this->input->post('kodeLokasi');
        $kategori = $this->input->post('kategori');
        // $dateMod = $this->input->post('dateMod');
        // $datein = date_create($dateMod);
        // $date = date_format($datein,"Y-m-d H:i:s");
        $jumlahFile = count($_FILES['filefoto']['name']);
        $config['upload_path'] = './assets/upload/gis_pict_original/'; //path folder
    
        for ($i=0; $i < $jumlahFile; $i++) { 
            //file gambar
            $namaFile = $_FILES['filefoto']['name'][$i];
            $lokasiTmp = $_FILES['filefoto']['tmp_name'][$i];
            $path = $_FILES ['filefoto']['name'][$i];
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $folderFoto = "./assets/upload/gis_pict_original/";
            $foke = $_FILES['filefoto']['name'];

            $foke[$i]= pathinfo($foke[$i])['filename']."@original.".$extension;
            
            $config = array();
            $config['upload_path']		= './assets/upload/gis_pict_original/';
            $config['allowed_types']	= 'gif|jpg|png';
            
          
            $this->load->library('upload', $config);

            $files = $_FILES;
            $_FILES['files']['name']= $files['filefoto']['name'][$i];
            $_FILES['files']['type']= $files['filefoto']['type'][$i];
            $_FILES['files']['tmp_name']= $files['filefoto']['tmp_name'][$i];
            $_FILES['files']['error']= $files['filefoto']['error'][$i];
            $_FILES['files']['size']= $files['filefoto']['size'][$i];    
            $renameFoto = "{$foke[$i]}";
            $config['file_name'] = $renameFoto;
            $arr = (explode('@',($renameFoto)));
            
            $this->upload->initialize($config);
            $this->upload->do_upload('files');
            $this->load->library('image_lib'); 

            $tmp = $this->upload->data(); 

            //Resize Configs 
            $config_r['image_library']='gd2';
            $config_r['source_image']   = './assets/upload/gis_pict_original/' . $tmp['file_name'];
            $config_r['maintain_ratio'] = TRUE;
            $config_t['create_thumb'] = FALSE;            
            $config_r['quality'] = '80%';
             if($kategori== 'NDVI'){
                $config_r['width']= 1240;
                $config_r['height']= 1754;
            }else{
                $config_r['width']= 1870;
	            $config_r['height']= 1323;
            }
            $config_r['new_image']= './assets/upload/gis_pict/'.$arr[0].'.'.$extension;
            //end of configs

            $this->load->library('image_lib', $config_r); 
            $this->image_lib->initialize($config_r);
            $this->image_lib->resize();
            

            # jika proses berhasil
            if ($tmp) {
                echo "Upload file <a  target='_blank'>{$foke[$i]}</a> berhasil. <br>";
               
            } else {
                echo "<span style='color: red'>Upload file {$foke[$i]} gagal</span> <br>";
                 }

       
        
        // $data[$i] = array(
        //     'location' => $kodeLokasi,
        //     'jenis' => $jenis[$i],
        //     'image' => $foke[$i], 
        //     'pdf' => $poke[$i],
        //     'description' => $description,
        //     'kategori' => $kategori,
        //     'date' => $date,
        // );  

         }
         //$result = $this->db->insert_batch('gis_photo',$data);
        
        //redirect('Manual_Upload/');

    }

    // hanya untuk upload multiple resize dan rename file jpeg dan pdf DSM
    function upload_auto(){
        $description ='Upload Manual';
        $kodeLokasi =  $this->input->post('kodeLokasi');
        $kategori = $this->input->post('kategori');
        $dateMod = $this->input->post('dateMod');
        $datein = date_create($dateMod);
        $date = date_format($datein,"Y-m-d H:i:s");
        $jumlahFile = count($_FILES['filefoto']['name']);
        $config['upload_path'] = './assets/upload/gis_pict_original/'; //path folder
    
        for ($i=0; $i < $jumlahFile; $i++) { 
            //file gambar
            // $namaFile = $_FILES['filefoto']['name'][$i];
            // $lokasiTmp = $_FILES['filefoto']['tmp_name'][$i];
            $path = $_FILES ['filefoto']['name'][$i];
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $folderFoto = "./assets/upload/gis_pict_original/";
            $foke = $_FILES['filefoto']['name'];
            
            // //file pdf
            $namaPDF = $_FILES['filepdf']['name'][$i];
            $lokasiTmpPDF = $_FILES['filepdf']['tmp_name'][$i];
            $pathPDF = $_FILES ['filepdf']['name'][$i];
            $ext = pathinfo($pathPDF, PATHINFO_EXTENSION);
            $folderPDF = "./assets/images/upload_manual/pdf";
            $poke = $_FILES['filepdf']['name'];
            
            
            //rename file foto
            if($jumlahFile == 1){
             //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
            }else if($jumlahFile == 2){
             //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }
            }else if($jumlahFile == 3){
                 //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }
            }else if($jumlahFile == 4){
                 //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }
            }else if($jumlahFile == 5){
                 //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($foke[4],"AERIAL")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($foke[4],"RGB")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($foke[4],"DSM")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($foke[4],"DIGITAL")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($foke[4],"DIRECTION")){
                    $foke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($foke[4],"FLOW")){
                    $foke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($foke[4],"LOGGING")){
                    $foke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($foke[4],"PRA")){
                    $foke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($foke[4],"CONTOUR")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }
            }else if($jumlahFile == 6){
                //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($foke[4],"AERIAL")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($foke[4],"RGB")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($foke[4],"DSM")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($foke[4],"DIGITAL")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($foke[4],"DIRECTION")){
                    $foke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($foke[4],"FLOW")){
                    $foke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($foke[4],"LOGGING")){
                    $foke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($foke[4],"PRA")){
                    $foke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($foke[4],"CONTOUR")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }
                //Rename array[6]
                if ($posisi=strpos($foke[5],"AERIAL")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='RGB';
                }else if($posisi=strpos($foke[5],"RGB")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='RGB';
                }else if ($posisi=strpos($foke[5],"DSM")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='DSM';
                }else if($posisi=strpos($foke[5],"DIGITAL")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='DSM';
                }else if ($posisi=strpos($foke[5],"DIRECTION")){
                    $foke[5]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Water Direction';
                }else if($posisi=strpos($foke[5],"FLOW")){
                    $foke[5]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Water Flow';
                }else if ($posisi=strpos($foke[5],"LOGGING")){
                    $foke[5]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Water Logging';
                }else if($posisi=strpos($foke[5],"PRA")){
                    $foke[5]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Design Deal';
                }else if($posisi=strpos($foke[5],"CONTOUR")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='DSM';
                }
            }else if($jumlahFile == 7){
                //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($foke[4],"AERIAL")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($foke[4],"RGB")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($foke[4],"DSM")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($foke[4],"DIGITAL")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($foke[4],"DIRECTION")){
                    $foke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($foke[4],"FLOW")){
                    $foke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($foke[4],"LOGGING")){
                    $foke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($foke[4],"PRA")){
                    $foke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($foke[4],"CONTOUR")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[4]='DSM';
                }
                //Rename array[6]
                if ($posisi=strpos($foke[5],"AERIAL")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='RGB';
                }else if($posisi=strpos($foke[5],"RGB")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='RGB';
                }else if ($posisi=strpos($foke[5],"DSM")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='DSM';
                }else if($posisi=strpos($foke[5],"DIGITAL")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='DSM';
                }else if ($posisi=strpos($foke[5],"DIRECTION")){
                    $foke[5]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Water Direction';
                }else if($posisi=strpos($foke[5],"FLOW")){
                    $foke[5]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Water Flow';
                }else if ($posisi=strpos($foke[5],"LOGGING")){
                    $foke[5]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Water Logging';
                }else if($posisi=strpos($foke[5],"PRA")){
                    $foke[5]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='Design Deal';
                }else if($posisi=strpos($foke[5],"CONTOUR")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[5]='DSM';
                }
                //Rename array[7]
               if ($posisi=strpos($foke[6],"AERIAL")){
                    $foke[6]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='RGB';
                }else if($posisi=strpos($foke[6],"RGB")){
                    $foke[6]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='RGB';
                }else if ($posisi=strpos($foke[6],"DSM")){
                    $foke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='DSM';
                }else if($posisi=strpos($foke[6],"DIGITAL")){
                    $foke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='DSM';
                }else if ($posisi=strpos($foke[6],"DIRECTION")){
                    $foke[6]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='Water Direction';
                }else if($posisi=strpos($foke[6],"FLOW")){
                    $foke[6]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='Water Flow';
                }else if ($posisi=strpos($foke[6],"LOGGING")){
                    $foke[6]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='Water Logging';
                }else if($posisi=strpos($foke[6],"PRA")){
                    $foke[6]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='Design Deal';
                }else if($posisi=strpos($foke[6],"CONTOUR")){
                    $foke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$extension;
                    $jenis[6]='DSM';
                }
            }
            //rename file pdf
            if($jumlahFile == 1){
             //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
            }else if($jumlahFile == 2){
             //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($poke[1],"AERIAL")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($poke[1],"RGB")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($poke[1],"DSM")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($poke[1],"DIGITAL")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($poke[1],"DIRECTION")){
                    $poke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($poke[1],"FLOW")){
                    $poke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($poke[1],"LOGGING")){
                    $poke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($poke[1],"PRA")){
                    $poke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($poke[1],"CONTOUR")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }
            }else if($jumlahFile == 3){
                 //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($poke[1],"AERIAL")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($poke[1],"RGB")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($poke[1],"DSM")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($poke[1],"DIGITAL")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($poke[1],"DIRECTION")){
                    $poke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($poke[1],"FLOW")){
                    $poke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($poke[1],"LOGGING")){
                    $poke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($poke[1],"PRA")){
                    $poke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($poke[1],"CONTOUR")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($poke[2],"AERIAL")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($poke[2],"RGB")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($poke[2],"DSM")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($poke[2],"DIGITAL")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($poke[2],"DIRECTION")){
                    $poke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($poke[2],"FLOW")){
                    $poke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($poke[2],"LOGGING")){
                    $poke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($poke[2],"PRA")){
                    $poke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($poke[2],"CONTOUR")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }
            }else if($jumlahFile == 4){
                 //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($poke[1],"AERIAL")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($poke[1],"RGB")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($poke[1],"DSM")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($poke[1],"DIGITAL")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($poke[1],"DIRECTION")){
                    $poke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($poke[1],"FLOW")){
                    $poke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($poke[1],"LOGGING")){
                    $poke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($poke[1],"PRA")){
                    $poke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($poke[1],"CONTOUR")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($poke[2],"AERIAL")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($poke[2],"RGB")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($poke[2],"DSM")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($poke[2],"DIGITAL")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($poke[2],"DIRECTION")){
                    $poke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($poke[2],"FLOW")){
                    $poke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($poke[2],"LOGGING")){
                    $poke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($poke[2],"PRA")){
                    $poke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($poke[2],"CONTOUR")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($poke[3],"AERIAL")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($poke[3],"RGB")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($poke[3],"DSM")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($poke[3],"DIGITAL")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($poke[3],"DIRECTION")){
                    $poke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($poke[3],"FLOW")){
                    $poke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($poke[3],"LOGGING")){
                    $poke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($poke[3],"PRA")){
                    $poke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($poke[3],"CONTOUR")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }
            }else if($jumlahFile == 5){
                 //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($poke[1],"AERIAL")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($poke[1],"RGB")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($poke[1],"DSM")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($poke[1],"DIGITAL")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($poke[1],"DIRECTION")){
                    $poke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($poke[1],"FLOW")){
                    $poke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($poke[1],"LOGGING")){
                    $poke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($poke[1],"PRA")){
                    $poke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($poke[1],"CONTOUR")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($poke[2],"AERIAL")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($poke[2],"RGB")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($poke[2],"DSM")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($poke[2],"DIGITAL")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($poke[2],"DIRECTION")){
                    $poke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($poke[2],"FLOW")){
                    $poke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($poke[2],"LOGGING")){
                    $poke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($poke[2],"PRA")){
                    $poke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($poke[2],"CONTOUR")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($poke[3],"AERIAL")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($poke[3],"RGB")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($poke[3],"DSM")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($poke[3],"DIGITAL")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($poke[3],"DIRECTION")){
                    $poke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($poke[3],"FLOW")){
                    $poke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($poke[3],"LOGGING")){
                    $poke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($poke[3],"PRA")){
                    $poke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($poke[3],"CONTOUR")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($poke[4],"AERIAL")){
                    $poke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($poke[4],"RGB")){
                    $poke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($poke[4],"DSM")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($poke[4],"DIGITAL")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($poke[4],"DIRECTION")){
                    $poke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($poke[4],"FLOW")){
                    $poke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($poke[4],"LOGGING")){
                    $poke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($poke[4],"PRA")){
                    $poke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($poke[4],"CONTOUR")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }
            }else if($jumlahFile == 6){
                //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($poke[1],"AERIAL")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($poke[1],"RGB")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($poke[1],"DSM")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($poke[1],"DIGITAL")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($poke[1],"DIRECTION")){
                    $poke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($poke[1],"FLOW")){
                    $poke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($poke[1],"LOGGING")){
                    $poke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($poke[1],"PRA")){
                    $poke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($poke[1],"CONTOUR")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($poke[2],"AERIAL")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($poke[2],"RGB")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($poke[2],"DSM")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($poke[2],"DIGITAL")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($poke[2],"DIRECTION")){
                    $poke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($poke[2],"FLOW")){
                    $poke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($poke[2],"LOGGING")){
                    $poke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($poke[2],"PRA")){
                    $poke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($poke[2],"CONTOUR")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($poke[3],"AERIAL")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($poke[3],"RGB")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($poke[3],"DSM")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($poke[3],"DIGITAL")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($poke[3],"DIRECTION")){
                    $poke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($poke[3],"FLOW")){
                    $poke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($poke[3],"LOGGING")){
                    $poke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($poke[3],"PRA")){
                    $poke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($poke[3],"CONTOUR")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($poke[4],"AERIAL")){
                    $poke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($poke[4],"RGB")){
                    $poke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($poke[4],"DSM")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($poke[4],"DIGITAL")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($poke[4],"DIRECTION")){
                    $poke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($poke[4],"FLOW")){
                    $poke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($poke[4],"LOGGING")){
                    $poke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($poke[4],"PRA")){
                    $poke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($poke[4],"CONTOUR")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }
                //Rename array[6]
                if ($posisi=strpos($poke[5],"AERIAL")){
                    $poke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='RGB';
                }else if($posisi=strpos($poke[5],"RGB")){
                    $poke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='RGB';
                }else if ($posisi=strpos($poke[5],"DSM")){
                    $poke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='DSM';
                }else if($posisi=strpos($poke[5],"DIGITAL")){
                    $poke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='DSM';
                }else if ($posisi=strpos($poke[5],"DIRECTION")){
                    $poke[5]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Water Direction';
                }else if($posisi=strpos($poke[5],"FLOW")){
                    $poke[5]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Water Flow';
                }else if ($posisi=strpos($poke[5],"LOGGING")){
                    $poke[5]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Water Logging';
                }else if($posisi=strpos($poke[5],"PRA")){
                    $poke[5]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Design Deal';
                }else if($posisi=strpos($poke[5],"CONTOUR")){
                    $poke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='DSM';
                }
            }else if($jumlahFile == 7){
                //Rename array [1]
                if ($posisi=strpos($poke[0],"AERIAL")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($poke[0],"RGB")){
                    $poke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($poke[0],"DSM")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($poke[0],"DIGITAL")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($poke[0],"DIRECTION")){
                    $poke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($poke[0],"FLOW")){
                    $poke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($poke[0],"LOGGING")){
                    $poke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($poke[0],"PRA")){
                    $poke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($poke[0],"CONTOUR")){
                    $poke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($poke[1],"AERIAL")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($poke[1],"RGB")){
                    $poke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($poke[1],"DSM")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($poke[1],"DIGITAL")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($poke[1],"DIRECTION")){
                    $poke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($poke[1],"FLOW")){
                    $poke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($poke[1],"LOGGING")){
                    $poke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($poke[1],"PRA")){
                    $poke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($poke[1],"CONTOUR")){
                    $poke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($poke[2],"AERIAL")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($poke[2],"RGB")){
                    $poke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($poke[2],"DSM")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($poke[2],"DIGITAL")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($poke[2],"DIRECTION")){
                    $poke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($poke[2],"FLOW")){
                    $poke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($poke[2],"LOGGING")){
                    $poke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($poke[2],"PRA")){
                    $poke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($poke[2],"CONTOUR")){
                    $poke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($poke[3],"AERIAL")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($poke[3],"RGB")){
                    $poke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($poke[3],"DSM")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($poke[3],"DIGITAL")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($poke[3],"DIRECTION")){
                    $poke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($poke[3],"FLOW")){
                    $poke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($poke[3],"LOGGING")){
                    $poke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($poke[3],"PRA")){
                    $poke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($poke[3],"CONTOUR")){
                    $poke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($poke[4],"AERIAL")){
                    $poke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($poke[4],"RGB")){
                    $poke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($poke[4],"DSM")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($poke[4],"DIGITAL")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($poke[4],"DIRECTION")){
                    $poke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($poke[4],"FLOW")){
                    $poke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($poke[4],"LOGGING")){
                    $poke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($poke[4],"PRA")){
                    $poke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($poke[4],"CONTOUR")){
                    $poke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[4]='DSM';
                }
                //Rename array[6]
                if ($posisi=strpos($poke[5],"AERIAL")){
                    $poke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='RGB';
                }else if($posisi=strpos($poke[5],"RGB")){
                    $poke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='RGB';
                }else if ($posisi=strpos($poke[5],"DSM")){
                    $poke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='DSM';
                }else if($posisi=strpos($poke[5],"DIGITAL")){
                    $poke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='DSM';
                }else if ($posisi=strpos($poke[5],"DIRECTION")){
                    $poke[5]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Water Direction';
                }else if($posisi=strpos($poke[5],"FLOW")){
                    $poke[5]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Water Flow';
                }else if ($posisi=strpos($poke[5],"LOGGING")){
                    $poke[5]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Water Logging';
                }else if($posisi=strpos($poke[5],"PRA")){
                    $poke[5]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='Design Deal';
                }else if($posisi=strpos($poke[5],"CONTOUR")){
                    $poke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[5]='DSM';
                }
                //Rename array[7]
               if ($posisi=strpos($poke[6],"AERIAL")){
                    $poke[6]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='RGB';
                }else if($posisi=strpos($poke[6],"RGB")){
                    $poke[6]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='RGB';
                }else if ($posisi=strpos($poke[6],"DSM")){
                    $poke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='DSM';
                }else if($posisi=strpos($poke[6],"DIGITAL")){
                    $poke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='DSM';
                }else if ($posisi=strpos($poke[6],"DIRECTION")){
                    $poke[6]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='Water Direction';
                }else if($posisi=strpos($poke[6],"FLOW")){
                    $poke[6]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='Water Flow';
                }else if ($posisi=strpos($poke[6],"LOGGING")){
                    $poke[6]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='Water Logging';
                }else if($posisi=strpos($poke[6],"PRA")){
                    $poke[6]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='Design Deal';
                }else if($posisi=strpos($poke[6],"CONTOUR")){
                    $poke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date).".".$ext;
                    $jenis[6]='DSM';
                }
            }

            ///////////////////////////////////////////////////////////////////////////

            $lokasiBaruPDF = "{$folderPDF}/{$poke[$i]}";
            $prosesUploadpdf = move_uploaded_file($lokasiTmpPDF, $lokasiBaruPDF);

            $config = array();
            $config['upload_path']		= './assets/upload/gis_pict_original/';
            $config['allowed_types']	= 'gif|jpg|png';
            
            $this->load->library('upload', $config);

            $files = $_FILES;
            $_FILES['files']['name']= $files['filefoto']['name'][$i];
            $_FILES['files']['type']= $files['filefoto']['type'][$i];
            $_FILES['files']['tmp_name']= $files['filefoto']['tmp_name'][$i];
            $_FILES['files']['error']= $files['filefoto']['error'][$i];
            $_FILES['files']['size']= $files['filefoto']['size'][$i];    
            $renameFoto = "{$foke[$i]}";
            $config['file_name'] = $renameFoto;
            
            $this->upload->initialize($config);
            $this->upload->do_upload('files');
            $this->load->library('image_lib'); 

            $tmp = $this->upload->data(); 

            //Resize Configs 
            $config_r['image_library']='gd2';
            $config_r['source_image']   = './assets/upload/gis_pict_original/' . $tmp['file_name'];
            $config_r['maintain_ratio'] = TRUE;
            $config_t['create_thumb'] = FALSE;            
            $config_r['quality'] = '80%';
             if($kategori== 'NDVI'){
                $config_r['width']= 1240;
                $config_r['height']= 1754;
            }else{
                $config_r['width']= 1870;
	            $config_r['height']= 1323;
            }
            $config_r['new_image']= './assets/upload/gis_pict/'. $renameFoto;
            //end of configs

            $this->load->library('image_lib', $config_r); 
            $this->image_lib->initialize($config_r);
            $this->image_lib->resize();
            

            # jika proses berhasil
            // if ($tmp && $prosesUploadpdf) {
            //     echo "Upload file <a href='{$renameFoto}' target='_blank'>{$foke[$i]}</a> berhasil. <br>";
            //     echo "Upload file <a href='{$lokasiBaruPDF}' target='_blank'>{$poke[$i]}</a> berhasil. <br>";

            // } else {
            //     echo "<span style='color: red'>Upload file {$foke[$i]} gagal</span> <br>";
            //     echo "<span style='color: red'>Upload file {$poke[$i]} gagal</span> <br>";
            // }


        
        $data[$i] = array(
            'location' => $kodeLokasi,
            'jenis' => $jenis[$i],
            'image' => $foke[$i], 
            'pdf' => $poke[$i],
            'description' => $description,
            'kategori' => $kategori,
            'date' => $date,
        );  

         }
         $result = $this->db->insert_batch('gis_photo',$data);
        
        //  //$this->load->view('GIS/Manual_upload.php');
        // echo '<pre>';
        // print_r($data);
        // echo  '</pre>';
        redirect('Manual_Upload/');

    }

    //hanya untuk multiple upload dan rename file jpeg size original DSM (original dan resize)
    function upload_file_original_dsm(){
        $description ='Upload Manual';
        $kodeLokasi =  $this->input->post('kodeLokasi');
        $kategori = $this->input->post('kategori');
        $dateMod = $this->input->post('dateMod');
        $datein = date_create($dateMod);
        $date = date_format($datein,"Y-m-d H:i:s");
        $jumlahFile = count($_FILES['filefoto']['name']);
        $config['upload_path'] = './assets/upload/gis_pict_original/'; //path folder
    
        for ($i=0; $i < $jumlahFile; $i++) { 
            //file gambar
            // $namaFile = $_FILES['filefoto']['name'][$i];
            // $lokasiTmp = $_FILES['filefoto']['tmp_name'][$i];
            $path = $_FILES ['filefoto']['name'][$i];
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $folderFoto = "./assets/upload/gis_pict_original/";
            $foke = $_FILES['filefoto']['name'];
            
            // // //file pdf
            // $namaPDF = $_FILES['filepdf']['name'][$i];
            // $lokasiTmpPDF = $_FILES['filepdf']['tmp_name'][$i];
            // $pathPDF = $_FILES ['filepdf']['name'][$i];
            // $ext = pathinfo($pathPDF, PATHINFO_EXTENSION);
            // $folderPDF = "./assets/images/upload_manual/pdf";
            // $poke = $_FILES['filepdf']['name'];
            
            
            //rename file foto

             if($jumlahFile == 1){
             //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
            }else if($jumlahFile == 2){
             //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }
            }else if($jumlahFile == 3){
                 //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }
            }else if($jumlahFile == 4){
                 //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }
            }else if($jumlahFile == 5){
                 //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($foke[4],"AERIAL")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($foke[4],"RGB")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($foke[4],"DSM")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($foke[4],"DIGITAL")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($foke[4],"DIRECTION")){
                    $foke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($foke[4],"FLOW")){
                    $foke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($foke[4],"LOGGING")){
                    $foke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($foke[4],"PRA")){
                    $foke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($foke[4],"CONTOUR")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }
            }else if($jumlahFile == 6){
                //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($foke[4],"AERIAL")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($foke[4],"RGB")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($foke[4],"DSM")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($foke[4],"DIGITAL")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($foke[4],"DIRECTION")){
                    $foke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($foke[4],"FLOW")){
                    $foke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($foke[4],"LOGGING")){
                    $foke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($foke[4],"PRA")){
                    $foke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($foke[4],"CONTOUR")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }
                //Rename array[6]
                if ($posisi=strpos($foke[5],"AERIAL")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='RGB';
                }else if($posisi=strpos($foke[5],"RGB")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='RGB';
                }else if ($posisi=strpos($foke[5],"DSM")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='DSM';
                }else if($posisi=strpos($foke[5],"DIGITAL")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='DSM';
                }else if ($posisi=strpos($foke[5],"DIRECTION")){
                    $foke[5]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Water Direction';
                }else if($posisi=strpos($foke[5],"FLOW")){
                    $foke[5]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Water Flow';
                }else if ($posisi=strpos($foke[5],"LOGGING")){
                    $foke[5]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Water Logging';
                }else if($posisi=strpos($foke[5],"PRA")){
                    $foke[5]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Design Deal';
                }else if($posisi=strpos($foke[5],"CONTOUR")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='DSM';
                }
            }else if($jumlahFile == 7){
                //Rename array [1]
                if ($posisi=strpos($foke[0],"AERIAL")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if($posisi=strpos($foke[0],"RGB")){
                    $foke[0]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='RGB';
                }else if ($posisi=strpos($foke[0],"DSM")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if($posisi=strpos($foke[0],"DIGITAL")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }else if ($posisi=strpos($foke[0],"DIRECTION")){
                    $foke[0]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Direction';
                }else if($posisi=strpos($foke[0],"FLOW")){
                    $foke[0]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Flow';
                }else if ($posisi=strpos($foke[0],"LOGGING")){
                    $foke[0]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Water Logging';
                }else if($posisi=strpos($foke[0],"PRA")){
                    $foke[0]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='Design Deal';
                }else if($posisi=strpos($foke[0],"CONTOUR")){
                    $foke[0]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[0]='DSM';
                }
                //Rename array [2]
                if ($posisi=strpos($foke[1],"AERIAL")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if($posisi=strpos($foke[1],"RGB")){
                    $foke[1]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='RGB';
                }else if ($posisi=strpos($foke[1],"DSM")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if($posisi=strpos($foke[1],"DIGITAL")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }else if ($posisi=strpos($foke[1],"DIRECTION")){
                    $foke[1]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Direction';
                }else if($posisi=strpos($foke[1],"FLOW")){
                    $foke[1]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Flow';
                }else if ($posisi=strpos($foke[1],"LOGGING")){
                    $foke[1]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Water Logging';
                }else if($posisi=strpos($foke[1],"PRA")){
                    $foke[1]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='Design Deal';
                }else if($posisi=strpos($foke[1],"CONTOUR")){
                    $foke[1]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[1]='DSM';
                }
                //Rename array[3]
                if ($posisi=strpos($foke[2],"AERIAL")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if($posisi=strpos($foke[2],"RGB")){
                    $foke[2]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='RGB';
                }else if ($posisi=strpos($foke[2],"DSM")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if($posisi=strpos($foke[2],"DIGITAL")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }else if ($posisi=strpos($foke[2],"DIRECTION")){
                    $foke[2]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Direction';
                }else if($posisi=strpos($foke[2],"FLOW")){
                    $foke[2]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Flow';
                }else if ($posisi=strpos($foke[2],"LOGGING")){
                    $foke[2]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Water Logging';
                }else if($posisi=strpos($foke[2],"PRA")){
                    $foke[2]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='Design Deal';
                }else if($posisi=strpos($foke[2],"CONTOUR")){
                    $foke[2]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[2]='DSM';
                }
                //Rename array [4]
                if ($posisi=strpos($foke[3],"AERIAL")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if($posisi=strpos($foke[3],"RGB")){
                    $foke[3]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='RGB';
                }else if ($posisi=strpos($foke[3],"DSM")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if($posisi=strpos($foke[3],"DIGITAL")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }else if ($posisi=strpos($foke[3],"DIRECTION")){
                    $foke[3]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Direction';
                }else if($posisi=strpos($foke[3],"FLOW")){
                    $foke[3]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Flow';
                }else if ($posisi=strpos($foke[3],"LOGGING")){
                    $foke[3]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Water Logging';
                }else if($posisi=strpos($foke[3],"PRA")){
                    $foke[3]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='Design Deal';
                }else if($posisi=strpos($foke[3],"CONTOUR")){
                    $foke[3]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[3]='DSM';
                }
                //Rename array[5]
                if ($posisi=strpos($foke[4],"AERIAL")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='RGB';
                }else if($posisi=strpos($foke[4],"RGB")){
                    $foke[4]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='RGB';
                }else if ($posisi=strpos($foke[4],"DSM")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }else if($posisi=strpos($foke[4],"DIGITAL")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }else if ($posisi=strpos($foke[4],"DIRECTION")){
                    $foke[4]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Direction';
                }else if($posisi=strpos($foke[4],"FLOW")){
                    $foke[4]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Flow';
                }else if ($posisi=strpos($foke[4],"LOGGING")){
                    $foke[4]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Water Logging';
                }else if($posisi=strpos($foke[4],"PRA")){
                    $foke[4]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='Design Deal';
                }else if($posisi=strpos($foke[4],"CONTOUR")){
                    $foke[4]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[4]='DSM';
                }
                //Rename array[6]
                if ($posisi=strpos($foke[5],"AERIAL")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='RGB';
                }else if($posisi=strpos($foke[5],"RGB")){
                    $foke[5]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='RGB';
                }else if ($posisi=strpos($foke[5],"DSM")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='DSM';
                }else if($posisi=strpos($foke[5],"DIGITAL")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='DSM';
                }else if ($posisi=strpos($foke[5],"DIRECTION")){
                    $foke[5]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Water Direction';
                }else if($posisi=strpos($foke[5],"FLOW")){
                    $foke[5]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Water Flow';
                }else if ($posisi=strpos($foke[5],"LOGGING")){
                    $foke[5]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Water Logging';
                }else if($posisi=strpos($foke[5],"PRA")){
                    $foke[5]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='Design Deal';
                }else if($posisi=strpos($foke[5],"CONTOUR")){
                    $foke[5]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[5]='DSM';
                }
                //Rename array[7]
               if ($posisi=strpos($foke[6],"AERIAL")){
                    $foke[6]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='RGB';
                }else if($posisi=strpos($foke[6],"RGB")){
                    $foke[6]='DSM_RGB_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='RGB';
                }else if ($posisi=strpos($foke[6],"DSM")){
                    $foke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='DSM';
                }else if($posisi=strpos($foke[6],"DIGITAL")){
                    $foke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='DSM';
                }else if ($posisi=strpos($foke[6],"DIRECTION")){
                    $foke[6]= 'DSM_Water_Direction_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='Water Direction';
                }else if($posisi=strpos($foke[6],"FLOW")){
                    $foke[6]= 'DSM_Water_Flow_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='Water Flow';
                }else if ($posisi=strpos($foke[6],"LOGGING")){
                    $foke[6]= 'DSM_Water_Logging_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='Water Logging';
                }else if($posisi=strpos($foke[6],"PRA")){
                    $foke[6]= 'DSM_Design_Deal_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='Design Deal';
                }else if($posisi=strpos($foke[6],"CONTOUR")){
                    $foke[6]= 'DSM_DSM_Manual_' . $kodeLokasi .'_'.str_replace(array(' ',':'), array('_', '-'),$date)."#original.".$extension;
                    $jenis[6]='DSM';
                }
            }
            
            
            ///////////////////////////////////////////////////////////////////////////

            // $lokasiBaruPDF = "{$folderPDF}/{$poke[$i]}";
            // $prosesUploadpdf = move_uploaded_file($lokasiTmpPDF, $lokasiBaruPDF);

            $config = array();
            $config['upload_path']		= './assets/upload/gis_pict_original/';
            $config['allowed_types']	= 'gif|jpg|png';
            
            $this->load->library('upload', $config);

            $files = $_FILES;
            $_FILES['files']['name']= $files['filefoto']['name'][$i];
            $_FILES['files']['type']= $files['filefoto']['type'][$i];
            $_FILES['files']['tmp_name']= $files['filefoto']['tmp_name'][$i];
            $_FILES['files']['error']= $files['filefoto']['error'][$i];
            $_FILES['files']['size']= $files['filefoto']['size'][$i];    
            $renameFoto = "{$foke[$i]}";
            $config['file_name'] = $renameFoto;
            $arr = (explode('#',($renameFoto)));
            
            $this->upload->initialize($config);
            $this->upload->do_upload('files');
            // $this->load->library('image_lib'); 

            $tmp = $this->upload->data(); 

            //Resize Configs 
            $config_r['image_library']='gd2';
            $config_r['source_image']   = './assets/upload/gis_pict_original/' . $tmp['file_name'];
            $config_r['maintain_ratio'] = TRUE;
            $config_t['create_thumb'] = FALSE;            
            $config_r['quality'] = '80%';
             if($kategori== 'NDVI'){
                $config_r['width']= 1240;
                $config_r['height']= 1754;
            }else{
                $config_r['width']= 1870;
	            $config_r['height']= 1323;
            }
            $config_r['new_image']= './assets/upload/gis_pict/'.$arr[0].'.'.$extension ;
            //end of configs

            $this->load->library('image_lib', $config_r); 
            $this->image_lib->initialize($config_r);
            $this->image_lib->resize();
            

            # jika proses berhasil
            // if ($tmp && $prosesUploadpdf) {
            //     echo "Upload file <a href='{$renameFoto}' target='_blank'>{$foke[$i]}</a> berhasil. <br>";
            //     echo "Upload file <a href='{$lokasiBaruPDF}' target='_blank'>{$poke[$i]}</a> berhasil. <br>";

            // } else {
            //     echo "<span style='color: red'>Upload file {$foke[$i]} gagal</span> <br>";
            //     echo "<span style='color: red'>Upload file {$poke[$i]} gagal</span> <br>";
            // }


        
        $data[$i] = array(
            'location' => $kodeLokasi,
            'jenis' => $jenis[$i],
            'image' => $arr[0].'.'.$extension, 
            //'pdf' => $poke[$i],
            'description' => $description,
            'kategori' => $kategori,
            'date' => $date,
        );  

         }
        //  $result = $this->db->insert_batch('gis_photo',$data);
        
        //  //$this->load->view('GIS/Manual_upload.php');
        // echo '<pre>';
        // print_r($data);
        // echo  '</pre>';
       // redirect('Manual_Upload/');

    }

    
    //hanya untuk multiple upload dan rename file jpeg size original NDVI (original dan resize)
    function upload_file_original_ndvi(){
        $description ='Upload Manual';
        $kodeLokasi =  $this->input->post('kodeLokasi');
        $kategori = $this->input->post('kategori');
        $dateMod = $this->input->post('dateMod');
        $datein = date_create($dateMod);
        $date = date_format($datein,"Y-m-d H:i:s");
        $jumlahFile = count($_FILES['filefoto']['name']);
        $config['upload_path'] = './assets/upload/gis_pict_original/'; //path folder
    
        for ($i=0; $i < $jumlahFile; $i++) { 
            //file gambar
            // $namaFile = $_FILES['filefoto']['name'][$i];
            // $lokasiTmp = $_FILES['filefoto']['tmp_name'][$i];
            $path = $_FILES ['filefoto']['name'][$i];
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $folderFoto = "./assets/upload/gis_pict_original/";
            $foke = $_FILES['filefoto']['name'];

            // // //file pdf
            // $namaPDF = $_FILES['filepdf']['name'][$i];
            // $lokasiTmpPDF = $_FILES['filepdf']['tmp_name'][$i];
            // $pathPDF = $_FILES ['filepdf']['name'][$i];
            // $ext = pathinfo($pathPDF, PATHINFO_EXTENSION);
            // $folderPDF = "./assets/images/upload_manual/pdf";
            // $poke = $_FILES['filepdf']['name'];

            //rename file foto
            // if($jumlahFile == 1){
            //  //Rename array [1]
            //     if ($posisi=strpos($foke[0],"NDVI")){
            //         $foke[0]='NDVI_NDVI_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."@original.".$extension;
            //         $jenis[0]='RGB';
            //     }else if($posisi=strpos($foke[0],"Tingkat")){
            //         $foke[0]='NDVI_Level_Of_Greennes_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."@original.".$extension;
            //         $jenis[0]='RGB';
            //     }
            // }else if($jumlahFile == 2){
            //  //Rename array [1]
            //     if ($posisi=strpos($foke[0],"NDVI")){
            //         $foke[0]='NDVI_NDVI_Manual_'. $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."@original.".$extension;
            //         $jenis[0]='RGB';
            //     }else if($posisi=strpos($foke[0],"Tingkat")){
            //         $foke[0]='NDVI_Level_Of_Greennes_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."@original.".$extension;
            //         $jenis[0]='RGB';
            //     }
            //     //Rename array [2]
            //     if ($posisi=strpos($foke[1],"NDVI")){
            //         $foke[1]='NDVI_NDVI_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."@original.".$extension;
            //         $jenis[1]='RGB';
            //     }else if($posisi=strpos($foke[1],"Tingkat")){
            //         $foke[1]='NDVI_Level_Of_Greennes_Manual_' . $kodeLokasi.'_'.str_replace(array(' ',':'), array('_', '-'),$date)."@original.".$extension;
            //         $jenis[1]='RGB';
            //     }
            // }

            // ///////////////////////////////////////////////////////////////////////////

            // // $lokasiBaruPDF = "{$folderPDF}/{$poke[$i]}";
            // // $prosesUploadpdf = move_uploaded_file($lokasiTmpPDF, $lokasiBaruPDF);

            $config = array();
            $config['upload_path']		= './assets/upload/gis_pict_original/';
            $config['allowed_types']	= 'gif|jpg|png';
            
            $this->load->library('upload', $config);

            $files = $_FILES;
            $_FILES['files']['name']= $files['filefoto']['name'][$i];
            $_FILES['files']['type']= $files['filefoto']['type'][$i];
            $_FILES['files']['tmp_name']= $files['filefoto']['tmp_name'][$i];
            $_FILES['files']['error']= $files['filefoto']['error'][$i];
            $_FILES['files']['size']= $files['filefoto']['size'][$i];    
            $renameFoto = "{$foke[$i]}";
            $config['file_name'] = $renameFoto;
            $arr = (explode('#',($renameFoto)));
            
            $this->upload->initialize($config);
            $this->upload->do_upload('files');
            // $this->load->library('image_lib'); 

            $tmp = $this->upload->data(); 

            //Resize Configs 
            $config_r['image_library']='gd2';
            $config_r['source_image']   = './assets/upload/gis_pict_original/' . $tmp['file_name'];
            $config_r['maintain_ratio'] = TRUE;
            $config_t['create_thumb'] = FALSE;            
            $config_r['quality'] = '80%';
             if($kategori== 'NDVI'){
                $config_r['width']= 1240;
                $config_r['height']= 1754;
            }else{
                $config_r['width']= 1870;
	            $config_r['height']= 1323;
            }
            $config_r['new_image']= './assets/upload/gis_pict/'.$arr[0].'.'.$extension ;
            //end of configs

            $this->load->library('image_lib', $config_r); 
            $this->image_lib->initialize($config_r);
            $this->image_lib->resize();
            

            # jika proses berhasil
            // if ($tmp && $prosesUploadpdf) {
            //     echo "Upload file <a href='{$renameFoto}' target='_blank'>{$foke[$i]}</a> berhasil. <br>";
            //     echo "Upload file <a href='{$lokasiBaruPDF}' target='_blank'>{$poke[$i]}</a> berhasil. <br>";

            // } else {
            //     echo "<span style='color: red'>Upload file {$foke[$i]} gagal</span> <br>";
            //     echo "<span style='color: red'>Upload file {$poke[$i]} gagal</span> <br>";
            // }

        
            // $data[$i] = array(
            //     'location' => $kodeLokasi,
            //     'jenis' => $jenis[$i],
            //     'image' => $foke[$i], 
            //     'pdf' => $poke[$i],
            //     'description' => $description,
            //     'kategori' => $kategori,
            //     'date' => $date,
            // );  
        }
        //  $result = $this->db->insert_batch('gis_photo',$data);
        
        //  //$this->load->view('GIS/Manual_upload.php');
        // echo '<pre>';
        // print_r($data);
        // echo  '</pre>';
        redirect('Manual_Upload/');

    }
}