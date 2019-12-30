<?php

namespace Webkul\Agent\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Webkul\Agent\Repositories\AgentSourceRepository;

/**
 * Agent source controller
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class AgentSourceController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * AgentSourceRepository object
     *
     * @var array
     */
    protected $agentSourceRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Agent\Repositories\AgentSourceRepository  $agentSourceRepository
     * @return void
     */
    public function __construct(AgentSourceRepository $agentSourceRepository)
    {
        $this->agentSourceRepository = $agentSourceRepository;

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
            'id'           => ['required'],
            'agent_id'           => 'required',
            'agency_group_id'   => 'required',
            'name'  => 'required'
        ]);

        $data = request()->all();

        Event::fire('agent.agent_source.create.before');

        $agentSource = $this->agentSourceRepository->create($data);

        Event::fire('agent.agent_source.create.after', $agentSource);

        session()->flash('success', trans('admin::app.settings.agent_sources.create-success'));

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
        $agentSource = $this->agentSourceRepository->findOrFail($id);

        return view($this->_config['view'], compact('agentSource'));
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
            'id'           => ['required'],
            'agent_id'           => 'required',
            'agency_group_id'   => 'required',
            'name'  => 'required'
        ]);

        $data = request()->all();

        Event::fire('agent.agent_source.update.before', $id);

        $agentSource = $this->agentSourceRepository->update($data, $id);

        Event::fire('agent.agent_source.update.after', $agentSource);

        session()->flash('success', trans('admin::app.settings.agent_sources.update-success'));

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
        $agentSource = $this->agentSourceRepository->findOrFail($id);

        if ($this->agentSourceRepository->count() == 1) {
            session()->flash('error', trans('admin::app.settings.agent_sources.last-delete-error'));
        } else {
            try {
                Event::fire('agent.agent_source.delete.before', $id);

                $this->agentSourceRepository->delete($id);

                Event::fire('agent.agent_source.delete.after', $id);

                session()->flash('success', trans('admin::app.settings.agent_sources.delete-success'));

                return response()->json(['message' => true], 200);
            } catch (\Exception $e) {
                session()->flash('error', trans('admin::app.response.delete-failed', ['name' => 'Agent source']));
            }
        }

        return response()->json(['message' => false], 400);
    }
}