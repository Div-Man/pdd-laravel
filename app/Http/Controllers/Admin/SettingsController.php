<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller {

    public function index() {
        $settings = Settings::all();
        return view('admin.settings.index', [
            'settings' => $settings
        ]);
    }

    public function settings($id, $title, $status) {
        Settings::where('id', $id)
                ->where('title', $title)
                ->update(['status' => $status]);
    }

    /*************************************************************/
    public function commentDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function commentEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }
    
    /*************************************************************/
     public function questionDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function questionEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }
    
    /*************************************************************/
     public function supportDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function supportEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }
    
    /*************************************************************/
     public function registerDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function registerEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }
    
    /*************************************************************/
     public function passwordResetDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function passwordResetEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }
    
     /*************************************************************/
     public function addBookmarkDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function addBookmarkEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }
    
     /*************************************************************/
     public function disableSiteDisable(Request $request) {

        $this->settings($request->setting_id, $request->setting_title, $request->setting_status);
        return back();
    }

    public function disableSiteEnable(Request $request) {
        $this->settings($request->setting_id, $request->setting_title, $request->null);
        return back();
    }

    
    
    
    
}
