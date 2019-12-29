<?php

namespace Webkul\Vendor\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Webkul\Vendor\Repositories\VendorSourceRepository;

/**
 * Vendor source controller
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class VendorSourceController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * VendorSourceRepository object
     *
     * @var array
     */
    protected $vendorSourceRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Vendor\Repositories\VendorSourceRepository  $vendorSourceRepository
     * @return void
     */
    public function __construct(VendorSourceRepository $vendorSourceRepository)
    {
        $this->vendorSourceRepository = $vendorSourceRepository;

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view($this->_config['view']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'vendor_id'           => ['required'],
            'name'           => 'required',
            'name_kana'   => 'required',
            'account_transfer_company_code'  => 'required'
        ]);

        $data = request()->all();

        Event::fire('vendor.vendor_source.create.before');

        $vendorSource = $this->vendorSourceRepository->create($data);

        Event::fire('vendor.vendor_source.create.after', $vendorSource);

        session()->flash('success', trans('admin::app.settings.vendor_sources.create-success'));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $vendorSource = $this->vendorSourceRepository->findOrFail($id);

        return view($this->_config['view'], compact('vendorSource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate(request(), [
            'vendor_id'           => ['required'],
            'name'           => 'required',
            'name_kana'   => 'required',
            'account_transfer_company_code'  => 'required'
        ]);

        $data = request()->all();

        Event::fire('vendor.vendor_source.update.before', $id);

        $vendorSource = $this->vendorSourceRepository->update($data, $id);

        Event::fire('vendor.vendor_source.update.after', $vendorSource);

        session()->flash('success', trans('admin::app.settings.vendor_sources.update-success'));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendorSource = $this->vendorSourceRepository->findOrFail($id);

        if ($this->vendorSourceRepository->count() == 1) {
            session()->flash('error', trans('admin::app.settings.vendor_sources.last-delete-error'));
        } else {
            try {
                Event::fire('vendor.vendor_source.delete.before', $id);

                $this->vendorSourceRepository->delete($id);

                Event::fire('vendor.vendor_source.delete.after', $id);

                session()->flash('success', trans('admin::app.settings.vendor_sources.delete-success'));

                return response()->json(['message' => true], 200);
            } catch (\Exception $e) {
                session()->flash('error', trans('admin::app.response.delete-failed', ['name' => 'Vendor source']));
            }
        }

        return response()->json(['message' => false], 400);
    }
}