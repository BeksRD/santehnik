<?php

namespace App\Http\Controllers;

use App\Models\Applications as Contact;
use App\Notifications\SendNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class ConsultingController extends Controller
{
    public function saveAndSend(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $name =  $request->post('name');
        $mobile = $request->post('phone');
        $application = Contact::where('name', $name)
            ->where('mobile', $mobile)
            ->first();
        if (!$application){
            $newApplication = Contact::create([
                'name'=>$name,
                'mobile'=>$mobile,
            ]);
            Notification::send($newApplication,$telegram = new SendNotification([$name,$mobile]));
            $status= 'success';
            $message = 'Ваши контакты отправлены специалисту и скоро позвонят';
        }else{
            $status= 'warning';
            $message = 'Вы уже отправляли и ваши контакты рассматриваются';
        }
        return redirect()->back()->with($status, $message);
    }
}
