<?php

namespace APP\Controllers;

use App\Controllers\BaseController;
use App\Models\FilmModel;

class Film extends BaseController
{
    public function index()
    {
        $filmmodel  = new FilmModel();
        $pager      = \Config\Services::pager();
        $data       = array(
            'films'  => $filmmodel->paginate(4, 'film')
        );
        return view('tampilan', $data);
    }
    public function form()
    {
        return view('form-tambah');
    }
    public function cek()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan judul FILM terlebih dahulu!'
                ]
            ],
            'rilis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan tanggal rilis FILM terlebih dahulu!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan deskripsi FILM terlebih dahulu!'
                ]
            ],
        ]);
        if (!$validation) {
            return view('form-tambah', [
                'validator' => $this->validator
            ]);
        } else {
            $filmmodel = new FilmModel();
            $filmmodel->insert([
                'judul' => $this->request->getPost('judul'),
                'rilis' => $this->request->getPost('rilis'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);

            session()->setFlashdata('message', 'Data FILM berhasil ditambahkan');
            return redirect()->to(base_url('/'));
        }
    }
    public function edit($id)
    {
        $filmmodel = new FilmModel();
        $data = array(
            'films' => $filmmodel->find($id)
        );
        return view('edit', $data);
    }
    public function update($id)
    {
        helper(['form', 'url']);
        $validation = $this->validate([
            'judul'             => [
                'rules'         => 'required',
                'errors'        => [
                    'required'  => 'Edit judul yang sesuai!'
                ]
            ],
            'rilis'             => [
                'rules'         => 'required',
                'errors'        => [
                    'required'  => 'Edit tanggal rilis yang sesuai!'
                ]
            ],
            'deskripsi'         => [
                'rules'         => 'required',
                'errors'        => [
                    'required'  => 'Edit deskripsi yang sesuai!'
                ]
            ],
        ]);
        if (!$validation) {
            $filmmodel = new FilmModel();

            return view('edit', [
                'films' => $filmmodel->find($id),
                'validation' => $this->validator
            ]);
        } else {
            $filmmodel = new FilmModel();
            $filmmodel->update($id, [
                'judul'     => $this->request->getPost('judul'),
                'rilis'     => $this->request->getPost('rilis'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);

            session()->setFlashdata('message', 'FILM berhasil diupdate');
            return redirect()->to(base_url('/'));
        }
    }
    public function delete($id)
    {
        $filmmodel = new FilmModel();
        $films = $filmmodel->find($id);

        if($films){
            $filmmodel->delete($id);
            session()->setFlashdata('mesasage', 'Data FILM berhasil dihapus');
            return redirect()->to(base_url('/'));
        }
    }
}
