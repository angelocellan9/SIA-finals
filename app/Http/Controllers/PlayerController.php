<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::orderBy('id')->get();
        return view('players', compact('players'));

    }


    // function generateCSV() {
    //     $officials = Offical::orderBy('id')->get();

    //     $filename = '../storage/officials.csv';

    //     $file = fopen($filename, 'w+');

    //     foreach($officials as $off) {
    //         fputcsv($file, [
    //             $off->id,
    //             $off->position,
    //             $off->name,
    //             $off->email,
    //             $off->phone_number,
    //         ]);
    //     }
    // }


    public function create(){
        $players = PLayer::all();
        return view('create', compact('players'));
    }

    public function store(Request $request){
        $request->validate([
            'position' => 'required',
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
            'phone_number' => 'required',

        ]);

        Player::create([
            'position' => $request->position,
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'phone_number' => $request->phone_number,

        ]);

        return redirect()->route('players')->with('success', 'Players create successfully.');

    }

    public function generateCSV() {
        $players = Player::orderBy('id')->get();

        $filename = 'players.csv';

        $file = fopen('php://temp', 'w+');



        foreach($players as $play) {
            fputcsv($file, [
                $play->id,
                $play->position,
                $play->name,
                $play->email,
                $play->phone_number,
            ]);
        }

        rewind($file);

        $response = response(stream_get_contents($file), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);

        fclose($file);

        return $response;
    }


    public function pdf(){
        $players = Player::orderBy('position')->get();
        $pdf = Pdf::loadView('player-list', compact('players'));

        return $pdf->download('player-list.pdf');
    }


    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        $csvData = array_map('str_getcsv', file($file));

        foreach ($csvData as $row) {
            $position = $row[0];
            $name = $row[1];
            $description = $row[2];
            $email = $row[3];
            $phone_number = $row[4];



            Player::create([
                'position' => $position,
                'name' => $name,
                'description' => $description,
                'email' => $email,
                'phone_number' => $phone_number,


            ]);
        }

        return redirect()->route('players')->with('success', 'Players imported successfully.');
    }


    // public function show($id)
    // {
    //     $offical = Offical::findOrFail($id);
    //     return view('offical-show', compact('offical'));
    // }





}
