<?php

use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProposalController::class, 'index'])->name('input_proposal');
Route::get('/list', [ProposalController::class, 'listProposal'])->name('list_proposal');
Route::get('/detail/{id}', [ProposalController::class, 'detail'])->name('detail_proposal');

Route::post('/masukan-proposal', [ProposalController::class,'createProposal'])->name('buat_proposal');
Route::patch('/acc-dosbing', [ProposalController::class, 'accDosbing'])->name('acc_dosbing');
Route::delete('/proposal/delete', [ProposalController::class, 'delete'])->name('delete_proposal');
