<?php namespace App\Controllers;

use App\Models\BorrowingModel;
use App\Models\BookModel;

class BorrowingController extends BaseController
{
    public function index()
    {
        $model = new BorrowingModel();
        $data['borrowings'] = $model->select('borrowings.*, book.title')
                                    ->join('book', 'book.id = borrowings.book_id')
                                    ->findAll();
        return view('borrowings/index', $data);
    }

    public function create()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();
        return view('borrowings/create', $data);
    }

    public function store()
    {
        $model = new BorrowingModel();
        $bookid=$this->request->getPost('book_id');
        $model->save([
            'book_id' => $bookid,
            'client_name' => $this->request->getPost('client_name'),
            'borrowed_at' => date('Y-m-d H:i:s'),
        ]);
        $bookModel = new BookModel();
        $bookModel->update($bookid, [
            'isborrow' => true
        ]);
        return redirect()->to('/borrowings');
    }

    public function show($id)
    {
        $model = new BorrowingModel();
        $data['borrowing'] = $model->find($id);
        return view('borrowings/show', $data);
    }

    public function return($id)
    {
        $model = new BorrowingModel();
        $model->update($id, [
            'returned_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/borrowings');
    }
}
