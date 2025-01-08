@extends('template.loginregister')
@section('content')
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <form action="{{route('submit.daftar')}}" method="post">
                                        @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="id" type="text" placeholder="name@example.com" />
                                                <label for="inputnama">Buat id </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="username" type="text" placeholder="name@example.com" />
                                                <label for="inputnama">Buat username pengguna </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="name" type="text" placeholder="name@example.com" />
                                                <label for="inputnama">Masukan Nama </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password" placeholder="Password" />
                                                <!-- passwordnya samain kaya id buat tes -->
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">   
                                                <div class="btn-group">
                                                    <select name="level" id="level">
                                                        <option value="petugas">petugas</option>
                                                        <option value="admin">admin</option>
                                                    </select>
                                                </div>                                            
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ahahahahahe 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>