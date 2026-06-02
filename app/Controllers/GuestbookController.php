<?php

namespace App\Controllers;

use App\Models\GuestbookModel;

class GuestbookController extends BaseController
{
    public function index()
    {
        $model = new GuestbookModel();
        // Grabbing all data from the database
        $data['entries'] = $model->findAll();

        return view('guestbook/index', $data);
    }

    public function create()
    {
        $model = new GuestbookModel();

        // Server-side validation check
        if ($this->request->is('post')) {
            $rules = [
                'username' => 'required|max_length[100]',
                'comment'  => 'required',
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'username' => $this->request->getPost('username'),
                    'comment'  => $this->request->getPost('comment'),
                ]);
                return redirect()->to('/guestbook');
            }
        }

        return redirect()->to('/guestbook');
    }

    // 🌟 MOVED INSIDE: edit now belongs to the class properly
    public function edit($id)
    {
        $model = new GuestbookModel();
        
        // Find the single row matching the route parameter ID
        $data['entry'] = $model->find($id);

        // Defensive check: if someone tries to edit an ID that doesn't exist, bounce them back
        if (!$data['entry']) {
            return redirect()->to('/guestbook')->with('error', 'Guestbook entry not found.');
        }

        return view('guestbook/edit', $data);
    }

    // 🌟 MOVED INSIDE: update belongs to the class properly
    public function update($id)
    {
        $model = new GuestbookModel();

        // Verify record exists before running update logic
        if (!$model->find($id)) {
            return redirect()->to('/guestbook')->with('error', 'Guestbook entry not found.');
        }

        if ($this->request->is('post')) {
            $rules = [
                'username' => 'required|max_length[100]',
                'comment'  => 'required',
            ];

            if ($this->validate($rules)) {
                // Update using our explicit model array protection
                $model->update($id, [
                    'username' => $this->request->getPost('username'),
                    'comment'  => $this->request->getPost('comment'),
                ]);

                return redirect()->to('/guestbook');
            }
        }

        return redirect()->to('/guestbook/edit/' . $id);
    }
} // <--- The single closing brace for the whole class now sits at the very end!