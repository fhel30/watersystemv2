<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Service;
use App\Rules\RedundantService;
use App\Services\Options;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
  



    private function getServices()
    {
        return (new Options)->getServices();
    }


    public function index()
    {
        
    }

    public function search(Request $request)
    {  
        try{
            $customer= Customer::findOrFail($request->account_number);
            return view('pages.add-service', [
                'route' => 'admin.search-customer',
                'services'=>$this->getServices(),
                'customer'=>$customer
            ]);
        }catch(ModelNotFoundException $e){
            return redirect(route('admin.services.create'))->withErrors([
                    'account_number'=>'Account number not found!'
                ])->withInput();
        }
      
    }


    public function create()
    { 

        return view('pages.add-service', [
            'route' => 'admin.search-customer',
            'services'=>$this->getServices()
        ]);
    }


    public function store(Request $request)
    {
        $messages=[
            'remarks.required_if'=>"Remarks field is required if 'Other' is selected on Service Type field"
        ];

       $request->validate([
           'account_number'=>'required',
           'service_type'=>['required',new RedundantService],
           'remarks'=>'required_if:service_type,others',
           'service_schedule'=>'required|date|after_or_equal:today'
       ],$messages);

       Service::create([
            'customer_id'=>$request->account_number,
            'type_of_service'=>$request->service_type,
            'remarks'=>$request->remarks,
            'landmarks'=>$request->landmark,
            'work_schedule'=>$request->service_schedule,
            'status'=>'pending'
       ]);

       return back()->with([
           'created'=>true,
           'message'=>'A service was successfully created for this customer!'
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
