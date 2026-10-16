<?php
class BukuController
{
    public function __construct(private Buku $model) {}

    public function index(): void
    {
        $buku = $this->model->getAll();
        require __DIR__ . '/../views/buku/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/buku/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        if ($this->model->insert($data)) {
            header('Location: index.php?page=buku&status=success_add');
        } else {
            header('Location: index.php?page=buku&status=error_add');
        }
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $buku = $this->model->findById($id);
        if (!$buku) {
            http_response_code(404);
            exit('Data buku tidak ditemukan.');
        }
        require __DIR__ . '/../views/buku/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        if ($this->model->update($id, $data)) {
            header('Location: index.php?page=buku&status=success_update');
        } else {
            header('Location: index.php?page=buku&status=error_update');
        }
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        if ($this->model->delete($id)) {
            header('Location: index.php?page=buku&status=success_delete');
        } else {
            header('Location: index.php?page=buku&status=error_delete');
        }
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'judul' => trim($input['judul'] ?? ''),
            'penulis' => trim($input['penulis'] ?? ''),
            'kategori' => trim($input['kategori'] ?? ''),
            'harga' => (int) ($input['harga'] ?? 0),
            'stok' => (int) ($input['stok'] ?? 0)
        ];

        if ($data['judul'] === '' || $data['penulis'] === '' || $data['kategori'] === '' || $data['harga'] <= 0 || $data['stok'] < 0) {
            exit('Semua kolom wajib diisi dengan valid (harga dan stok harus sesuai).');
        }

        return $data;
    }
}
?>