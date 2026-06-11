# API Specification
# Libracore

## Deskripsi Sistem

Libracore merupakan aplikasi perpustakaan digital yang memungkinkan pengguna untuk mengelola koleksi ebook berdasarkan kategori tertentu. Sistem menyediakan fitur autentikasi pengguna, manajemen ebook, dan manajemen kategori.

Base URL:

http://localhost:8000/api/v1

---

# Authentication

## Register User

Method: POST

Endpoint:

/register

Request Body:

{
    "name": "Hilmy",
    "email": "hilmy@gmail.com",
    "password": "password123",
    "password_confirmation": "password123"
}

Response:

{
    "status": "success",
    "message": "User berhasil didaftarkan"
}

---

## Login User

Method: POST

Endpoint:

/login

Request Body:

{
    "email": "hilmy@gmail.com",
    "password": "password123"
}

Response:

{
    "status": "success",
    "token": "1|xxxxxxxxxxxxxxxx"
}

---

## Logout User

Method: POST

Endpoint:

/logout

Authorization:

Bearer Token

Response:

{
    "status": "success",
    "message": "Logout berhasil"
}

---

# Category API

## Get All Categories

Method: GET

Endpoint:

/categories

Response:

{
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "Teknologi"
        },
        {
            "id": 2,
            "name": "Pendidikan"
        }
    ]
}

---

## Create Category

Method: POST

Endpoint:

/categories

Authorization:

Bearer Token

Request Body:

{
    "name": "Pemrograman"
}

Response:

{
    "status": "success",
    "message": "Kategori berhasil ditambahkan"
}

---

## Update Category

Method: PUT

Endpoint:

/categories/{id}

Authorization:

Bearer Token

Request Body:

{
    "name": "Teknologi Informasi"
}

Response:

{
    "status": "success",
    "message": "Kategori berhasil diperbarui"
}

---

## Delete Category

Method: DELETE

Endpoint:

/categories/{id}

Authorization:

Bearer Token

Response:

{
    "status": "success",
    "message": "Kategori berhasil dihapus"
}

---

# Ebook API

## Get All Ebooks

Method: GET

Endpoint:

/ebooks

Response:

{
    "status": "success",
    "data": [
        {
            "id": 1,
            "title": "Belajar Laravel",
            "author": "Abdul Kadir",
            "category": "Teknologi"
        }
    ]
}

---

## Get Ebook Detail

Method: GET

Endpoint:

/ebooks/{id}

Response:

{
    "status": "success",
    "data": {
        "id": 1,
        "title": "Belajar Laravel",
        "author": "Abdul Kadir",
        "description": "Panduan Laravel untuk pemula",
        "cover": "cover.jpg",
        "file_pdf": "laravel.pdf",
        "category": "Teknologi"
    }
}

---

## Create Ebook

Method: POST

Endpoint:

/ebooks

Authorization:

Bearer Token

Request Body:

{
    "title": "Belajar Laravel",
    "author": "Abdul Kadir",
    "description": "Panduan Laravel untuk pemula",
    "category_id": 1
}

Response:

{
    "status": "success",
    "message": "Ebook berhasil ditambahkan"
}

---

## Update Ebook

Method: PUT

Endpoint:

/ebooks/{id}

Authorization:

Bearer Token

Request Body:

{
    "title": "Belajar Laravel 12"
}

Response:

{
    "status": "success",
    "message": "Ebook berhasil diperbarui"
}

---

## Delete Ebook

Method: DELETE

Endpoint:

/ebooks/{id}

Authorization:

Bearer Token

Response:

{
    "status": "success",
    "message": "Ebook berhasil dihapus"
}

---

# Error Response

Status Code: 404

{
    "status": "error",
    "message": "Data tidak ditemukan"
}

Status Code: 422

{
    "status": "error",
    "message": "Validasi gagal"
}

Status Code: 500

{
    "status": "error",
    "message": "Internal server error"
}
