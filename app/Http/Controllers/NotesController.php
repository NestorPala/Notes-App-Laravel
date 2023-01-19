<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index() {
        $notes = Note::all()->map(function(Note $note) {
            return [
                "_id" => $note->id,
                "title" => $note->title,
                "content" => $note->content,
                "is_archived" => (bool) $note->is_archived
            ];
        });

        return $notes;
    }


    public function create(Request $request) {
        if (!isset($request->title)) {
            return response()->json(["message" => "title cannot be empty"], 400);
        }

        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->is_archived = false;
        $note->save();

        return response()->json(["message" => "Note created successfully!"]);
    }


    public function edit(Request $request, $id) {
        if (!isset($request->title)) {
            return response()->json(["message" => "title cannot be empty"], 400);
        }

        $note = Note::find($id);

        if (!$note) {
            return response()->json(["message" => "Note does not exist"], 400);
        }

        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json(["message" => "Note edited successfully!"]);
    }


    public function delete(Request $request, $id) {
        $note = Note::find($id);

        if (!$note) {
            return response()->json(["message" => "Note does not exist"], 400);
        }

        $note->delete();

        return response()->json(["message" => "Note deleted successfully!"]);
    }


    public function archive(Request $request, $id) {
        $note = Note::find($id);

        if (!$note) {
            return response()->json(["message" => "Note does not exist"], 400);
        }

        $note->update([
            "is_archived" => true
        ]);

        return response()->json(["message" => "Note archived successfully!"]);
    }
    

    public function unarchive(Request $request, $id) {
        $note = Note::find($id);

        if (!$note) {
            return response()->json(["message" => "Note does not exist"], 400);
        }

        $note->update([
            "is_archived" => false
        ]);

        return response()->json(["message" => "Note unarchived successfully!"]);
    }
}
