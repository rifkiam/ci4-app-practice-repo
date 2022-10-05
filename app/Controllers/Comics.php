<?php

namespace App\Controllers;
use App\Models\ComicsModel;
use CodeIgniter\CodeIgniter;

class Comics extends BaseController
{
    protected $comicsModel;
    public function __construct()
    {
        $this->comicsModel = new ComicsModel();        
    }

    public function index()
    {
        // $comics = $this->comicsModel->findAll();
        $data = [
            'title' =>  'Judul Komik',
            'comics' => $this->comicsModel->getComics(),
        ];

        // $db = \Config\Database::connect();
        // $comics = $db->query("SELECT * FROM comics");

        return view('comic/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Comic Detail',
            'comics' => $this->comicsModel->getComics($slug),
        ];

        //jika komik tidak ada dalam tabel
        if (empty($data['comics'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Title' . $slug . 'not found');
            
        }
        return view('comic/detail', $data);
    }

    public function create() {
        $data = [
            'title' => 'Add Comic',
            'validation' => \Config\Services::validation(),
        ];

        return view('comic/create', $data);
    }

    public function save() 
    {
        //validasi form
        if (!$this->validate([
            'judul' => [ // string 'judul' ini
                'rules' => 'required|is_unique[comics.judul]',
                'errors' => [
                    'required' => 'Title field must be filled',
                    'is_unique' => 'Title is already addded' //dapat menggunakan field untuk me refer ke string 'judul'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/comics/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        // dd($this->request->getVar());
        $this->comicsModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data successfully added');

        return redirect()->to('/comics');
    }
}    