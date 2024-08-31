<?php namespace App\Controllers;

use App\Models\AuthorModel;

class AuthorController extends BaseController
{
    public function index()
    {
        $model = new AuthorModel();
        $data['authors'] = $model->findAll();
        return view('authors/index', $data);
    }

    public function create()
    {
        return view('authors/create');
    }

    public function store()
    {
        $model = new AuthorModel();
        $model->save([
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/authors');
    }

    public function show($id)
    {
        $model = new AuthorModel();
        $data['author'] = $model->find($id);
        return view('authors/show', $data);
    }
}
