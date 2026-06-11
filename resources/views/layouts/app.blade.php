<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LibraCoer - E-Book Management</title>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Plus Jakarta Sans',sans-serif;
}

:root{
    --blue:#7db8ff;
    --blue2:#4f8ef7;
    --pink:#f6a8d7;
    --pink2:#ec7db8;
    --white:#ffffff;
}

body{
    min-height:100vh;
    background:
    radial-gradient(circle at top left,#dcecff 0%,transparent 40%),
    radial-gradient(circle at top right,#ffd8eb 0%,transparent 40%),
    radial-gradient(circle at bottom,#ffe8f4 0%,transparent 35%),
    #f7f9ff;
}

.navbar{
    width:95%;
    margin:20px auto;
    padding:18px 30px;
    border-radius:20px;

    background:rgba(255,255,255,.55);
    backdrop-filter:blur(15px);

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 8px 30px rgba(0,0,0,.08);
}

.logo{
    font-size:24px;
    font-weight:700;
    color:#375a9e;
}

.logo span{
    color:#ec7db8;
}

.menu{
    display:flex;
    gap:15px;
    align-items:center;
}

.menu a{
    text-decoration:none;
    color:#375a9e;
    font-weight:600;
    padding:10px 15px;
    border-radius:10px;
    transition:.3s;
}

.menu a:hover{
    background:#edf5ff;
}

.btn-nav{
    background:linear-gradient(
        135deg,
        #7db8ff,
        #f6a8d7
    );

    color:white !important;
    padding:12px 20px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
    box-shadow:0 4px 15px rgba(125,184,255,.3);
}

.btn-nav:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(236,125,184,.3);
}

.container{
    width:95%;
    margin:auto;
    padding-bottom:40px;
}

.dashboard-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-bottom:25px;
}

.stat-card{
    background:rgba(255,255,255,.65);
    backdrop-filter:blur(15px);

    border-radius:20px;
    padding:25px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.stat-card h3{
    color:#6b7280;
    font-size:14px;
}

.stat-card h1{
    margin-top:8px;
    color:#375a9e;
}

.stat-card span{
    font-size:42px;
}

.card{
    background:rgba(255,255,255,.65);
    backdrop-filter:blur(15px);

    border-radius:20px;
    padding:25px;

    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.content-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

.activity{
    display:flex;
    justify-content:space-between;
    padding:15px 0;
    border-bottom:1px solid #eee;
}

.summary-box{
    text-align:center;
    padding:40px 0;
}

.summary-box h1{
    font-size:55px;

    background:linear-gradient(
        135deg,
        #245ec3,
        #ec7db8
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.summary-box p{
    color:#666;
}

h1{
    color:#375a9e;
}

h2{
    margin-bottom:15px;
    color:#375a9e;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

th{
    background:#eef5ff;
    color:#375a9e;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #eee;
}

.btn{
    display:inline-block;
    padding:10px 18px;
    background:linear-gradient(
        135deg,
        #7db8ff,
        #f6a8d7
    );

    color:white;
    text-decoration:none;
    border:none;
    border-radius:10px;
    cursor:pointer;
}

input{
    width:100%;
    padding:12px;
    border-radius:10px;
    border:1px solid #ddd;
    margin-top:5px;
    margin-bottom:15px;
}

@media(max-width:768px){

.dashboard-grid{
    grid-template-columns:1fr;
}

.content-grid{
    grid-template-columns:1fr;
}

.navbar{
    flex-direction:column;
    gap:15px;
}

.menu{
    flex-wrap:wrap;
    justify-content:center;
}

}

</style>
</head>

<body>

<div class="navbar">

<div class="logo">
📚 Libra<span>Coer</span>
</div>

<div class="menu">

    <a href="/" class="btn-nav">
        Dashboard
    </a>

    <a href="/ebooks" class="btn-nav">
        E-Book
    </a>

    <a href="/categories" class="btn-nav">
        Kategori
    </a>

    <a href="/login" class="btn-nav">
        Login
    </a>

    <a href="/ebooks/create" class="btn-nav">
        + Tambah Buku
    </a>

</div>

</div>

<div class="container">
@yield('content')
</div>

</body>
</html>