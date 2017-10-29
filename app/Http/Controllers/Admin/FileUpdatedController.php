<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Http\Controllers\Controller;
use App\Mail\Files\FileUpdatesApproved;
use App\Mail\Files\FileUpdatesRejected;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FileUpdatedController extends Controller
{
    public function index()
    {
    	$files = File::whereHas('approvals')->oldest()->get();

    	return view('admin.files.updated.index', [
    		'files' => $files,
    	]);
    }

    public function update(File $file)
    {
    	$file->mergeApprovalProperties();
    	$file->approveAllUploads();
    	$file->deleteAllApprovals();

        Mail::to($file->user)->send(new FileUpdatesApproved($file));

    	return back()->withSuccess("{$file->title} changes have been approved.");
    }

    public function destroy(File $file)
    {
    	$file->deleteAllApprovals();
    	$file->deleteUnapprovedUploads();

        Mail::to($file->user)->send(new FileUpdatesRejected($file));
    	
    	return back()->withSuccess("{$file->title} changes have been rejected.");
    }
}
