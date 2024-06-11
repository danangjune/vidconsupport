<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PermohonanNotification;
use App\Mail\PermohonanConfirmation;
use PDF;

class PermohonanController extends Controller
{
    //
    public function create()
    {
        return view('permohonan.create');
    }

    public function store(Request $request)
    {
        try{
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'opd' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'tempat_acara' => 'required|string|max:255',
            'waktu_acara' => 'required|date_format:H:i',
            'peserta' => 'required|string',
            'bentuk_dukungan' => 'required|string',
            'dukungan_infrastruktur' => 'required|boolean',
        ]);

        $permohonan = Permohonan::create($validated);
        return redirect()->route('permohonan.create')->with('success', 'Permohonan berhasil dikirim.');
        }catch (\Exception $e) {
            // Tangkap dan cetak pesan kesalahan
            dd($e->getMessage());
        }
        // Buat PDF
        $pdf = PDF::loadView('permohonan.pdf', compact('permohonan'));
        $pdfPath = 'pdfs/' . $permohonan->id . '.pdf';
        $pdf->save(storage_path('app/public/' . $pdfPath));
        $permohonan->update(['pdf_path' => $pdfPath]);

        $pdf = PDF::loadView('permohonan.pdf', compact('permohonan'));
        $pdfPath = 'pdfs/' . $permohonan->id . '.pdf';
        $pdf->save(storage_path('app/public/' . $pdfPath));
        $permohonan->update(['pdf_path' => $pdfPath]);

        // Kirim email ke admin
        Mail::to('admin@example.com')->send(new PermohonanNotification($permohonan));

        // Kirim PDF ke pengguna
        Mail::to($permohonan->email)->send(new PermohonanConfirmation($permohonan));

        return redirect()->route('permohonan.create')->with('success', 'Permohonan berhasil dikirim.');
    }

    public function index()
    {
        $permohonan = Permohonan::all();
        return view('admin.permohonan.index', compact('permohonan'));
    }

    public function updateStatus(Request $request, Permohonan $permohonan)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:pending,accepted,in_progress,completed,rejected',
        ]);

        $permohonan->update(['status' => $validated['status']]);

        return redirect()->route('permohonan.index')->with('success', 'Status permohonan berhasil diperbarui.');
    }
}