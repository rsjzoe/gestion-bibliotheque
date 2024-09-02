<?php

namespace App\Controllers;

use App\Models\AuthorModel;
use App\Models\BookModel;

class BookController extends BaseController
{
    public function index()
    {
        $search = $this->request->getGet('search');
        $model = new BookModel();
        if ($search) {
            $books = $model->like('title', $search)->findAll();
        } else {
            $books = $model->findAll();
        }
    
        return view('books/index', [
            'books' => $books,
            'search' => $search
        ]);
    }

    public function create()
    {
        $model = new AuthorModel();
        return view('books/create', [
            "authors" => $model->findAll()
        ]);
    }

    public function store()
    {
        $model = new BookModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'author_id' => $this->request->getPost('author_id'),
            'published_date' => $this->request->getPost('published_date'),
            'isborrow' => $this->request->getPost('isborrow'),
        ]);
        return redirect()->to('/books');
    }

    public function show($id)
    {
        $model = new BookModel();
        $data['book'] = $model->find($id);
        return view('books/show', $data);
    }
     
    public function edit($id)
    {
        $model = new BookModel();
        $authorModel = new AuthorModel();
        $data['book'] = $model->find($id);
        $data['authors'] = $authorModel->findAll();
        return view('books/edit', $data);
    }

    public function update($id)
    {
        $model = new BookModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'author_id' => $this->request->getPost('author_id'),
            'published_date' => $this->request->getPost('published_date'),
            'isborrow' => $this->request->getPost('isborrow'),
        ]);
        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $model = new BookModel();
        $model->delete($id);
        return redirect()->to('/books');
    }
}
