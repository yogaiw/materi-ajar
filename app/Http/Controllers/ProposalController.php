<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;

class ProposalController extends Controller
{
    public function index() {
        return view('input_proposal');
    }

    public function createProposal(Request $request) {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'abstrak' => 'required'
        ]);

        $proposal = new Proposal();
        $proposal->judul = $request->judul;
        $proposal->abstrak = $request->abstrak;
        $proposal->status = '1';
        $proposal->save();

        return back();
    }

    public function listProposal() {
        return view('list_proposal', [
            'proposal' => Proposal::all()
        ]);
    }

    public function detail($id) {
        return view('detail', [
            'proposal' => Proposal::find($id)
        ]);
    }

    public function accDosbing(Request $request) {
        $proposal = Proposal::find($request->id);

        $proposal->status = 2;
        $proposal->save();

        return back();
    }

    public function delete(Request $request) {
        $proposal = Proposal::find($request->id);

        $proposal->delete();

        return back();
    }
}
