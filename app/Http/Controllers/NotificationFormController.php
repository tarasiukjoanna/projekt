<?php

namespace App\Http\Controllers;

use App\Models\NotificationForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NotificationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        return view("notificationForm.index", [
        'notificationForm' => NotificationForm::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view("notificationForm.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $notification = new NotificationForm($request->all());
        $notification->save();
        return redirect(route('notificationForm.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  NotificationForm  $notification
     * @return View
     */
    public function show(NotificationForm $notification): View
    {
        return view("notificationForm.index", [
            'notification' => $notification
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotificationForm  $notificationForm
     * @return \Illuminate\Http\Response
     */
    public function edit(NotificationForm $notificationForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotificationForm  $notificationForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotificationForm $notificationForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotificationForm  $notificationForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotificationForm $notificationForm)
    {
        //
    }
}
