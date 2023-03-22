<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class AdminController extends Controller
{
  public function index()
  {
    $item = Payment::where('user_id', '=', Auth::user()->id)->first();
    return view('admin.index', compact('item'));
  }

  public function datadiri()
  {
    return view('admin.datadiri');
  }

  public function layout(Payment $payment)
  {
    return view('layouts.main', compact('payment'));
  }

  public function indexPayment()
  {
    return view('admin.payment');
  }

  public function indexList()
  {
    $data = User::all();

    return view('admin.student-list', compact('data'));
  }

  public function indexVerification()
  {
    $data = Payment::with('user')->paginate('5');
    return view('admin.verification', compact('data'));
  }

  public function indexProof(Payment $payment)
  {
    return view('admin.proof-payment', [
      'payment' => $payment
    ]);
  }

  public function validateStore($user_id)
  {
    // User::where('user_id', $user_id)->update(['progress' => 'Pembayaran berhasil divalidasi']);
    Payment::where('user_id', $user_id)->update([
      'status' => 1
    ]);
    return redirect()->back()->with("message", "Data Berhasil Divalidasi");
  }

  public function rejected($user_id)
  {
    // User::where('user_id', $user_id)->update(['progress' => 'Pembayaran Ditolak']);
    Payment::where('user_id', $user_id)->update([
      'status' => 2
    ]);
    return redirect()->back()->with("message", "Data Tidak Divalidasi, Silahkan Coba Lagi");
  }

  public function detailStore($user_id)
  {
    $detailUser = User::findOrFail($user_id);
    return view('admin.detail', compact('detailUser'));
  }

  public function paymentStore(Request $request)
  {

    $select = $request->bank_name;

    if ($select == "lainnya") {
      $bank = $request->bank_lainnya;
    } else {
      $bank = $request->bank_name;
    }

    $request->validate([
      'bank_name' => 'required',
      'name' => 'required',
      'nominal' => 'required',
      'image' => 'image|required|max:3999',
    ]);

    if ($request->hasFile('image')) {
      $filenameWithExt = $request->file('image')->getClientOriginalName();
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('image')->getClientOriginalExtension();
      $filenameSave = $filename . '_' . time() . '.' . $extension;
      $path = $request->file('image')->move('uploads/', $filenameSave);
    } else {
      $filenameSave = 'noimage.jpg';
    }

    Payment::create([
      'bank_name' => $bank,
      'user_id' => Auth::user()->id,
      'name' => $request->name,
      'nominal' => $request->nominal,
      'image' => $filenameSave,
      'status' => 3
    ]);
    return redirect()->route('indexPayment')->with('success', 'Pembayaran Berhasil Dilakukan');
  }
}
