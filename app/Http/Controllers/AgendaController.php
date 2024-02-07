<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function showAgenda()
    {
        $jobs = [];
        if (auth()->check()) {
            $jobs = auth()->user()->jobs()->orderBy('prioriteit', 'desc')->get();

            return view('agenda', ['jobs' => $jobs]);
        }
        return redirect('/');
    }

    public function showCreateAgendaItem()
    {
        if (auth()->check()) {
            return view('create-agenda-item');
        }
        return redirect('/');
    }

    public function createAgendaItem(Request $request)
    {
        if (auth()->check()) {
            $incomingFields = $request->validate([
                'title' => ['required', 'min:3', 'max:14'],
                'description' => 'required',
                'begin_datum' => 'nullable|date',
                'eind_datum' => 'nullable|date',
                'prioriteit' => ['required', 'max:1', 'min:1'],
                'status' => 'required|in:n,b,a',
            ]);

            $incomingFields['prioriteit'] = filled($incomingFields['prioriteit']) ? $incomingFields['prioriteit'] : 1;

            $incomingFields['title'] = strip_tags($incomingFields['title']);
            $incomingFields['description'] = strip_tags($incomingFields['description']);
            $incomingFields['user_id'] = auth()->id();

            Agenda::create($incomingFields);
            return redirect('/agenda');
        }
        return redirect('/');
    }

    public function deleteAgendaItem(Agenda $job)
    {
        if (auth()->check()) {
            $job->delete();
        }
        return redirect('/agenda');
    }

    public function showEditAgendaItem(Agenda $job)
    {
        if (auth()->user()->id !== $job['user_id']) {
            return redirect('/');
        }
        return view('edit-agenda-item', ['job' => $job]);
    }

    public function editJob(Agenda $job, Request $request)
    {
        if (auth()->user()->id !== $job['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => ['required', 'min:3', 'max:14'],
            'description' => 'required',
            'begin_datum' => 'nullable|date',
            'eind_datum' => 'nullable|date',
            'prioriteit' => ['required', 'max:1', 'min:1'],
            'status' => 'required|in:n,b,a',
        ]);

        $incomingFields['prioriteit'] = filled($incomingFields['prioriteit']) ? $incomingFields['prioriteit'] : 1;

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);

        $job->update($incomingFields);

        return redirect('/agenda');
    }
}
