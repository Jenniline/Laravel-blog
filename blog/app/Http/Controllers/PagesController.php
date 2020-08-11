<?php

namespace App\Http\Controllers;
class PagesController extends Controller {
    
    public function getIndex() {
        return view ('pages.welcome');
        #steps 
        #process variable data or params
        #talk to the model
        #receive data back from the model
        #compile and process the data from the model if needed
        # pass the data to the correct viw
    }

    public function getAbout() {
        return view ('pages.about');

    }

    public function getContact(){
        return view ('pages.contact');
    }
  

}


?>